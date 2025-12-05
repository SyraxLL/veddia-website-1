<?php include 'includes/header.php'; ?>

<!-- Creative Team Hero with Wave Animation -->
<section class="creative-hero-team">
    <div class="wave-container">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>

    <div class="team-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container position-relative z-3" style="padding: 150px 0 120px;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="team-hero-icon mb-4">
                    <i class="fas fa-users-gear"></i>
                </div>
                <h1 class="hero-title-large mb-4 text-white">
                    <span class="gradient-text-animated">EKİBİMİZ</span>
                </h1>
                <p class="lead text-white mb-4">
                    Tutkulu, yaratıcı ve deneyimli profesyonellerimizle tanışın
                </p>
                <div class="team-count-badge">
                    <span class="count-number">15+</span>
                    <span class="count-label">Profesyonel</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .creative-hero-team {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        z-index: 1;
    }

    .wave-container {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 15vh;
        overflow: hidden;
        line-height: 0;
    }

    .waves {
        position: relative;
        width: 100%;
        height: 15vh;
        margin-bottom: -7px;
        min-height: 100px;
        max-height: 150px;
    }

    .parallax>use {
        animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
    }

    .parallax>use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }

    .parallax>use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }

    .parallax>use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .parallax>use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }

    @keyframes move-forever {
        0% {
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            transform: translate3d(85px, 0, 0);
        }
    }

    .team-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .particle {
        position: absolute;
        display: block;
        pointer-events: none;
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        animation: rise 10s infinite ease-in;
    }

    .particle:nth-child(1) {
        left: 10%;
        animation-duration: 8s;
        animation-delay: 0s;
    }

    .particle:nth-child(2) {
        left: 20%;
        animation-duration: 12s;
        animation-delay: 1s;
        width: 8px;
        height: 8px;
    }

    .particle:nth-child(3) {
        left: 35%;
        animation-duration: 10s;
        animation-delay: 2s;
    }

    .particle:nth-child(4) {
        left: 50%;
        animation-duration: 14s;
        animation-delay: 0.5s;
        width: 12px;
        height: 12px;
    }

    .particle:nth-child(5) {
        left: 65%;
        animation-duration: 11s;
        animation-delay: 1.5s;
    }

    .particle:nth-child(6) {
        left: 75%;
        animation-duration: 9s;
        animation-delay: 3s;
        width: 6px;
        height: 6px;
    }

    .particle:nth-child(7) {
        left: 85%;
        animation-duration: 13s;
        animation-delay: 2.5s;
    }

    .particle:nth-child(8) {
        left: 95%;
        animation-duration: 10s;
        animation-delay: 4s;
        width: 8px;
        height: 8px;
    }

    @keyframes rise {
        0% {
            bottom: -10%;
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            bottom: 110%;
            opacity: 0;
        }
    }

    .team-hero-icon {
        font-size: 5rem;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        width: 140px;
        height: 140px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        border: 3px solid rgba(255, 255, 255, 0.3);
        animation: pulse 3s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
        }

        50% {
            transform: scale(1.05);
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
        }
    }

    .gradient-text-animated {
        background: linear-gradient(-45deg, #fff, #f0f0f0, #fff, #e0e0e0);
        background-size: 400% 400%;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradientShift 3s ease infinite;
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .team-count-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(15px);
        padding: 20px 40px;
        border-radius: 50px;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .count-number {
        display: block;
        font-size: 2.5rem;
        font-weight: 800;
        color: white;
        line-height: 1;
    }

    .count-label {
        display: block;
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 5px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
</style>

<!-- Team Section -->
<section class="py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title gradient-text-main" data-aos="fade-up">Tüm Ekibimiz</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Her biri alanında uzman, yaratıcı ve müşteri odaklı profesyonellerimiz
            </p>
        </div>

        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Ahmet Yılmaz</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        Genel Müdür
                    </p>
                    <p class="small text-muted mb-3">
                        Dijital pazarlama ve strateji uzmanı. 10+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Ayşe Demir</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        Kreatif Direktör
                    </p>
                    <p class="small text-muted mb-3">
                        Grafik tasarım ve marka yönetimi uzmanı. 8+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Mehmet Kaya</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        Yazılım Geliştirme Müdürü
                    </p>
                    <p class="small text-muted mb-3">
                        Full-stack geliştirici ve sistem mimarı. 12+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Zeynep Öztürk</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        Sosyal Medya Uzmanı
                    </p>
                    <p class="small text-muted mb-3">
                        Sosyal medya stratejisi ve içerik üretimi. 6+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Can Arslan</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        SEO Uzmanı
                    </p>
                    <p class="small text-muted mb-3">
                        Arama motoru optimizasyonu ve analitik. 7+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 6 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Elif Şahin</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        UI/UX Tasarımcı
                    </p>
                    <p class="small text-muted mb-3">
                        Kullanıcı deneyimi ve arayüz tasarımı. 5+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 7 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Burak Çelik</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        İçerik Editörü
                    </p>
                    <p class="small text-muted mb-3">
                        Metin yazarlığı ve içerik stratejisi. 4+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 8 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="service-card text-center h-100">
                    <div class="mb-4">
                        <div class="rounded-circle bg-gradient-primary d-inline-flex align-items-center justify-content-center"
                            style="width: 120px; height: 120px; background: var(--rainbow-gradient);">
                            <i class="fas fa-user text-white" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <h4 class="mb-2">Selin Aydın</h4>
                    <p class="text-muted mb-3">
                        <i class="fas fa-briefcase me-1"></i>
                        Müşteri İlişkileri
                    </p>
                    <p class="small text-muted mb-3">
                        Müşteri deneyimi ve destek yönetimi. 5+ yıllık deneyim.
                    </p>
                    <div class="social-links">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Join Team CTA -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="cta-box text-center" data-aos="zoom-in">
                    <h3 class="text-white mb-3">Ekibimize Katılmak İster Misiniz?</h3>
                    <p class="text-white-50 mb-4">
                        Yetenekli ve tutkulu profesyonelleri arıyoruz. Hep beraber harika işler yapalım!
                    </p>
                    <a href="contact.php" class="btn btn-light btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>
                        İletişime Geçin
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>