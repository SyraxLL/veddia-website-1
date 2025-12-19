<?php include 'includes/header.php'; ?>

<!-- Creative Hero Section with Animated Shapes -->
<section class="creative-hero-about">
    <div class="animated-bg">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
    </div>

    <div class="container position-relative z-3" style="padding: 150px 0 100px;">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-badge mb-3">
                    <i class="fas fa-award me-2"></i>
                    Dijital Dönüşümde Lider
                </div>
                <h1 class="hero-title-large mb-4 text-white">
                    <span class="typing-text">HAKKIMIZDA</span>
                </h1>
                <p class="lead text-white mb-4">
                    Dijital dünyada fark yaratan, yaratıcı ve etkili çözümler sunuyoruz
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <div class="stat-box">
                        <h3 class="text-white mb-0">50+</h3>
                        <p class="text-white-50 mb-0 small">Mutlu Müşteri</p>
                    </div>
                    <div class="stat-box">
                        <h3 class="text-white mb-0">100+</h3>
                        <p class="text-white-50 mb-0 small">Başarılı Proje</p>
                    </div>
                    <div class="stat-box">
                        <h3 class="text-white mb-0">5+</h3>
                        <p class="text-white-50 mb-0 small">Yıl Deneyim</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="floating-card">
                    <div class="card-glow"></div>
                    <i class="fas fa-rocket fa-5x text-white mb-3"></i>
                    <h4 class="text-white">Yenilikçi Çözümler</h4>
                    <p class="text-white-50">En son teknolojilerle geleceği şekillendiriyoruz</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .creative-hero-about {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .animated-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .shape {
        position: absolute;
        opacity: 0.1;
        animation: float 20s infinite ease-in-out;
    }

    .shape-1 {
        width: 300px;
        height: 300px;
        background: linear-gradient(45deg, #fff, transparent);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        animation-delay: 0s;
    }

    .shape-2 {
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, #fff, transparent);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        top: 50%;
        right: -50px;
        animation-delay: 2s;
    }

    .shape-3 {
        width: 150px;
        height: 150px;
        background: linear-gradient(225deg, #fff, transparent);
        transform: rotate(45deg);
        bottom: 10%;
        left: 20%;
        animation-delay: 4s;
    }

    .shape-4 {
        width: 250px;
        height: 250px;
        background: linear-gradient(315deg, #fff, transparent);
        border-radius: 50%;
        top: 30%;
        right: 30%;
        animation-delay: 1s;
    }

    .shape-5 {
        width: 180px;
        height: 180px;
        background: linear-gradient(180deg, #fff, transparent);
        border-radius: 30%;
        bottom: -50px;
        right: 20%;
        animation-delay: 3s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        25% {
            transform: translateY(-30px) rotate(5deg);
        }

        50% {
            transform: translateY(-60px) rotate(-5deg);
        }

        75% {
            transform: translateY(-30px) rotate(3deg);
        }
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 50px;
        color: white;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .typing-text {
        display: inline-block;
        background: linear-gradient(90deg, #fff, #f0f0f0, #fff);
        background-size: 200% auto;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shimmer 3s linear infinite;
    }

    @keyframes shimmer {
        to {
            background-position: 200% center;
        }
    }

    .stat-box {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 15px 20px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .floating-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        padding: 40px;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        text-align: center;
        position: relative;
        animation: floatCard 6s ease-in-out infinite;
    }

    .card-glow {
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        animation: rotate 10s linear infinite;
        pointer-events: none;
    }

    @keyframes floatCard {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* CTA Modern Styles */
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
        background:
            radial-gradient(circle at 0% 0%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
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
                    <!-- Decorative Background -->
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

                    <!-- Decorative Icon -->
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
                    <p>
                        Deneyimli ve tutkulu bir ekip olarak, her projeye benzersiz bir yaklaşım getiriyoruz.
                        Müşterilerimizin ihtiyaçlarını anlamak ve onların hedeflerine ulaşmalarını sağlamak için
                        özelleştirilmiş stratejiler geliştiriyoruz.
                    </p>
                    <p class="mb-0">
                        Arama motoru optimizasyonundan (SEO) sosyal medya yönetimine, içerik pazarlamasından reklam
                        kampanyalarına kadar geniş bir yelpazede hizmetler sunuyoruz.
                    </p>
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
                    <p class="text-muted mb-0">
                        Müşterilerimizin başarısı bizim başarımızdır. Bu nedenle, iş ortaklarımızın başarılarını
                        desteklemek için ellerinden gelenin en iyisini yapıyoruz. İşbirliği ve iletişimde yüksek
                        standartlarımız sayesinde, müşterilerimizle güçlü ve uzun vadeli ilişkiler kuruyoruz.
                    </p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card p-4 rounded-4 bg-white shadow-sm border h-100">
                    <div class="icon-wrapper mb-3 text-primary">
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    <h4 class="h5 fw-bold">Sürekli Gelişim</h4>
                    <p class="text-muted mb-0">
                        Sektördeki gelişmeleri yakından takip ediyor ve sürekli olarak stratejilerimizi güncelliyoruz.
                        Dijital pazarlama dünyasında ön planda kalmak ve müşterilerimize en son trendleri ve en iyi
                        uygulamaları sunmak için çaba gösteriyoruz.
                    </p>
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
                            <p class="lead text-white-50 mb-0">
                                Dijitalleşmeye Veddia Media ile başlayarak, markanızı güçlendirmek ve dijital dünyada
                                fark yaratmak için doğru adımı atmış olacaksınız. Sizi, işletmenizin dijital
                                potansiyelini gerçekleştirmek için bizimle birlikte çalışmaya davet ediyoruz.
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
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>