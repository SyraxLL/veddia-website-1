<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Veddia Media Instagram Reklam Hizmetleri - Satış, mesaj ve gerçek müşteri üreten Instagram reklam stratejileri. Feed, Story, Reels ve DM reklamlarında uçtan uca yönetim.">
    <title>Instagram Reklam Yönetimi - Veddia Media</title>
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
        /* Instagram Colors & Styling */
        :root {
            --instagram-gradient: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            --instagram-purple: #833AB4;
            --instagram-pink: #E1306C;
            --instagram-orange: #F77737;
        }

        /* Hero Section */
        .hero-instagram {
            background: linear-gradient(135deg, #fef7ff 0%, #fff5f8 50%, #fff8f0 100%);
            padding: 60px 0 30px;
            position: relative;
            overflow: hidden;
        }

        .hero-instagram::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(225, 48, 108, 0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-instagram::after {
            content: '';
            position: absolute;
            bottom: -10%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(131, 58, 180, 0.06) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-title-instagram span {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Instagram Buttons */
        .btn-instagram-primary {
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
            background: var(--instagram-gradient);
            background-size: 200% auto;
            color: #ffffff;
            border: none;
            box-shadow: 0 10px 25px rgba(225, 48, 108, 0.3);
        }

        .btn-instagram-primary:hover {
            background-position: right center;
            box-shadow: 0 15px 35px rgba(225, 48, 108, 0.4);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-instagram-outline {
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

        .btn-instagram-outline::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 2px;
            background: var(--instagram-gradient);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: -1;
        }

        .btn-instagram-outline:hover {
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            color: #1e293b;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(225, 48, 108, 0.2);
        }

        /* Trust Stripe */
        .trust-stripe-instagram {
            display: inline-flex;
            gap: 24px;
            margin-top: 32px;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(225, 48, 108, 0.1);
            border-radius: 50px;
            font-size: 0.85rem;
            color: #5f6368;
            font-weight: 500;
        }

        .trust-stripe-instagram i {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-right: 6px;
        }

        /* Hero Visual - Premium Image Wrapper Style */
        .hero-image-wrapper-instagram {
            display: inline-block;
            position: relative;
            max-width: 100%;
        }

        .hero-image-wrapper-instagram img {
            display: block;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 2;
            border-radius: 20px;
            max-width: 100%;
            height: auto;
        }

        .hero-image-wrapper-instagram:hover img {
            transform: scale(1.02) translateY(-5px);
            box-shadow: 0 25px 50px rgba(225, 48, 108, 0.2), 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* Decorative Background Element */
        .hero-image-wrapper-instagram::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 15px;
            right: -15px;
            bottom: -15px;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.15), rgba(131, 58, 180, 0.15));
            border-radius: 20px;
            z-index: 1;
            transition: all 0.5s ease;
        }

        .hero-image-wrapper-instagram:hover::before {
            top: 20px;
            left: 20px;
            right: -20px;
            bottom: -20px;
            background: linear-gradient(135deg, rgba(131, 58, 180, 0.2), rgba(247, 119, 55, 0.2));
        }

        /* Floating Bubble Decoration */
        .hero-image-wrapper-instagram::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #E1306C, #833AB4);
            border-radius: 50%;
            z-index: 0;
            opacity: 0.5;
            animation: floatBubbleInsta 4s ease-in-out infinite;
        }

        @keyframes floatBubbleInsta {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-10px) scale(1.05);
            }
        }

        /* Floating Badge on Hero Image */
        .hero-badge-float-instagram {
            position: absolute;
            top: 15px;
            left: 15px;
            background: white;
            padding: 10px 16px;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            animation: floatBadgeInsta 3s ease-in-out infinite;
        }

        .hero-badge-float-instagram i {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 1.1rem;
        }

        @keyframes floatBadgeInsta {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .hero-badge-float-bottom-instagram {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: linear-gradient(135deg, #E1306C, #833AB4);
            color: white;
            padding: 8px 14px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(225, 48, 108, 0.3);
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            animation: floatBadgeInsta 3.5s ease-in-out infinite 0.5s;
        }

        /* Hero Stats Row */
        .hero-stats-instagram {
            display: flex;
            gap: 30px;
            margin-top: 30px;
            padding: 20px 0;
            border-top: 1px solid rgba(225, 48, 108, 0.1);
        }

        .hero-stat-item {
            text-align: center;
        }

        .hero-stat-item .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-stat-item .stat-text {
            font-size: 0.85rem;
            color: #64748b;
            margin-top: 4px;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .hero-image-wrapper-instagram {
                margin-right: 0;
                margin-top: 40px;
            }

            .hero-badge-float-instagram {
                left: 10px;
                top: 10px;
            }

            .hero-badge-float-bottom-instagram {
                right: 10px;
                bottom: 20px;
            }

            .hero-stats-instagram {
                justify-content: center;
            }
        }

        /* ========================================
           CREATIVE FACTORY SECTION
        ======================================== */
        .creative-factory-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #fff 0%, #fef7ff 100%);
            position: relative;
            overflow: hidden;
        }

        .creative-factory-wrapper {
            display: flex;
            gap: 60px;
            position: relative;
        }

        /* Left Sticky Column */
        .cf-sticky-left {
            flex: 0 0 380px;
            max-width: 380px;
            position: sticky;
            top: 120px;
            height: fit-content;
            align-self: flex-start;
        }

        .cf-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #E1306C;
            margin-bottom: 20px;
        }

        .cf-badge i {
            font-size: 0.9rem;
        }

        .cf-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .cf-title span {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cf-desc {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        /* Formula Chips */
        .cf-chips {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .cf-chip {
            display: flex;
            align-items: center;
            gap: 8px;
            background: white;
            border: 2px solid transparent;
            padding: 10px 18px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #1e293b;
            position: relative;
            cursor: default;
            transition: all 0.3s ease;
        }

        .cf-chip::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 2px;
            background: var(--instagram-gradient);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .cf-chip i {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cf-chip:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(225, 48, 108, 0.15);
        }

        /* Mini Metrics */
        .cf-mini-metrics {
            display: flex;
            gap: 24px;
            padding: 20px 0;
            border-top: 1px solid rgba(225, 48, 108, 0.1);
        }

        .cf-metric {
            text-align: center;
        }

        .cf-metric-val {
            font-size: 1.4rem;
            font-weight: 800;
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cf-metric-label {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 2px;
        }

        /* Right Carousel Area */
        .cf-carousel-area {
            flex: 1;
            width: 100%;
            min-width: 0;
            position: relative;
            overflow: hidden;
        }



        /* Horizontal Scroll Container */
        .cf-carousel {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            padding: 40px 0 30px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: #E1306C #f1f5f9;
        }

        .cf-carousel::-webkit-scrollbar {
            height: 6px;
        }

        .cf-carousel::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .cf-carousel::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, #E1306C, #833AB4);
            border-radius: 10px;
        }

        /* Scenario Cards */
        .cf-scenario-card {
            flex: 0 0 300px;
            background: white;
            border-radius: 20px;
            padding: 24px;
            border: 2px solid #f1f5f9;
            scroll-snap-align: start;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .cf-scenario-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--instagram-gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cf-scenario-card:hover,
        .cf-scenario-card.active {
            border-color: rgba(225, 48, 108, 0.3);
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(225, 48, 108, 0.15);
        }

        .cf-scenario-card:hover::before,
        .cf-scenario-card.active::before {
            opacity: 1;
        }

        .cf-card-mockup {
            width: 100%;
            height: 140px;
            background: linear-gradient(135deg, #fef7ff, #fff5f8);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            position: relative;
            overflow: hidden;
        }

        .cf-card-mockup i {
            font-size: 2.5rem;
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cf-card-mockup .mockup-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.65rem;
            font-weight: 600;
            color: #64748b;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .cf-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .cf-card-desc {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 14px;
        }

        .cf-card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
        }

        .cf-card-goal {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.8rem;
            color: #64748b;
        }

        .cf-card-goal i {
            color: #E1306C;
        }

        .cf-card-cta {
            font-size: 0.75rem;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            color: #E1306C;
            padding: 6px 12px;
            border-radius: 20px;
        }

        /* Flow Strip */
        .cf-flow-strip {
            margin-top: 50px;
            background: white;
            border-radius: 20px;
            padding: 30px 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .cf-flow-step {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cf-flow-num {
            width: 36px;
            height: 36px;
            background: var(--instagram-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .cf-flow-content h5 {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 2px;
        }

        .cf-flow-content p {
            font-size: 0.8rem;
            color: #64748b;
            margin: 0;
        }

        .cf-flow-arrow {
            font-size: 1.5rem;
            color: #E1306C;
            opacity: 0.5;
        }

        /* Responsive */
        @media (max-width: 1199px) {
            .cf-brief-box {
                display: none;
            }
        }

        @media (max-width: 991px) {
            .creative-factory-wrapper {
                flex-direction: column;
                gap: 40px;
            }

            .cf-sticky-left {
                position: relative;
                top: 0;
                flex: none;
                max-width: 100%;
            }

            .cf-chips {
                justify-content: center;
            }

            .cf-mini-metrics {
                justify-content: center;
            }

            .cf-flow-strip {
                flex-direction: column;
                gap: 20px;
                padding: 30px;
            }

            .cf-flow-arrow {
                transform: rotate(90deg);
            }
        }

        @media (max-width: 767px) {
            .cf-scenario-card {
                flex: 0 0 260px;
            }

            .cf-title {
                font-size: 1.8rem;
            }
        }

        /* Target Audience Section */
        .target-section {
            padding: 100px 0;
            background: #fff;
        }

        .target-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            height: 100%;
            text-align: center;
        }

        .target-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(225, 48, 108, 0.1);
            border-color: rgba(225, 48, 108, 0.3);
        }

        .target-card .icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
        }

        .target-card .icon i {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .target-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0;
        }

        /* Problem Solution Section */
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
            border-left: 5px solid #E1306C;
            box-shadow: 0 25px 50px -12px rgba(225, 48, 108, 0.15);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .solution-box:hover {
            transform: translateY(-5px);
        }

        /* Service Cards */
        .service-card-instagram {
            background: white;
            border-radius: 16px;
            padding: 28px;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-card-instagram:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(225, 48, 108, 0.08);
            border-color: rgba(225, 48, 108, 0.3);
        }

        .service-card-instagram .service-icon {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .service-card-instagram .service-icon.feed {
            background: linear-gradient(135deg, #E1306C, #833AB4);
            color: white;
        }

        .service-card-instagram .service-icon.story {
            background: linear-gradient(135deg, #F77737, #E1306C);
            color: white;
        }

        .service-card-instagram .service-icon.reels {
            background: linear-gradient(135deg, #833AB4, #405DE6);
            color: white;
        }

        .service-card-instagram .service-icon.dm {
            background: linear-gradient(135deg, #5851DB, #833AB4);
            color: white;
        }

        .service-card-instagram .service-icon.traffic {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
        }

        .service-card-instagram .service-icon.remarketing {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }

        .service-card-instagram h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #1e293b;
        }

        .service-card-instagram p {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 0;
            line-height: 1.6;
        }

        /* Timeline / Stepper */
        .strategy-timeline {
            position: relative;
            padding: 40px 0;
        }

        .strategy-timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, #E1306C, #833AB4, #F77737);
            border-radius: 3px;
        }

        .strategy-step {
            position: relative;
            padding-left: 60px;
            margin-bottom: 35px;
        }

        .strategy-step:last-child {
            margin-bottom: 0;
        }

        .step-marker {
            position: absolute;
            left: 0;
            top: 0;
            width: 42px;
            height: 42px;
            background: white;
            border: 3px solid #E1306C;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #E1306C;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .strategy-step:hover .step-marker {
            background: var(--instagram-gradient);
            color: white;
            border-color: transparent;
            transform: scale(1.1);
        }

        .strategy-step h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: #1e293b;
        }

        .strategy-step p {
            color: #64748b;
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* Info Box */
        .info-box-instagram {
            background: linear-gradient(135deg, #fef7ff, #fff5f8);
            border-radius: 20px;
            padding: 50px;
            border: 1px solid rgba(225, 48, 108, 0.1);
            position: relative;
            overflow: hidden;
        }

        .info-box-instagram::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(225, 48, 108, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .info-box-instagram h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1e293b;
        }

        .info-box-instagram p {
            font-size: 1.1rem;
            color: #64748b;
            line-height: 1.8;
            position: relative;
            z-index: 1;
        }

        /* Why Us Section */
        .why-us-list li {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            font-size: 1rem;
            color: #1e293b;
        }

        .why-us-list li i {
            width: 28px;
            height: 28px;
            background: linear-gradient(135deg, #E1306C, #833AB4);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 14px;
            font-size: 0.75rem;
        }

        /* Metrics Dashboard */
        .metrics-dashboard {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .metrics-header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 16px 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mock-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .dot-red {
            background: #ef4444;
        }

        .dot-yellow {
            background: #eab308;
        }

        .dot-green {
            background: #22c55e;
        }

        .metrics-body {
            padding: 30px;
        }

        .metric-item {
            background: linear-gradient(135deg, #fef7ff, #fff5f8);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .metric-item:last-child {
            margin-bottom: 0;
        }

        .metric-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .metric-icon.messages-icon {
            background: linear-gradient(135deg, #E1306C, #833AB4);
            color: white;
        }

        .metric-icon.conversion-icon {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
        }

        .metric-icon.cost-icon {
            background: linear-gradient(135deg, #F77737, #f09433);
            color: white;
        }

        .metric-value {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1e293b;
        }

        .metric-label {
            font-size: 0.85rem;
            color: #64748b;
        }

        /* FAQ Section */
        .faq-section-instagram {
            background: #f8fafc;
            padding: 100px 0;
        }

        .faq-badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            color: #E1306C;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .faq-accordion .accordion-item {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px !important;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .faq-accordion .accordion-button {
            padding: 20px 24px;
            font-weight: 600;
            color: #1e293b;
            background: white;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #fef7ff, #fff5f8);
            color: #E1306C;
        }

        .faq-accordion .accordion-button:focus {
            box-shadow: none;
        }

        .faq-accordion .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23E1306C'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .faq-accordion .accordion-body {
            padding: 0 24px 20px;
            color: #64748b;
            line-height: 1.7;
        }

        .faq-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.1), rgba(131, 58, 180, 0.1));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 14px;
        }

        .faq-icon i {
            background: var(--instagram-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-instagram {
                padding: 120px 0 80px;
            }

            .trust-stripe-instagram {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .floating-stat {
                display: none;
            }

            .solution-box {
                padding: 30px;
            }
        }

        @media (max-width: 767px) {
            .hero-instagram {
                padding: 100px 0 60px;
            }

            .info-box-instagram {
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <?php
    $pageTitle = 'Instagram Reklam Yönetimi';
    include 'includes/header.php';
    ?>

    <!-- Hero Section -->
    <section class="hero-instagram">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4 hero-title-instagram">
                        Instagram Reklamları ile <span>Satışa ve Mesaja Dönüşen</span> Görünürlük
                    </h1>
                    <p class="lead text-secondary mb-4">
                        Sadece beğeni değil; satış, mesaj ve gerçek müşteri üreten Instagram reklam stratejileri.
                    </p>

                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <a href="contact.php" class="btn-instagram-primary">
                            Hemen Teklif Alın <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="trust-stripe-instagram">
                        <div class="d-flex align-items-center"><i class="fas fa-bullseye"></i> Hedef odaklı strateji
                        </div>
                        <div class="d-flex align-items-center"><i class="fas fa-chart-line"></i> Ölçülebilir sonuçlar
                        </div>
                        <div class="d-flex align-items-center"><i class="fas fa-comments"></i> Mesaj & satış odaklı
                        </div>
                    </div>

                    <!-- Hero Stats Row -->
                    <div class="hero-stats-instagram">
                        <div class="hero-stat-item">
                            <div class="stat-number">+340%</div>
                            <div class="stat-text">Mesaj Artışı</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="stat-number">₺8.50</div>
                            <div class="stat-text">Sonuç Başına</div>
                        </div>
                        <div class="hero-stat-item">
                            <div class="stat-number">125K+</div>
                            <div class="stat-text">Aylık Erişim</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-end" data-aos="fade-left">
                    <div class="hero-image-wrapper-instagram">
                        <!-- Floating Badges -->
                        <div class="hero-badge-float-instagram">
                            <i class="fab fa-instagram"></i>
                            <span>Meta Partner</span>
                        </div>
                        <div class="hero-badge-float-bottom-instagram">
                            <i class="fas fa-chart-line"></i>
                            <span>+250% ROAS</span>
                        </div>
                        <img src="assets/img/instagram-ads-hero.jpg" alt="Instagram Ads Dashboard"
                            class="img-fluid rounded-4 shadow-lg" style="border: 6px solid white;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Creative Factory + Conversion Flow Section -->
    <section class="creative-factory-section">
        <div class="container">
            <div class="creative-factory-wrapper">
                <!-- Left Sticky Column -->
                <div class="cf-sticky-left">
                    <div class="cf-badge">
                        <i class="fas fa-magic"></i> Kreatif Fabrikası
                    </div>
                    <h2 class="cf-title">
                        Her Reklam Bir <span>Dönüşüm Hikayesi</span>
                    </h2>
                    <p class="cf-desc">
                        Instagram'da dikkat çekmek kolay, dönüştürmek zor. Biz her reklamı kanıtlanmış formülle
                        kuruyoruz.
                    </p>

                    <!-- Formula Chips -->
                    <div class="cf-chips">
                        <div class="cf-chip">
                            <i class="fas fa-bolt"></i> Hook
                        </div>
                        <div class="cf-chip">
                            <i class="fas fa-check-circle"></i> Proof
                        </div>
                        <div class="cf-chip">
                            <i class="fas fa-arrow-right"></i> Action
                        </div>
                    </div>

                    <!-- Mini Metrics -->
                    <div class="cf-mini-metrics">
                        <div class="cf-metric">
                            <div class="cf-metric-val">%89</div>
                            <div class="cf-metric-label">İzlenme Oranı</div>
                        </div>
                        <div class="cf-metric">
                            <div class="cf-metric-val">3.2s</div>
                            <div class="cf-metric-label">Ort. Dikkat</div>
                        </div>
                        <div class="cf-metric">
                            <div class="cf-metric-val">%12</div>
                            <div class="cf-metric-label">Dönüşüm</div>
                        </div>
                    </div>
                </div>

                <!-- Right Carousel Area -->
                <div class="cf-carousel-area">
                    <!-- Horizontal Carousel -->
                    <div class="cf-carousel">
                        <!-- Card 1: Story DM -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-mobile-alt"></i>
                                <span class="mockup-badge">Story</span>
                            </div>
                            <h4 class="cf-card-title">Hızlı DM Toplama</h4>
                            <p class="cf-card-desc">Story'de soru sor, DM'e yönlendir. 3 saniyede aksiyon al.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Mesaj</div>
                                <div class="cf-card-cta">"Yaz: BİLGİ"</div>
                            </div>
                        </div>

                        <!-- Card 2: Reels Viral -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-film"></i>
                                <span class="mockup-badge">Reels</span>
                            </div>
                            <h4 class="cf-card-title">Keşfet Patlaması</h4>
                            <p class="cf-card-desc">Hook + değer + CTA. Algoritmanın sevdiği formül.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Erişim</div>
                                <div class="cf-card-cta">"Kaydet"</div>
                            </div>
                        </div>

                        <!-- Card 3: Carousel Education -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-th"></i>
                                <span class="mockup-badge">Carousel</span>
                            </div>
                            <h4 class="cf-card-title">Eğitici Seri</h4>
                            <p class="cf-card-desc">5 kart, 1 problem, 1 çözüm. Kaydırarak öğret.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Kaydetme</div>
                                <div class="cf-card-cta">"Profili Ziyaret Et"</div>
                            </div>
                        </div>

                        <!-- Card 4: UGC Style -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-user-circle"></i>
                                <span class="mockup-badge">UGC</span>
                            </div>
                            <h4 class="cf-card-title">Kullanıcı İçeriği</h4>
                            <p class="cf-card-desc">Gerçek kullanıcı, gerçek deneyim. Güven inşa et.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Güven</div>
                                <div class="cf-card-cta">"Deneyimle"</div>
                            </div>
                        </div>

                        <!-- Card 5: Product Showcase -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-shopping-bag"></i>
                                <span class="mockup-badge">Shop</span>
                            </div>
                            <h4 class="cf-card-title">Ürün Vitrini</h4>
                            <p class="cf-card-desc">Fiyat + görsel + tek tıkla satın al. E-ticaret odaklı.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Satış</div>
                                <div class="cf-card-cta">"Şimdi Al"</div>
                            </div>
                        </div>

                        <!-- Card 6: Retargeting -->
                        <div class="cf-scenario-card">
                            <div class="cf-card-mockup">
                                <i class="fas fa-redo"></i>
                                <span class="mockup-badge">Retarget</span>
                            </div>
                            <h4 class="cf-card-title">Geri Kazanım</h4>
                            <p class="cf-card-desc">Sepeti terk edene son şans. Kişiselleştirilmiş mesaj.</p>
                            <div class="cf-card-meta">
                                <div class="cf-card-goal"><i class="fas fa-bullseye"></i> Dönüşüm</div>
                                <div class="cf-card-cta">"Tamamla"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flow Strip -->
            <div class="cf-flow-strip" data-aos="fade-up">
                <div class="cf-flow-step">
                    <div class="cf-flow-num">1</div>
                    <div class="cf-flow-content">
                        <h5>Kanca</h5>
                        <p>İlk 1 saniyede dikkat yakala</p>
                    </div>
                </div>
                <i class="fas fa-arrow-right cf-flow-arrow"></i>
                <div class="cf-flow-step">
                    <div class="cf-flow-num">2</div>
                    <div class="cf-flow-content">
                        <h5>Kanıt</h5>
                        <p>Değeri göster, güven inşa et</p>
                    </div>
                </div>
                <i class="fas fa-arrow-right cf-flow-arrow"></i>
                <div class="cf-flow-step">
                    <div class="cf-flow-num">3</div>
                    <div class="cf-flow-content">
                        <h5>Aksiyon</h5>
                        <p>Net CTA ile dönüşüm al</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Creative Brief Box - Fixed Right -->


    <!-- Target Audience Section -->
    <section class="target-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold mb-3">Bu Hizmet Kimler İçin?</h2>
                <p class="text-secondary lead">Instagram'da görünür olmak değil, harekete geçiren reklamlar
                    oluşturuyoruz.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="target-card">
                        <div class="icon"><i class="fas fa-store"></i></div>
                        <h4>Satış Yapmak İsteyen Markalar</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="target-card">
                        <div class="icon"><i class="fas fa-comments"></i></div>
                        <h4>DM ile Müşteri Toplayan İşletmeler</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="target-card">
                        <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                        <h4>E-Ticaret Siteleri</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="target-card">
                        <div class="icon"><i class="fas fa-briefcase"></i></div>
                        <h4>Hizmet Satan Yerel ve Ulusal Firmalar</h4>
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
                            <li>Reklam var ama mesaj gelmiyor</li>
                            <li>Takipçi artıyor, satış artmıyor</li>
                            <li>Yanlış hedef kitle</li>
                            <li>İçerik iyi ama performans zayıf</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="solution-box">
                        <h3 class="fw-bold mb-4 display-6" style="color: #E1306C;">Çözüm Yaklaşımımız</h3>
                        <p class="mb-4 lead text-dark" style="font-weight: 500;">
                            Instagram reklamlarını; içerik, hedef kitle ve dönüşüm süreciyle birlikte ele alıyoruz.
                        </p>
                        <p class="text-secondary m-0" style="line-height: 1.8;">
                            Her kampanya ölçülür, test edilir ve optimize edilir. Sadece görünürlük değil,
                            gerçek sonuçlar için çalışıyoruz. Hedef kitlenizi tanıyor, davranışlarını analiz ediyor
                            ve en etkili formatlarda onlara ulaşıyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Scope Section -->
    <section class="py-5 bg-light" id="services">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold">Hizmet Kapsamımız</h2>
                <p class="text-secondary">Instagram'da her format için özel reklam stratejileri</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="service-card-instagram">
                        <div class="service-icon feed"><i class="fas fa-th"></i></div>
                        <h3>Feed Reklamları</h3>
                        <p>Marka ve ürün tanıtımı için etkili görsel reklamlar. Ana sayfada kalıcı görünürlük.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-instagram">
                        <div class="service-icon story"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Story Reklamları</h3>
                        <p>Hızlı etkileşim ve mesaj odaklı reklamlar. Tam ekran deneyim ile yüksek dikkat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card-instagram">
                        <div class="service-icon reels"><i class="fas fa-film"></i></div>
                        <h3>Reels Reklamları</h3>
                        <p>Keşfet odaklı organik erişim. Viral potansiyeli yüksek video formatı.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-instagram">
                        <div class="service-icon dm"><i class="fas fa-paper-plane"></i></div>
                        <h3>DM Reklamları</h3>
                        <p>Doğrudan müşteri iletişimi. Mesaj başlatma odaklı kampanyalar.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-instagram">
                        <div class="service-icon traffic"><i class="fas fa-external-link-alt"></i></div>
                        <h3>Web Site Trafik Reklamları</h3>
                        <p>Instagram'dan web sitenize kaliteli trafik yönlendirme.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card-instagram">
                        <div class="service-icon remarketing"><i class="fas fa-redo"></i></div>
                        <h3>Yeniden Pazarlama</h3>
                        <p>Sitenizi ziyaret eden kullanıcılara tekrar ulaşarak dönüşüm oranını artırın.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategy Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-start g-5">
                <!-- Left: Timeline -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="fw-bold mb-4 display-6">Strateji Nasıl Kuruluyor?</h3>
                    <div class="strategy-timeline">
                        <div class="strategy-step">
                            <div class="step-marker">1</div>
                            <h4>Hedef Belirleme</h4>
                            <p>Satış, mesaj veya trafik hedeflerinizi netleştiriyoruz.</p>
                        </div>
                        <div class="strategy-step">
                            <div class="step-marker">2</div>
                            <h4>Hedef Kitle Analizi</h4>
                            <p>Demografik ve ilgi alanı bazlı detaylı hedefleme.</p>
                        </div>
                        <div class="strategy-step">
                            <div class="step-marker">3</div>
                            <h4>Kreatif Kurgusu</h4>
                            <p>Reklam metni ve görsel içerik tasarımı.</p>
                        </div>
                        <div class="strategy-step">
                            <div class="step-marker">4</div>
                            <h4>Yayın ve A/B Test</h4>
                            <p>Farklı varyasyonlarla en iyi performansı buluyoruz.</p>
                        </div>
                        <div class="strategy-step">
                            <div class="step-marker">5</div>
                            <h4>Sürekli Optimizasyon</h4>
                            <p>Veriye dayalı iyileştirmeler ve bütçe optimizasyonu.</p>
                        </div>
                        <div class="strategy-step">
                            <div class="step-marker">6</div>
                            <h4>Performans Raporlaması</h4>
                            <p>Şeffaf ve anlaşılır metriklerle sonuç takibi.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Info Box -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="info-box-instagram mb-4">
                        <h3><i class="fas fa-exclamation-circle me-2" style="color: #E1306C;"></i> Instagram Reklamı
                            Neden Tek Başına Yetmez?</h3>
                        <p class="mb-0">
                            Instagram reklamı tek başına bir çözüm değildir. Doğru içerik, doğru hedefleme ve
                            doğru yönlendirme olmadan bütçe yalnızca harcanır. Biz reklamı, satış sürecinin
                            aktif bir parçası olarak yönetiriz. Her adım birbiriyle uyumlu çalışır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #fef7ff 0%, #fff5f8 100%);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="fw-bold mb-4 display-6">Neden Biz?</h3>
                    <ul class="list-unstyled why-us-list">
                        <li><i class="fas fa-check"></i> Meta Business Manager uzmanlığı</li>
                        <li><i class="fas fa-check"></i> Gerçek kullanıcı davranışına dayalı hedefleme</li>
                        <li><i class="fas fa-check"></i> Kreatif ve reklam uyumu</li>
                        <li><i class="fas fa-check"></i> Düzenli optimizasyon</li>
                        <li><i class="fas fa-check"></i> Şeffaf raporlama</li>
                        <li><i class="fas fa-check"></i> Reklam hesabı her zaman markaya aittir</li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="metrics-dashboard">
                        <div class="metrics-header">
                            <div class="mock-dot dot-red"></div>
                            <div class="mock-dot dot-yellow"></div>
                            <div class="mock-dot dot-green"></div>
                        </div>
                        <div class="metrics-body">
                            <h5 class="fw-bold text-secondary mb-4">Aylık Performans Özeti</h5>
                            <div class="metric-item">
                                <div class="metric-icon messages-icon"><i class="fas fa-comment-dots"></i></div>
                                <div>
                                    <div class="metric-value">1,247</div>
                                    <div class="metric-label">Mesaj Sayısı</div>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon conversion-icon"><i class="fas fa-check-circle"></i></div>
                                <div>
                                    <div class="metric-value">%12.4</div>
                                    <div class="metric-label">Dönüşüm Oranı</div>
                                </div>
                            </div>
                            <div class="metric-item">
                                <div class="metric-icon cost-icon"><i class="fas fa-coins"></i></div>
                                <div>
                                    <div class="metric-value">₺6.80</div>
                                    <div class="metric-label">Sonuç Başına Maliyet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section-instagram">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="faq-badge">SSS</span>
                <h2 class="display-5 fw-bold mt-3">Sık Sorulan Sorular</h2>
                <p class="text-muted lead">Instagram reklamları hakkında merak ettikleriniz</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion faq-accordion" id="instagramFaq">
                        <!-- Question 1 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    <span class="faq-icon"><i class="fas fa-coins"></i></span>
                                    Instagram reklam bütçesi nasıl belirlenir?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#instagramFaq">
                                <div class="accordion-body">
                                    Bütçe, hedeflerinize ve sektör rekabetine göre belirlenir. Küçük bütçelerle test
                                    yaparak başlayabilir, verim aldıkça ölçeklendirme yapabiliriz. İlk görüşmede
                                    hedeflerinize uygun bir bütçe önerisi sunuyoruz.
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="50">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    <span class="faq-icon"><i class="fas fa-clock"></i></span>
                                    Ne kadar sürede sonuç alınır?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#instagramFaq">
                                <div class="accordion-body">
                                    İlk sonuçlar genellikle 1-2 hafta içinde görülmeye başlar. Ancak optimal performans
                                    için 4-6 haftalık bir test ve optimizasyon süreci gerekir. Bu sürede algoritmalar
                                    öğrenir ve kampanya performansı artar.
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    <span class="faq-icon"><i class="fas fa-user-shield"></i></span>
                                    Reklam hesabı kime ait olur?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#instagramFaq">
                                <div class="accordion-body">
                                    Reklam hesabı her zaman size aittir. Meta Business Manager üzerinden hesabınıza
                                    erişim yetkisi alırız, ancak hesap sahipliği sizde kalır. İş birliğimiz sona
                                    erdiğinde tüm veriler ve erişim sizde kalır.
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    <span class="faq-icon"><i class="fas fa-palette"></i></span>
                                    İçerikler kim tarafından hazırlanır?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#instagramFaq">
                                <div class="accordion-body">
                                    İçerik konusunda iki seçenek sunuyoruz: Mevcut içeriklerinizi reklam için optimize
                                    edebilir veya ekibimizle birlikte yeni içerikler oluşturabiliriz. Kreatif desteği
                                    seçtiğiniz pakete göre değişir.
                                </div>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    <span class="faq-icon"><i class="fas fa-calendar-alt"></i></span>
                                    Aylık çalışma modeli nasıl ilerler?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#instagramFaq">
                                <div class="accordion-body">
                                    Aylık olarak strateji toplantısı yapılır, kampanyalar sürekli izlenir ve optimize
                                    edilir. Ay sonunda detaylı performans raporu paylaşılır. Size özel hesap yöneticisi
                                    ile hafta içi her gün iletişim kurabilirsiniz.
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
                        <h3 class="display-6 fw-bold text-white mb-3">Instagram'da Görünmek Değil, Sonuç Almak Önemli
                        </h3>
                        <p class="lead text-white-50 mb-0">
                            Reklam bütçenizi kontrollü ve ölçülebilir şekilde yönetin. Hemen bizimle iletişime geçin.
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

        // Carousel horizontal scroll with mouse wheel - smooth animation
        const carousel = document.querySelector('.cf-carousel');
        if (carousel) {
            let isScrolling = false;
            carousel.addEventListener('wheel', (e) => {
                if (e.deltaY !== 0) {
                    e.preventDefault();
                    if (!isScrolling) {
                        isScrolling = true;
                        const scrollAmount = e.deltaY > 0 ? 200 : -200;
                        carousel.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                        setTimeout(() => {
                            isScrolling = false;
                        }, 150);
                    }
                }
            }, { passive: false });
        }


    </script>
</body>

</html>