<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Kurumsal Web Sitesi Tasarımı - Profesyonel, modern ve güvenilir kurumsal kimlik yansıtan web siteleri. Veddia Media ile dijitalde fark yaratın.">
    <title>Kurumsal Web Sitesi Tasarımı - Veddia Media</title>
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


    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/topbar.css">
    <link rel="stylesheet" href="assets/css/product-hero.css">
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
                    <a href="mailto:info@veddia.com" class="contact-item">
                        <i class="fas fa-envelope"></i> info@veddia.com
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="Veddia Media" class="logo-img">
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
                        <div class="dropdown-menu" style="min-width: 200px; padding: 1rem;">
                            <ul class="list-unstyled mega-menu-list mb-0">
                                <li><a href="about.php">Hakkımızda</a></li>
                                <li><a href="team.php">Ekibimiz</a></li>
                            </ul>
                        </div>
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
    </nav>

    <!-- Premium Hero Slider - Light Corporate Theme -->
    <section class="hero-premium-kurumsal" id="hero-premium">
        <canvas id="hero-canvas"></canvas>

        <!-- Rising Bubble Particles Container -->
        <div class="bubble-particles" id="bubbleContainer"></div>

        <script>
            // Create 100 bubbles with random wavy paths
            (function () {
                const container = document.getElementById('bubbleContainer');
                for (let i = 0; i < 100; i++) {
                    const bubble = document.createElement('span');
                    bubble.className = 'bubble';

                    const left = Math.random() * 100;
                    const size = 3 + Math.random() * 8;
                    const duration = 18 + Math.random() * 20;
                    const delay = Math.random() * 20;
                    const drift = -40 + Math.random() * 80; // Random X drift

                    bubble.style.left = left + '%';
                    bubble.style.width = size + 'px';
                    bubble.style.height = size + 'px';
                    bubble.style.animationDuration = duration + 's';
                    bubble.style.animationDelay = delay + 's';
                    bubble.style.setProperty('--drift', drift + 'px');

                    container.appendChild(bubble);
                }
            })();
        </script>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Content Slider (55%) -->
                <div class="col-lg-7">
                    <div class="hero-content-wrapper">
                        <!-- Eyebrow Label (Chip Style) -->
                        <div class="eyebrow-label">
                            <span class="eyebrow-dot"></span>
                            <span>Kurumsal Web Sitesi</span>
                        </div>

                        <!-- Slider Container -->
                        <div class="hero-slider-container">
                            <!-- Slide 1 -->
                            <div class="hero-slide active">
                                <h1 class="hero-title"><span class="highlight-word">Kurumsal</span> Kimliğinizi
                                    <br>Dijitale Taşıyın
                                </h1>
                                <p class="hero-description">
                                    Markanızın değerlerini ve profesyonelliğini yansıtan, güven veren
                                    kurumsal web siteleri tasarlıyoruz. Modern tasarım ve kullanıcı
                                    deneyimi odaklı çözümlerle fark yaratın.
                                </p>
                            </div>
                            <!-- Slide 2 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Güven</span> Veren
                                    <br>Profesyonel Tasarım
                                </h1>
                                <p class="hero-description">
                                    Ziyaretçilerinize güven veren, kurumsal kimliğinizi yansıtan
                                    modern ve profesyonel tasarımlar. İlk izlenimde fark yaratın
                                    ve potansiyel müşterilerinizi etkileyin.
                                </p>
                            </div>
                            <!-- Slide 3 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">SEO</span> Uyumlu
                                    <br>Performans
                                </h1>
                                <p class="hero-description">
                                    Google'da üst sıralarda yer almanızı sağlayan SEO uyumlu altyapı,
                                    hızlı yükleme süreleri ve mobil uyumlu tasarım. Dijitalde
                                    görünürlüğünüzü artırın.
                                </p>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="hero-cta-group">
                            <a href="#contact" class="btn-premium-primary">Ücretsiz Teklif Alın</a>
                            <a href="#features" class="btn-premium-secondary">Hizmetleri İnceleyin</a>
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

                <!-- Right Column: Product Mockup (45%) -->
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="mockup-visual-wrapper">
                        <div class="mockup-container product-mockup">
                            <!-- Mockup Top Bar -->
                            <div class="mockup-top-bar">
                                <div class="mockup-dots">
                                    <div class="mockup-dot" style="background:#ef4444"></div>
                                    <div class="mockup-dot" style="background:#eab308"></div>
                                    <div class="mockup-dot" style="background:#22c55e"></div>
                                </div>
                            </div>

                            <!-- Corporate Showcase Image -->
                            <div class="product-showcase-mockup">
                                <img src="assets/img/kurumsal-showcase.png" alt="Kurumsal Web Sitesi Örneği">
                            </div>

                            <!-- Floating Badges -->
                            <div class="floating-badge badge-seo">
                                <i class="fas fa-building"></i> Kurumsal Kimlik
                            </div>
                            <div class="floating-badge badge-trust">
                                <i class="fas fa-shield-alt"></i> Güvenilir & Profesyonel
                            </div>
                            <div class="stats-chip stats-chip-sales">
                                <i class="fas fa-search text-primary me-1"></i> SEO Uyumlu
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/kurumsal-hero.js"></script>
    <script src="assets/js/space-interaction.js"></script>


    <!-- ========================================
         SECTION 3: KAPSAM
         Bu hizmet neleri içerir?
         ======================================== -->
    <section class="py-5" id="kapsam">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-list-check me-2"></i>Hizmet Kapsamı
                </span>
                <h2 class="section-title gradient-text-main">Bu Hizmet Neleri İçerir?</h2>
                <p class="section-subtitle">Kurumsal web sitenizle birlikte sunduğumuz tüm özellikler</p>
            </div>

            <div class="row g-4">
                <!-- Özellik 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-palette"></i></div>
                        <h3>Kurumsal Arayüz Tasarımı</h3>
                        <p class="text-muted">
                            Marka kimliğinize uygun, modern ve profesyonel arayüz tasarımı.
                        </p>
                    </div>
                </div>

                <!-- Özellik 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Mobil ve Tablet Uyumluluk</h3>
                        <p class="text-muted">
                            Tüm cihazlarda mükemmel görünen responsive tasarım.
                        </p>
                    </div>
                </div>

                <!-- Özellik 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-cogs"></i></div>
                        <h3>Yönetim Paneli (CMS)</h3>
                        <p class="text-muted">
                            İçeriklerinizi kolayca yönetebileceğiniz kullanıcı dostu panel.
                        </p>
                    </div>
                </div>

                <!-- Özellik 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-search"></i></div>
                        <h3>Temel SEO Altyapısı</h3>
                        <p class="text-muted">
                            Google'da bulunabilirliğinizi artıran SEO uyumlu yapı.
                        </p>
                    </div>
                </div>

                <!-- Özellik 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-tachometer-alt"></i></div>
                        <h3>Hız ve Performans Optimizasyonu</h3>
                        <p class="text-muted">
                            Hızlı yüklenen, performans odaklı web sitesi altyapısı.
                        </p>
                    </div>
                </div>

                <!-- Özellik 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card-service">
                        <div class="feature-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                        <h3>Güvenlik Yapılandırmaları</h3>
                        <p class="text-muted">
                            SSL sertifikası, güvenlik duvarı ve güncel koruma önlemleri.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 4: SÜREÇ
         Nasıl çalışıyoruz? Zig-Zag Basamaklı Tasarım
         ======================================== -->
    <section class="py-5 bg-light" id="surec">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-route me-2"></i>Çalışma Sürecimiz
                </span>
                <h2 class="section-title gradient-text-main">Nasıl Çalışıyoruz?</h2>
                <p class="section-subtitle">Projenizi başarıyla tamamlamak için izlediğimiz sistematik süreç</p>
            </div>

            <!-- Zig-Zag Staircase Process -->
            <div class="zigzag-process">
                <!-- Step 1 - Sol -->
                <div class="zigzag-step step-left" data-step="1">
                    <div class="zigzag-icon level-1">
                        <span class="step-num">01</span>
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="zigzag-card">
                        <h4 class="zigzag-title">Analiz & Planlama</h4>
                        <p class="zigzag-desc">İş hedeflerinizi, hedef kitlenizi ve beklentilerinizi detaylıca analiz
                            ediyor, projenizin yol haritasını birlikte çıkarıyoruz.</p>
                        <div class="zigzag-tags">
                            <span>Müşteri Görüşmesi</span>
                            <span>Rakip Analizi</span>
                            <span>Strateji</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2 - Sağ -->
                <div class="zigzag-step step-right" data-step="2">
                    <div class="zigzag-icon level-2">
                        <span class="step-num">02</span>
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="zigzag-card">
                        <h4 class="zigzag-title">UI/UX Tasarım</h4>
                        <p class="zigzag-desc">Marka kimliğinize uygun, kullanıcı deneyimi odaklı modern arayüz
                            tasarımlarını hazırlıyor ve onayınıza sunuyoruz.</p>
                        <div class="zigzag-tags">
                            <span>Wireframe</span>
                            <span>Mockup</span>
                            <span>Prototip</span>
                        </div>
                    </div>
                </div>

                <!-- Step 3 - Sol -->
                <div class="zigzag-step step-left" data-step="3">
                    <div class="zigzag-icon level-3">
                        <span class="step-num">03</span>
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="zigzag-card">
                        <h4 class="zigzag-title">Geliştirme & Test</h4>
                        <p class="zigzag-desc">Modern teknolojilerle kodlama yapıyor, tüm cihazlarda kapsamlı testler
                            gerçekleştirerek hatasız çalışmasını sağlıyoruz.</p>
                        <div class="zigzag-tags">
                            <span>Frontend</span>
                            <span>Backend</span>
                            <span>QA Test</span>
                        </div>
                    </div>
                </div>

                <!-- Step 4 - Sağ (Zirve) -->
                <div class="zigzag-step step-right step-peak" data-step="4">
                    <div class="zigzag-icon level-4">
                        <span class="step-num">04</span>
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="zigzag-card">
                        <h4 class="zigzag-title">Yayın & Destek</h4>
                        <p class="zigzag-desc">Sitenizi yayına alıyor, kullanım eğitimi veriyor ve 7/24 teknik destek
                            hizmeti ile yanınızda olmaya devam ediyoruz.</p>
                        <div class="zigzag-tags">
                            <span>Deployment</span>
                            <span>Eğitim</span>
                            <span>7/24 Destek</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Zigzag scroll animation
        document.addEventListener('DOMContentLoaded', function () {
            const zigzagSteps = document.querySelectorAll('.zigzag-step');
            if (zigzagSteps.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) entry.target.classList.add('active');
                    });
                }, { threshold: 0.2, rootMargin: '0px 0px -50px 0px' });

                zigzagSteps.forEach(step => observer.observe(step));

                setTimeout(() => {
                    zigzagSteps.forEach((step, index) => {
                        setTimeout(() => step.classList.add('active'), index * 250);
                    });
                }, 300);
            }
        });
    </script>

    <!-- ========================================
         SECTION 5: KİMLER İÇİN UYGUN?
         Chip/Badge tarzı yatay liste
         ======================================== -->
    <section class="py-5" id="hedef-kitle">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-users me-2"></i>Hedef Kitle
                </span>
                <h2 class="section-title gradient-text-main">Kimler İçin Uygun?</h2>
                <p class="section-subtitle">Bu hizmet sizin için mi? Hemen öğrenin.</p>
            </div>

            <!-- Chip/Badge Style List -->
            <div class="audience-chips-container" data-aos="fade-up">
                <div class="audience-chip">
                    <i class="fas fa-building"></i>
                    <span>Kurumsal Firmalar</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-chart-line"></i>
                    <span>Büyüyen Markalar</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-rocket"></i>
                    <span>Startup Ekipleri</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-briefcase"></i>
                    <span>Profesyonel Hizmetler</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-globe"></i>
                    <span>Uluslararası Firmalar</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-star"></i>
                    <span>Marka Bilinirliği</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-laptop"></i>
                    <span>Dijital Dönüşüm</span>
                </div>
                <div class="audience-chip">
                    <i class="fas fa-handshake"></i>
                    <span>B2B İşletmeler</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 6: TEKNİK ALTYAPI
         Kullandığımız teknolojiler logo bandı
         ======================================== -->
    <section class="py-5 bg-light" id="teknik-altyapi">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-server me-2"></i>Teknik Altyapı
                </span>
                <h2 class="section-title gradient-text-main">Kullandığımız Teknolojiler</h2>
                <p class="section-subtitle">Modern, güvenli ve performanslı altyapılar</p>
            </div>

            <div class="tech-stack-grid" data-aos="fade-up">
                <div class="row justify-content-center align-items-center g-4">
                    <!-- Tech 1 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fab fa-laravel"></i>
                            <span>Laravel</span>
                        </div>
                    </div>
                    <!-- Tech 2 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fab fa-wordpress"></i>
                            <span>WordPress</span>
                        </div>
                    </div>
                    <!-- Tech 3 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fab fa-react"></i>
                            <span>React</span>
                        </div>
                    </div>
                    <!-- Tech 4 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fab fa-vuejs"></i>
                            <span>Vue.js</span>
                        </div>
                    </div>
                    <!-- Tech 5 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fas fa-cloud"></i>
                            <span>CDN</span>
                        </div>
                    </div>
                    <!-- Tech 6 -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="tech-item">
                            <i class="fas fa-lock"></i>
                            <span>SSL/TLS</span>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p class="text-muted mb-0">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        SEO-Ready yapı, hızlı yükleme süreleri ve güvenli hosting altyapısı
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title gradient-text-main">Sıkça Sorulan Sorular</h2>
                <p class="section-subtitle">Kurumsal web sitesi hakkında merak edilenler</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <!-- Sol Sütun -->
                        <div class="col-lg-6">
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="100">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-clock"></i></div>
                                        <span>Kurumsal web sitesi ne kadar sürede tamamlanır?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Projenin kapsamına göre değişmekle birlikte, standart bir kurumsal web sitesi
                                            2-4 hafta içinde tamamlanır. Daha kapsamlı projeler 6-8 hafta sürebilir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="200">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-edit"></i></div>
                                        <span>İçerikleri kendim güncelleyebilir miyim?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Evet, kullanımı kolay yönetim paneli sayesinde teknik bilgi gerektirmeden tüm
                                            içeriklerinizi güncelleyebilirsiniz. Ayrıca kullanım eğitimi de veriyoruz.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="300">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-globe"></i></div>
                                        <span>Çok dilli web sitesi yapılabilir mi?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Evet, kurumsal web sitenizi Türkçe, İngilizce ve istediğiniz diğer dillerde
                                            hazırlayabiliriz. Dil geçişleri kullanıcı dostu şekilde tasarlanır.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sağ Sütun -->
                        <div class="col-lg-6">
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="150">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-shield-alt"></i></div>
                                        <span>Hosting ve güvenlik dahil mi?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Evet, SSL sertifikası, güvenlik duvarı, günlük yedekleme ve yüksek
                                            performanslı hosting hizmeti paketlerimize dahildir.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="250">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-headset"></i></div>
                                        <span>Yayın sonrası destek var mı?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Evet, 7/24 teknik destek hizmeti sunuyoruz. Sorunlarınız en kısa sürede
                                            çözülür, güncellemeler ve bakım düzenli olarak yapılır.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion" data-aos="fade-up" data-aos-delay="350">
                                <div class="faq-item">
                                    <button class="faq-question"
                                        onclick="this.parentElement.classList.toggle('active')">
                                        <div class="faq-icon"><i class="fas fa-search"></i></div>
                                        <span>SEO çalışması dahil mi?</span>
                                        <i class="fas fa-chevron-down faq-arrow"></i>
                                    </button>
                                    <div class="faq-answer">
                                        <p>Temel SEO altyapısı tüm paketlere dahildir. İleri düzey SEO çalışması için
                                            ayrı hizmet paketlerimiz mevcuttur.</p>
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
            <div class="cta-modern p-5 rounded-5 position-relative overflow-hidden" data-aos="zoom-in">
                <div class="cta-glow-bg"></div>
                <div class="row align-items-center position-relative z-2">
                    <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                        <h3 class="display-6 fw-bold text-white mb-3">Ürününüzü Zirveye Taşıyalım</h3>
                        <p class="lead text-white-50 mb-0">
                            Etkileyici bir ürün tanıtım sitesi ile markanızı güçlendirin ve satışlarınızı artırın.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="contact.php" class="btn btn-gradient btn-xl shadow-lg">
                            Hemen Başlayın <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
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
                        <img src="assets/img/logo.png" alt="Veddia Media" class="footer-logo mb-3">
                        <p class="footer-desc">Veddia Media ile web tasarım, yazılım geliştirme ve dijital pazarlamada
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
                                    <a href="mailto:info@veddia.com" class="contact-value">info@veddia.com</a>
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
                            &copy; 2025 <strong>Veddia Media</strong>. Tüm hakları saklıdır.
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
                            <strong>Veddia Team</strong> tarafından
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

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Scripts -->
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
