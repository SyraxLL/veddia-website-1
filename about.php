<?php include 'includes/header.php'; ?>

<!-- Decorated Hero Section -->
<section class="about-hero-simple">
    <!-- Decorative Elements -->
    <div class="gradient-orb orb-1"></div>
    <div class="gradient-orb orb-2"></div>
    <div class="gradient-orb orb-3"></div>
    <div class="decoration deco-1"></div>
    <div class="decoration deco-2"></div>
    <div class="decoration deco-3"></div>
    <div class="shine-line"></div>

    <!-- Floating Stars -->
    <div class="floating-stars">
        <i class="fas fa-star star star-1"></i>
        <i class="fas fa-star star star-2"></i>
        <i class="fas fa-star star star-3"></i>
        <i class="fas fa-sparkles star star-4"></i>
    </div>

    <!-- Wave Lines -->
    <div class="wave-lines">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,60 C300,120 600,0 900,60 C1050,90 1150,60 1200,60" fill="none" stroke="rgba(255,255,255,0.1)"
                stroke-width="2" />
            <path d="M0,80 C300,140 600,20 900,80 C1050,110 1150,80 1200,80" fill="none" stroke="rgba(255,255,255,0.08)"
                stroke-width="2" />
        </svg>
    </div>

    <div class="container">
        <div class="hero-content text-center">
            <span class="hero-badge" data-aos="fade-up">
                <i class="fas fa-gem me-2"></i>Dijital Dönüşümde Öncü
            </span>
            <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                <span class="gradient-text">Hakkımızda</span>
            </h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                Dijital dünyada fark yaratan, yaratıcı ve etkili çözümler sunuyoruz
            </p>

            <!-- Decorative Divider -->
            <div class="hero-divider" data-aos="fade-up" data-aos-delay="250">
                <span class="divider-line"></span>
                <i class="fas fa-diamond divider-icon"></i>
                <span class="divider-line"></span>
            </div>

            <div class="stats-row" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <span class="stat-num">50+</span>
                    <span class="stat-text">Mutlu Müşteri</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num">100+</span>
                    <span class="stat-text">Başarılı Proje</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num">5+</span>
                    <span class="stat-text">Yıl Deneyim</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .about-hero-simple {
        position: relative;
        padding: 120px 0 60px;
        overflow: hidden;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    }

    .gradient-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.4;
    }

    .orb-1 {
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.3);
        top: -100px;
        right: -100px;
    }

    .orb-2 {
        width: 300px;
        height: 300px;
        background: rgba(102, 126, 234, 0.5);
        bottom: -100px;
        left: -100px;
    }

    .orb-3 {
        width: 250px;
        height: 250px;
        background: rgba(240, 147, 251, 0.4);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Decorative Elements */
    .decoration {
        position: absolute;
        border: 2px solid rgba(255, 255, 255, 0.15);
        border-radius: 50%;
    }

    .deco-1 {
        width: 200px;
        height: 200px;
        top: 20%;
        left: 5%;
        animation: pulse-border 4s ease-in-out infinite;
    }

    .deco-2 {
        width: 120px;
        height: 120px;
        bottom: 15%;
        right: 8%;
        animation: pulse-border 4s ease-in-out infinite 1s;
    }

    .deco-3 {
        width: 80px;
        height: 80px;
        top: 30%;
        right: 15%;
        animation: pulse-border 4s ease-in-out infinite 2s;
        border-style: dashed;
    }

    @keyframes pulse-border {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.3;
        }

        50% {
            transform: scale(1.1);
            opacity: 0.6;
        }
    }

    /* Floating Stars */
    .floating-stars {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .star {
        position: absolute;
        color: rgba(255, 255, 255, 0.6);
        animation: twinkle 3s ease-in-out infinite;
    }

    .star-1 {
        top: 15%;
        left: 10%;
        font-size: 0.8rem;
        animation-delay: 0s;
    }

    .star-2 {
        top: 25%;
        right: 12%;
        font-size: 1rem;
        animation-delay: 0.5s;
    }

    .star-3 {
        bottom: 30%;
        left: 15%;
        font-size: 0.7rem;
        animation-delay: 1s;
    }

    .star-4 {
        bottom: 20%;
        right: 20%;
        font-size: 1.2rem;
        animation-delay: 1.5s;
    }

    @keyframes twinkle {

        0%,
        100% {
            opacity: 0.4;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.3);
        }
    }

    /* Wave Lines */
    .wave-lines {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 120px;
        opacity: 0.5;
    }

    .wave-lines svg {
        width: 100%;
        height: 100%;
    }

    /* Hero Divider */
    .hero-divider {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin-bottom: 25px;
    }

    .divider-line {
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
    }

    .divider-icon {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.2rem;
        animation: float-icon 3s ease-in-out infinite;
    }

    @keyframes float-icon {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .shine-line {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
        animation: shine-move 4s ease-in-out infinite;
    }

    @keyframes shine-move {
        0% {
            left: -100%;
        }

        50% {
            left: 100%;
        }

        100% {
            left: 100%;
        }
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 10px 24px;
        border-radius: 50px;
        color: white;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .hero-title {
        font-size: clamp(2.5rem, 6vw, 3.5rem);
        font-weight: 800;
        margin-bottom: 16px;
    }

    .about-hero-simple .gradient-text {
        background: linear-gradient(135deg, #fff 0%, rgba(255, 255, 255, 0.9) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 500px;
        margin: 0 auto 25px;
        line-height: 1.7;
    }

    /* Hero Gradient Button */
    .btn-hero-gradient {
        display: inline-flex;
        align-items: center;
        padding: 14px 32px;
        background: linear-gradient(135deg, #ff6b6b, #ee5a24, #f39c12);
        background-size: 200% 200%;
        color: white;
        font-weight: 600;
        font-size: 1rem;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 8px 25px rgba(238, 90, 36, 0.4);
        transition: all 0.3s ease;
        animation: gradient-shift 3s ease infinite;
    }

    .btn-hero-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(238, 90, 36, 0.5);
        color: white;
    }

    @keyframes gradient-shift {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .stats-row {
        display: inline-flex;
        align-items: center;
        gap: 25px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        padding: 20px 35px;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .stat-item {
        text-align: center;
    }

    .stat-num {
        display: block;
        font-size: 1.8rem;
        font-weight: 800;
        color: white;
        line-height: 1;
    }

    .stat-text {
        display: block;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 5px;
    }

    .stat-divider {
        width: 1px;
        height: 35px;
        background: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 768px) {
        .about-hero-simple {
            padding: 100px 0 50px;
        }

        .stats-row {
            flex-direction: column;
            gap: 15px;
            padding: 20px 25px;
        }

        .stat-divider {
            width: 50px;
            height: 1px;
        }

        .decoration {
            display: none;
        }
    }

    /* CTA Styles */
    .cta-modern {
        background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .cta-glow-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 0% 0%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 100% 100%, rgba(236, 72, 153, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }
</style>

<!-- About Content -->
<section class="py-5">
    <div class="container">
        <!-- Intro Block -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 mb-3"
                    data-aos="fade-up">2020'den beri</span>
                <h2 class="section-title gradient-text-main mb-4" data-aos="fade-up">Biz Kimiz, Neler Yapıyoruz?</h2>
                <div class="divider mx-auto mb-4" data-aos="fade-up" data-aos-delay="50"
                    style="width: 60px; height: 3px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 10px;">
                </div>

                <div class="about-text-box p-4 p-md-5 rounded-4 bg-white shadow-sm border position-relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10"
                        style="background: radial-gradient(circle at top right, rgba(102, 126, 234, 0.1), transparent 70%); pointer-events: none;">
                    </div>
                    <p class="lead mb-4 position-relative z-2">
                        Veddia Media olarak, dijital pazarlama dünyasında adınızı duyurmanın ve işletmenizi büyütmenin
                        en etkili yolu olan dijital pazarlama stratejilerini benimseyen bir ekibiz.
                    </p>
                    <p class="text-muted mb-0 position-relative z-2">
                        Müşterilerimizin hedeflerini gerçekleştirmek ve markalarını dijital alanda güçlendirmek için
                        yenilikçi çözümler sunuyoruz. Biz, dijital dünyadaki potansiyeli en iyi şekilde kullanmanıza
                        yardımcı olmak için buradayız.
                    </p>
                    <i
                        class="fas fa-quote-right position-absolute bottom-0 end-0 mb-n2 me-3 text-primary opacity-10 fa-4x"></i>
                </div>
            </div>
        </div>

        <!-- Services/Team Block -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-content-card p-4 rounded-4 bg-light h-100 border">
                    <h3 class="h4 mb-3 gradient-text-main">Deneyimli ve Tutkulu Bir Ekip</h3>
                    <p>Deneyimli ve tutkulu bir ekip olarak, her projeye benzersiz bir yaklaşım getiriyoruz.
                        Müşterilerimizin ihtiyaçlarını anlamak ve onların hedeflerine ulaşmalarını sağlamak için
                        özelleştirilmiş stratejiler geliştiriyoruz.</p>
                    <p class="mb-0">Arama motoru optimizasyonundan (SEO) sosyal medya yönetimine, içerik pazarlamasından
                        reklam kampanyalarına kadar geniş bir yelpazede hizmetler sunuyoruz.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-6">
                        <div
                            class="stat-card text-center p-4 rounded-4 bg-white shadow-sm border h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-users fa-2x text-primary mb-3"></i>
                            <h4 class="h2 fw-bold gradient-text-main">50+</h4>
                            <p class="mb-0 text-muted">Mutlu Müşteri</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div
                            class="stat-card text-center p-4 rounded-4 bg-white shadow-sm border h-100 d-flex flex-column justify-content-center">
                            <i class="fas fa-check-circle fa-2x text-primary mb-3"></i>
                            <h4 class="h2 fw-bold gradient-text-main">100+</h4>
                            <p class="mb-0 text-muted">Başarılı Proje</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Block -->
        <div class="row g-4 mb-5">
            <div class="col-md-6" data-aos="fade-up">
                <div class="value-card p-4 rounded-4 bg-white shadow-sm border h-100">
                    <div class="icon-wrapper mb-3 text-primary">
                        <i class="fas fa-handshake fa-2x"></i>
                    </div>
                    <h4 class="h5 fw-bold">Müşterilerimizin Başarısı</h4>
                    <p class="text-muted mb-0">Müşterilerimizin başarısı bizim başarımızdır. Bu nedenle, iş
                        ortaklarımızın başarılarını desteklemek için ellerinden gelenin en iyisini yapıyoruz. İşbirliği
                        ve iletişimde yüksek standartlarımız sayesinde, müşterilerimizle güçlü ve uzun vadeli ilişkiler
                        kuruyoruz.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card p-4 rounded-4 bg-white shadow-sm border h-100">
                    <div class="icon-wrapper mb-3 text-primary">
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    <h4 class="h5 fw-bold">Sürekli Gelişim</h4>
                    <p class="text-muted mb-0">Sektördeki gelişmeleri yakından takip ediyor ve sürekli olarak
                        stratejilerimizi güncelliyoruz. Dijital pazarlama dünyasında ön planda kalmak ve müşterilerimize
                        en son trendleri ve en iyi uygulamaları sunmak için çaba gösteriyoruz.</p>
                </div>
            </div>
        </div>

        <!-- CTA Block -->
        <div class="row justify-content-center">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="cta-modern p-5 rounded-5 position-relative overflow-hidden">
                    <div class="cta-glow-bg"></div>
                    <div class="row align-items-center position-relative z-2">
                        <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                            <h3 class="display-6 fw-bold text-white mb-3">Dijital Dünyada Fark Yaratın</h3>
                            <p class="lead text-white-50 mb-0">Dijitalleşmeye Veddia Media ile başlayarak, markanızı
                                güçlendirmek ve dijital dünyada fark yaratmak için doğru adımı atmış olacaksınız.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center">
                            <a href="contact.php" class="btn btn-gradient btn-xl shadow-lg">
                                Hemen Başlayın <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>