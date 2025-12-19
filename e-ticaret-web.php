<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="E-Ticaret Web Sitesi Tasarımı - Profesyonel, güvenli ve satış odaklı online mağaza çözümleri. Gloddia Media ile dijitalde satışa başlayın.">
    <title>E-Ticaret Web Sitesi Tasarımı - Gloddia Media</title>
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
    <link rel="stylesheet" href="assets/css/ecommerce-page.css">
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
                            <span>E-Ticaret Sitesi</span>
                        </div>

                        <!-- Slider Container -->
                        <div class="hero-slider-container">
                            <!-- Slide 1 -->
                            <div class="hero-slide active">
                                <h1 class="hero-title"><span class="highlight-word">E-Ticaret</span> Sitenizle
                                    <br>Online Satışa Başlayın
                                </h1>
                                <p class="hero-description">
                                    Güvenli ödeme altyapısı, kolay yönetim paneli ve satış odaklı tasarım ile
                                    online mağazanızı kurun. Dijitalde satışlarınızı artırın.
                                </p>
                            </div>
                            <!-- Slide 2 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Güvenli</span> Ödeme
                                    <br>Kolay Alışveriş
                                </h1>
                                <p class="hero-description">
                                    iyzico, PayTR, Stripe gibi güvenli ödeme sistemleri entegrasyonu.
                                    Müşterileriniz güvenle alışveriş yapsın, siz satışlarınızı artırın.
                                </p>
                            </div>
                            <!-- Slide 3 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Stok</span> Yönetimi
                                    <br>Tam Kontrol
                                </h1>
                                <p class="hero-description">
                                    Ürün, stok, sipariş ve kargo takibi için güçlü yönetim paneli.
                                    Tüm e-ticaret operasyonlarınızı tek noktadan yönetin.
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

                            <!-- E-Commerce Showcase Image -->
                            <div class="product-showcase-mockup">
                                <img src="assets/img/eticaret-showcase.png" alt="E-Ticaret Sitesi Örneği">
                            </div>

                            <!-- Floating Badges -->
                            <div class="floating-badge badge-seo">
                                <i class="fas fa-shopping-cart"></i> Online Mağaza
                            </div>
                            <div class="floating-badge badge-trust">
                                <i class="fas fa-credit-card"></i> Güvenli Ödeme
                            </div>
                            <div class="stats-chip stats-chip-sales">
                                <i class="fas fa-truck text-primary me-1"></i> Kargo Entegrasyonu
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
         SECTION 2: SATIŞA GİDEN YOL
         ======================================== -->
    <section class="sales-flow-section py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-route me-2"></i>Satış Akışı
                </span>
                <h2 class="section-title gradient-text-main">Satışa Giden Yol</h2>
                <p class="section-subtitle lead">Müşteri yolculuğunun her adımını optimize ediyoruz</p>
            </div>

            <!-- Sales Flow Steps -->
            <div class="sales-flow-wrapper" data-aos="fade-up">
                <div class="sales-flow-step" data-tooltip="İlk izlenim her şeydir. Hızlı açılış ve güçlü ilk görsel.">
                    <div class="flow-icon"><i class="fas fa-user"></i></div>
                    <span class="flow-label">Ziyaretçi</span>
                    <span class="flow-desc">İlk tıklama</span>
                </div>
                <div class="flow-connector"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="sales-flow-step"
                    data-tooltip="Ürün sayfası ikna eder. Görseller, açıklamalar, fiyat netliği.">
                    <div class="flow-icon"><i class="fas fa-box-open"></i></div>
                    <span class="flow-label">Ürün</span>
                    <span class="flow-desc">İnceleme</span>
                </div>
                <div class="flow-connector"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="sales-flow-step" data-tooltip="Sepet terk oranını düşürürüz. Basit, net, hızlı.">
                    <div class="flow-icon"><i class="fas fa-shopping-cart"></i></div>
                    <span class="flow-label">Sepet</span>
                    <span class="flow-desc">Ekleme</span>
                </div>
                <div class="flow-connector"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="sales-flow-step" data-tooltip="Güvenli ödeme = satış. SSL, 3D Secure, güven rozetleri.">
                    <div class="flow-icon"><i class="fas fa-credit-card"></i></div>
                    <span class="flow-label">Ödeme</span>
                    <span class="flow-desc">Güvenli</span>
                </div>
                <div class="flow-connector"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="sales-flow-step" data-tooltip="Otomatik bildirimler, kargo takibi, sipariş yönetimi.">
                    <div class="flow-icon"><i class="fas fa-truck"></i></div>
                    <span class="flow-label">Kargo</span>
                    <span class="flow-desc">Takip</span>
                </div>
                <div class="flow-connector"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="sales-flow-step success" data-tooltip="Memnun müşteri = tekrar satış. Sadakat programları.">
                    <div class="flow-icon"><i class="fas fa-heart"></i></div>
                    <span class="flow-label">Müşteri</span>
                    <span class="flow-desc">Sadık</span>
                </div>
            </div>

            <!-- Flow Stats -->
            <div class="row mt-5 pt-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="flow-stat-card text-center">
                        <div class="flow-stat-number">%40</div>
                        <div class="flow-stat-label">Daha az sepet terk</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="flow-stat-card text-center">
                        <div class="flow-stat-number">2x</div>
                        <div class="flow-stat-label">Daha fazla dönüşüm</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="flow-stat-card text-center">
                        <div class="flow-stat-number">%60</div>
                        <div class="flow-stat-label">Tekrar alışveriş</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 3: SPLIT LAYOUT - NERELERİ OPTİMİZE EDİYORUZ
         ======================================== -->
    <section class="optimize-section py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Sol: Sabit Başlık -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="sticky-title-wrapper">
                        <span class="section-badge mb-3">
                            <i class="fas fa-cogs me-2"></i>Hizmetlerimiz
                        </span>
                        <h2 class="section-title gradient-text-main">Satışı etkileyen her noktaya dokunuruz.</h2>
                        <p class="text-muted mt-3">Tüm optimizasyon alanlarımızı keşfedin.</p>
                    </div>
                </div>
                <!-- Sağ: Scroll ile değişen içerikler -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="optimize-cards">
                        <div class="optimize-card">
                            <div class="optimize-icon"><i class="fas fa-images"></i></div>
                            <div class="optimize-content">
                                <h4>Ürün Sayfaları</h4>
                                <p>İkna edici ürün açıklamaları, profesyonel görseller, net fiyatlandırma.</p>
                            </div>
                        </div>
                        <div class="optimize-card">
                            <div class="optimize-icon"><i class="fas fa-shopping-cart"></i></div>
                            <div class="optimize-content">
                                <h4>Sepet Optimizasyonu</h4>
                                <p>Sepet terk oranını %40'a kadar düşürüyoruz. Basit checkout, cross-sell önerileri.</p>
                            </div>
                        </div>
                        <div class="optimize-card">
                            <div class="optimize-icon"><i class="fas fa-credit-card"></i></div>
                            <div class="optimize-content">
                                <h4>Ödeme Güvenliği</h4>
                                <p>iyzico, PayTR, Stripe entegrasyonu. 3D Secure, SSL, PCI DSS uyumlu altyapı.</p>
                            </div>
                        </div>
                        <div class="optimize-card">
                            <div class="optimize-icon"><i class="fas fa-mobile-alt"></i></div>
                            <div class="optimize-content">
                                <h4>Mobil Deneyim</h4>
                                <p>Satışların %70'i mobilde gerçekleşir. Mobil-first tasarım, hızlı yükleme.</p>
                            </div>
                        </div>
                        <div class="optimize-card">
                            <div class="optimize-icon"><i class="fas fa-tachometer-alt"></i></div>
                            <div class="optimize-content">
                                <h4>Hız & Performans</h4>
                                <p>1 saniye gecikme = %7 satış kaybı. CDN, lazy loading ile yıldırım hızında site.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 4: KARŞILAŞTIRMA - HAZIR TEMA YAPMIYORUZ
         ======================================== -->
    <section class="comparison-section py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-not-equal me-2"></i>Fark
                </span>
                <h2 class="section-title gradient-text-main">Hazır Tema Yapmıyoruz</h2>
                <p class="section-subtitle">Gerçek e-ticaret çözümü ile farkı görün</p>
            </div>

            <div class="row justify-content-center g-4">
                <!-- Sol: Standart -->
                <div class="col-lg-5 col-md-6" data-aos="fade-right">
                    <div class="comparison-card standard">
                        <div class="comparison-header">
                            <i class="fas fa-times-circle"></i>
                            <h4>Standart E-ticaret</h4>
                        </div>
                        <ul class="comparison-list">
                            <li><i class="fas fa-minus"></i> Hazır tema kullanımı</li>
                            <li><i class="fas fa-minus"></i> Yavaş yükleme süreleri</li>
                            <li><i class="fas fa-minus"></i> Kopya/jenerik tasarım</li>
                            <li><i class="fas fa-minus"></i> Satış odaklı değil</li>
                            <li><i class="fas fa-minus"></i> Sınırlı özelleştirme</li>
                            <li><i class="fas fa-minus"></i> Yetersiz destek</li>
                        </ul>
                    </div>
                </div>
                <!-- Sağ: Veddia Media -->
                <div class="col-lg-5 col-md-6" data-aos="fade-left">
                    <div class="comparison-card premium">
                        <div class="comparison-header">
                            <i class="fas fa-check-circle"></i>
                            <h4>Veddia E-ticaret</h4>
                        </div>
                        <ul class="comparison-list">
                            <li><i class="fas fa-check"></i> Özel akış tasarımı</li>
                            <li><i class="fas fa-check"></i> Yıldırım hızında performans</li>
                            <li><i class="fas fa-check"></i> Marka uyumlu özgün tasarım</li>
                            <li><i class="fas fa-check"></i> Dönüşüm odaklı UX</li>
                            <li><i class="fas fa-check"></i> Tam özelleştirme</li>
                            <li><i class="fas fa-check"></i> 7/24 premium destek</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 5: GÜVEN ALANI - RAKAMLAR
         ======================================== -->
    <section class="stats-section-ecom py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-chart-bar me-2"></i>Rakamlar
                </span>
                <h2 class="section-title gradient-text-main">Teknik Olarak Güvendesiniz</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-card-ecom">
                        <div class="stat-number">%40</div>
                        <p class="stat-label">Daha Hızlı Açılış</p>
                        <span class="stat-desc">Optimized altyapı</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-card-ecom">
                        <div class="stat-number">100%</div>
                        <p class="stat-label">Mobil Uyumlu</p>
                        <span class="stat-desc">Mobile-first tasarım</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-card-ecom">
                        <div class="stat-number">SEO</div>
                        <p class="stat-label">Altyapı Hazır</p>
                        <span class="stat-desc">Google dostu yapı</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-card-ecom">
                        <div class="stat-number">∞</div>
                        <p class="stat-label">Ölçeklenebilir</p>
                        <span class="stat-desc">Büyümeye hazır sistem</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 6: KİMLER İÇİN?
         ======================================== -->
    <section class="target-audience-section py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-badge mb-3">
                    <i class="fas fa-users me-2"></i>Hedef Kitle
                </span>
                <h2 class="section-title gradient-text-main">Kimler İçin?</h2>
                <p class="section-subtitle">Bu hizmet sizin için mi?</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="target-card">
                        <div class="target-icon"><i class="fas fa-seedling"></i></div>
                        <h4>Yeni Başlayan Markalar</h4>
                        <p>E-ticarete ilk adımını atmak isteyen, doğru başlangıç yapmak isteyen markalar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="target-card">
                        <div class="target-icon"><i class="fas fa-chart-line"></i></div>
                        <h4>Verim Alamayanlar</h4>
                        <p>Mevcut sitesinden satış yapamayan, dönüşüm oranlarından memnun olmayan işletmeler.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="target-card">
                        <div class="target-icon"><i class="fas fa-rocket"></i></div>
                        <h4>Büyümek İsteyenler</h4>
                        <p>Mevcut satışlarını artırmak, yeni pazarlara açılmak isteyen e-ticaret işletmeleri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 7: KAPANIŞ CTA (Kurumsal Style)
         ======================================== -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="cta-modern p-5 rounded-5 position-relative overflow-hidden" data-aos="zoom-in">
                <div class="cta-glow-bg"></div>
                <div class="row align-items-center position-relative z-2">
                    <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                        <h3 class="display-6 fw-bold text-white mb-3">E-ticaret Sitenizi Hayata Geçirelim</h3>
                        <p class="lead text-white-50 mb-0">
                            Satış odaklı, hızlı ve güvenli bir e-ticaret sitesiyle online satışlarınızı artırın.
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