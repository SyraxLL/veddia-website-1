<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Gloddia Media - Modern Dijital Çözümler, Web Tasarım, Yazılım ve Dijital Pazarlama Ajansı">
    <title>
        Ürün Tanıtım Sitesi Tasarımı - Gloddia Media    </title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/topbar.css">
</head>

<body>
    <!-- Top Bar -->
    <header class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div class="topbar-left">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a>
                </div>
                <div class="topbar-right">
                    <a href="tel:05325906804" class="contact-item">
                        <i class="fas fa-phone-alt"></i> 0 532 590 68 04
                    </a>
                    <a href="mailto:info@gloddia.com" class="contact-item">
                        <i class="fas fa-envelope"></i> info@gloddia.com
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="Gloddia Media" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <!-- Anasayfa -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Anasayfa</a>
                    </li>

                    <!-- Kurumsal (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kurumsal
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php">Hakkımızda</a></li>
                            <li><a class="dropdown-item" href="team.php">Ekibimiz</a></li>
                        </ul>
                    </li>

                    <!-- Hizmetlerimiz (Mega Menu) -->
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                            Hizmetlerimiz
                        </a>
                        <div class="dropdown-menu mega-menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Column 1: Web Tasarım -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-laptop-code me-2"></i>Web Tasarım
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="kurumsal-web-sitesi.php">Kurumsal Web Sitesi</a></li>
                                            <li><a href="e-ticaret-web.php">E-Ticaret Sitesi</a></li>
                                            <li><a href="kisisel-web-sitesi.php">Kişisel Web Sitesi</a></li>
                                            <li><a href="urun-tanitim-sitesi.php">Ürün Tanıtım Sitesi</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: Dijital Pazarlama -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-bullhorn me-2"></i>Dijital Pazarlama
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Google Reklamı</a></li>
                                            <li><a href="#">Youtube Reklamı</a></li>
                                            <li><a href="#">Instagram Reklamı</a></li>
                                            <li><a href="#">X (Twitter) Reklamı</a></li>
                                            <li><a href="#">TikTok Reklamı</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: Sosyal Medya -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-share-nodes me-2"></i>Sosyal Medya
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Facebook Yönetimi</a></li>
                                            <li><a href="#">Instagram Yönetimi</a></li>
                                            <li><a href="#">X (Twitter) Yönetimi</a></li>
                                            <li><a href="#">LinkedIn Yönetimi</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 4: Grafik Tasarım -->
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-pen-nib me-2"></i>Grafik Tasarım
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Logo Tasarımı</a></li>
                                            <li><a href="#">Broşür Tasarımı Ve Basımı</a></li>
                                            <li><a href="#">Katalog Tasarımı Ve Basımı</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Referans -->
                    <li class="nav-item">
                        <a class="nav-link" href="references.php">Referans</a>
                    </li>

                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <!-- İletişim -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">İletişim</a>
                    </li>

                    <!-- CTA Button -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-gradient" href="#contact">Hemen Teklif Al</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- Premium Hero Slider -->
<section class="hero-premium-kurumsal" id="hero-premium">
    <canvas id="hero-canvas"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Content Slider -->
            <div class="col-lg-7">
                <div class="hero-content-wrapper" data-aos="fade-up" data-aos-duration="700">
                    <!-- Eyebrow Label -->
                    <div class="eyebrow-label">
                        <span class="eyebrow-dot"></span>
                        <span class="gradient-text-main">Ürün Tanıtım Hizmeti</span>
                    </div>

                    <!-- Slider Container -->
                    <div class="hero-slider-container">
                        <!-- Slide 1 -->
                        <div class="hero-slide active">
                            <h1 class="hero-title">Ürününüzü <br> Dünyaya Tanıtın</h1>
                            <p class="hero-description">
                                Tek bir ürüne veya ürün grubuna odaklanan, etkileyici görseller ve
                                çarpıcı açıklamalarla donatılmış landing page tasarımları.
                            </p>
                        </div>
                        <!-- Slide 2 -->
                        <div class="hero-slide">
                            <h1 class="hero-title">Dönüşüm Odaklı <br> Tasarım</h1>
                            <p class="hero-description">
                                Ziyaretçileri müşteriye dönüştürmek için optimize edilmiş,
                                harekete geçirici mesajlarla (CTA) dolu sayfalar.
                            </p>
                        </div>
                        <!-- Slide 3 -->
                        <div class="hero-slide">
                            <h1 class="hero-title">360 Derece <br> Ürün Deneyimi</h1>
                            <p class="hero-description">
                                Ürününüzün her detayını gösteren interaktif görseller, videolar
                                ve teknik özellik tabloları.
                            </p>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="hero-cta-group">
                        <a href="#contact" class="btn-premium-primary">Hemen Başlayın</a>
                        <a href="#features" class="btn-premium-secondary">Detayları Görün</a>
                    </div>

                    <!-- Slider Controls -->
                    <div class="slider-controls">
                        <div class="slider-arrows">
                            <div class="slider-arrow prev-slide"><i class="fas fa-chevron-left"></i></div>
                            <div class="slider-arrow next-slide"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <div class="slider-dots">
                            <div class="slider-dot active" data-slide="0"></div>
                            <div class="slider-dot" data-slide="1"></div>
                            <div class="slider-dot" data-slide="2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D Mockup -->
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="mockup-visual-wrapper" data-aos="fade-in-scale" data-aos-duration="700"
                    data-aos-delay="200">
                    <div class="mockup-container product-mockup product-mockup-bg">
                        <!-- Mockup Top Bar -->
                        <div class="mockup-top-bar">
                            <div class="mockup-dots">
                                <div class="mockup-dot" style="background:#ef4444"></div>
                                <div class="mockup-dot" style="background:#eab308"></div>
                                <div class="mockup-dot" style="background:#22c55e"></div>
                            </div>
                        </div>

                        <!-- Product Showcase Mockup -->
                        <div class="product-showcase-mockup p-0 overflow-hidden">
                            <img src="assets/img/smart-bike-mockup.jpg" alt="Ürün Tanıtım Sitesi Örneği"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Floating Badges -->
                        <div class="floating-badge badge-seo">
                            <i class="fas fa-bullhorn"></i> Lansman
                        </div>
                        <div class="floating-badge badge-trust">
                            <i class="fas fa-check-circle"></i> Yüksek Dönüşüm
                        </div>
                        <div class="stats-chip stats-chip-sales">
                            <i class="fas fa-chart-bar text-success me-1"></i> En Çok Satan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Discovery Section (Relocated) -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="product-discovery-image">
                    <!-- Placeholder for product image -->
                    <div
                        class="ratio ratio-4x3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center">
                        <i class="fas fa-cube fa-5x text-muted opacity-25"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title gradient-text-main mb-4">Ürünü Keşfedin</h2>
                <p class="lead text-muted mb-4">
                    Ürününüzün benzersiz özelliklerini, kullanım kolaylığını ve hayatı nasıl kolaylaştırdığını
                    anlatan etkileyici bir bölüm. Müşterileriniz ürününüzle bağ kursun.
                </p>
                <ul class="list-unstyled product-features-list">
                    <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Ergonomik ve Şık Tasarım</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Dayanıklı Malzeme Kalitesi
                    </li>
                    <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Kullanıcı Dostu Arayüz</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> 2 Yıl Garanti</li>
                </ul>
                <a href="#contact" class="btn btn-primary mt-3">Detaylı Bilgi Alın</a>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/kurumsal-hero.js"></script>
<script src="assets/js/space-interaction.js"></script>

<!-- Product Promotion Timeline Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Vertical Zigzag Timeline -->
                <div class="timeline-section">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Ürün Tanıtım Sitenizi Oluştururken Neler Yapıyoruz?</h3>
                    </div>

                    <div class="timeline-wrapper">
                        <!-- Central Axis -->
                        <div class="timeline-axis">
                            <div class="timeline-progress"></div>
                        </div>

                        <!-- Item 1: Hedef Kitle (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card-wrapper">
                                <div class="timeline-card">
                                    <div class="timeline-card-header">
                                        <div class="timeline-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <h4 class="timeline-card-title">Hedef Kitle Analizi</h4>
                                    </div>
                                    <div class="timeline-card-body">
                                        Ürününüzün hitap ettiği kitleyi belirleyerek, tasarım ve içerik dilini
                                        buna göre şekillendiriyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2: Görsel Tasarım (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card-wrapper">
                                <div class="timeline-card">
                                    <div class="timeline-card-header">
                                        <div class="timeline-icon">
                                            <i class="fas fa-camera-retro"></i>
                                        </div>
                                        <h4 class="timeline-card-title">Görsel Tasarım</h4>
                                    </div>
                                    <div class="timeline-card-body">
                                        Ürününüzü en iyi açılardan gösteren, yüksek kaliteli görseller ve
                                        videolarla zenginleştirilmiş bir tasarım sunuyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3: Özellik Vurgusu (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card-wrapper">
                                <div class="timeline-card">
                                    <div class="timeline-card-header">
                                        <div class="timeline-icon">
                                            <i class="fas fa-list-ul"></i>
                                        </div>
                                        <h4 class="timeline-card-title">Özellik Vurgusu</h4>
                                    </div>
                                    <div class="timeline-card-body">
                                        Ürününüzün fark yaratan özelliklerini ikonlar ve kısa açıklamalarla
                                        ön plana çıkarıyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4: Teknik Detaylar (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card-wrapper">
                                <div class="timeline-card">
                                    <div class="timeline-card-header">
                                        <div class="timeline-icon">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <h4 class="timeline-card-title">Teknik Detaylar</h4>
                                    </div>
                                    <div class="timeline-card-body">
                                        Boyut, ağırlık, malzeme gibi teknik verileri anlaşılır tablolar
                                        halinde sunuyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5: Sipariş & İletişim -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card-wrapper">
                                <div class="timeline-card">
                                    <div class="timeline-card-header">
                                        <div class="timeline-icon">
                                            <i class="fas fa-shopping-cart"></i>
                                        </div>
                                        <h4 class="timeline-card-title">Sipariş & İletişim</h4>
                                    </div>
                                    <div class="timeline-card-body">
                                        Hızlı sipariş formları veya WhatsApp sipariş hattı entegrasyonu ile
                                        satışı kolaylaştırıyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <link rel="stylesheet" href="assets/css/timeline-cards.css">
                <script src="assets/js/timeline-cards.js"></script>

            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section id="features" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title gradient-text-main" style="transition: color 0.3s ease;">Neden Ürün Tanıtım Sitesi?
            </h2>
            <style>
                .section-title.gradient-text-main:hover {
                    color: #0d6efd;
                    /* Subtle color change on hover */
                }
            </style>
            <p class="section-subtitle">Ürününüzü yıldızlaştıracak özellikler</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-bullseye"></i></div>
                    <h3>Odaklanmış İçerik</h3>
                    <p class="text-muted">
                        Dikkat dağıtıcı unsurlardan arındırılmış, tamamen ürüne odaklanan bir yapı.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-magic"></i></div>
                    <h3>Etkileyici Görsellik</h3>
                    <p class="text-muted">
                        Büyük görseller, videolar ve animasyonlarla ürünün cazibesini artıran tasarım.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-chart-pie"></i></div>
                    <h3>Yüksek Dönüşüm</h3>
                    <p class="text-muted">
                        Ziyaretçiyi ikna etmeye yönelik kurgulanmış akış ve net mesajlar.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-search-plus"></i></div>
                    <h3>Detaylı İnceleme</h3>
                    <p class="text-muted">
                        Zoom özellikleri, 360 derece görünüm ve detay fotoğrafları ile ürünü yakından tanıma fırsatı.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-mobile"></i></div>
                    <h3>Mobil Öncelikli</h3>
                    <p class="text-muted">
                        Sosyal medya reklamlarından gelen mobil trafiği en iyi şekilde karşılayan tasarım.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-card-service">
                    <div class="feature-icon-wrapper"><i class="fas fa-rocket"></i></div>
                    <h3>Hızlı Yükleme</h3>
                    <p class="text-muted">
                        Görsel ağırlıklı olmasına rağmen optimize edilmiş, hızlı açılan sayfalar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Timeline -->
<section class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title gradient-text-main">Tanıtım Süreci</h2>
            <p class="section-subtitle">Ürününüzü pazara sunarken izlediğimiz yol</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4">
                    <!-- 01 -->
                    <div class="col-md-6">
                        <div class="process-step" data-aos="fade-right" data-aos-delay="100">
                            <span class="step-number">01</span>
                            <h3>Ürün Analizi</h3>
                            <p class="mb-0">
                                Ürününüzü inceliyor, rakipleri analiz ediyor ve öne çıkacak özellikleri belirliyoruz.
                            </p>
                        </div>
                    </div>
                    <!-- 02 -->
                    <div class="col-md-6">
                        <div class="process-step" data-aos="fade-left" data-aos-delay="150">
                            <span class="step-number">02</span>
                            <h3>Konsept Tasarım</h3>
                            <p class="mb-0">
                                Ürünün ruhuna uygun renk, tipografi ve görsel dili oluşturuyoruz.
                            </p>
                        </div>
                    </div>
                    <!-- 03 -->
                    <div class="col-md-6">
                        <div class="process-step" data-aos="fade-right" data-aos-delay="200">
                            <span class="step-number">03</span>
                            <h3>İçerik Üretimi</h3>
                            <p class="mb-0">
                                Etkileyici sloganlar, ürün açıklamaları ve gerekirse fotoğraf çekimi yapıyoruz.
                            </p>
                        </div>
                    </div>
                    <!-- 04 -->
                    <div class="col-md-6">
                        <div class="process-step" data-aos="fade-left" data-aos-delay="250">
                            <span class="step-number">04</span>
                            <h3>Yayın ve Reklam</h3>
                            <p class="mb-0">
                                Sitenizi yayına alıyor ve dilerseniz Google/Sosyal Medya reklamlarını kurguluyoruz.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="text-center my-5" data-aos="fade-up">
                    <h2 class="section-title gradient-text-main">Sıkça Sorulan Sorular</h2>
                </div>

                <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="accordion faq-modern" id="faqAccordionLeft">
                                <div class="accordion-item" data-aos="fade-right" data-aos-delay="100">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1">
                                            <i class="fas fa-box-open faq-icon me-2"></i>Tek bir ürün için site yapılır
                                            mı?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordionLeft">
                                        <div class="accordion-body">Evet, "Landing Page" dediğimiz tek sayfalık ürün
                                            tanıtım siteleri, özellikle tek bir ürüne odaklanmak ve satışları artırmak
                                            için çok etkilidir.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-right" data-aos-delay="150">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2">
                                            <i class="fas fa-shopping-basket faq-icon me-2"></i>Siteden satış
                                            yapılabilir mi?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionLeft">
                                        <div class="accordion-body">Elbette. Basit bir sipariş formu veya kredi kartı
                                            ile ödeme altyapısı (iyzico, PayTR vb.) entegre edebiliriz.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion faq-modern" id="faqAccordionRight">
                                <div class="accordion-item" data-aos="fade-left" data-aos-delay="100">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3">
                                            <i class="fas fa-video faq-icon me-2"></i>Video ekleyebilir miyiz?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionRight">
                                        <div class="accordion-body">Kesinlikle. Ürün tanıtım videoları, dönüşüm
                                            oranlarını ciddi oranda artırmaktadır. Sitenize yüksek kaliteli videolar
                                            ekleyebiliriz.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" data-aos="fade-left" data-aos-delay="150">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4">
                                            <i class="fas fa-chart-line faq-icon me-2"></i>Reklam yönetimi yapıyor
                                            musunuz?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionRight">
                                        <div class="accordion-body">Evet, siteniz hazırlandıktan sonra Google Ads ve
                                            Facebook/Instagram reklamlarınızı yöneterek hedef kitlenize ulaşmanızı
                                            sağlıyoruz.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="final-cta" data-aos="zoom-in">
            <h2>Ürününüzü Zirveye Taşıyalım</h2>
            <p class="lead mb-4 text-white-50">Etkileyici bir lansman için hemen iletişime geçin.</p>
            <a href="contact.php" class="btn btn-light btn-xl">Hemen İletişime Geçin</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="footer-gradient-line"></div>

    <!-- Main Footer Content -->
    <div class="container pt-5 pb-4">
        <div class="row gy-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <img src="assets/img/logo.png" alt="Gloddia Media" class="footer-logo mb-3">
                    <p class="footer-desc">Gloddia Media ile web tasarım, yazılım geliştirme ve dijital pazarlamada
                        profesyonel çözümler. Dijital dünyada fark yaratıyoruz!</p>

                    <!-- Social Links -->
                    <div class="social-links mt-4">
                        <a href="#" class="social-link" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="social-link" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h5 class="footer-title">
                        Hızlı Linkler
                    </h5>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fas fa-chevron-right me-2"></i>Ana Sayfa</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right me-2"></i>Hakkımızda</a></li>
                        <li><a href="team.php"><i class="fas fa-chevron-right me-2"></i>Ekibimiz</a></li>
                        <li><a href="#services"><i class="fas fa-chevron-right me-2"></i>Hizmetler</a></li>
                        <li><a href="#portfolio"><i class="fas fa-chevron-right me-2"></i>Portfolyo</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right me-2"></i>İletişim</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="footer-title">
                        Hizmetlerimiz
                    </h5>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Web Tasarım</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>E-Ticaret</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Dijital Pazarlama</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Sosyal Medya</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Grafik Tasarım</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right me-2"></i>SEO Hizmetleri</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="footer-title">
                        İletişim
                    </h5>
                    <ul class="footer-contact">
                        <li>
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info">
                                <span class="contact-label">Adres</span>
                                <span class="contact-value">İstanbul, Türkiye</span>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-info">
                                <span class="contact-label">Telefon</span>
                                <a href="tel:+905551234567" class="contact-value">+90 555 123 4567</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info">
                                <span class="contact-label">E-posta</span>
                                <a href="mailto:info@gloddia.com" class="contact-value">info@gloddia.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="contact-info">
                                <span class="contact-label">WhatsApp</span>
                                <a href="https://wa.me/905551234567" class="contact-value">+90 555 123 4567</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom mt-5 pt-4 border-top border-light-subtle">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">
                        &copy; 2025 <strong>Gloddia Media</strong>. Tüm hakları saklıdır.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="footer-legal">
                        <li><a href="#" class="me-3">Gizlilik Politikası</a></li>
                        <li><a href="#" class="me-3">Kullanım Şartları</a></li>
                        <li><a href="#">KVKK</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="mb-0 small">
                        Tasarlandı ve Geliştirildi <i class="fas fa-heart text-gradient"></i> ile
                        <strong>Gloddia Team</strong> tarafından
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" title="Yukarı Çık">
    <img src="assets/img/favicon.png" alt="YukarÄ± Ã‡Ä±k">
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom Scripts -->
<script src="assets/js/three-minimal.js"></script>
<script src="assets/js/main.js"></script>

<!-- Footer Scripts -->
<script>
    // AOS Init
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

</body>

</html>