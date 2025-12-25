<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Sayfa Yönetimi - Veddia Media</title>
    <meta name="description"
        content="Profesyonel Facebook sayfa ve topluluk yönetimi. İçerik planlama, moderasyon ve etkileşim artırma hizmetleri.">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/topbar.css">
    <link rel="stylesheet" href="assets/css/fb-management.css">
</head>

<body>

    <?php
    $pageTitle = 'Facebook Yönetimi';
    include 'includes/header.php';
    ?>

    <!-- Hero Section -->
    <section class="fb-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <span class="hero-badge">
                        <i class="fab fa-facebook"></i> Meta Business Partner
                    </span>
                    <h1 class="hero-title">
                        Topluluk <br>
                        <span class="gradient-text">Mühendisliği</span>
                    </h1>
                    <p class="hero-desc">
                        Facebook artık sadece "paylaşım yapma" yeri değil; sadık bir komünite inşa etme alanıdır.
                        Veri odaklı yaklaşımımızla sayfanızı yaşayan, büyüyen bir organizmaya dönüştürüyoruz.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="contact" class="btn-primary-fb">
                            Analiz İste <i class="fas fa-chart-pie ms-2"></i>
                        </a>
                        <a href="#hizmetler" class="btn-outline-fb">
                            Nasıl Çalışır?
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                    <!-- Facebook Dashboard Mockup -->
                    <div class="fb-dashboard-mockup">
                        <!-- Header -->
                        <div class="mockup-header">
                            <div class="d-flex align-items-center gap-2">
                                <div class="header-logo"><i class="fab fa-facebook"></i></div>
                                <span class="header-title">Business Suite</span>
                            </div>
                            <div class="header-icons">
                                <i class="fas fa-bell"></i>
                                <i class="fas fa-cog"></i>
                            </div>
                        </div>

                        <div class="mockup-body">
                            <!-- Sidebar -->
                            <div class="mockup-sidebar">
                                <div class="sidebar-icon active"><i class="fas fa-home"></i></div>
                                <div class="sidebar-icon"><i class="fas fa-chart-bar"></i></div>
                                <div class="sidebar-icon"><i class="fas fa-envelope"></i></div>
                                <div class="sidebar-icon"><i class="fas fa-users"></i></div>
                            </div>

                            <!-- Main Content -->
                            <div class="mockup-content">
                                <!-- Stat Cards -->
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="mini-stat-card">
                                            <p class="stat-label">Sayfa Erişimi</p>
                                            <h3 class="stat-value">2.1M</h3>
                                            <div class="stat-bar"></div>
                                            <span class="stat-change positive"><i class="fas fa-arrow-up"></i>
                                                %45</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mini-stat-card">
                                            <p class="stat-label">Etkileşim</p>
                                            <h3 class="stat-value">84K</h3>
                                            <div class="stat-bar blue"></div>
                                            <span class="stat-change positive"><i class="fas fa-arrow-up"></i>
                                                %32</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mini-stat-card">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="inbox-title">Gelen Kutusu</span>
                                                <span class="inbox-badge">12 Yeni</span>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-avatar"></div>
                                                <div class="inbox-text">
                                                    <strong>Ahmet Yılmaz</strong>
                                                    <span>Ürünleriniz hakkında bilgi...</span>
                                                </div>
                                                <small>2dk</small>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-avatar"></div>
                                                <div class="inbox-text">
                                                    <strong>Ayşe Demir</strong>
                                                    <span>Kargo süreci ile ilgili...</span>
                                                </div>
                                                <small>15dk</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badges -->
                    <div class="float-badge float-1">
                        <i class="fas fa-check-circle text-success"></i>
                        <div>
                            <strong>Kampanya Aktif</strong>
                            <small>ROAS: 4.2x</small>
                        </div>
                    </div>
                    <div class="float-badge float-2">
                        <i class="fas fa-thumbs-up text-primary"></i>
                        <div>
                            <strong>+1,200</strong>
                            <small>Organik Takipçi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmetler -->
    <section class="services-section" id="hizmetler">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-badge">HİZMETLERİMİZ</span>
                <h2 class="section-title">Neler Yapıyoruz?</h2>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h3>İçerik Stratejisi</h3>
                        <p>Rastgele paylaşımlar değil, bir hikaye anlatısı. Görsel tasarım ve metin yazarlığı tek elden.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Topluluk Yönetimi</h3>
                        <p>Gelen her soru, yorum ve mesaj potansiyel bir satıştır. 15 dakika içinde profesyonel dönüş.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h3>Facebook Shop</h3>
                        <p>Kataloğunuzu Facebook'a entegre ediyor, ürünlerinizi doğrudan "Mağaza" sekmesinde
                            sergiliyoruz.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Kriz Yönetimi</h3>
                        <p>Negatif algı operasyonlarını soğukkanlılıkla yönetiyor, markanızın itibarını koruyoruz.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analitik & Raporlama</h3>
                        <p>Haftalık ve aylık detaylı raporlarla performansınızı takip edin.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3>İçerik Takvimi</h3>
                        <p>Aylık içerik planlaması ve zamanlanmış paylaşımlarla düzenli büyüme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metodoloji -->
    <section class="methodology-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-badge">METODOLOJİ</span>
                <h2 class="section-title">Nasıl Başlıyoruz?</h2>
                <p class="section-subtitle">3 adımda profesyonel Facebook yönetimi</p>
            </div>

            <div class="process-steps" data-aos="fade-up">
                <div class="process-line"></div>

                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <div class="step-icon"><i class="fas fa-search"></i></div>
                        <h4>Check-Up</h4>
                        <p>Mevcut sayfanızın analizi, rakip incelemesi ve "Gap Analysis" ile eksiklerin tespiti.</p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <div class="step-icon"><i class="fas fa-map"></i></div>
                        <h4>Yol Haritası</h4>
                        <p>İlk 3 ayın içerik takvimi, görsel dili ve KPI hedeflerinin belirlenmesi.</p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <div class="step-icon"><i class="fas fa-rocket"></i></div>
                        <h4>Lansman</h4>
                        <p>Onaylanan stratejinin hayata geçirilmesi ve düzenli optimizasyon döngüsü.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Premium Design - 2 Column) -->
    <section class="faq-section-premium">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="faq-badge">SSS</span>
                <h2 class="display-5 fw-bold mt-3">Sıkça Sorulan Sorular</h2>
                <p class="text-muted lead">Facebook yönetimi hakkında merak edilenler</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Left Column (3 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="fbFaqLeft">
                        <!-- Question 1 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq1">
                                        <span class="faq-icon"><i class="fas fa-money-bill-wave"></i></span>
                                        Reklam yönetimi fiyata dahil mi?
                                    </button>
                                </h2>
                                <div id="fq1" class="accordion-collapse collapse" data-bs-parent="#fbFaqLeft">
                                    <div class="accordion-body">
                                        Hayır, bu sayfa sadece "Organik Hesap Yönetimi" hizmetlerini kapsar. Reklam yönetimi
                                        (Ads Manager) ayrı bir uzmanlık ve bütçe gerektirir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq2">
                                        <span class="faq-icon"><i class="fas fa-paint-brush"></i></span>
                                        Grafikleri kim hazırlıyor?
                                    </button>
                                </h2>
                                <div id="fq2" class="accordion-collapse collapse" data-bs-parent="#fbFaqLeft">
                                    <div class="accordion-body">
                                        Profesyonel grafik tasarım ekibimiz, markanızın kurumsal kimliğine uygun
                                        tüm görselleri hazırlar ve onayınıza sunar.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq3">
                                        <span class="faq-icon"><i class="fas fa-calendar-alt"></i></span>
                                        Sözleşme süresi ne kadar?
                                    </button>
                                </h2>
                                <div id="fq3" class="accordion-collapse collapse" data-bs-parent="#fbFaqLeft">
                                    <div class="accordion-body">
                                        Minimum 3 aylık periyotlarla çalışmayı öneriyoruz, çünkü organik büyüme zaman alan
                                        bir süreçtir.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column (3 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="fbFaqRight">
                        <!-- Question 4 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq4">
                                        <span class="faq-icon"><i class="fas fa-clock"></i></span>
                                        Haftada kaç paylaşım yapıyorsunuz?
                                    </button>
                                </h2>
                                <div id="fq4" class="accordion-collapse collapse" data-bs-parent="#fbFaqRight">
                                    <div class="accordion-body">
                                        Seçtiğiniz pakete göre haftada 3-7 arası paylaşım yapıyoruz. Ayrıca story paylaşımları
                                        ve özel gün içerikleri de dahildir.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 5 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq5">
                                        <span class="faq-icon"><i class="fas fa-chart-bar"></i></span>
                                        Raporlama nasıl yapılıyor?
                                    </button>
                                </h2>
                                <div id="fq5" class="accordion-collapse collapse" data-bs-parent="#fbFaqRight">
                                    <div class="accordion-body">
                                        Her ay sonunda detaylı performans raporu gönderiyoruz. Erişim, etkileşim, takipçi
                                        artışı ve en iyi performans gösteren içerikler raporlanır.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 6 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fq6">
                                        <span class="faq-icon"><i class="fas fa-key"></i></span>
                                        Hesap şifremi paylaşmam gerekiyor mu?
                                    </button>
                                </h2>
                                <div id="fq6" class="accordion-collapse collapse" data-bs-parent="#fbFaqRight">
                                    <div class="accordion-body">
                                        Hayır, Facebook Business Suite üzerinden yönetici yetkisi vererek güvenli bir şekilde
                                        çalışıyoruz. Şifrenizi bizimle paylaşmanıza gerek yok.
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
                        <h3 class="display-6 fw-bold text-white mb-3">Sosyal Medyanızı Şansa Bırakmayın</h3>
                        <p class="lead text-white-50 mb-0">
                            Profesyonel ellerde, ölçülebilir büyüme. Hemen bizimle iletişime geçin.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="contact" class="btn btn-gradient btn-xl shadow-lg">
                            Teklif İste <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>

</body>

</html>