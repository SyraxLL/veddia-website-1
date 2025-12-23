<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Kişisel Web Sitesi Tasarımı - Sizi ve yeteneklerinizi en iyi yansıtan, profesyonel web siteleri. Veddia Media ile dijital kimliğinizi oluşturun.">
    <title>Kişisel Web Sitesi Tasarımı - Veddia Media</title>
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
    <link rel="stylesheet" href="assets/css/personal-page.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Premium Hero Slider - Personal Website Theme -->
    <section class="hero-premium-kurumsal" id="hero-premium">
        <canvas id="hero-canvas"></canvas>

        <!-- Rising Bubble Particles Container -->
        <div class="bubble-particles" id="bubbleContainer"></div>

        <script>
            (function () {
                const container = document.getElementById('bubbleContainer');
                for (let i = 0; i < 100; i++) {
                    const bubble = document.createElement('span');
                    bubble.className = 'bubble';

                    const left = Math.random() * 100;
                    const size = 3 + Math.random() * 8;
                    const duration = 18 + Math.random() * 20;
                    const delay = Math.random() * 20;
                    const drift = -40 + Math.random() * 80;

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
                            <span>Kişisel Web Sitesi</span>
                        </div>

                        <!-- Slider Container -->
                        <div class="hero-slider-container">
                            <!-- Slide 1 -->
                            <div class="hero-slide active">
                                <h1 class="hero-title"><span class="highlight-word">Kişisel</span> Markanızı
                                    <br>Dijitale Taşıyın
                                </h1>
                                <p class="hero-description">
                                    Sizi, yeteneklerinizi ve başarılarınızı en iyi yansıtan, profesyonel
                                    kişisel web siteleri tasarlıyoruz. Kendi markanızı dijital dünyada
                                    güçlü bir şekilde oluşturun.
                                </p>
                            </div>
                            <!-- Slide 2 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Özgün</span> ve
                                    <br>Etkileyici Tasarım
                                </h1>
                                <p class="hero-description">
                                    Standart kalıpların ötesinde, size özel tasarlanmış, modern ve
                                    mobil uyumlu web siteleri. Ziyaretçilerinizde unutulmaz bir
                                    ilk izlenim bırakın.
                                </p>
                            </div>
                            <!-- Slide 3 -->
                            <div class="hero-slide">
                                <h1 class="hero-title"><span class="highlight-word">Blog</span> ve
                                    <br>Portfolio
                                </h1>
                                <p class="hero-description">
                                    Çalışmalarınızı sergileyebileceğiniz portfolyo alanları ve
                                    düşüncelerinizi paylaşabileceğiniz blog altyapısı ile
                                    etkileşimi artırın.
                                </p>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="hero-cta-group">
                            <a href="#contact" class="btn-premium-primary">Ücretsiz Teklif Alın</a>
                            <a href="#features" class="btn-premium-secondary">Detayları İnceleyin</a>
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

                            <!-- Showcase Image -->
                            <div class="product-showcase-mockup">
                                <img src="assets/img/kisisel-hero-showcase.jpg" alt="Kişisel Web Sitesi Örneği"
                                    style="width:100%; height:auto; border-radius: 0 0 16px 16px; display:block;">
                            </div>

                            <!-- Floating Badges -->
                            <div class="floating-badge badge-seo">
                                <i class="fas fa-user-check"></i> Kişisel Marka
                            </div>
                            <div class="floating-badge badge-trust">
                                <i class="fas fa-pen-fancy"></i> Özgün Tasarım
                            </div>

                            <!-- Stats Chip -->
                            <div class="stats-chip" style="top: 40%; right: -25px;">
                                <i class="fas fa-users" style="color:#3b82f6;"></i>
                                <span>+10k Ziyaretçi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 1: VALUE PROPOSITION (Why?)
         ======================================== -->
    <section class="py-5" style="background:#fff;">
        <div class="container pt-5">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="section-badge"><i class="fas fa-star"></i> Neden Kişisel Web Sitesi?</span>
                    <h2 class="section-title">Dijital Dünyadaki <span class="gradient-text-personal">Profesyonel
                            Kimliğiniz</span></h2>
                    <p class="lead text-muted">Sadece bir CV değil, yaşayan ve etkileşime geçen bir platform.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="value-card">
                        <div class="value-icon-box">
                            <i class="fas fa-id-card-alt"></i>
                        </div>
                        <h3>Profesyonel İmaj</h3>
                        <p>Google'da isminiz arandığında kontrol tamamen sizde olsun. İlk izlenimi şansa bırakmayın.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card">
                        <div class="value-icon-box">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>7/24 Erişim</h3>
                        <p>Uyurken bile iş teklifleri alın. Portfolyonuz ve yetenekleriniz dünyanın her yerine açık
                            olsun.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card">
                        <div class="value-icon-box">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Tam Kontrol</h3>
                        <p>Sosyal medya algoritmalarına bağımlı kalmayın. Kendi kurallarınızla kendi kitlenizi
                            oluşturun.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 2: FEATURES SHOWCASE (Zig-Zag)
         ======================================== -->
    <section class="py-5 bg-light">
        <div class="container py-5">

            <!-- Row 1 -->
            <div class="row align-items-center feature-row">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="feature-content">
                        <span class="section-badge">Portfolyo</span>
                        <h2 class="section-title">Etkileyici Portfolyo Yönetimi</h2>
                        <p class="text-muted lead">Çalışmalarınızı, projelerinizi ve başarılarınızı en modern şekilde
                            sergileyin.</p>

                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Kategori bazlı filtreleme</li>
                            <li><i class="fas fa-check-circle"></i> Detaylı proje sayfaları</li>
                            <li><i class="fas fa-check-circle"></i> Yüksek çözünürlüklü galeri</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="abstract-ui-wrapper">
                        <div class="ui-floating-badge"><i class="fas fa-filter"></i> Filtrele</div>

                        <div class="ui-grid-project">
                            <!-- Mockup Card 1 -->
                            <div class="ui-card-mockup">
                                <div class="ui-card-image accent-2"></div>
                                <div class="ui-card-text">
                                    <div class="ui-line"></div>
                                    <div class="ui-line short"></div>
                                </div>
                            </div>
                            <!-- Mockup Card 2 -->
                            <div class="ui-card-mockup">
                                <div class="ui-card-image accent-1"></div>
                                <div class="ui-card-text">
                                    <div class="ui-line"></div>
                                    <div class="ui-line short"></div>
                                </div>
                            </div>
                            <!-- Mockup Card 3 -->
                            <div class="ui-card-mockup">
                                <div class="ui-card-image accent-3"></div>
                                <div class="ui-card-text">
                                    <div class="ui-line"></div>
                                    <div class="ui-line short"></div>
                                </div>
                            </div>
                            <!-- Mockup Card 4 -->
                            <div class="ui-card-mockup">
                                <div class="ui-card-image accent-4"></div>
                                <div class="ui-card-text">
                                    <div class="ui-line"></div>
                                    <div class="ui-line short"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row align-items-center feature-row">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                    <div class="feature-content ps-lg-5">
                        <span class="section-badge">Blog & İçerik</span>
                        <h2 class="section-title">Düşünce Liderliği</h2>
                        <p class="text-muted lead">Bilgi birikiminizi paylaşarak sektörünüzde otorite konumuna yükselin.
                        </p>

                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> SEO uyumlu blog altyapısı</li>
                            <li><i class="fas fa-check-circle"></i> Kolay içerik yönetim paneli</li>
                            <li><i class="fas fa-check-circle"></i> Sosyal medya paylaşım entegrasyonu</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="abstract-ui-wrapper">
                        <div class="ui-floating-badge badge-seo-score"><i class="fas fa-check-circle"></i> SEO: %100
                        </div>

                        <div class="ui-content-skeleton">
                            <div class="ui-skeleton-header">
                                <div class="skeleton-title"></div>
                                <div class="skeleton-btn"></div>
                            </div>
                            <div class="ui-skeleton-body">
                                <div class="skeleton-sidebar">
                                    <div class="skeleton-bar"></div>
                                    <div class="skeleton-bar"></div>
                                    <div class="skeleton-bar w-50"></div>
                                    <div class="skeleton-bar"></div>
                                </div>
                                <div class="skeleton-main">
                                    <div class="skeleton-bar"></div>
                                    <div class="skeleton-bar"></div>
                                    <div class="skeleton-bar w-75"></div>
                                    <div class="skeleton-bar w-50"></div>
                                    <div class="skeleton-bar"></div>
                                    <div class="skeleton-bar w-75"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 3: AUDIENCE (Pills)
         ======================================== -->
    <section class="py-5 bg-white">
        <div class="container text-center py-5">
            <span class="section-badge">Hedef Kitle</span>
            <h2 class="section-title pb-3">Kimler İçin Uygun?</h2>

            <div class="persona-wrapper">
                <div class="row g-4">
                    <!-- Freelancers -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-laptop-code"></i></div>
                            <h3 class="persona-title">Freelancer'lar</h3>
                            <p class="persona-desc">Fiyat rekabetinden çıkıp, değer odaklı bir marka duruşu sergileyin
                                ve müşterilerinizi etkileyin.</p>
                        </div>
                    </div>

                    <!-- Doctors -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-user-md"></i></div>
                            <h3 class="persona-title">Doktorlar</h3>
                            <p class="persona-desc">Hasta güvenini profesyonel dijital kimliğinizle pekiştirin ve
                                randevu sürecini kolaylaştırın.</p>
                        </div>
                    </div>

                    <!-- Lawyers -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-balance-scale"></i></div>
                            <h3 class="persona-title">Avukatlar</h3>
                            <p class="persona-desc">Uzmanlık alanlarınızı ve hukuki makalelerinizi yayınlayarak
                                itibarınızı güçlendirin.</p>
                        </div>
                    </div>

                    <!-- Developers -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-code"></i></div>
                            <h3 class="persona-title">Yazılımcılar</h3>
                            <p class="persona-desc">GitHub profilinizin ötesine geçin. Projelerinizi ve teknik
                                yetkinliklerinizi detaylarıyla anlatın.</p>
                        </div>
                    </div>

                    <!-- Academics -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-book-reader"></i></div>
                            <h3 class="persona-title">Akademisyenler</h3>
                            <p class="persona-desc">Yayınlarınızı, araştırmalarınızı ve ders notlarınızı tek bir çatı
                                altında toplayın.</p>
                        </div>
                    </div>

                    <!-- Real Estate -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-home"></i></div>
                            <h3 class="persona-title">Gayrimenkul Danışmanları</h3>
                            <p class="persona-desc">Portföyünüzü en şık şekilde sunun ve potansiyel alıcılara güven
                                verin.</p>
                        </div>
                    </div>

                    <!-- Designers/Artists -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-paint-brush"></i></div>
                            <h3 class="persona-title">Sanatçı & Tasarımcılar</h3>
                            <p class="persona-desc">Eserlerinizi yaşayan bir galeriye dönüştürün. Yaratıcılığınızı sınır
                                tanımadan sergileyin.</p>
                        </div>
                    </div>

                    <!-- Students -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-user-graduate"></i></div>
                            <h3 class="persona-title">Öğrenciler & Yeni Mezunlar</h3>
                            <p class="persona-desc">Kariyer basamaklarını hızla tırmanın. Standart bir CV'den çok daha
                                fazlasını sunun.</p>
                        </div>
                    </div>

                    <!-- Consultants -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="persona-card">
                            <div class="persona-icon"><i class="fas fa-briefcase"></i></div>
                            <h3 class="persona-title">Danışmanlar</h3>
                            <p class="persona-desc">Hizmetlerinizi, başarı hikayelerinizi ve referanslarınızı
                                profesyonelce aktarın.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 4: TECHNICAL STATS
         ======================================== -->
    <section class="stats-band">
        <div class="container">
            <div class="row">
                <div class="col-md-4 stat-item" data-aos="zoom-in" data-aos-delay="0">
                    <div class="stat-number">%100</div>
                    <div class="stat-label">SEO Uyumluluğu</div>
                </div>
                <div class="col-md-4 stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-number">&lt;1 Sn</div>
                    <div class="stat-label">Açılış Hızı</div>
                </div>
                <div class="col-md-4 stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-number">Responsive</div>
                    <div class="stat-label">Tüm Cihazlarla Uyumlu</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION 5: PROCESS (Steps)
         ======================================== -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">3 Adımda Yayındasınız</h2>
                <p class="section-subtitle text-muted">Sürecimiz hızlı, şeffaf ve sonuç odaklıdır.</p>
            </div>

            <div class="process-steps">
                <!-- Step 1 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="0">
                    <div class="step-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h4 class="step-title">1. Planlama</h4>
                    <p class="step-desc">İhtiyaçlarınızı dinler, size en uygun tasarımı ve yapıyı belirleriz.</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="150">
                    <div class="step-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h4 class="step-title">2. Tasarım & Kodlama</h4>
                    <p class="step-desc">Modern ve hızlı altyapımızla sitenizi en ince detayına kadar hazırlarız.</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4 class="step-title">3. Yayın</h4>
                    <p class="step-desc">Testlerin ardından siteniz yayına alınır ve dünyaya açılırsınız.</p>
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
                        <h3 class="display-6 fw-bold text-white mb-3">Kişisel Markanızı Zirveye Taşıyalım</h3>
                        <p class="lead text-white-50 mb-0">
                            Sizi en iyi anlatan, etkileyici bir kişisel web sitesi ile dijital dünyada fark yaratın.
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