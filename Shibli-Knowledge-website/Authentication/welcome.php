<?php
// welcome.php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="max-width:600px; margin-top:40px;">
  <div class="card p-4">
    <h3>Welcome, <?php echo htmlspecialchars($username); ?></h3>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Password:</strong> ****** (hidden for security)</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>
</div>
</body>
</html>