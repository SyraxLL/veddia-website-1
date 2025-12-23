<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Veddia Media - Modern Dijital Çözümler, Web Tasarım, Yazılım ve Dijital Pazarlama Ajansı">
    <title>
        Ürün Tanıtım Sitesi Tasarımı - Veddia Media </title>
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
    <link rel="stylesheet" href="assets/css/product-hero.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

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
                            <span>Ürün Tanıtım Sitesi</span>
                        </div>

                        <!-- Slider Container -->
                        <div class="hero-slider-container">
                            <!-- Slide 1 -->
                            <div class="hero-slide active">
                                <h1 class="hero-title"><span class="highlight-word">Ürünlerinizi</span> Dijitalde
                                    <br>Öne Çıkarın
                                </h1>
                                <p class="hero-description">
                                    Ürünlerinizin özelliklerini ve farkını net şekilde anlatan, satış odaklı
                                    ve güven veren ürün tanıtım sayfaları. Ziyaretçilerinizi etkileyen
                                    görsellerle birlikte net mesajlar ve aksiyon çağrıları kullanıyoruz.
                                </p>
                            </div>
                            <!-- Slide 2 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Dönüşüm</span> Odaklı
                                    <br>Tasarım
                                </h1>
                                <p class="hero-description">
                                    Ziyaretçileri müşteriye dönüştürmek için optimize edilmiş, harekete
                                    geçirici mesajlarla dolu sayfalar. Her detay satış artırmak için
                                    profesyonelce planlanmış ve test edilmiştir.
                                </p>
                            </div>
                            <!-- Slide 3 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">360°</span> Ürün
                                    <br>Deneyimi
                                </h1>
                                <p class="hero-description">
                                    Ürününüzün her detayını gösteren interaktif görseller, videolar
                                    ve teknik özellik tabloları. Müşteri güvenini artıran profesyonel
                                    sunum ve modern tasarım anlayışıyla fark yaratın.
                                </p>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="hero-cta-group">
                            <a href="#contact" class="btn-premium-primary">Ürün Tanıtım Teklifi Alın</a>
                            <a href="#features" class="btn-premium-secondary">Ürünü İnceleyin</a>
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

                            <!-- Product Showcase Image -->
                            <div class="product-showcase-mockup">
                                <img src="assets/img/product-showcase.jpg" alt="Ürün Tanıtım Sitesi Örneği">
                            </div>

                            <!-- Floating Badges -->
                            <div class="floating-badge badge-seo">
                                <i class="fas fa-rocket"></i> Yeni Nesil Çözüm
                            </div>
                            <div class="floating-badge badge-trust">
                                <i class="fas fa-chart-line"></i> Yüksek Dönüşüm Odaklı Tasarım
                            </div>
                            <div class="stats-chip stats-chip-sales">
                                <i class="fas fa-award text-success me-1"></i> Premium Kalite
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Discovery Section with Mock 360° Viewer -->
    <section class="py-5 bg-light" id="product-discovery">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Mock 3D Viewer - Sol Taraf -->
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="mock-3d-viewer">
                        <!-- 360° Badge -->
                        <div class="viewer-badge-360">
                            <span class="badge-number">360</span>
                            <span class="badge-degree">°</span>
                        </div>

                        <!-- Rotating Ring Effect -->
                        <div class="rotating-ring"></div>
                        <div class="rotating-ring ring-2"></div>

                        <!-- Central Product Placeholder -->
                        <div class="product-placeholder">
                            <div class="product-cube">
                                <div class="cube-face front"></div>
                                <div class="cube-face back"></div>
                                <div class="cube-face left"></div>
                                <div class="cube-face right"></div>
                                <div class="cube-face top"></div>
                                <div class="cube-face bottom"></div>
                            </div>
                            <!-- Glow Effect -->
                            <div class="product-glow"></div>
                        </div>

                        <!-- Floating Particles -->
                        <div class="floating-particle p1"></div>
                        <div class="floating-particle p2"></div>
                        <div class="floating-particle p3"></div>
                        <div class="floating-particle p4"></div>
                    </div>
                </div>

                <!-- Content - Sağ Taraf -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="discovery-content">
                        <div class="discovery-badge mb-3">
                            <span class="badge-icon"><i class="fas fa-cube"></i></span>
                            <span>Ürün Deneyimi</span>
                        </div>
                        <h2 class="discovery-title mb-4">Ürünü <span class="text-highlight">Keşfedin</span></h2>
                        <p class="discovery-desc mb-4">
                            Ürününüzün benzersiz özelliklerini, kullanım kolaylığını ve hayatı nasıl kolaylaştırdığını
                            anlatan etkileyici bir bölüm. Müşterileriniz ürününüzle bağ kursun.
                        </p>
                        <div class="feature-grid">
                            <div class="feature-item">
                                <div class="feature-icon blue"><i class="fas fa-palette"></i></div>
                                <span>Ergonomik ve Şık Tasarım</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon purple"><i class="fas fa-shield-alt"></i></div>
                                <span>Dayanıklı Malzeme Kalitesi</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon cyan"><i class="fas fa-hand-pointer"></i></div>
                                <span>Kullanıcı Dostu Arayüz</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon pink"><i class="fas fa-award"></i></div>
                                <span>2 Yıl Garanti</span>
                            </div>
                        </div>
                    </div>
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
                            <span class="timeline-badge"><i class="fas fa-tools me-2"></i>Sürecimiz</span>
                            <h3 class="timeline-title gradient-text-main">Ürün Tanıtım Sitenizi Oluştururken Neler
                                Yapıyoruz?</h3>
                            <div class="timeline-divider"></div>
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
                <h2 class="section-title gradient-text-main" style="transition: color 0.3s ease;">Neden Ürün Tanıtım
                    Sitesi?
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
                            Zoom özellikleri, 360 derece görünüm ve detay fotoğrafları ile ürünü yakından tanıma
                            fırsatı.
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

    <!-- Process Timeline - Path Design -->
    <section class="py-5 process-section">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title gradient-text-main">Tanıtım Süreci</h2>
                <p class="section-subtitle">Ürününüzü pazara sunarken izlediğimiz yol</p>
            </div>

            <div class="timeline-path" data-aos="fade-up">
                <!-- Timeline Line -->
                <div class="timeline-line"></div>

                <!-- Step 1 -->
                <div class="timeline-step">
                    <div class="step-marker blue">
                        <span>01</span>
                    </div>
                    <div class="step-card">
                        <div class="step-icon blue"><i class="fas fa-search"></i></div>
                        <h4>Ürün Analizi</h4>
                        <p>Ürününüzü inceliyor ve öne çıkacak özellikleri belirliyoruz.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="timeline-step">
                    <div class="step-marker purple">
                        <span>02</span>
                    </div>
                    <div class="step-card">
                        <div class="step-icon purple"><i class="fas fa-palette"></i></div>
                        <h4>Konsept Tasarım</h4>
                        <p>Ürüne uygun renk ve görsel dili oluşturuyoruz.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="timeline-step">
                    <div class="step-marker cyan">
                        <span>03</span>
                    </div>
                    <div class="step-card">
                        <div class="step-icon cyan"><i class="fas fa-pen-nib"></i></div>
                        <h4>İçerik Üretimi</h4>
                        <p>Etkileyici metinler ve görseller hazırlıyoruz.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="timeline-step">
                    <div class="step-marker pink">
                        <span>04</span>
                    </div>
                    <div class="step-card">
                        <div class="step-icon pink"><i class="fas fa-rocket"></i></div>
                        <h4>Yayın & Reklam</h4>
                        <p>Sitenizi yayına alıp reklamları başlatıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <!-- FAQ Section (Premium Design) -->
    <section class="faq-section-premium">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="faq-badge">SSS</span>
                <h2 class="display-5 fw-bold mt-3">Sıkça Sorulan Sorular</h2>
                <p class="text-muted lead">Ürün tanıtım sitesi hakkında merak edilenler</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Left Column (2 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="urunFaqLeft">
                        <!-- Question 1 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#uq1">
                                        <span class="faq-icon"><i class="fas fa-box-open"></i></span>
                                        Tek bir ürün için site yapılır mı?
                                    </button>
                                </h2>
                                <div id="uq1" class="accordion-collapse collapse" data-bs-parent="#urunFaqLeft">
                                    <div class="accordion-body">
                                        Evet, "Landing Page" tek sayfalık ürün tanıtım siteleri, satışları artırmak için
                                        çok etkilidir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#uq2">
                                        <span class="faq-icon"><i class="fas fa-shopping-basket"></i></span>
                                        Siteden satış yapılabilir mi?
                                    </button>
                                </h2>
                                <div id="uq2" class="accordion-collapse collapse" data-bs-parent="#urunFaqLeft">
                                    <div class="accordion-body">
                                        Elbette. Sipariş formu veya ödeme altyapısı (iyzico, PayTR vb.) entegre
                                        edebiliriz.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column (2 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="urunFaqRight">
                        <!-- Question 3 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#uq3">
                                        <span class="faq-icon"><i class="fas fa-clock"></i></span>
                                        Süreç ne kadar sürer?
                                    </button>
                                </h2>
                                <div id="uq3" class="accordion-collapse collapse" data-bs-parent="#urunFaqRight">
                                    <div class="accordion-body">
                                        Tipik bir ürün tanıtım sitesi 1-2 hafta içinde hazır olabilir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 4 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#uq4">
                                        <span class="faq-icon"><i class="fas fa-chart-line"></i></span>
                                        Reklam yönetimi yapıyor musunuz?
                                    </button>
                                </h2>
                                <div id="uq4" class="accordion-collapse collapse" data-bs-parent="#urunFaqRight">
                                    <div class="accordion-body">
                                        Evet, Google Ads ve sosyal medya reklamlarınızı yöneterek hedef kitlenize
                                        ulaşmanızı sağlıyoruz.
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

    <?php include 'includes/footer.php'; ?>