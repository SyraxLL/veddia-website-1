<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Veddia Media Google Reklam (Ads) Hizmetleri - Bütçenizi harcayan değil, büyüten performans reklamları. Arama, Görüntülü, YouTube ve Alışveriş kampanyalarında uçtan uca yönetim.">
    <title>Google Ads Reklam Yönetimi - Veddia Media</title>
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

    <style>
        /* Google Ads Special Styling */
        .hero-google {
            background: linear-gradient(135deg, #f8faff 0%, #eef2ff 100%);
            padding: 140px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .hero-google::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(66, 133, 244, 0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-title span {
            background: linear-gradient(135deg, #4285F4 0%, #34A853 50%, #FBBC05 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Trust Signals Stripe */
        .trust-stripe {
            display: inline-flex;
            gap: 24px;
            margin-top: 32px;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(66, 133, 244, 0.1);
            border-radius: 50px;
            font-size: 0.85rem;
            color: #5f6368;
            font-weight: 500;
        }

        .trust-stripe i {
            color: #4285F4;
            margin-right: 6px;
        }

        /* Service Cards */
        .service-card-google {
            background: white;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-card-google:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(66, 133, 244, 0.08);
            border-color: rgba(66, 133, 244, 0.3);
        }

        .service-card-google h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #1e293b;
        }

        .service-card-google p {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 0;
            line-height: 1.6;
        }

        /* Problem / Solution Section */
        .prob-sol-section {
            background: white;
            padding: 80px 0;
        }

        .problem-list ul {
            list-style: none;
            padding: 0;
        }

        .problem-list li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 16px;
            color: #64748b;
            font-size: 1rem;
        }

        .problem-list li::before {
            content: '\f057';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #ef4444;
        }

        .solution-box {
            background: linear-gradient(135deg, #eff6ff 0%, #ffffff 100%);
            border-left: 4px solid #4285F4;
            border-radius: 0 16px 16px 0;
            padding: 30px;
        }

        /* Timeline / Stepper */
        .ads-timeline {
            position: relative;
            padding: 40px 0;
        }

        .ads-timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
        }

        .ads-step {
            position: relative;
            padding-left: 60px;
            margin-bottom: 40px;
        }

        .ads-step:last-child {
            margin-bottom: 0;
        }

        .step-marker {
            position: absolute;
            left: 0;
            top: 0;
            width: 42px;
            height: 42px;
            background: white;
            border: 2px solid #4285F4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #4285F4;
            z-index: 2;
        }

        .ads-step h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .ads-step p {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* Mockup Dashboard */
        .mockup-dashboard {
            background: white;
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            border: 1px solid #e2e8f0;
            overflow: hidden;
            position: relative;
        }

        .mockup-header {
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mock-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .bg-red {
            background: #ef4444;
        }

        .bg-yellow {
            background: #eab308;
        }

        .bg-green {
            background: #22c55e;
        }

        .mockup-body {
            padding: 24px;
        }

        .mock-stat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        .mock-stat {
            background: #f8faff;
            border-radius: 8px;
            padding: 12px;
        }

        .mock-val {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1e293b;
        }

        .mock-label {
            font-size: 0.75rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* CTA Final */
        .cta-final {
            background: #1e293b;
            border-radius: 20px;
            padding: 80px 40px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-final::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(66, 133, 244, 0.2), transparent 50%);
        }

        /* New Button Styles */
        /* Homepage Button Styles Replica */
        .btn-google-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            gap: 10px;
            font-size: 1rem;

            background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
            background-size: 200% auto;
            color: #ffffff;
            border: none;
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .btn-google-primary:hover {
            background-position: right center;
            box-shadow: 0 15px 35px rgba(99, 102, 241, 0.4);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-google-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            gap: 10px;
            font-size: 1rem;

            background: rgba(255, 255, 255, 0.9);
            border: none;
            color: #1e293b;
            position: relative;
            z-index: 1;
        }

        .btn-google-outline::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 2px;
            background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: -1;
        }

        .btn-google-outline:hover {
            background: linear-gradient(135deg, rgba(20, 184, 166, 0.1), rgba(99, 102, 241, 0.1));
            color: #1e293b;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.2);
        }

        /* Image Positioning & Premium Animation */
        .hero-image-wrapper {
            margin-left: auto;
            display: block;
            margin-right: -40px;
            position: relative;
        }

        .hero-image-wrapper img {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 2;
        }

        .hero-image-wrapper:hover img {
            transform: scale(1.03) translateY(-8px);
            box-shadow: 0 30px 60px rgba(66, 133, 244, 0.25), 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Decorative Elements */
        .hero-image-wrapper::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(66, 133, 244, 0.2), rgba(52, 168, 83, 0.2));
            border-radius: 20px;
            z-index: 1;
            transition: all 0.5s ease;
        }

        .hero-image-wrapper:hover::before {
            transform: translate(10px, 10px);
            background: linear-gradient(135deg, rgba(66, 133, 244, 0.3), rgba(251, 188, 5, 0.3));
        }

        .hero-image-wrapper::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FBBC05, #EA4335);
            border-radius: 50%;
            z-index: 0;
            opacity: 0.6;
            animation: floatBubble 4s ease-in-out infinite;
        }

        @keyframes floatBubble {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-15px) scale(1.1);
            }
        }

        /* Floating badge on hero image */
        .hero-badge-float {
            position: absolute;
            top: 20px;
            left: -40px;
            background: white;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            font-size: 0.9rem;
            animation: floatBadge 3s ease-in-out infinite;
        }

        .hero-badge-float i {
            color: #34A853;
            font-size: 1.2rem;
        }

        @keyframes floatBadge {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .hero-badge-float-bottom {
            position: absolute;
            bottom: 40px;
            right: -30px;
            background: linear-gradient(135deg, #4285F4, #34A853);
            color: white;
            padding: 10px 18px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(66, 133, 244, 0.3);
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            animation: floatBadge 3.5s ease-in-out infinite 0.5s;
        }

        /* Problem/Solution Section Premium Styles */
        .prob-sol-section {
            padding: 100px 0;
            background: #fcfefe;
        }

        .problem-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .problem-list li {
            position: relative;
            padding-left: 40px;
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #64748b;
            display: flex;
            align-items: center;
        }

        .problem-list li::before {
            content: '\f00d';
            /* Fa-times */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 28px;
            height: 28px;
            background: #fee2e2;
            color: #ef4444;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .solution-box {
            background: white;
            padding: 50px;
            border-radius: 20px;
            border-left: 5px solid #3b82f6;
            /* Accent color */
            box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.15);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .solution-box:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>

    <?php
    $pageTitle = 'Google Ads Reklam Yönetimi';
    include 'includes/header.php';
    ?>

    <!-- Hero Section -->
    <section class="hero-google">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4 hero-title">Google Ads ile <br><span>Satışa Dönüşen</span>
                        Reklamlar</h1>
                    <p class="lead text-secondary mb-4">
                        Bütçenizi harcayan değil, büyüten performans reklamları. Arama, Görüntülü ve Alışveriş
                        kampanyalarında uçtan uca yönetim.
                    </p>

                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <a href="contact.php" class="btn-google-primary">
                            Hemen Teklif Alın <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="trust-stripe">
                        <div class="d-flex align-items-center"><i class="fas fa-chart-line"></i> ROAS odaklı strateji
                        </div>
                        <div class="d-flex align-items-center"><i class="fas fa-file-alt"></i> Şeffaf raporlama</div>
                        <div class="d-flex align-items-center"><i class="fas fa-bullseye"></i> Ölçülebilir büyüme</div>
                    </div>
                </div>

                <div class="col-lg-6 text-end" data-aos="fade-left">
                    <div class="hero-image-wrapper">
                        <!-- Floating Badges -->
                        <div class="hero-badge-float">
                            <i class="fas fa-check-circle"></i>
                            <span>Google Partner</span>
                        </div>
                        <div class="hero-badge-float-bottom">
                            <i class="fas fa-chart-line"></i>
                            <span>+250% ROAS</span>
                        </div>
                        <img src="assets/img/google-ads-hero.jpg" alt="Google Ads Dashboard"
                            class="img-fluid rounded-4 shadow-lg" style="border: 8px solid white;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem -> Solution Section -->
    <section class="prob-sol-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <h3 class="fw-bold mb-4 text-dark display-6">Yaşadığınız Sorunlar Bunlar mı?</h3>
                    <div class="problem-list">
                        <ul>
                            <li>Reklam bütçesi var, sonuç yok</li>
                            <li>Yanlış anahtar kelimelere bütçe gidiyor</li>
                            <li>Dönüşümler net ölçülemiyor</li>
                            <li>Ajans raporları karmaşık ve anlaşılmaz</li>
                            <li>Tıklama alıyor ama satış olmuyor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="solution-box">
                        <h3 class="text-primary fw-bold mb-4 display-6">Çözüm Yaklaşımımız</h3>
                        <p class="mb-4 lead text-dark" style="font-weight: 500;">
                            Biz Google Ads’i sadece “tıklama” almak için değil, satış ve lead
                            (form/çağrı) kazanmak için yönetiyoruz.
                        </p>
                        <p class="text-secondary m-0" style="line-height: 1.8;">
                            Her kampanya; bulunduğunuz sektörün dinamiklerine, hedef
                            kitlenizin arama alışkanlıklarına ve hedeflediğiniz dönüşüm başına maliyet (CPA) analizine
                            göre özel olarak kurgulanır. Veriye dayalı optimizasyon ile bütçenizin her kuruşunun geri
                            dönüşünü hesaplıyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Scope (Cards) -->
    <section class="py-5 bg-light" id="services">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold">Hizmet Kapsamımız</h2>
                <p class="text-secondary">İhtiyacınıza uygun 360° Google Ads çözümleri</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-google">
                        <div class="mb-3 text-primary fs-3"><i class="fas fa-search"></i></div>
                        <h3>Arama Ağı Reklamları</h3>
                        <p>Satın almaya en yakın kullanıcıları hedefleyin. Doğru anahtar kelimelerle, arama anında
                            müşterinin karşısına çıkın.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-google">
                        <div class="mb-3 text-danger fs-3"><i class="fas fa-image"></i></div>
                        <h3>Görüntülü Reklamlar</h3>
                        <p>Marka bilinirliği oluşturun. Milyonlarca web sitesinde görsel bannerlarınızla hedef
                            kitlenizin aklında kalın.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-google">
                        <div class="mb-3 text-warning fs-3"><i class="fas fa-shopping-bag"></i></div>
                        <h3>Alışveriş Reklamları</h3>
                        <p>E-ticaret siteleri için doğrudan satış odaklıdır. Ürün fotoğrafı ve fiyatıyla arama
                            sonuçlarında vitrin açın.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card-google">
                        <div class="mb-3 text-success fs-3"><i class="fas fa-sync-alt"></i></div>
                        <h3>Yeniden Pazarlama</h3>
                        <p>Sepeti terk eden veya sitenizi ziyaret edip işlem yapmayan kullanıcıları geri kazanarak
                            dönüşüm oranını artırın.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card-google">
                        <div class="mb-3 text-info fs-3"><i class="fas fa-chart-bar"></i></div>
                        <h3>Dönüşüm ve GA4 Kurulumu</h3>
                        <p>Hangi reklamın satış getirdiğini bilin. Google Analytics 4 ve Google Ads dönüşüm takibiyle
                            ölçülebilir sonuçlar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us & Process Split -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-start g-5">

                <!-- Left: Process Timeline -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="fw-bold mb-4">Süreç Nasıl İşliyor?</h3>
                    <div class="ads-timeline">
                        <div class="ads-step">
                            <div class="step-marker">1</div>
                            <h4>Ücretsiz Hesap ve Rakip Analizi</h4>
                            <p>Mevcut durumunuzu inceliyor, rakiplerinizin stratejilerini analiz ediyoruz.</p>
                        </div>
                        <div class="ads-step">
                            <div class="step-marker">2</div>
                            <h4>Anahtar Kelime & Hedef Kitle Planlaması</h4>
                            <p>En karlı ve alakalı anahtar kelimeleri belirliyor, negatif kelime listelerini
                                oluşturuyoruz.</p>
                        </div>
                        <div class="ads-step">
                            <div class="step-marker">3</div>
                            <h4>Kampanya Kurulumu ve Test</h4>
                            <p>Reklam metinleri, uzantılar ve görsel tasarımlarla kampanyaları yayına alıyoruz.</p>
                        </div>
                        <div class="ads-step">
                            <div class="step-marker">4</div>
                            <h4>Haftalık Optimizasyon</h4>
                            <p>Tıklama oranlarını (CTR) artırmak ve maliyetleri düşürmek için sürekli iyileştirme
                                yapıyoruz.</p>
                        </div>
                        <div class="ads-step">
                            <div class="step-marker">5</div>
                            <h4>Aylık Şeffaf Raporlama</h4>
                            <p>Ne kadar harcandı, ne kadar kazanıldı? Anlaşılır raporlarla sizi bilgilendiriyoruz.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Why Us & Dashboard Mockup -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ps-lg-4">
                        <h3 class="fw-bold mb-4">Neden Biz?</h3>
                        <ul class="list-unstyled mb-5">
                            <li class="mb-3 d-flex align-items-center"><i
                                    class="fas fa-check-circle text-primary me-3"></i> Bütçe boşa harcanmaz, verimlilik
                                esastır</li>
                            <li class="mb-3 d-flex align-items-center"><i
                                    class="fas fa-check-circle text-primary me-3"></i> MCC seviyesinde profesyonel
                                yönetim</li>
                            <li class="mb-3 d-flex align-items-center"><i
                                    class="fas fa-check-circle text-primary me-3"></i> Sektöre özel denenmiş kampanya
                                şablonları</li>
                            <li class="mb-3 d-flex align-items-center"><i
                                    class="fas fa-check-circle text-primary me-3"></i> Gerçek ROAS (Yatırım Getirisi) ve
                                CPA takibi</li>
                            <li class="mb-3 d-flex align-items-center"><i
                                    class="fas fa-check-circle text-primary me-3"></i> Ajans + Yazılım bakış açısıyla
                                teknik destek</li>
                        </ul>

                        <!-- Mockup Dashboard Visual -->
                        <div class="mockup-dashboard">
                            <div class="mockup-header">
                                <div class="mock-dot bg-red"></div>
                                <div class="mock-dot bg-yellow"></div>
                                <div class="mock-dot bg-green"></div>
                            </div>
                            <div class="mockup-body">
                                <h5 class="fw-bold text-secondary mb-3">Aylık Performans Özeti</h5>
                                <div class="mock-stat-grid">
                                    <div class="mock-stat">
                                        <div class="mock-val text-primary">%450</div>
                                        <div class="mock-label">ROAS (Getiri)</div>
                                    </div>
                                    <div class="mock-stat">
                                        <div class="mock-val text-success">₺12.40</div>
                                        <div class="mock-label">CPA (Dönüşüm Maliyeti)</div>
                                    </div>
                                    <div class="mock-stat">
                                        <div class="mock-val text-dark">148</div>
                                        <div class="mock-label">Form & Satış</div>
                                    </div>
                                    <div class="mock-stat">
                                        <div class="mock-val text-warning">%12.5</div>
                                        <div class="mock-label">Dönüşüm Oranı</div>
                                    </div>
                                </div>
                                <div class="progress mb-2" style="height: 6px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                                </div>
                                <small class="text-muted">Hedeflenen Ciro Başarımı</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section (Premium Design) -->
    <section class="faq-section-premium">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="faq-badge">SSS</span>
                <h2 class="display-5 fw-bold mt-3">Sık Sorulan Sorular</h2>
                <p class="text-muted lead">Google Ads hakkında merak ettikleriniz</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Left Column (4 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="adsFaqLeft">
                        <!-- Question 1 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q1">
                                        <span class="faq-icon"><i class="fas fa-coins"></i></span>
                                        Google Ads bütçesi ne kadar olmalı?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#adsFaqLeft">
                                    <div class="accordion-body">
                                        Bütçe tamamen sizin hedeflerinize ve sektör rekabetine bağlıdır. Sabit bir alt
                                        sınır yoktur. Küçük bütçelerle testlere başlayıp, verim aldıkça bütçeyi artırma
                                        stratejisini uyguluyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="50">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q2">
                                        <span class="faq-icon"><i class="fas fa-clock"></i></span>
                                        Ne kadar sürede sonuç alırım?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#adsFaqLeft">
                                    <div class="accordion-body">
                                        Google Ads, SEO'nun aksine anında trafik sağlar. Kampanya yayına girdiği an
                                        gösterim başlar. Ancak kampanyanın "öğrenme süreci" ve tam optimizasyonu
                                        genellikle ilk 2-4 hafta içinde oturur.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 3 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q3">
                                        <span class="faq-icon"><i class="fas fa-user-shield"></i></span>
                                        Hesap bana mı ait oluyor?
                                    </button>
                                </h2>
                                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#adsFaqLeft">
                                    <div class="accordion-body">
                                        Evet, %100 şeffaflık ilkesiyle çalışıyoruz. Reklam hesabı sizin adınıza açılır
                                        veya mevcut hesabınız kullanılır. Tüm verileri ve harcamaları kendi panelinizden
                                        şeffafça görebilirsiniz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 4 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q4">
                                        <span class="faq-icon"><i class="fas fa-file-contract"></i></span>
                                        Aylık sözleşme veya taahhüt var mı?
                                    </button>
                                </h2>
                                <div id="q4" class="accordion-collapse collapse" data-bs-parent="#adsFaqLeft">
                                    <div class="accordion-body">
                                        Hayır, uzun vadeli bağlayıcı sözleşmelerle değil, her ay memnuniyetinizle
                                        çalışmayı hedefleriz. İstediğiniz zaman hizmeti durdurabilir veya ara
                                        verebilirsiniz.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column (4 Questions) -->
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="adsFaqRight">
                        <!-- Question 5 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q5">
                                        <span class="faq-icon"><i class="fas fa-chart-pie"></i></span>
                                        Raporlama nasıl yapılıyor?
                                    </button>
                                </h2>
                                <div id="q5" class="accordion-collapse collapse" data-bs-parent="#adsFaqRight">
                                    <div class="accordion-body">
                                        Her ay detaylı bir performans raporu sunuyoruz. Tıklama, gösterim, dönüşüm,
                                        maliyet ve ROAS gibi tüm metrikleri anlaşılır grafiklerle paylaşıyoruz. Ayrıca
                                        canlı dashboard erişimi de sağlıyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 6 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q6">
                                        <span class="faq-icon"><i class="fas fa-bullseye"></i></span>
                                        Hangi sektörlere hizmet veriyorsunuz?
                                    </button>
                                </h2>
                                <div id="q6" class="accordion-collapse collapse" data-bs-parent="#adsFaqRight">
                                    <div class="accordion-body">
                                        E-ticaret, hizmet sektörü, SaaS, eğitim, sağlık, gayrimenkul ve daha birçok
                                        alanda deneyimimiz var. Her sektöre özel strateji geliştiriyor, rakip analizi
                                        yapıyor ve sektörel dinamiklere göre kampanya kurgusu oluşturuyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 7 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q7">
                                        <span class="faq-icon"><i class="fas fa-tools"></i></span>
                                        Mevcut kampanyalarımı optimize edebilir misiniz?
                                    </button>
                                </h2>
                                <div id="q7" class="accordion-collapse collapse" data-bs-parent="#adsFaqRight">
                                    <div class="accordion-body">
                                        Elbette! Öncelikle mevcut hesabınızı ücretsiz analiz ediyoruz. Harcanan bütçe,
                                        anahtar kelime performansı, reklam metinleri ve açılış sayfalarını inceliyoruz.
                                        Ardından iyileştirme önerileri sunuyor, onayınızla optimizasyona başlıyoruz.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Question 8 -->
                        <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q8">
                                        <span class="faq-icon"><i class="fas fa-headset"></i></span>
                                        Destek ve iletişim nasıl sağlanıyor?
                                    </button>
                                </h2>
                                <div id="q8" class="accordion-collapse collapse" data-bs-parent="#adsFaqRight">
                                    <div class="accordion-body">
                                        Size özel bir hesap yöneticisi atanır. WhatsApp, e-posta veya telefon üzerinden
                                        hafta içi her gün ulaşabilirsiniz. Acil durumlarda aynı gün içinde geri dönüş
                                        yapıyoruz. Aylık görüşmelerle de kampanya stratejisini birlikte
                                        değerlendiriyoruz.
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
    <section class="py-5 bg-white">
        <div class="container mb-5">
            <div class="cta-modern p-5 rounded-5 position-relative overflow-hidden" data-aos="zoom-in">
                <div class="cta-glow-bg"></div>
                <div class="row align-items-center position-relative z-2">
                    <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                        <h3 class="display-6 fw-bold text-white mb-3">Reklam Bütçenizi Kontrole Alın</h3>
                        <p class="lead text-white-50 mb-0">
                            Google Ads'i denediniz ama sonuç alamadıysanız, sorun bütçe değil stratejidir. Hemen bizimle
                            iletişime geçin.
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>

</html>