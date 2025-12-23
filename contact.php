<?php
require_once 'includes/config.php';
$pageTitle = 'İletişim';

$success = '';
$error = '';
$name = '';
$email = '';
$phone = '';
$subject = '';
$message = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Lütfen tüm zorunlu alanları doldurun.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir e-posta adresi girin.';
    } else {
        // Form successfully validated
        $success = 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.';
        // Clear form
        $name = $email = $phone = $subject = $message = '';
    }
}

include 'includes/header.php';
?>

<style>
    /* ========================================
   CONTACT PAGE STYLES
   ======================================== */

    /* Hero Section */
    .contact-hero {
        background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 25%, #faf5ff 50%, #f0fdf4 75%, #fefce8 100%);
        padding: 140px 0 100px;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(ellipse at center, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 20%, rgba(139, 92, 246, 0.05) 0%, transparent 40%),
            radial-gradient(ellipse at 20% 80%, rgba(20, 184, 166, 0.05) 0%, transparent 40%);
        animation: heroFloat 20s ease-in-out infinite;
    }

    @keyframes heroFloat {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        33% {
            transform: translate(2%, -2%) rotate(1deg);
        }

        66% {
            transform: translate(-1%, 1%) rotate(-1deg);
        }
    }

    .contact-hero .container {
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #6366f1;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(99, 102, 241, 0.2);
    }

    .hero-badge i {
        font-size: 1rem;
    }

    .contact-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .contact-hero h1 span {
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .contact-hero p {
        font-size: 1.2rem;
        color: #64748b;
        max-width: 600px;
    }

    /* Hero Visual */
    .hero-illustration {
        position: relative;
    }

    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .floating-shapes .shape {
        position: absolute;
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .floating-shapes .shape-1 {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        top: 10%;
        right: 20%;
        animation-delay: 0s;
        opacity: 0.7;
    }

    .floating-shapes .shape-2 {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #8b5cf6, #6366f1);
        bottom: 30%;
        right: 10%;
        animation-delay: 1s;
        opacity: 0.6;
    }

    .floating-shapes .shape-3 {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #f59e0b, #ef4444);
        top: 40%;
        left: 10%;
        animation-delay: 2s;
        opacity: 0.5;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(10deg);
        }
    }

    .contact-illustration-card {
        background: white;
        border-radius: 24px;
        padding: 2.5rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .contact-illustration-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #14b8a6, #0ea5e9, #6366f1, #8b5cf6);
    }

    .contact-illustration-card i {
        font-size: 4rem;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
        margin-bottom: 1.5rem;
    }

    .contact-illustration-card h3 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .contact-illustration-card p {
        font-size: 0.95rem;
        color: #64748b;
        margin: 0;
    }

    /* Contact Section */
    .contact-section {
        padding: 80px 0 100px;
        background: #f8fafc;
        position: relative;
    }

    /* Contact Cards */
    .contact-info-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        height: 100%;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .contact-info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(20, 184, 166, 0.03), rgba(99, 102, 241, 0.03));
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .contact-info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(99, 102, 241, 0.15);
    }

    .contact-info-card:hover::before {
        opacity: 1;
    }

    .contact-icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 1;
        transition: transform 0.4s ease;
    }

    .contact-info-card:hover .contact-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .contact-icon-wrapper.phone {
        background: linear-gradient(135deg, #14b8a6, #0d9488);
    }

    .contact-icon-wrapper.email {
        background: linear-gradient(135deg, #0ea5e9, #0284c7);
    }

    .contact-icon-wrapper.location {
        background: linear-gradient(135deg, #8b5cf6, #7c3aed);
    }

    .contact-icon-wrapper.whatsapp {
        background: linear-gradient(135deg, #22c55e, #16a34a);
    }

    .contact-icon-wrapper i {
        font-size: 1.8rem;
        color: white;
    }

    .contact-info-card h4 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }

    .contact-info-card p {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }

    .contact-info-card a {
        color: #0ea5e9;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        transition: color 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .contact-info-card a:hover {
        color: #6366f1;
    }

    /* Contact Form Card */
    .contact-form-card {
        background: white;
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
        position: relative;
        overflow: hidden;
    }

    .contact-form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #14b8a6, #0ea5e9, #6366f1, #8b5cf6);
    }

    .form-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .form-subtitle {
        color: #64748b;
        margin-bottom: 2rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #374151;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .form-group label .required {
        color: #ef4444;
    }

    .form-control-modern {
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        background: #f9fafb;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-control-modern:focus {
        outline: none;
        border-color: #6366f1;
        background: white;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    .form-control-modern::placeholder {
        color: #9ca3af;
    }

    textarea.form-control-modern {
        min-height: 150px;
        resize: vertical;
    }

    .form-row {
        display: flex;
        gap: 1rem;
    }

    .form-row .form-group {
        flex: 1;
    }

    .btn-submit-modern {
        width: 100%;
        padding: 1.1rem 2rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        background-size: 200% 200%;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.4s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-submit-modern:hover {
        background-position: 100% 0;
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(99, 102, 241, 0.3);
    }

    .btn-submit-modern i {
        transition: transform 0.3s ease;
    }

    .btn-submit-modern:hover i {
        transform: translateX(5px);
    }

    /* Alert Styles */
    .alert-modern {
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .alert-modern.success {
        background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(21, 128, 61, 0.1));
        border: 1px solid rgba(34, 197, 94, 0.3);
        color: #166534;
    }

    .alert-modern.error {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(185, 28, 28, 0.1));
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #991b1b;
    }

    .alert-modern i {
        font-size: 1.3rem;
    }

    /* Map Section */
    .map-section {
        padding: 80px 0;
        background: white;
    }

    .map-container {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .map-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #14b8a6, #0ea5e9, #6366f1, #8b5cf6);
        z-index: 10;
    }

    .map-container iframe {
        width: 100%;
        height: 450px;
        border: none;
        display: block;
    }

    .section-badge-contact {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #6366f1;
        margin-bottom: 1rem;
        border: 1px solid rgba(99, 102, 241, 0.2);
    }

    /* CTA Section */
    .contact-cta-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        position: relative;
        overflow: hidden;
    }

    .contact-cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(ellipse at 20% 50%, rgba(20, 184, 166, 0.15) 0%, transparent 50%),
            radial-gradient(ellipse at 80% 50%, rgba(99, 102, 241, 0.15) 0%, transparent 50%);
    }

    .cta-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
    }

    .cta-content p {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 2rem;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-cta-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 1rem 2rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .btn-cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(20, 184, 166, 0.4);
        color: white;
    }

    .btn-cta-secondary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 1rem 2rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .btn-cta-secondary:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.5);
        color: white;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .contact-hero {
            padding: 120px 0 60px;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
        }

        .hero-illustration {
            margin-top: 3rem;
        }

        .form-row {
            flex-direction: column;
            gap: 0;
        }

        .contact-form-card {
            padding: 2rem;
        }
    }

    @media (max-width: 767.98px) {
        .contact-hero h1 {
            font-size: 2rem;
        }

        .contact-hero p {
            font-size: 1rem;
        }

        .contact-form-card {
            padding: 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .cta-content h2 {
            font-size: 1.8rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="hero-badge">
                    <i class="fas fa-headset"></i>
                    <span>7/24 Destek</span>
                </div>
                <h1>Bizimle <span>İletişime</span> Geçin</h1>
                <p>Projeleriniz için en iyi çözümleri sunmak için buradayız. Sorularınızı yanıtlamak ve size yardımcı
                    olmak için sabırsızlanıyoruz.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-illustration">
                    <div class="floating-shapes">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                        <div class="shape shape-3"></div>
                    </div>
                    <div class="contact-illustration-card">
                        <i class="fas fa-comments"></i>
                        <h3>Hızlı Yanıt Garantisi</h3>
                        <p>Mesajlarınıza 24 saat içinde dönüş yapıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="contact-section">
    <div class="container">
        <!-- Info Cards Row -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper phone">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Telefon</h4>
                    <p>Bizi hemen arayın</p>
                    <a href="tel:05325906804">0 532 590 68 04</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper email">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>E-posta</h4>
                    <p>Bize yazın</p>
                    <a href="mailto:info@veddia.com">info@veddia.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h4>WhatsApp</h4>
                    <p>Hızlı iletişim</p>
                    <a href="https://wa.me/905325906804" target="_blank">0 532 590 68 04</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper location">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Adres</h4>
                    <p>Ofisimizi ziyaret edin</p>
                    <span style="color: #1e293b; font-weight: 500;">İstanbul, Türkiye</span>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-form-card">
                    <h3 class="form-title">Bize Mesaj Gönderin</h3>
                    <p class="form-subtitle">Formu doldurun, en kısa sürede size dönüş yapalım.</p>

                    <?php if ($success): ?>
                        <div class="alert-modern success">
                            <i class="fas fa-check-circle"></i>
                            <?php echo htmlspecialchars($success); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($error): ?>
                        <div class="alert-modern error">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="contact.php" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Adınız Soyadınız <span class="required">*</span></label>
                                <input type="text" id="name" name="name" class="form-control-modern"
                                    placeholder="Adınızı girin" value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-posta Adresiniz <span class="required">*</span></label>
                                <input type="email" id="email" name="email" class="form-control-modern"
                                    placeholder="E-posta adresinizi girin"
                                    value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Telefon Numaranız</label>
                                <input type="tel" id="phone" name="phone" class="form-control-modern"
                                    placeholder="Telefon numaranızı girin"
                                    value="<?php echo htmlspecialchars($phone ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="subject">Konu</label>
                                <input type="text" id="subject" name="subject" class="form-control-modern"
                                    placeholder="Konu başlığı girin"
                                    value="<?php echo htmlspecialchars($subject ?? ''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Mesajınız <span class="required">*</span></label>
                            <textarea id="message" name="message" class="form-control-modern"
                                placeholder="Mesajınızı buraya yazın..."
                                required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        </div>

                        <button type="submit" class="btn-submit-modern">
                            <span>Mesaj Gönder</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-badge-contact">
                <i class="fas fa-map-location-dot"></i>
                Konumumuz
            </span>
            <h2 class="section-title gradient-text-main">Bizi Ziyaret Edin</h2>
            <p class="section-subtitle">Ofisimize gelerek projelerinizi yüz yüze görüşebilirsiniz.</p>
        </div>
        <div class="map-container" data-aos="fade-up" data-aos-delay="100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.3998336682!2d28.731994386279297!3d41.00498245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1703344561234!5m2!1str!2str"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>Projenizi Hayata Geçirelim</h2>
            <p>Dijital çözümler için doğru adrestesiniz. Hemen iletişime geçin!</p>
            <div class="cta-buttons">
                <a href="tel:05325906804" class="btn-cta-primary">
                    <i class="fas fa-phone-alt"></i>
                    Hemen Arayın
                </a>
                <a href="https://wa.me/905325906804" target="_blank" class="btn-cta-secondary">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp'tan Yazın
                </a>
            </div>
        </div>
    </div>
</section>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>

<?php include 'includes/footer.php'; ?>