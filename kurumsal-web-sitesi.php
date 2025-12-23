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
    <!-- FAQ Section (Premium Design) -->
    <section class="faq-section-premium">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="faq-badge">SSS</span>
                <h2 class="display-5 fw-bold mt-3">Sıkça Sorulan Sorular</h2>
                <p class="text-muted lead">Kurumsal web sitesi hakkında merak edilenler</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Left Column (3 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="kurumsalFaqLeft">
                        <!-- Question 1 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq1">
                                        <span class="faq-icon"><i class="fas fa-clock"></i></span>
                                        Kurumsal web sitesi ne kadar sürede tamamlanır?
                                    </button>
                                </h2>
                                <div id="kq1" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqLeft">
                                    <div class="accordion-body">
                                        Projenin kapsamına göre değişmekle birlikte, standart bir kurumsal web sitesi
                                        2-4 hafta içinde tamamlanır. Daha kapsamlı projeler 6-8 hafta sürebilir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq2">
                                        <span class="faq-icon"><i class="fas fa-edit"></i></span>
                                        İçerikleri kendim güncelleyebilir miyim?
                                    </button>
                                </h2>
                                <div id="kq2" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqLeft">
                                    <div class="accordion-body">
                                        Evet, kullanımı kolay yönetim paneli sayesinde teknik bilgi gerektirmeden tüm
                                        içeriklerinizi güncelleyebilirsiniz. Ayrıca kullanım eğitimi de veriyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq3">
                                        <span class="faq-icon"><i class="fas fa-globe"></i></span>
                                        Çok dilli web sitesi yapılabilir mi?
                                    </button>
                                </h2>
                                <div id="kq3" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqLeft">
                                    <div class="accordion-body">
                                        Evet, kurumsal web sitenizi Türkçe, İngilizce ve istediğiniz diğer dillerde
                                        hazırlayabiliriz. Dil geçişleri kullanıcı dostu şekilde tasarlanır.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column (3 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="kurumsalFaqRight">
                        <!-- Question 4 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq4">
                                        <span class="faq-icon"><i class="fas fa-shield-alt"></i></span>
                                        Hosting ve güvenlik dahil mi?
                                    </button>
                                </h2>
                                <div id="kq4" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqRight">
                                    <div class="accordion-body">
                                        Evet, SSL sertifikası, güvenlik duvarı, günlük yedekleme ve yüksek performanslı
                                        hosting hizmeti paketlerimize dahildir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 5 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq5">
                                        <span class="faq-icon"><i class="fas fa-headset"></i></span>
                                        Yayın sonrası destek var mı?
                                    </button>
                                </h2>
                                <div id="kq5" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqRight">
                                    <div class="accordion-body">
                                        Evet, 7/24 teknik destek hizmeti sunuyoruz. Sorunlarınız en kısa sürede çözülür,
                                        güncellemeler ve bakım düzenli olarak yapılır.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 6 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#kq6">
                                        <span class="faq-icon"><i class="fas fa-search"></i></span>
                                        SEO çalışması dahil mi?
                                    </button>
                                </h2>
                                <div id="kq6" class="accordion-collapse collapse" data-bs-parent="#kurumsalFaqRight">
                                    <div class="accordion-body">
                                        Temel SEO altyapısı tüm paketlere dahildir. İleri düzey SEO çalışması için ayrı
                                        hizmet paketlerimiz mevcuttur.
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

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" title="Yukarı Çık">
        <img src="assets/img/favicon.png" alt="Yukarı Çık">
    </button>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php include 'includes/footer.php'; ?>