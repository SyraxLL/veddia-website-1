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
    <link rel="stylesheet" href="assets/css/social-management.css">
</head>

<body class="facebook">

    <?php
    $pageTitle = 'Facebook Yönetimi';
    include 'includes/header.php';
    ?>

    <!-- Advanced Hero Section -->
    <section class="mgmt-hero facebook">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="mgmt-badge">
                        <i class="fab fa-facebook"></i> Meta Business Partner
                    </div>
                    <h1 class="mgmt-title">
                        Topluluk <br>
                        <span class="text-gradient-fb">Mühendisliği</span>
                    </h1>
                    <p class="mgmt-desc">
                        Facebook artık sadece "paylaşım yapma" yeri değil; sadık bir komünite inşa etme alanıdır.
                        Veri odaklı yaklaşımımızla sayfanızı yaşayan, büyüyen bir organizmaya dönüştürüyoruz.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-lg"
                            style="background-color: var(--fb-color); border:none;">
                            Analiz İste <i class="fas fa-chart-pie ms-2"></i>
                        </a>
                        <a href="#bento-hizmetler"
                            class="btn btn-link text-decoration-none text-dark fw-bold px-3 py-3">
                            Nasıl Çalışır?
                        </a>
                    </div>
                </div>

                <!-- Dashboard Mockup -->
                <div class="col-lg-7 mt-5 mt-lg-0 position-relative" data-aos="fade-left">
                    <!-- The Mockup Frame -->
                    <div class="fb-dashboard-mockup">
                        <!-- Top Bar -->
                        <div class="dash-header">
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-light rounded-circle p-2"><i class="fab fa-facebook text-primary"></i>
                                </div>
                                <span class="fw-bold fs-5 text-dark">Business Suite</span>
                            </div>
                            <div class="d-flex gap-3 text-secondary">
                                <i class="fas fa-bell"></i>
                                <i class="fas fa-cog"></i>
                            </div>
                        </div>

                        <div class="d-flex" style="height: 350px;">
                            <!-- Sidebar -->
                            <div class="dash-sidebar">
                                <div class="dash-icon active"><i class="fas fa-home"></i></div>
                                <div class="dash-icon"><i class="fas fa-chart-bar"></i></div>
                                <div class="dash-icon"><i class="fas fa-envelope"></i></div>
                                <div class="dash-icon"><i class="fas fa-users"></i></div>
                            </div>

                            <!-- Main Area -->
                            <div class="p-4 w-100 bg-light">
                                <div class="row g-3">
                                    <!-- Stat Card 1 -->
                                    <div class="col-6">
                                        <div class="dash-card">
                                            <p class="small text-muted mb-1">Sayfa Erişimi</p>
                                            <h3 class="fw-bold text-dark mb-0">2.1M</h3>
                                            <div class="dash-graph-line"></div>
                                            <small class="text-success mt-2 d-block fw-bold"><i
                                                    class="fas fa-arrow-up"></i> %45 Artış</small>
                                        </div>
                                    </div>
                                    <!-- Stat Card 2 -->
                                    <div class="col-6">
                                        <div class="dash-card">
                                            <p class="small text-muted mb-1">Etkileşim</p>
                                            <h3 class="fw-bold text-dark mb-0">84K</h3>
                                            <div class="dash-graph-line" style="--fb-color: #00C6FF"></div>
                                            <small class="text-success mt-2 d-block fw-bold"><i
                                                    class="fas fa-arrow-up"></i> %32 Artış</small>
                                        </div>
                                    </div>

                                    <!-- Messages Preview -->
                                    <div class="col-12">
                                        <div class="dash-card mt-2">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="fw-bold small">Gelen Kutusu</span>
                                                <span class="badge bg-danger rounded-pill">12 Yeni</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 border-bottom pb-2 mb-2">
                                                <div class="bg-secondary rounded-circle"
                                                    style="width:30px; height:30px;"></div>
                                                <div class="small">
                                                    <div class="fw-bold text-dark">Ahmet Yılmaz</div>
                                                    <div class="text-muted text-truncate" style="max-width: 200px;">
                                                        Ürünleriniz hakkında bilgi..</div>
                                                </div>
                                                <small class="ms-auto text-muted">2dk</small>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="bg-secondary rounded-circle"
                                                    style="width:30px; height:30px;"></div>
                                                <div class="small">
                                                    <div class="fw-bold text-dark">Ayşe Demir</div>
                                                    <div class="text-muted">Kargo süreci ile ilgili..</div>
                                                </div>
                                                <small class="ms-auto text-muted">15dk</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floaters -->
                    <div class="dash-float dash-float-1">
                        <div class="text-success fs-4"><i class="fas fa-check-circle"></i></div>
                        <div>
                            <div class="fw-bold text-dark">Kampanya Aktif</div>
                            <div class="small text-muted">ROAS: 4.2x</div>
                        </div>
                    </div>

                    <div class="dash-float dash-float-2">
                        <div class="text-primary fs-4"><i class="fas fa-thumbs-up"></i></div>
                        <div>
                            <div class="fw-bold text-dark">+1,200</div>
                            <div class="small text-muted">Organik Takipçi</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Bento Grid Services -->
    <section class="section-padding bg-light" id="bento-hizmetler">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-bold text-primary ls-1">Kapsamımız</span>
                <h2 class="display-5 fw-bold text-dark">Neler Yapıyoruz?</h2>
            </div>

            <div class="bento-grid">
                <!-- Card 1: Content (Large) -->
                <div class="bento-card bento-large" data-aos="fade-up">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div class="bento-icon"><i class="fas fa-pencil-alt"></i></div>
                            <h3 class="bento-title">360° İçerik Stratejisi</h3>
                            <p class="bento-desc" style="max-width: 400px;">
                                Rastgele paylaşımlar değil, bir hikaye anlatısı. Görsel tasarım, metin yazarlığı ve
                                video kurgu
                                süreçlerini tek elden yönetiyoruz. Markanızın ses tonunu (Tone of Voice) inşa ediyoruz.
                            </p>
                        </div>
                        <!-- Mini Visual inside card -->
                        <div class="d-none d-lg-block ms-4 align-self-center">
                            <i class="fas fa-layer-group fa-4x text-light"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Community -->
                <div class="bento-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="bento-icon"><i class="fas fa-users"></i></div>
                    <h3 class="bento-title">Topluluk Yönetimi</h3>
                    <p class="bento-desc">Gelen her soru, yorum ve mesaj potansiyel bir satıştır. 15 dakika içinde
                        profesyonel dönüş garantisi.</p>
                </div>

                <!-- Card 3: Shop -->
                <div class="bento-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="bento-icon"><i class="fas fa-store"></i></div>
                    <h3 class="bento-title">Facebook Shop</h3>
                    <p class="bento-desc">Kataloğunuzu Facebook'a entegre ediyor, ürünlerinizi doğrudan "Mağaza"
                        sekmesinde sergiliyoruz.</p>
                </div>

                <!-- Card 4: Crisis (Large) -->
                <div class="bento-card bento-large" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div class="bento-icon"><i class="fas fa-shield-alt"></i></div>
                            <h3 class="bento-title">Proaktif Kriz Yönetimi</h3>
                            <p class="bento-desc" style="max-width: 450px;">
                                Sosyal medya affetmez. Olası linç kampanyaları, hatalı ürün şikayetleri veya negatif
                                algı operasyonlarını
                                soğukkanlılıkla yönetiyor, markanızın itibarını koruyoruz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pipeline Process -->
    <section class="section-padding" style="background-color: var(--fb-bg);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-uppercase fw-bold text-secondary ls-1">Metodoloji</span>
                <h2 class="display-6 fw-bold text-dark">Nasıl Başlıyoruz?</h2>
            </div>

            <div class="pipeline-wrap">
                <div class="pipeline-line"></div>

                <div class="pipeline-step" data-aos="fade-up" data-aos-delay="0">
                    <div class="p-icon-box"><i class="fas fa-search"></i></div>
                    <h4 class="fw-bold fs-5">1. Check-Up</h4>
                    <p class="text-muted small">Mevcut sayfanızın analizi, rakip incelemesi ve "Gap Analysis" ile
                        eksiklerin tespiti.</p>
                </div>

                <div class="pipeline-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-icon-box"><i class="fas fa-map"></i></div>
                    <h4 class="fw-bold fs-5">2. Yol Haritası</h4>
                    <p class="text-muted small">İlk 3 ayın içerik takvimi, görsel dili ve KPI hedeflerinin belirlenmesi.
                    </p>
                </div>

                <div class="pipeline-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-icon-box"><i class="fas fa-rocket"></i></div>
                    <h4 class="fw-bold fs-5">3. Lansman</h4>
                    <p class="text-muted small">Onaylanan stratejinin hayata geçirilmesi ve düzenli optimizasyon
                        döngüsü.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding bg-light">
        <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <h2 class="text-center fw-bold mb-5">Merak Ettikleriniz</h2>
                     
                     <div class="accordion faq-accordion" id="fbMgmtFaq">
                         <!-- FAQ Item 1 -->
                         <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm overflow-hidden">
                             <h2 class="accordion-header">
                                 <button class="accordion-button collapsed p-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                     <div class="faq-icon me-3"><i class="fas fa-money-bill-wave"></i></div>
                                     Reklam yönetimi fiyata dahil mi?
                                 </button>
                             </h2>
                             <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#fbMgmtFaq">
                                 <div class="accordion-body">
                                     Hayır, bu sayfa sadece "Organik Hesap Yönetimi" hizmetlerini kapsar. Reklam yönetimi (Ads Manager) ayrı bir uzmanlık ve bütçe gerektirir. Ancak iki hizmeti paket olarak alabilirsiniz.
                                 </div>
                             </div>
                         </div>

                         <!-- FAQ Item 2 -->
                         <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm overflow-hidden">
                             <h2 class="accordion-header">
                                 <button class="accordion-button collapsed p-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                     <div class="faq-icon me-3"><i class="fas fa-paint-brush"></i></div>
                                     Grafikleri kim hazırlıyor?
                                 </button>
                             </h2>
                             <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#fbMgmtFaq">
                                 <div class="accordion-body">
                                     Bünyemizdeki profesyonel grafik tasarım ekibi, markanızın kurumsal kimliğine uygun tüm görselleri (Post, Story, Kapak vb.) hazırlar ve onayınıza sunar.
                                 </div>
                             </div>
                         </div>
                         
                         <!-- FAQ Item 3 -->
                         <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden">
                             <h2 class="accordion-header">
                                 <button class="accordion-button collapsed p-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                     <div class="faq-icon me-3"><i class="fas fa-calendar-alt"></i></div>
                                     Sözleşme süresi ne kadar?
                                 </button>
                             </h2>
                             <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#fbMgmtFaq">
                                 <div class="accordion-body">
                                     Minimum 3 aylık periyotlarla çalışmayı öneriyoruz, çünkü organik büyüme ve topluluk inşası zaman alan bir süreçtir. Ancak dilediğiniz zaman fesih hakkınız saklıdır.
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
        </div>
    </section>

    <!-- Final CTA Standard -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="cta-modern p-5 rounded-5 position-relative overflow-hidden" data-aos="zoom-in"
                style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                <div class="row align-items-center position-relative z-2">
                    <div class="col-lg-8 text-lg-start text-center mb-4 mb-lg-0">
                        <h3 class="display-6 fw-bold text-white mb-3">Sosyal Medyanızı Şansa Bırakmayın</h3>
                        <p class="lead text-white-50 mb-0">
                            Profesyonel ellerde, ölçülebilir büyüme.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="contact.php" class="btn btn-primary btn-xl shadow-lg border-0"
                            style="background: var(--fb-color);">
                            Teklif İste <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>

</html>