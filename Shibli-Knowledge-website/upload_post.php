<?php
// upload_post.php
header('Content-Type: application/json; charset=utf-8');

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

require_once 'db.php'; // provides $pdo

// Basic validation
$title = isset($_POST['title']) ? trim($_POST['title']) : '';
$publishBy = isset($_POST['publishBy']) ? trim($_POST['publishBy']) : '';

if ($title === '' || $publishBy === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Title and Publish By are required.']);
    exit;
}

// File upload handling
$uploadedFileNames = []; // store final saved filenames
$uploadDir = __DIR__ . '/uploads';
if (!is_dir($uploadDir)) {
    if (!mkdir($uploadDir, 0755, true)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to create upload directory.']);
        exit;
    }
}

if (!empty($_FILES['images']) && is_array($_FILES['images']['name'])) {
    // multiple files
    $fileCount = count($_FILES['images']['name']);
    for ($i = 0; $i < $fileCount; $i++) {
        $error = $_FILES['images']['error'][$i];
        if ($error !== UPLOAD_ERR_OK) {
            // skip files with upload errors (you may want to return error instead)
            continue;
        }
        $tmpName = $_FILES['images']['tmp_name'][$i];
        $origName = $_FILES['images']['name'][$i];
        $size = $_FILES['images']['size'][$i];
        $type = mime_content_type($tmpName);

        // Validate file type and size (example: max 5MB each)
        $allowedTypes = ['image/jpeg','image/png','image/gif','image/webp'];
        if (!in_array($type, $allowedTypes)) continue;
        if ($size > 5 * 1024 * 1024) continue;

        // Create a unique filename
        $ext = pathinfo($origName, PATHINFO_EXTENSION);
        $safeBase = bin2hex(random_bytes(8));
        $newName = $safeBase . '.' . $ext;
        $dest = $uploadDir . DIRECTORY_SEPARATOR . $newName;

        if (move_uploaded_file($tmpName, $dest)) {
            $uploadedFileNames[] = $newName;
        }
    }
}

// Save to database
try {
    $imagesField = count($uploadedFileNames) ? implode('|', $uploadedFileNames) : null;
    $sql = "INSERT INTO posts (title, images, publish_by) VALUES (:title, :images, :publish_by)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':images' => $imagesField,
        ':publish_by' => $publishBy
    ]);
    $newId = $pdo->lastInsertId();

    // Return inserted record id and filenames for client-side display
    echo json_encode([
        'success' => true,
        'message' => 'Post saved successfully.',
        'id' => (int)$newId,
        'images' => $uploadedFileNames
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'DB insert failed: ' . $e->getMessage()]);
}