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
                    <span class="count-number"><i class="fas fa-star text-warning"></i></span>
                    <span class="count-label">Kurucu Ortaklar</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .creative-hero-team {
        position: relative;
        overflow: hidden;
        background: var(--premium-gradient);
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


        <div class="position-relative">
            <div class="vertical-brand-text d-none d-xl-block">VEDDIA MEDIA</div>
            <div class="vertical-brand-text-right d-none d-xl-block">VEDDIA MEDIA</div>
            <div class="row g-5 justify-content-center">
                <!-- Leader 1: Genel Müdür -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                    <div class="leader-card">
                        <div class="leader-header">
                            <div class="leader-avatar-wrapper">
                                <div class="leader-avatar">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="leader-badge">
                                    <i class="fas fa-crown"></i>
                                </div>
                            </div>
                        </div>
                        <div class="leader-body">
                            <h3 class="leader-name">Ahmet Yılmaz</h3>
                            <p class="leader-role">Genel Müdür & Kurucu Ortak</p>
                            <div class="leader-divider"></div>
                            <p class="leader-bio">
                                10 yılı aşkın dijital pazarlama ve stratejik yönetim tecrübesiyle, markanızı zirveye
                                taşıyacak vizyoner stratejileri kurguluyor. Liderliğiyle projenizin her aşamasında
                                yanınızda.
                            </p>

                            <div class="leader-skills">
                                <span class="skill-tag">Strateji</span>
                                <span class="skill-tag">Yönetim</span>
                                <span class="skill-tag">Liderlik</span>
                            </div>

                            <div class="leader-social">
                                <a href="#" class="social-btn social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-btn social-twitter"><i class="fab fa-x-twitter"></i></a>
                                <a href="mailto:ahmet@veddia.com" class="social-btn social-email"><i
                                        class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Leader 2: Kreatif Direktör -->
                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                    <div class="leader-card">
                        <div class="leader-header">
                            <div class="leader-avatar-wrapper">
                                <div class="leader-avatar">
                                    <i class="fas fa-pencil-ruler"></i>
                                </div>
                                <div class="leader-badge">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="leader-body">
                            <h3 class="leader-name">Ayşe Demir</h3>
                            <p class="leader-role">Kreatif Direktör & Kurucu Ortak</p>
                            <div class="leader-divider"></div>
                            <p class="leader-bio">
                                Tasarıma olan tutkusu ile markanızın görsel kimliğini baştan yaratıyor. Modern tasarım
                                trendlerini, kullanıcı deneyimini sanatla buluşturan arayüzler tasarlıyor.
                            </p>

                            <div class="leader-skills">
                                <span class="skill-tag">UI/UX</span>
                                <span class="skill-tag">Marka Yönetimi</span>
                                <span class="skill-tag">Sanat Yön.</span>
                            </div>

                            <div class="leader-social">
                                <a href="#" class="social-btn social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-btn social-instagram"><i class="fab fa-instagram"></i></a>
                                <a href="mailto:ayse@veddia.com" class="social-btn social-email"><i
                                        class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .vertical-brand-text,
        .vertical-brand-text-right {
            position: absolute;
            top: 50%;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            font-size: 5rem;
            font-weight: 900;
            background: var(--premium-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0.06;
            z-index: 0;
            white-space: nowrap;
            letter-spacing: 15px;
            user-select: none;
            pointer-events: none;
            font-family: 'Poppins', sans-serif;
        }

        .vertical-brand-text {
            left: -100px;
            transform: translateY(-50%) rotate(180deg);
        }

        .vertical-brand-text-right {
            right: -100px;
            transform: translateY(-50%);
        }

        .leader-card {
            background: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .leader-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 80px rgba(14, 165, 233, 0.15);
        }

        .leader-header {
            height: 140px;
            background: var(--premium-gradient);
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            border-radius: 30px 30px 50% 50% / 0px 0px 30px 30px;
        }

        .leader-avatar-wrapper {
            position: absolute;
            bottom: -60px;
            width: 120px;
            height: 120px;
        }

        .leader-avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: white;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #555;
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        .leader-avatar i {
            background: var(--premium-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .leader-badge {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 35px;
            height: 35px;
            background: #FFD700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.9rem;
            border: 3px solid white;
            z-index: 3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .leader-body {
            padding: 70px 40px 40px;
            text-align: center;
        }

        .leader-name {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .leader-role {
            font-size: 1rem;
            font-weight: 600;
            color: #0ea5e9;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .leader-divider {
            width: 50px;
            height: 3px;
            background: var(--premium-gradient);
            margin: 0 auto 20px;
            border-radius: 10px;
            opacity: 0.5;
        }

        .leader-bio {
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .leader-skills {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }

        .skill-tag {
            background: rgba(14, 165, 233, 0.08);
            color: #0ea5e9;
            padding: 6px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .leader-card:hover .skill-tag {
            background: var(--premium-gradient);
            color: white;
        }

        .leader-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 1.2rem;
        }

        .social-btn:hover {
            transform: translateY(-5px);
            color: white;
        }

        .social-linkedin:hover {
            background: #0077b5;
            box-shadow: 0 10px 20px rgba(0, 119, 181, 0.3);
        }

        .social-twitter:hover {
            background: #000000;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .social-instagram:hover {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            box-shadow: 0 10px 20px rgba(220, 39, 67, 0.3);
        }

        .social-email:hover {
            background: #ea4335;
            box-shadow: 0 10px 20px rgba(234, 67, 53, 0.3);
        }
    </style>

    <!-- Join Team CTA -->
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8">
            <div class="cta-box-premium text-center" data-aos="zoom-in">
                <div class="cta-content">
                    <div class="cta-icon mb-4">
                        <i class=""></i>
                    </div>
                    <h3 class="cta-title mb-3">Ekibimize Katılmak İster Misiniz?</h3>
                    <p class="cta-text mb-4">
                        Yetenekli ve tutkulu profesyonelleri arıyoruz. <br>Bizimle birlikte geleceği inşa etmek için
                        hemen başvurun!
                    </p>
                    <a href="contact.php" class="btn btn-premium-cta btn-lg">
                        <span class="btn-text">İletişime Geçin</span>
                        <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="cta-bg-glow"></div>
            </div>
        </div>
    </div>

    <style>
        .cta-box-premium {
            position: relative;
            padding: 60px 40px;
            background: var(--premium-gradient);
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(14, 165, 233, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-icon {
            font-size: 3rem;
            color: white;
            background: none;
            -webkit-text-fill-color: initial;
            display: inline-block;
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .cta-title {
            color: white;
            font-size: 2.2rem;
            font-weight: 800;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .cta-text {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.1rem;
            font-weight: 500;
        }

        .btn-premium-cta {
            background: white;
            border: none;
            color: #0ea5e9;
            border-radius: 50px;
            padding: 18px 45px;
            font-weight: 700;
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-premium-cta:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            color: #6366f1;
            background: white;
        }

        .btn-text {
            background: var(--premium-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-premium-cta:hover .btn-text {
            /* Keep gradient text on hover */
        }

        .btn-icon {
            color: #0ea5e9;
        }

        .cta-bg-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 60%);
            z-index: 1;
            animation: pulse-glow 6s infinite ease-in-out;
        }

        @keyframes pulse-glow {

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
    </style>
    </div>
</section>

<?php include 'includes/footer.php'; ?>