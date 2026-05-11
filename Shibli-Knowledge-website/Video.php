<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Allama Shibli Nomani - Video Gallery</title>
  <link rel="shortcut icon" href="./aiease_1762243238399.png" type="image/x-icon" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <style>
    :root {
      --accent: #5b21b6;
      --muted: #6c757d;
    }

    body {
      background: #f5f7fb;
      color: #222;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    .navbar-brand img {
      border-radius: 6px;
      width: 44px;
      height: 44px;
      object-fit: cover;
    }

    .hero {
      background: linear-gradient(180deg, rgba(8, 8, 20, 0.65), rgba(8, 8, 20, 0.35)),
        url('https://rekhta.pc.cdn.bitgravity.com/Images/poet-profile-banner.png') center/cover no-repeat;
      color: #fff;
      padding: 3.5rem 0;
    }

    .poet-img {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 14px;
      border: 4px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 16px 40px rgba(10, 10, 30, 0.45);
    }

    /* Card */
    .video-card {
      border-radius: 12px;
      overflow: hidden;
      border: 0;
      transition: transform .18s ease, box-shadow .18s ease, opacity .4s ease;
      background: #fff;
      display: flex;
      flex-direction: column;
    }

    .video-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 30px 60px rgba(20, 24, 40, 0.12);
    }

    .thumb {
      position: relative;
      background: #000;
      /* keep aspect ratio with a taller height for larger thumbnails */
    }

    /* Larger, high-quality thumbnail dimensions */
    .thumb img {
      width: 100%;
      height: 300px; /* increased height for better visual impact */
      object-fit: cover;
      display: block;
      image-rendering: -webkit-optimize-contrast;
    }

    /* smaller height on very small screens */
    @media (max-width: 576px) {
      .thumb img {
        height: 180px;
      }
    }

    .play-overlay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      pointer-events: none;
    }

    .play-btn {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(91, 33, 182, 0.95), rgba(91, 33, 182, 0.8));
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 22px;
      box-shadow: 0 10px 28px rgba(91, 33, 182, 0.18);
    }

    .card-body {
      padding: .9rem 1rem;
      flex: 1 0 auto;
    }

    .card-title {
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: .25rem;
    }

    .card-sub {
      color: var(--muted);
      font-size: .85rem;
    }

    .filter-btns .btn {
      border-radius: 999px;
    }

    .fade-up {
      transform: translateY(12px);
      opacity: 0;
      transition: all .6s cubic-bezier(.2, .9, .2, 1);
    }

    .in-view {
      transform: none;
      opacity: 1;
    }

    .modal-content {
      background: transparent;
      border: 0;
    }

    .video-frame {
      width: 100%;
      height: 60vh;
      max-height: 86vh;
      border-radius: 10px;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#">
        <img src="https://rekhta.pc.cdn.bitgravity.com/Images/Shayar/shibli-nomani.png" alt="logo" />
        <span class="ms-2">Allama Shibli Nomani</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#video">Videos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <div class="container">
      <div class="row align-items-center gy-3">
        <div class="col-md-3 text-center text-md-start">
          <img src="https://rekhta.pc.cdn.bitgravity.com/Images/Shayar/shibli-nomani.png"
            onerror="this.src='https://rekhta.pc.cdn.bitgravity.com/Content/Images/quill.png'" alt="Shibli Nomani"
            class="poet-img" />
        </div>
        <div class="col-md-6">
          <h1 class="mb-1">Allama Shibli Nomani <small class="text-white-50 fs-6">(1857 - 1914)</small></h1>
          <p class="lead mb-1">Historian • Scholar • Poet • Critic</p>
          <p class="text-white-50">A leading figure in Urdu literary criticism, remembered for scholarly works in Urdu
            and Persian.</p>
        </div>
        <div class="col-md-3 text-center text-md-end">
          <div class="bg-white bg-opacity-10 p-3 rounded-3 text-white-50">
            <div><strong>Born</strong> 1857</div>
            <div><strong>Died</strong> 1914</div>
            <div>Azamgarh, India</div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="py-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 id="video">Video Reels</h2>
        <div class="filter-btns btn-group" role="group" aria-label="filter">
          <button class="btn btn-outline-secondary btn-sm active" data-filter="all">All</button>
          <button class="btn btn-outline-secondary btn-sm" data-filter="college">Shibli College</button>
          <button class="btn btn-outline-secondary btn-sm" data-filter="academy">Shibli Academy</button>
        </div>
      </div>

      <!-- GRID: we use 3 columns on md+ (col-md-4 / three columns) so it becomes a 3x3 when 9 items exist -->
      <div class="row g-4" id="gallery">

        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-4 fade-up" data-category="college">
          <div class="card video-card h-100" tabindex="0">
            <div class="thumb position-relative" role="button" data-bs-toggle="modal" data-bs-target="#playerModal"
              data-video="https://www.youtube.com/embed/fHTe1dhTnFM?si=fAEvaVdV3FPB0xTc">
              <!-- If you have higher-res images, replace src with that; you can also add srcset -->
              <img loading="lazy" src="./Shibli_Nomani.jpg" alt="Shibli College Tour"
                srcset="./Shibli_Nomani@2x.jpg 2x, ./Shibli_Nomani.jpg 1x" />
              <div class="play-overlay">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-title">Allama Shibli Nomani</div>
              <div class="card-sub">(A very famous Indian Islamic scholar)</div>
            </div>
          </div>
        </div>

         <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-4 fade-up" data-category="college">
          <div class="card video-card h-100" tabindex="0">
            <div class="thumb position-relative" role="button" data-bs-toggle="modal" data-bs-target="#playerModal"
              data-video="https://www.youtube.com/embed/fHTe1dhTnFM?si=fAEvaVdV3FPB0xTc">
              <img loading="lazy" src="./shibli-nomani_Medium.png" alt="Allama Shibli Nomani"
                srcset="./shibli-nomani_Medium@2x.png 2x, ./shibli-nomani_Medium.png 1x" />
              <div class="play-overlay">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-title">Allama Shibli Nomani</div>
              <div class="card-sub">(A very famous Indian Islamic scholar)</div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4 fade-up" data-category="college">
          <div class="card video-card h-100" tabindex="0">
            <div class="thumb position-relative" role="button" data-bs-toggle="modal" data-bs-target="#playerModal"
              data-video="https://player.vimeo.com/video/1134894301?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479">
              <img loading="lazy" src="./Shibli4.png" alt="Shibli College Tour"
                srcset="./Shibli4@2x.png 2x, ./Shibli4.png 1x" />
              <div class="play-overlay">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-title">Shibli College Campus Tour</div>
              <div class="card-sub">Shibli National College</div>
            </div>
          </div>
        </div>

       

       

        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4 fade-up" data-category="academy">
          <div class="card video-card h-100">
            <div class="thumb position-relative" role="button" data-bs-toggle="modal" data-bs-target="#playerModal"
              data-video="https://player.vimeo.com/video/1134896413?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479">
              <img loading="lazy" src="./images (2).jpeg" alt="Shibli Academy Tour"
                srcset="./images (2)@2x.jpeg 2x, ./images (2).jpeg 1x" />
              <div class="play-overlay">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-title">Shibli Academy Campus Tour</div>
              <div class="card-sub">Darul Mussanefin Shibli Academy</div>
            </div>
          </div>
        </div>

         <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4 fade-up" data-category="college">
          <div class="card video-card h-100" tabindex="0">
            <div class="thumb position-relative" role="button" data-bs-toggle="modal" data-bs-target="#playerModal"
              data-video="https://www.youtube.com/embed/jp5pcwz7jZU?si=2OMXolsbq9qvOfzs">
              <img loading="lazy" src="./Amit.jpeg" alt="Shibli College Tour"
                srcset="./Amit@2x.jpeg 2x, ./Amit.jpeg 1x" />
              <div class="play-overlay">
                <div class="play-btn"><i class="fa-solid fa-play"></i></div>
              </div>
            </div>
            <div class="card-body">
              <div class="card-title">Shibli National College &amp; Darul Mussanefin</div>
              <div class="card-sub">Campus tour</div>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </main>

  <!-- Player Modal -->
  <div class="modal fade" id="playerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-0">
          <div class="ratio ratio-16x9 video-frame">
            <iframe id="playerFrame" src="" title="Video player"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Filter buttons
    document.querySelectorAll('.filter-btns [data-filter]').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btns .btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.getAttribute('data-filter');
        document.querySelectorAll('#gallery > div').forEach(card => {
          const cat = card.getAttribute('data-category');
          card.style.display = (filter === 'all' || cat === filter) ? '' : 'none';
        });
      });
    });

    // Modal video loader
    const playerModal = document.getElementById('playerModal');
    const playerFrame = document.getElementById('playerFrame');

    document.querySelectorAll('.thumb[data-video]').forEach(thumb => {
      thumb.addEventListener('click', () => {
        const src = thumb.getAttribute('data-video');
        // If src already contains query params, append &autoplay=1 otherwise ?autoplay=1
        const autoplaySrc = src.includes('?') ? src + '&autoplay=1' : src + '?autoplay=1';
        playerFrame.src = autoplaySrc;
      });
    });

    playerModal.addEventListener('hidden.bs.modal', () => {
      playerFrame.src = '';
    });

    // Fade-up animation
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('in-view');
      });
    }, { threshold: 0.12 });

    document.querySelectorAll('.fade-up').forEach(el => io.observe(el));
  </script>
</body>

</html>