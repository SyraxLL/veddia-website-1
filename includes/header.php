<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Veddia Media - Modern Dijital Çözümler, Web Tasarım, Yazılım ve Dijital Pazarlama Ajansı">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle . ' - Veddia Media' : 'Veddia Media - Modern Dijital Çözümler'; ?>
    </title>

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
</head>

<body>
    <!-- Top Bar -->
    <header class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div class="topbar-left">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a>
                </div>
                <div class="topbar-right">
                    <a href="tel:05325906804" class="contact-item">
                        <i class="fas fa-phone-alt"></i> 0 532 590 68 04
                    </a>
                    <a href="mailto:info@veddia.com" class="contact-item">
                        <i class="fas fa-envelope"></i> info@veddia.com
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="Veddia Media" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <!-- Anasayfa -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Anasayfa</a>
                    </li>

                    <!-- Kurumsal (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kurumsal
                        </a>
                        <div class="dropdown-menu" style="min-width: 200px; padding: 1rem;">
                            <ul class="list-unstyled mega-menu-list mb-0">
                                <li><a href="about.php">Hakkımızda</a></li>
                                <li><a href="team.php">Ekibimiz</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Hizmetlerimiz (Mega Menu) -->
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                            Hizmetlerimiz
                        </a>
                        <div class="dropdown-menu mega-menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Column 1: Web Tasarım -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-laptop-code me-2"></i>Web Tasarım
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="kurumsal-web-sitesi.php">Kurumsal Web Sitesi</a></li>
                                            <li><a href="e-ticaret-web.php">E-Ticaret Sitesi</a></li>
                                            <li><a href="kisisel-web-sitesi.php">Kişisel Web Sitesi</a></li>
                                            <li><a href="urun-tanitim-sitesi.php">Ürün Tanıtım Sitesi</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: Dijital Pazarlama -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-bullhorn me-2"></i>Dijital Pazarlama
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Google Reklamı</a></li>
                                            <li><a href="#">Youtube Reklamı</a></li>
                                            <li><a href="#">Instagram Reklamı</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: Sosyal Medya -->
                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-share-nodes me-2"></i>Sosyal Medya
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Facebook Yönetimi</a></li>
                                            <li><a href="#">Instagram Yönetimi</a></li>
                                            <li><a href="#">X (Twitter) Yönetimi</a></li>
                                            <li><a href="#">LinkedIn Yönetimi</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 4: Grafik Tasarım -->
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-menu-title gradient-text-main">
                                            <i class="fas fa-pen-nib me-2"></i>Grafik Tasarım
                                        </h6>
                                        <ul class="list-unstyled mega-menu-list">
                                            <li><a href="#">Logo Tasarımı</a></li>
                                            <li><a href="#">Broşür Tasarımı Ve Basımı</a></li>
                                            <li><a href="#">Katalog Tasarımı Ve Basımı</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Referans -->
                    <li class="nav-item">
                        <a class="nav-link" href="#references">Referans</a>
                    </li>

                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <!-- İletişim -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">İletişim</a>
                    </li>

                    <!-- CTA Button -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-gradient" href="contact.php">Hemen Teklif Al</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>