<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shibli National College - Allama Shibli Nomani</title>
    <link rel="shortcut icon" href="./aiease_1762243238399.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <!-- Urdu Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0a573d;
            --secondary-color: #d4af37;
            --accent-color: #8b4513;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #6c757d;
            --border-radius: 10px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Open Sans', sans-serif;
            color: var(--dark-text);
            line-height: 1.7;
            display: flex;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .vertical-navbar {
            width: 350px;
            background: linear-gradient(135deg, var(--primary-color), #083826);
            color: white;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            padding: 20px 0;
            margin-right: 20px;
            box-shadow: var(--box-shadow);
            height: 100vh;
            position: sticky;
            top: 0;
            overflow-y: auto;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .vertical-navbar .nav-link {
            color: rgba(255, 255, 255, 0.85);
            padding: 14px 25px;
            font-weight: 600;
            border-left: 4px solid transparent;
            transition: var(--transition);
            margin: 5px 15px;
            border-radius: 8px;
            font-size: 1rem;
        }

        .vertical-navbar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 4px solid var(--secondary-color);
            transform: translateX(5px);
        }

        .vertical-navbar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
            border-left: 4px solid var(--secondary-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .vertical-navbar .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            padding: 0 25px 25px;
            text-align: center;
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 20px;
            font-family: 'Merriweather', serif;
        }

        .nav-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .nav-logo img {
            border-radius: 50%;
            border: 3px solid var(--secondary-color);
            padding: 5px;
            background: white;
        }

        .content-area {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            max-width: calc(100% - 350px);
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none" stroke="%230a573d" stroke-width="0.5" opacity="0.1"/></svg>');
            background-size: 30px 30px;
        }

        .page-title {
            color: var(--primary-color);
            margin-bottom: 30px;
            font-weight: 700;
            border-bottom: 3px solid var(--secondary-color);
            padding-bottom: 10px;
            font-family: 'Merriweather', serif;
            position: relative;
            display: inline-block;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100px;
            height: 3px;
            background: var(--accent-color);
        }

        .section-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 30px;
            margin-bottom: 30px;
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
            position: relative;
            overflow: hidden;
        }

        .section-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
            opacity: 0.7;
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .author-image {
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            border: 5px solid white;
            transition: var(--transition);
        }

        .author-image:hover {
            transform: scale(1.03);
        }

        .gazal-card {
            background: linear-gradient(135deg, #f5f7fa, #e4e8f0);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 20px;
            margin-bottom: 20px;
            transition: var(--transition);
            border-left: 4px solid var(--accent-color);
            height: 100%;
            position: relative;
        }

        .gazal-card:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%238b4513" opacity="0.2"><path d="M6 17h3l2-4V7H5v6h3l-2 4zm8 0h3l2-4V7h-6v6h3l-2 4z"/></svg>') no-repeat;
            background-size: contain;
        }

        .gazal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .gazal-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
            font-family: 'Merriweather', serif;
        }

        .gallery-card {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .gallery-card img {
            transition: var(--transition);
            height: 200px;
            object-fit: cover;
        }

        .gallery-card:hover img {
            transform: scale(1.05);
        }

        .gallery-card .card-body {
            padding: 15px;
            background: white;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), #083826);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 8px rgba(10, 87, 61, 0.3);
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #083826, var(--primary-color));
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(10, 87, 61, 0.4);
        }

        .highlight-text {
            color: var(--primary-color);
            font-weight: 700;
            background: linear-gradient(transparent 60%, rgba(212, 175, 55, 0.3) 40%);
            padding: 0 2px;
        }

        .section-subtitle {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px dashed var(--secondary-color);
            font-family: 'Merriweather', serif;
            display: flex;
            align-items: center;
        }

        .section-subtitle i {
            margin-right: 10px;
            background: var(--secondary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .rekhta-link {
            display: inline-block;
            background: linear-gradient(135deg, #8b4513, #a0522d);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(139, 69, 19, 0.3);
        }

        .rekhta-link:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(139, 69, 19, 0.4);
        }

        .nav-footer {
            margin-top: auto;
            padding: 20px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .language-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            margin: 10px 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .language-toggle:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .toggle-text {
            margin: 0 10px;
            font-weight: 600;
        }

        .toggle-switch {
            position: relative;
            width: 50px;
            height: 24px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            transition: var(--transition);
        }

        .toggle-switch:after {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            transition: var(--transition);
        }

        .language-toggle.active .toggle-switch {
            background: var(--secondary-color);
        }

        .language-toggle.active .toggle-switch:after {
            transform: translateX(26px);
        }

        .urdu-content {
            font-family: 'Noto Nastaliq Urdu', serif;
            direction: rtl;
            text-align: right;
            line-height: 2;
        }

        .urdu-content .page-title {
            font-family: 'Noto Nastaliq Urdu', serif;
        }

        .urdu-content .section-subtitle {
            font-family: 'Noto Nastaliq Urdu', serif;
        }

        .content-urdu {
            display: none;
        }

        @media (max-width: 992px) {
            body {
                flex-direction: column;
            }

            .vertical-navbar {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
                position: static;
                height: auto;
                border-radius: 0 0 var(--border-radius) var(--border-radius);
            }

            .content-area {
                max-width: 100%;
                padding: 15px;
            }
        }

        /* Scrollbar styling for navbar */
        .vertical-navbar::-webkit-scrollbar {
            width: 6px;
        }

        .vertical-navbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .vertical-navbar::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 10px;
        }

        /* Animation for page load */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-card,
        .gazal-card,
        .gallery-card {
            animation: fadeInUp 0.5s ease forwards;
        }

        .section-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .section-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .gazal-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .gazal-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .gallery-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .gallery-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .gallery-card:nth-child(4) {
            animation-delay: 0.3s;
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .video-container video {
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .video-container video:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Vertical Navbar -->
    <nav class="vertical-navbar">
        <div class="nav-logo">
            <img src="./shibli-nomani.png" alt="Allama Shibli Nomani" width="120">
        </div>

        <a class="navbar-brand" href="#">
            <i class="fas fa-feather me-2"></i>Allama Shibli Nomani
        </a>

        <ul class="navbar-nav flex-column w-100">
            <li class="nav-item">
                <a class="nav-link active" href="#Home">
                    <i class="fas fa-home me-2"></i>Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#bio">
                    <i class="fas fa-user me-2"></i>Biography
                </a>
            </li>

            <!-- Poetry Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="poetryDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-music me-2"></i>Work
                </a>
                <ul class="dropdown-menu" aria-labelledby="poetryDropdown">
                    <li>
                        <a class="dropdown-item" href="#gazal">
                            <i class="fas fa-music me-2"></i>Gazal
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#sher">
                            <i class="fas fa-music me-2"></i>Sher
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Poetry Dropdown -->

            <li class="nav-item">
                <a class="nav-link" href="#gallery">
                    <i class="fas fa-image me-2"></i> Image Gallery
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./Video.php" target="_blank">
                    <i class="fas fa-video me-2"></i>Reels and Videos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./blog.php" target="_blank">
                    <i class="fa-solid fa-blog me-2"></i>Post & Blog 
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./index2.php" target="_blank">
                    <i class="fas fa-book me-2"></i>Book Store
                </a>
            </li>
        </ul>

        <!-- Language Toggle -->
        <div class="language-toggle" id="languageToggle">
            <span class="toggle-text">English</span>
            <div class="toggle-switch"></div>
            <span class="toggle-text">اردو</span>
        </div>
    </nav>


    <!-- Main Content Area -->
    <div class="content-area" id="contentArea">
        <!-- Home Section -->
        <section id="Home" class="section-card">
            <h1 class="page-title content-en">Allama Shibli Nomani</h1>
            <h1 class="page-title content-urdu urdu-content" style="display:none">علامہ شبلی نعمانی</h1>

            <div class="row align-items-center">
                <!-- Left Column: Biography -->
                <div class="col-lg-8">
                    <p class="fs-5 text-justify content-en">
                        <span class="highlight-text">Shibli Nomani</span> (4 June 1857 – 18 November 1914) was an Indian
                        Islamic scholar, poet, philosopher,
                        historian, educational thinker, author, orator, reformer, and critic of orientalists during the
                        British Raj. He is regarded as the <span class="highlight-text">father of Urdu
                            historiography</span>. He was also proficient in
                        Arabic and Persian languages. Shibli was associated with two influential movements in the
                        region, the Aligarh and the Nadwa movements. As a supporter of the Deobandi school, he believed
                        that
                        English language and European sciences should be incorporated into the education system.
                    </p>
                    <p class="fs-5 text-justify content-en">
                        Shibli Nomani wrote several biographies of Muslim heroes, convinced that Muslims of his time
                        could learn valuable lessons from the past. His synthesis of past and modern ideas contributed
                        significantly
                        to Islamic literature produced in Urdu between 1910 and 1935. Shibli established the
                        <span class="highlight-text">Darul Musannefin Shibli Academy</span> in 1914 to promote Islamic
                        scholarship and also
                        founded the <span class="highlight-text">Shibli National College</span> in 1883. He collected
                        much material on the
                        life of Muhammad and completed the first two volumes of the planned work,
                        <em>Sirat al-Nabi</em>. His disciple, <span class="highlight-text">Sulaiman Nadvi</span>, added
                        to this material
                        and wrote the remaining five volumes after Shibli's death.
                    </p>

                    <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                        <span class="highlight-text">شبلی نعمانی</span> (4 جون 1857 – 18 نومبر 1914) ایک ہندوستانی
                        اسلامی اسکالر، شاعر، فلسفی،
                        مورخ، تعلیمی مفکر، مصنف، خطیب، مصلح اور برطانوی راج کے دوران مستشرقین کے نقاد تھے۔ انہیں <span
                            class="highlight-text">اردو تاریخ نگاری کا باپ</span> سمجھا جاتا ہے۔ وہ عربی اور فارسی
                        زبانوں میں بھی مہارت رکھتے تھے۔ شبلی اس خطے کی دو بااثر تحریکوں، علی گڑھ اور ندوا تحریکوں سے
                        وابستہ تھے۔ دیوبندی اسکول کے حامی کے طور پر، ان کا ماننا تھا کہ
                        انگریزی زبان اور یورپی علوم کو تعلیمی نظام میں شامل کیا جانا چاہیے۔
                    </p>
                    <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                        شبلی نعمانی نے مسلم ہیروز کی کئی سوانح عمریاں لکھیں، اس یقین کے ساتھ کہ ان کے زمانے کے مسلمان
                        ماضی سے قیمتی اسباق سیکھ سکتے ہیں۔ ماضی اور جدید خیالات کے ان کے امتزاج نے 1910 اور 1935 کے
                        درمیان اردو میں تیار کردہ اسلامی ادب میں نمایاں طور پر حصہ ڈالا۔ شبلی نے 1914 میں <span
                            class="highlight-text">دارالمصنفین شبلی اکیڈمی</span> قائم کی تاکہ اسلامی اسکالرشپ کو فروغ
                        دیا جا سکے اور
                        1883 میں <span class="highlight-text">شبلی نیشنل کالج</span> بھی قائم کیا۔ انہوں نے محمد صلی
                        اللہ علیہ وسلم کی زندگی پر بہت سا مواد جمع کیا اور منصوبہ بند کام،
                        <em>سیرت النبی</em> کے پہلے دو جلدوں کو مکمل کیا۔ ان کے شاگرد، <span
                            class="highlight-text">سلیمان ندوی</span> نے اس مواد میں اضافہ کیا
                        اور شبلی کی وفات کے بعد باقی پانچ جلدوں کو لکھا۔
                    </p>
                </div>

                <!-- Right Column: Image and Info -->
                <div class="col-lg-4 text-center">
                    <img src="./Shibli_Nomani.jpg" alt="Allama Shibli Nomani" class="img-fluid author-image shadow">
                    <h5 class="fw-semibold mt-3 content-en"><i>Allama Shibli Nomani</i></h5>
                    <h5 class="fw-semibold mt-3 content-urdu urdu-content" style="display:none"><i>علامہ شبلی نعمانی</i>
                    </h5>
                    <p class="fs-6 content-en">
                        Professor at
                        <a href="https://en.wikipedia.org/wiki/Muhammadan_Anglo-Oriental_College" target="_blank"
                            class="text-decoration-none highlight-text fw-bold">
                            Muhammadan Anglo-Oriental College
                        </a>
                    </p>
                    <p class="fs-6 content-urdu urdu-content" style="display:none">
                        پروفیسر
                        <a href="https://en.wikipedia.org/wiki/Muhammadan_Anglo-Oriental_College" target="_blank"
                            class="text-decoration-none highlight-text fw-bold">
                            محمدن اینگلو اورینٹل کالج
                        </a>
                    </p>
                </div>
            </div>
        </section>

        <!-- Biography Section -->
        <section id="bio" class="section-card">
            <h1 class="page-title content-en">Biography</h1>
            <h1 class="page-title content-urdu urdu-content" style="display:none">سوانح حیات</h1>

            <!-- Early Life -->
            <div class="mb-5">
                <h3 class="section-subtitle content-en"><i class="fas fa-baby me-2"></i>Early Life</h3>
                <h3 class="section-subtitle content-urdu urdu-content" style="display:none"><i
                        class="fas fa-baby me-2"></i>ابتدائی زندگی</h3>
                <p class="fs-5 text-justify content-en">
                    Nomani was born on 4 June 1857 in Bindwal near Azamgarh into a Muslim Rajput family, his ancestor
                    Sheoraj Singh being a Bais who accepted Islam many generations ago, to Habibullah and Moqeema
                    Khatoon. He was named after Abu Bakr al-Shibli who was a Sufi saint and a disciple of Junayd
                    Baghdadi. Later in life, he added "Nomani" to his name. Although his younger brothers went to
                    London, England for education (and later returned, one as a barrister employed at Allahabad High
                    Court), Nomani received a traditional Islamic education. His teacher was Muhammad Farooq
                    Chirayakoti, a rationalist scholar.
                </p>
                <p class="fs-5 text-justify content-en">
                    Nomani therefore had reasons to be both attracted and repelled by Aligarh. Even after he had secured
                    a post as a teacher of Persian and Arabic at Aligarh, he always found the intellectual atmosphere at
                    the college disappointing, and eventually left Aligarh because he found it uncongenial, although he
                    did not officially resign from the college until after Sir Syed's death in 1898.
                </p>

                <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                    نعمانی 4 جون 1857 کو اعظم گڑھ کے قریب بندول میں ایک مسلم راجپوت خاندان میں پیدا ہوئے، ان کے آبا و
                    اجداد شیوراج سنگھ ایک بئیس تھے جنہوں نے کئی نسلوں پہلے اسلام قبول کیا تھا، حبیب اللہ اور مقیمہ خاتون
                    کے ہاں۔ ان کا نام ابوبکر شبلی کے نام پر رکھا گیا جو ایک صوفی بزرگ اور جنید بغدادی کے شاگرد تھے۔ بعد
                    کی زندگی میں، انہوں نے اپنے نام میں "نعمانی" کا اضافہ کیا۔ اگرچہ ان کے چھوٹے بھائی لندن، انگلینڈ
                    تعلیم کے لیے گئے تھے (اور بعد میں واپس آئے، ایک الہ آباد ہائی کورٹ میں بیرسٹر کے طور پر ملازم تھے)،
                    نعمانی نے روایتی اسلامی تعلیم حاصل کی۔ ان کے استاد محمد فاروق چریاکوٹی تھے، جو ایک عقلیت پسند اسکالر
                    تھے۔
                </p>
                <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                    اس لیے نعمانی کے پاس علی گڑھ کی طرف راغب ہونے اور اس سے دور ہونے دونوں کی وجوہات تھیں۔ یہاں تک کہ جب
                    انہوں نے علی گڑھ میں فارسی اور عربی کے استاد کے طور پر عہدہ حاصل کر لیا، تو انہیں ہمیشہ کالج میں
                    فکری ماحول مایوس کن لگا، اور آخر کار علی گڑھ چھوڑ دیا کیونکہ انہیں یہ ناموافق لگا، حالانکہ انہوں نے
                    سر سید کی 1898 میں وفات تک کالج سے سرکاری طور پر استعفیٰ نہیں دیا تھا۔
                </p>
            </div>

            <!-- Middle East -->
            <div class="mb-5">
                <h3 class="section-subtitle content-en"><i class="fas fa-globe-asia me-2"></i>In Middle East</h3>
                <h3 class="section-subtitle content-urdu urdu-content" style="display:none"><i
                        class="fas fa-globe-asia me-2"></i>مشرق وسطیٰ میں</h3>
                <p class="fs-5 text-justify content-en">
                    He taught Persian and Arabic languages at Aligarh for sixteen years, where he met Thomas Arnold and
                    other British scholars from whom he learned first-hand modern Western ideas and thoughts. He
                    travelled with Thomas Arnold in 1892 to the Ottoman Empire including Syria, Turkey and Egypt and
                    other locations in the Middle East and got direct and practical experience of their societies. In
                    Istanbul, he received a medal from Sultan Abdul Hamid II. His scholarship influenced Thomas Arnold
                    on one hand, and on the other he was influenced by Thomas Arnold to a great extent, and this
                    explains the modern touch in his ideas. In Cairo, he met noted Islamic scholar Muhammad Abduh
                    (1849–1905).
                </p>

                <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                    انہوں نے سولہ سال تک علی گڑھ میں فارسی اور عربی زبانیں پڑھائیں، جہاں ان کی ملاقات تھامس آرنلڈ اور
                    دیگر برطانوی اسکالرز سے ہوئی جن سے انہوں نے جدید مغربی خیالات اور افکار کو براہ راست سیکھا۔ وہ 1892
                    میں تھامس آرنلڈ کے ساتھ سلطنت عثمانیہ بشمول شام، ترکی اور مصر اور مشرق وسطیٰ کے دیگر مقامات کی سفر
                    پر گئے اور ان کے معاشروں کا براہ راست اور عملی تجربہ حاصل کیا۔ استنبول میں، انہیں سلطان عبدالحمید
                    دوم کی طرف سے ایک تمغہ ملا۔ ان کی اسکالرشپ نے ایک طرف تھامس آرنلڈ کو متاثر کیا، اور دوسری طرف وہ خود
                    تھامس آرنلڈ سے بہت متاثر تھے، اور یہی ان کے خیالات میں جدید ٹچ کی وضاحت کرتا ہے۔ قاہرہ میں، ان کی
                    ملاقات معروف اسلامی اسکالر محمد عبدہ (1849-1905) سے ہوئی۔
                </p>
            </div>

            <!-- Darul Musannifin -->
            <div class="mb-5">
                <h3 class="section-subtitle content-en"><i class="fas fa-university me-2"></i>Founding of Darul
                    Mussanifin</h3>
                <h3 class="section-subtitle content-urdu urdu-content" style="display:none"><i
                        class="fas fa-university me-2"></i>دارالمصنفین کی بنیاد</h3>
                <p class="fs-5 text-justify content-en">
                    Earlier at Nadwa, he had wanted to establish Darul Musannifin or the House of Writers but he could
                    not do this at that time. He bequeathed his bungalow and mango orchard and motivated the members of
                    his clan and relatives to do the same and had succeeded. He wrote letters to his disciples and other
                    eminent persons and sought their co-operation. Eventually one of his disciples, Syed Sulaiman Nadvi
                    fulfilled his dream and established Darul Musannifin at Azamgarh. The first formal meeting of the
                    institution was held on 21 November 1914, within three days of his death.
                </p>

                <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                    اس سے پہلے ندوا میں، وہ دارالمصنفین یا مصنفین کا گھر قائم کرنا چاہتے تھے لیکن وہ اس وقت ایسا نہیں کر
                    سکے۔ انہوں نے اپنا بنگلہ اور آم کا باغ وقف کر دیا اور اپنے قبیلے اور رشتہ داروں کے اراکین کو بھی
                    ایسا ہی کرنے کی ترغیب دی اور کامیاب ہوئے۔ انہوں نے اپنے شاگردوں اور دیگر معزز شخصیات کو خط لکھے اور
                    ان کے تعاون کی درخواست کی۔ بالآخر ان کے ایک شاگرد، سید سلیمان ندوی نے ان کا خواب پورا کیا اور اعظم
                    گڑھ میں دارالمصنفین قائم کیا۔ ادارے کی پہلی رسمی میٹنگ 21 نومبر 1914 کو ان کی وفات کے تین دن کے اندر
                    منعقد ہوئی۔
                </p>
            </div>

            <!-- Death -->
            <div>
                <h3 class="section-subtitle content-en"><i class="fas fa-monument me-2"></i>Death</h3>
                <h3 class="section-subtitle content-urdu urdu-content" style="display:none"><i
                        class="fas fa-monument me-2"></i>وفات</h3>
                <p class="fs-5 text-justify content-en">
                    In August 1914 he went to Allahabad on the news of his elder brother's illness. Two weeks later his
                    brother died. He then moved to Azamgarh. There he developed the basic concept of Darul Musannifin.
                    He died on 18 November 1914.
                </p>

                <p class="fs-5 text-justify content-urdu urdu-content" style="display:none">
                    اگست 1914 میں وہ اپنے بڑے بھائی کی بیماری کی خبر پر الہ آباد گئے۔ دو ہفتے بعد ان کے بھائی کا انتقال
                    ہو گیا۔ اس کے بعد وہ اعظم گڑھ چلے گئے۔ وہاں انہوں نے دارالمصنفین کا بنیادی تصور تیار کیا۔ ان کا
                    انتقال 18 نومبر 1914 کو ہوا۔
                </p>
            </div>
        </section>

        <!-- Gazal Section -->
        <section id="gazal" class="section-card">
            <h1 class="page-title content-en">Gazal 💖</h1>
            <h1 class="page-title content-urdu urdu-content" style="display:none">غزل 💖</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="gazal-card">
                        <h5 class="gazal-title content-en">pūchhte kyā ho jo hāl-e-shab-e-tanhā.ī thā💕</h5>
                        <h5 class="gazal-title content-urdu urdu-content" style="display:none">پوچھتے کیا ہو جو حال شب
                            تنہائی تھا💕</h5>
                        <p class="card-text content-en">
                            pūchhte kyā ho jo hāl-e-shab-e-tanhā.ī thā<br>
                            ruḳhsat-e-sabr thī yā tark-e-shakebā.ī thā<br><br>

                            shab-e-furqat meñ dil-e-ġham-zada bhī paas na thā<br>
                            vo bhī kyā raat thī kyā ālam-e-tanhā.ī thā<br><br>

                            maiñ thā yā dīda-e-ḳhūñ-nāba-fishānī shab-e-hijr<br>
                            un ko vaañ mashġhala-e-anjuman-ārā.ī thā
                        </p>
                        <p class="card-text content-urdu urdu-content" style="display:none">
                            پوچھتے کیا ہو جو حال شب تنہائی تھا<br>
                            رخصت صبر تھی یا ترک شکيبائی تھا<br><br>

                            شب فرقت میں دل غم زدہ بھی پاس نہ تھا<br>
                            وہ بھی کیا رات تھی کیا عالم تنہائی تھا<br><br>

                            میں تھا یا دیدہ خون نابہ فشانی شب ہجر<br>
                            ان کو واں مشغلہ انجمن آرائی تھا
                        </p>
                        <a href="https://www.rekhta.org/ghazals/puuchhte-kyaa-ho-jo-haal-e-shab-e-tanhaaii-thaa-shibli-nomani-ghazals"
                            class="btn btn-primary-custom mt-2 content-en">Read More</a>
                        <a href="https://www.rekhta.org/ghazals/puuchhte-kyaa-ho-jo-haal-e-shab-e-tanhaaii-thaa-shibli-nomani-ghazals"
                            class="btn btn-primary-custom mt-2 content-urdu urdu-content" style="display:none">مزید
                            پڑھیں</a>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gazal-card">
                        <h5 class="gazal-title content-en">kuchh akeli nahin meri qismat ✔</h5>
                        <h5 class="gazal-title content-urdu urdu-content" style="display:none">کچھ اکیلی نہیں میری قسمت
                            ✔</h5>
                        <p class="card-text content-en">
                            kuchh akelī nahīñ merī qismat<br>
                            ġham ko bhī saath lagā lagā.ī hai<br><br>

                            muntazir der se the tum mere<br>
                            ab jo tashrīf sabā laa.ī hai<br><br>

                            nig.hat-e-zulf ġhubār-e-rah-e-dost<br>
                            āḳhir us kūche se kyā laa.ī hai<br><br>

                            maut bhī ruuTh ga.ī thī mujh se<br>
                            ye shab-e-hijr manā laa.ī hai
                        </p>
                        <p class="card-text content-urdu urdu-content" style="display:none">
                            کچھ اکیلی نہیں میری قسمت<br>
                            غم کو بھی ساتھ لگا لگائی ہے<br><br>

                            منتظر دیر سے تھے تم میرے<br>
                            اب جو تشریف صبا لائی ہے<br><br>

                            نگہت زلف غبار راہ دوست<br>
                            آخر اس کوچے سے کیا لائی ہے<br><br>

                            موت بھی روٹھ گئی تھی مجھ سے<br>
                            یہ شب ہجر منا لائی ہے
                        </p>
                        <a href="https://www.rekhta.org/ghazals/kuchh-akelii-nahiin-merii-qismat-shibli-nomani-ghazals"
                            class="btn btn-primary-custom mt-2 content-en">Read More</a>
                        <a href="https://www.rekhta.org/ghazals/kuchh-akelii-nahiin-merii-qismat-shibli-nomani-ghazals"
                            class="btn btn-primary-custom mt-2 content-urdu urdu-content" style="display:none">مزید
                            پڑھیں</a>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gazal-card">
                        <h5 class="gazal-title content-en">tis din ke liye tark-e-mai-o-saqi kar lun💕</h5>
                        <h5 class="gazal-title content-urdu urdu-content" style="display:none">تیس دن کے لیے ترک مے و
                            ساقی کر لوں💕</h5>
                        <p class="card-text content-en">
                            tiis din ke liye tark-e-mai-o-sāqī kar luuñ<br>
                            vā.iz-e-sāda ko rozoñ meñ to raazī kar luuñ<br><br>

                            pheñk dene kī koī chiiz nahīñ fazl-o-kamāl<br>
                            varna hāsid tirī ḳhātir se maiñ ye bhī kar luuñ<br><br>

                            ai nakīrain qayāmat hī pe rakkho pursish<br>
                            maiñ zarā umr-e-guzishta kī talāfī kar luuñ<br><br>

                            kuchh to ho chāra-e-ġham baat to yak ho jaa.e<br>
                            tum
                        </p>
                        <p class="card-text content-urdu urdu-content" style="display:none">
                            تیس دن کے لیے ترک مے و ساقی کر لوں<br>
                            واعظ سادہ کو روزوں میں تو راضی کر لوں<br><br>

                            پھینک دینے کی کوئی چیز نہیں فضل و کمال<br>
                            ورنہ حاسد تیری خاطر سے میں یہ بھی کر لوں<br><br>

                            اے نگہ رین قیامت ہی پر رکھو پرسش<br>
                            میں ذرا عمر گزشتہ کی تلافی کر لوں<br><br>

                            کچھ تو ہو چارہ غم بات تو یک ہو جائے<br>
                            تم
                        </p>
                        <a href="https://www.rekhta.org/ghazals/tiis-din-ke-liye-tark-e-mai-o-saaqii-kar-luun-shibli-nomani-ghazals-1"
                            class="btn btn-primary-custom mt-2 content-en">Read More</a>
                        <a href="https://www.rekhta.org/ghazals/tiis-din-ke-liye-tark-e-mai-o-saaqii-kar-luun-shibli-nomani-ghazals-1"
                            class="btn btn-primary-custom mt-2 content-urdu urdu-content" style="display:none">مزید
                            پڑھیں</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="https://www.rekhta.org/authors/shibli-nomani/ghazals" class="rekhta-link content-en">
                    <i class="fas fa-external-link-alt me-2"></i>Explore More Gazals on Rekhta
                </a>
                <a href="https://www.rekhta.org/authors/shibli-nomani/ghazals"
                    class="rekhta-link content-urdu urdu-content" style="display:none">
                    <i class="fas fa-external-link-alt me-2"></i>ریختہ پر مزید غزلیں دیکھیں
                </a>
            </div>
        </section>

        <!-- Sher Section -->
        <section id="sher" class="section-card">
            <h1 class="page-title content-en">SHER 💕</h1>
            <h1 class="page-title content-urdu urdu-content" style="display:none">شعر 💕</h1>
            <div class="row g-4">
                <div class="col-sm-6 col-md-4">
                    <div class="gallery-card">
                        <a href="./sher-card (1).jpg" download=""><img src="./sher-card (1).jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-card">
                        <a href="./sher-card (2).jpg" download=""><img src="./sher-card (2).jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <div class="gallery-card">
                        <a href="./sher-card.jpg" download=""><img src="./sher-card.jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <div class="gallery-card">
                        <a href="./sher-card (3).jpg" download=""><img src="./sher-card (3).jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <div class="gallery-card">
                        <a href="./sher-card (4).jpg" download=""><img src="./sher-card (4).jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ">
                    <div class="gallery-card">
                        <a href="./sher-card (5).jpg" download=""><img src="./sher-card (5).jpg" class="card-img-top"
                                alt="Allama Shibli Nomani Portrait"></a>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="https://www.rekhta.org/authors/shibli-nomani/couplets" class="rekhta-link content-en">
                        <i class="fas fa-external-link-alt me-2"></i>Explore More Sher on Rekhta
                    </a>
                    <a href="https://www.rekhta.org/authors/shibli-nomani/couplets"
                        class="rekhta-link content-urdu urdu-content" style="display:none">
                        <i class="fas fa-external-link-alt me-2"></i>ریختہ پر مزید شعر دیکھیں
                    </a>
                </div>

            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="section-card">
            <h1 class="page-title content-en">Photo Gallery 💕</h1>
            <h1 class="page-title content-urdu urdu-content" style="display:none">فوٹو گیلری 💕</h1>
            <div class="row g-4">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c2.png" class="card-img-top" alt="Allama Shibli Nomani">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Allama Shibli Nomani</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">علامہ شبلی نعمانی
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c3.jpeg" class="card-img-top" alt="Allama Shibli Nomani Portrait">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Portrait</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">پورٹریٹ</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c5.jpeg" class="card-img-top" alt="Allama Shibli Nomani Illustration">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Illustration</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">تصویر</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c1.avif" class="card-img-top" alt="Shibli National College">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Shibli National College</h6>
                            <small class="text-muted content-en">(SNC)</small>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">شبلی نیشنل کالج
                            </h6>
                            <small class="text-muted content-urdu urdu-content" style="display:none">(SNC)</small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./images.jpeg" class="card-img-top" alt="Allama Shibli Nomani Statue">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Statue</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">مجسمہ</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c2.png" class="card-img-top" alt="Allama Shibli Nomani Memorial">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Memorial</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">یادگار</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./c1.avif" class="card-img-top" alt="Allama Shibli Nomani Young">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Shibli College</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">شبلی کالج</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="gallery-card">
                        <img src="./images (1).jpeg" class="card-img-top" alt="Shibli Nomani Poster">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 content-en">Shibli Academy</h6>
                            <h6 class="card-title mb-0 content-urdu urdu-content" style="display:none">شبلی اکیڈمی</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <section style="background: linear-gradient(135deg, var(--primary-color), #083826);border-radius:10px;" >
             <div><p style="text-align:center;color: white;"><strong>Designed and Developed by || Amit Pandey (BCA 5th Sem)  ✨</strong></p>
                 <p style="text-align:center;color: white;">Email us : <strong>amitpandey1187170@gmail.com</strong></p>
            </div>
        </section>
       

    </div>

    <!-- Disabling the right click -->
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function (event) {
            event.preventDefault();
        });



        // Language Toggle Functionality
        const toggleBtn = document.getElementById('languageToggle');

        toggleBtn.addEventListener('click', function () {
            this.classList.toggle('active');



            // Toggle content between English and Urdu
            const isUrdu = this.classList.contains('active');

            document.querySelectorAll('.content-en').forEach(el => {
                el.style.display = isUrdu ? 'none' : 'block';
            });

            document.querySelectorAll('.content-urdu').forEach(el => {
                el.style.display = isUrdu ? 'block' : 'none';
            });
        });
    </script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>