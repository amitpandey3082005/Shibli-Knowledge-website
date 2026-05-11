<?php require 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allama Shibli Nomani - BookStore</title>
    <link rel="shortcut icon" href="./aiease_1762243238399.png" type="image/x-icon">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- AOS (Animate On Scroll) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Simple custom styles -->
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #7f8c8d;
            --border-radius: 8px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            line-height: 1.6;
            background: var(--light-bg);
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), #1a2530) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .author-info {
            max-width: 800px;
            margin: 0 auto 40px;
            padding: 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .book-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            margin-bottom: 25px;
            height: 100%;
        }

        .book-card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .book-image {
            height: 280px;
            overflow: hidden;
            position: relative;
        }

        .book-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .book-card:hover .book-image img {
            transform: scale(1.05) rotate(-0.5deg);
        }

        .book-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .book-content {
            padding: 20px;
        }

        .book-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .book-author {
            color: var(--light-text);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .book-price {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--accent-color);
            margin-bottom: 15px;
        }

        .book-actions {
            display: flex;
            gap: 10px;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 8px 15px;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-outline-primary {
            border: 2px solid var(--secondary-color);
            color: var(--secondary-color);
            background: transparent;
            padding: 8px 15px;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-outline-primary:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 700;
        }

        .section-title {
            text-align: center;
            margin: 40px 0 30px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-color);
        }

        .footer {
            background: var(--primary-color);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .search-container {
            position: relative;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            z-index: 1000;
            max-height: 300px;
            overflow-y: auto;
            display: none;
        }

        .search-item {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-item:hover {
            background: #f5f5f5;
        }

        .cart-sidebar {
            position: fixed;
            top: 0;
            right: -400px;
            width: 380px;
            height: 100vh;
            background: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1050;
            transition: var(--transition);
            overflow-y: auto;
            padding: 20px;
        }

        .cart-sidebar.active {
            right: 0;
        }

        .cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }

        .cart-overlay.active {
            display: block;
        }

        .cart-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item-image {
            width: 80px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
        }

        .cart-item-details {
            flex: 1;
            padding-left: 15px;
        }

        .cart-item-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: var(--accent-color);
            font-weight: 600;
        }

        .cart-item-remove {
            color: var(--light-text);
            cursor: pointer;
            transition: var(--transition);
        }

        .cart-item-remove:hover {
            color: var(--accent-color);
        }

        .cart-total {
            font-weight: 700;
            font-size: 1.2rem;
            margin: 20px 0;
            text-align: right;
        }

        /* Responsive carousel images */
        .carousel-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
            max-height: 60vh;
            /* large screens limit */
        }

        @media (max-width: 768px) {
            .carousel-img {
                max-height: 40vh;
            }

            .search-container .input-group {
                width: 180px !important;
            }

            .cart-sidebar {
                width: 100%;
                right: -100%;
            }

            .book-actions {
                flex-direction: column;
            }
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        .footer a {
            text-decoration: none;
        }

        /* subtle pulsing on add-to-cart */
        .pulse {
            animation: pulse 0.6s ease;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top mb-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./aiease_1762243238399.png" height="90px" alt=""> Shibli BookStore
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./college.php" target="_blank">Home</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="search-container me-3" style="min-width:260px;">
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchInput"
                                placeholder="Search books by title or author..." autocomplete="off">
                            <button class="btn btn-outline-light" type="button" id="clearSearch" title="Clear">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="search-results" id="searchResults" role="listbox" aria-label="Search results"></div>
                    </div>
                    <div class="position-relative">
                        <button class="btn btn-outline-light position-relative" id="cartToggle">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge" id="cartCount">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Bootstrap 5 carousel - auto sliding) -->
    <div class="container-fluid p-0" data-aos="fade-up">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./college.jpg" class="d-block w-100 carousel-img" alt="College slide 1" loading="lazy">
                </div>

                <div class="carousel-item">
                    <img src="./college2.png" class="d-block w-100 carousel-img" alt="College slide 2" loading="lazy">
                </div>

                <div class="carousel-item">
                    <img src="./college.jpg" class="d-block w-100 carousel-img" alt="College slide 3" loading="lazy">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <marquee style="background-color: #366e72cb; color: red;padding: 5px;margin-top: 2px;" behavior="alternet"
        direction="left"><sup>New</sup>One of the founders of Urdu literary criticism, great historian, religious
        scholar, ✨political thinker, and poet famous for his work on Persian poetry, Sher-ul-Ajam.✨</marquee>

    <!-- Featured Books -->
    <div class="container py-4">
        <h2 class="section-title">Featured Books</h2>
        <div class="row" id="booksGrid">

            <!-- Book card with Carousel -->
            <div class="col-lg-4 col-md-6 my-4" data-title="Seerat-un-Nabi" data-author="Allama Shibli Nomani"
                data-aos="zoom-in">
                <div class="card h-100 shadow-sm book-card">

                    <!-- Bootstrap Carousel inside card -->
                    <div id="bookCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./serat-un-nabi.jpg" alt="Seerat-un-Nabi 1"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="7.jpg" alt="Amit"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="8.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./9.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./10.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./11.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./12.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./13.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./14.jpg" alt="Seerat-un-Nabi 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <!-- Book details -->
                    <div class="card-body text-center">
                        <h5 class="card-title">Seerat-un-Nabi</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>
                        <div class="fw-bold mb-2 book-price">₹3000</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart" data-book="Seerat-un-Nabi"
                                data-price="3000" data-image="./serat-un-nabi.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 my-4" data-title="Sawaneh Maulana Room" data-author="Allama Shibli Nomani"
                data-aos="zoom-in" data-aos-delay="80">
                <div class="card h-100 shadow-sm book-card">
                    <img src="./b1.jpeg" alt="Sawaneh Maulana Room"
                        class="card-img-top img-fluid object-fit-contain p-3 book-image" style="height:350px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sawaneh Maulana Room (سوانحِ مولانا روم)</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>

                        <div class="fw-bold mb-2 book-price">₹1600</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart"
                                data-book="Sawaneh Maulana Room (سوانحِ مولانا روم)" data-price="1600"
                                data-image="./b1.jpeg">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-4" data-title="Al-Meezan" data-author="Allama Shibli Nomani"
                data-aos="zoom-in" data-aos-delay="160">
                <div class="card h-100 shadow-sm book-card">
                    <img src="./b2.jpeg" alt="Al-Meezan"
                        class="card-img-top img-fluid object-fit-contain p-3 book-image" style="height:350px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Al-Meezan (الميزان)</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>

                        <div class="fw-bold mb-2 book-price">₹2200</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart" data-book="Al-Meezan (الميزان)"
                                data-price="2200" data-image="./b2.jpeg">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book card with Carousel for Al-Mamun -->
            <div class="col-lg-4 col-md-6 my-4" data-title="Al-Mamun" data-author="Allama Shibli Nomani"
                data-aos="zoom-in">
                <div class="card h-100 shadow-sm book-card">

                    <!-- Bootstrap Carousel -->
                    <div id="bookCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./b3.jpeg" alt="Al-Mamun 1"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./15.jpg" alt="Al-Mamun 2"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./16.jpg" alt="Al-Mamun 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./17.jpg" alt="Al-Mamun 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                            <div class="carousel-item">
                                <img src="./18.jpg" alt="Al-Mamun 3"
                                    class="card-img-top img-fluid object-fit-contain p-3 book-image"
                                    style="height:350px;">
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body text-center">
                        <h5 class="card-title">Al-Mamun (الميزان)</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>

                        <div class="fw-bold mb-2 book-price">₹1</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart" data-book="Al-Mamun (الميزان)"
                                data-price="1" data-image="./b3.jpeg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 my-4" data-title="Seerat-un-Nu'man" data-author="Allama Shibli Nomani"
                data-aos="zoom-in">
                <div class="card h-100 shadow-sm book-card">
                    <img src="./b4.jpeg" alt="Seerat-un-Nu'man"
                        class="card-img-top img-fluid object-fit-contain p-3 book-image" style="height:350px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Seerat-un-Nu'man (سیرۃ النعمان)</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>

                        <div class="fw-bold mb-2 book-price">₹1700</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart"
                                data-book="Seerat-un-Nu'man (سیرۃ النعمان)" data-price="1700" data-image="./b4.jpeg">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-4" data-title="Al-Farooq" data-author="Allama Shibli Nomani"
                data-aos="zoom-in">
                <div class="card h-100 shadow-sm book-card">
                    <img src="./b5.jpeg" alt="Al-Farooq"
                        class="card-img-top img-fluid object-fit-contain p-3 book-image" style="height:350px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Al-Farooq</h5>
                        <p class="card-text text-muted mb-1">Allama Shibli Nomani</p>

                        <div class="fw-bold mb-2 book-price">₹600</div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary payBtn">Buy Now</button>
                            <button class="btn btn-outline-primary add-to-cart" data-book="Al-Farooq" data-price="600"
                                data-image="./b5.jpeg">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Cart Sidebar -->
    <div class="cart-overlay" id="cartOverlay"></div>
    <div class="cart-sidebar" id="cartSidebar">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Your Cart</h3>
            <button class="btn-close" id="closeCart" aria-label="Close"></button>
        </div>
        <div id="cartItems">
            <p class="text-center" id="emptyCartMessage">Your cart is empty</p>
        </div>
        <div class="cart-total" id="cartTotal" style="display: none;">
            Total: ₹<span id="totalAmount">0</span>
        </div>
        <button class="btn btn-primary w-100" id="checkoutBtn" style="display: none;">Proceed to Checkout</button>
    </div>

    <!-- Footer -->
    <footer class="footer" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-book me-2"></i>Shibli BookStore</h5>
                    <p>Your trusted source for authentic works by Allama Shibli Nomani and other Islamic scholars.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./college.php" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Azamgarh , Uttar Pradesh</li>
                        <li><i class="fas fa-phone me-2"></i> +91 9956794787</li>
                        <li><i class="fas fa-envelope me-2"></i> amitpandey1187170@gmail.com</li>
                    </ul>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p>&copy; 2025 Shibli BookStore. All rights reserved.✨</p>
            </div>
        </div>
    </footer>

    <!-- Razorpay Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Libraries: Bootstrap, AOS, GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        // Initialize AOS
        AOS.init({ duration: 700, once: true });

        // disabling the right click
        document.addEventListener('contextmenu', function (event) {
            event.preventDefault();
        });

        // Cart functionality
        let cart = [];
        const cartCount = document.getElementById('cartCount');
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');
        const totalAmount = document.getElementById('totalAmount');
        const emptyCartMessage = document.getElementById('emptyCartMessage');
        const checkoutBtn = document.getElementById('checkoutBtn');
        const cartSidebar = document.getElementById('cartSidebar');
        const cartOverlay = document.getElementById('cartOverlay');
        const cartToggle = document.getElementById('cartToggle');
        const closeCart = document.getElementById('closeCart');

        // utility: animate cart badge with GSAP when adding
        function animateCartBadge() {
            gsap.fromTo('#cartCount', { scale: 0.9 }, { scale: 1.12, duration: 0.25, yoyo: true, repeat: 1 });
        }

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function () {
                const book = this.getAttribute('data-book');
                const price = parseInt(this.getAttribute('data-price'));
                const image = this.getAttribute('data-image');

                // Check if book already in cart
                const existingItem = cart.find(item => item.book === book);

                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({
                        book: book,
                        price: price,
                        image: image,
                        quantity: 1
                    });
                }

                // small pulse effect on the button
                this.classList.add('pulse');
                setTimeout(() => this.classList.remove('pulse'), 600);

                updateCart();
                showNotification(`${book} added to cart!`);
                animateCartBadge();
            });
        });

        // Update cart display
        function updateCart() {
            // Update cart count
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            cartCount.textContent = totalItems;

            // Update cart items
            cartItems.innerHTML = '';

            if (cart.length === 0) {
                emptyCartMessage.style.display = 'block';
                cartTotal.style.display = 'none';
                checkoutBtn.style.display = 'none';
            } else {
                emptyCartMessage.style.display = 'none';

                let total = 0;

                cart.forEach((item, index) => {
                    total += item.price * item.quantity;

                    const cartItem = document.createElement('div');
                    cartItem.className = 'cart-item';
                    cartItem.innerHTML = `
                        <img src="${item.image}" alt="${item.book}" class="cart-item-image">
                        <div class="cart-item-details">
                            <div class="cart-item-title">${item.book}</div>
                            <div class="cart-item-price">₹${item.price} x ${item.quantity}</div>
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <button class="btn btn-sm btn-outline-secondary decrease-quantity" data-index="${index}">-</button>
                                    <span class="mx-2">${item.quantity}</span>
                                    <button class="btn btn-sm btn-outline-secondary increase-quantity" data-index="${index}">+</button>
                                </div>
                                <div class="cart-item-remove remove-item" data-index="${index}">
                                    <i class="fas fa-trash"></i>
                                </div>
                            </div>
                        </div>
                    `;

                    cartItems.appendChild(cartItem);
                });

                totalAmount.textContent = total;
                cartTotal.style.display = 'block';
                checkoutBtn.style.display = 'block';
            }

            // Add event listeners to cart buttons
            document.querySelectorAll('.increase-quantity').forEach(button => {
                button.addEventListener('click', function () {
                    const index = parseInt(this.getAttribute('data-index'));
                    cart[index].quantity += 1;
                    updateCart();
                });
            });

            document.querySelectorAll('.decrease-quantity').forEach(button => {
                button.addEventListener('click', function () {
                    const index = parseInt(this.getAttribute('data-index'));
                    if (cart[index].quantity > 1) {
                        cart[index].quantity -= 1;
                    } else {
                        cart.splice(index, 1);
                    }
                    updateCart();
                });
            });

            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function () {
                    const index = parseInt(this.getAttribute('data-index'));
                    cart.splice(index, 1);
                    updateCart();
                });
            });
        }

        // Cart sidebar toggle with GSAP animation
        cartToggle.addEventListener('click', function () {
            cartSidebar.classList.add('active');
            cartOverlay.classList.add('active');
            gsap.fromTo('#cartSidebar', { x: 400 }, { x: 0, duration: 0.45, ease: 'power3.out' });
        });

        closeCart.addEventListener('click', function () {
            gsap.to('#cartSidebar', {
                x: 400, duration: 0.35, ease: 'power3.in', onComplete: () => {
                    cartSidebar.classList.remove('active');
                    cartOverlay.classList.remove('active');
                }
            });
        });

        cartOverlay.addEventListener('click', function () {
            gsap.to('#cartSidebar', {
                x: 400, duration: 0.35, ease: 'power3.in', onComplete: () => {
                    cartSidebar.classList.remove('active');
                    cartOverlay.classList.remove('active');
                }
            });
        });

        // Checkout functionality
        checkoutBtn.addEventListener('click', function () {
            const total = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            initiatePayment(total);
        });

        // Notification function (animated)
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'alert alert-success position-fixed';
            notification.style.top = '20px';
            notification.style.right = '20px';
            notification.style.zIndex = '1060';
            notification.textContent = message;

            document.body.appendChild(notification);

            gsap.fromTo(notification, { opacity: 0, y: -10 }, { opacity: 1, y: 0, duration: 0.35 });

            setTimeout(() => {
                gsap.to(notification, { opacity: 0, y: -10, duration: 0.35, onComplete: () => notification.remove() });
            }, 2200);
        }

        // Payment functionality
        const buttons = document.getElementsByClassName('payBtn');

        for (let i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', async function () {
                const priceElement = this.closest('.book-card').querySelector('.book-price');
                // Some book-price elements may have commas or non-digits, so extract numbers
                let amount = parseInt((priceElement.textContent || '').replace(/[^0-9]/g, '')) || 0;
                initiatePayment(amount);
            });
        }

        // Payment initiation function
        async function initiatePayment(amount) {
            const payload = { amount: amount };
            const resp = await fetch('create_order.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload)
            });

            if (!resp.ok) {
                alert('Failed to contact server for order creation.');
                return;
            }

            const order = await resp.json();

            if (order.error) {
                alert('Order creation failed: ' + JSON.stringify(order));
                return;
            }

            const options = {
                key: "<?php echo RAZORPAY_KEY_ID; ?>",
                amount: order.amount,
                currency: order.currency,
                name: "Shibli BookStore",
                description: "An e-commerce Platform",
                order_id: order.id,
                handler: function (response) {
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'verify.php';
                    ['razorpay_payment_id', 'razorpay_order_id', 'razorpay_signature'].forEach(function (k) {
                        var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = k;
                        input.value = response[k];
                        form.appendChild(input);
                    });
                    document.body.appendChild(form);
                    form.submit();
                },
                prefill: {
                    name: "User",
                    email: "user@gmail.com",
                },
                theme: { color: "#3498db" }
            };

            const rzp1 = new Razorpay(options);
            rzp1.open();
        }

        // --- SEARCH feature: live filter + dropdown results ---
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        const clearSearch = document.getElementById('clearSearch');
        const bookCards = Array.from(document.querySelectorAll('#booksGrid > .col-lg-4'));

        function buildIndex() {
            return bookCards.map(card => {
                return {
                    title: (card.getAttribute('data-title') || card.querySelector('.card-title').textContent).trim(),
                    author: (card.getAttribute('data-author') || card.querySelector('.card-text').textContent).trim(),
                    node: card
                };
            });
        }

        const index = buildIndex();

        function showResults(matches) {
            searchResults.innerHTML = '';

            if (matches.length === 0) {
                searchResults.style.display = 'none';
                return;
            }

            matches.slice(0, 8).forEach(m => {
                const item = document.createElement('div');
                item.className = 'search-item';
                item.textContent = `${m.title} — ${m.author}`;
                item.addEventListener('click', function () {
                    // scroll to the card smoothly and highlight
                    m.node.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    gsap.fromTo(m.node, { boxShadow: '0 0 0 rgba(0,0,0,0)' }, { boxShadow: '0 12px 30px rgba(0,0,0,0.2)', duration: 0.45, yoyo: true, repeat: 1 });
                    searchResults.style.display = 'none';
                    searchInput.value = '';
                });
                searchResults.appendChild(item);
            });

            searchResults.style.display = 'block';
        }

        searchInput.addEventListener('input', function () {
            const q = this.value.trim().toLowerCase();
            if (!q) {
                searchResults.style.display = 'none';
                return;
            }

            const matches = index.filter(i => (i.title + ' ' + i.author).toLowerCase().includes(q));

            // Also filter cards on page (optional: show/hide)
            bookCards.forEach(card => {
                const title = card.getAttribute('data-title') || card.querySelector('.card-title').textContent;
                const author = card.getAttribute('data-author') || card.querySelector('.card-text').textContent;
                const combined = (title + ' ' + author).toLowerCase();
                if (combined.includes(q)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });

            showResults(matches);
        });

        // clear search
        clearSearch.addEventListener('click', function () {
            searchInput.value = '';
            searchResults.style.display = 'none';
            bookCards.forEach(c => c.style.display = '');
        });

        // close search results on outside click
        document.addEventListener('click', function (e) {
            if (!document.getElementById('searchInput').contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.style.display = 'none';
            }
        });

        // Accessibility: keyboard navigation for results (basic)
        searchInput.addEventListener('keydown', function (e) {
            const items = Array.from(searchResults.querySelectorAll('.search-item'));
            if (!items.length) return;
            let indexSelected = items.findIndex(i => i.classList.contains('active'));
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                if (indexSelected >= 0) items[indexSelected].classList.remove('active');
                indexSelected = Math.min(items.length - 1, indexSelected + 1);
                items[indexSelected].classList.add('active');
                items[indexSelected].scrollIntoView({ block: 'nearest' });
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                if (indexSelected >= 0) items[indexSelected].classList.remove('active');
                indexSelected = Math.max(0, indexSelected - 1);
                items[indexSelected].classList.add('active');
                items[indexSelected].scrollIntoView({ block: 'nearest' });
            } else if (e.key === 'Enter') {
                const current = items[indexSelected] || items[0];
                if (current) current.click();
            }
        });

        // small entrance animation for navbar logo
        gsap.from('.navbar-brand', { y: -12, opacity: 0, duration: 0.7, ease: 'power3.out' });

    </script>
</body>

</html>