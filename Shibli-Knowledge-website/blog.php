<?php
// index.php
require_once 'db.php';

// fetch posts (most recent first)
$stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();

// helper to build uploads URL (adjust base URL if necessary)
$uploadBaseUrl = 'uploads'; // if index.php is in same folder as uploads/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Allama Shibli Nomani</title>
     <link rel="shortcut icon" href="./aiease_1762243238399.png" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar-brand img {
            height: 60px;
            width: auto;
            margin-right: 10px;
        }

        .img-preview {
            max-width: 100px;
            max-height: 80px;
            object-fit: cover;
            margin: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .post-card img {
            max-height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top mb-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./shibli-nomani.png" alt="logo"> Post & Blog
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./college.php" target="_blank">Home</a>
                    </li>

                    <!-- Post opens modal -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#postModal">Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="postForm" enctype="multipart/form-data" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="postModalLabel"><i class="fa fa-pen-to-square me-2"></i>Create Post
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <!-- Title -->
                        <div class="mb-3">
                            <label for="postTitle" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="postTitle" name="title"
                                placeholder="Enter post title" required>
                            <div class="invalid-feedback">Please enter a title.</div>
                        </div>

                        <!-- Images -->
                        <div class="mb-3">
                            <label for="postImages" class="form-label">Images</label>
                            <input class="form-control" type="file" id="postImages" name="images[]" accept="image/*"
                                multiple>
                            <div class="form-text">You can select multiple images (jpg, png, gif...).</div>
                            <div id="imagesPreview" class="mt-2 d-flex flex-wrap"></div>
                        </div>

                        <!-- Publish By -->
                        <div class="mb-3">
                            <label for="publishBy" class="form-label">Publish By <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="publishBy" name="publishBy"
                                placeholder="Your name or publisher" required>
                            <div class="invalid-feedback">Please enter who is publishing this post.</div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Display posts -->
    <div class="container my-5">
        <h1 class="mb-4">Recent Posts</h1>
        <div class="row g-4" id="postsContainer">

            <?php foreach ($posts as $p): ?>
            <?php $images = $p['images'] ? array_filter(explode('|', $p['images'])) : []; ?>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">

                    <!-- Image/Carousel Section -->
                    <?php if (count($images)): ?>
                    <div id="carousel<?= $p['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($images as $idx => $imgName): ?>
                            <div class="carousel-item <?= $idx === 0 ? 'active' : '' ?>">
                                <img src="<?= htmlspecialchars($uploadBaseUrl . '/' . $imgName) ?>"
                                    class="d-block w-100 img-top rounded-top" style="height: 300px; object-fit: cover;"
                                    alt="">
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($images) > 1): ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $p['id'] ?>"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $p['id'] ?>"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <?php endif; ?>
                    </div>
                    <?php else: ?>
                    <div class="bg-light text-center d-flex align-items-center justify-content-center rounded-top"
                        style="height:250px;">
                        <span class="text-muted">No Image</span>
                    </div>
                    <?php endif; ?>

                    <!-- Text Section -->
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= htmlspecialchars($p['title']) ?>
                        </h5>
                        <p class="card-text text-muted mb-0">
                            Published by <strong>
                                <?= htmlspecialchars($p['publish_by']) ?>
                            </strong>
                        </p>
                        <small class="text-secondary">
                            <?= htmlspecialchars($p['created_at']) ?>
                        </small>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>

            <?php if (count($posts) === 0): ?>
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No posts yet. Click <strong>Post</strong> to add one.
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
    
      <!-- Footer -->
  <footer class="bg-dark border-top mt-5">
    <div class="container py-4 d-flex justify-content-between align-items-center">
      <small class="text-white-50">&copy; 2025 — Allama Shibli Nomani || All rights reserved</small>
      <div>
        <a class="me-3 text-decoration-none text-white-50" href="#">Privacy</a>
        <a class="text-decoration-none text-white-50" href="#">Terms</a>
      </div>
    </div>
  </footer>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Image preview handler for modal
        const postImages = document.getElementById('postImages');
        const imagesPreview = document.getElementById('imagesPreview');

        postImages.addEventListener('change', () => {
            imagesPreview.innerHTML = '';
            const files = Array.from(postImages.files).slice(0, 10);
            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;
                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'img-preview';
                    imagesPreview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });

        // Submit form via fetch to upload_post.php
        const postForm = document.getElementById('postForm');
        postForm.addEventListener('submit', function (e) {
            e.preventDefault();
            e.stopPropagation();

            if (!postForm.checkValidity()) {
                postForm.classList.add('was-validated');
                return;
            }

            const fd = new FormData(postForm);

            fetch('upload_post.php', {
                method: 'POST',
                body: fd
            }).then(r => r.json())
                .then(resp => {
                    if (resp.success) {
                        // close modal
                        const modalEl = document.getElementById('postModal');
                        const bsModal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                        bsModal.hide();

                        // reset form
                        postForm.reset();
                        imagesPreview.innerHTML = '';
                        postForm.classList.remove('was-validated');

                        // Option 1: reload page to show fresh posts
                        // location.reload();

                        // Option 2: show success and append the new post client-side (basic)
                        alert('Post saved successfully.');
                        location.reload(); // simple approach - reload to show the new post
                    } else {
                        alert('Error: ' + (resp.message || 'Unknown error'));
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert('Upload failed. Check console for details.');
                });
        });
    </script>
</body>

</html>