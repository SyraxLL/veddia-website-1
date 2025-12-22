<?php
$pageTitle = 'Referanslar';
require_once 'includes/database.php';
$projects = getProjects();
$categories = [];
foreach ($projects as $project) {
    if (!empty($project['category'])) {
        $cats = explode(',', $project['category']);
        foreach ($cats as $cat) {
            $catName = trim($cat);
            if (!empty($catName)) {
                $categories[] = $catName;
            }
        }
    }
}
$categories = array_unique($categories);
sort($categories);

include 'includes/header.php';
?>

<!-- References Page Styles -->
<style>
    /* ==========================================
       REFERENCES PAGE - Premium Design
       ========================================== */

    .references-hero {
        padding: 140px 0 80px;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    .references-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 700px;
        height: 700px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .references-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -15%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.06) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    /* Decorative shapes - replacing orbs */
    .ref-shape {
        position: absolute;
        pointer-events: none;
    }

    .ref-shape-1 {
        width: 300px;
        height: 300px;
        border: 1px solid rgba(99, 102, 241, 0.1);
        border-radius: 50%;
        top: 10%;
        right: 5%;
        animation: floatShape 15s infinite ease-in-out;
    }

    .ref-shape-2 {
        width: 200px;
        height: 200px;
        border: 1px solid rgba(139, 92, 246, 0.08);
        border-radius: 50%;
        bottom: 15%;
        left: 10%;
        animation: floatShape 20s infinite ease-in-out reverse;
    }

    @keyframes floatShape {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(20px, -20px) rotate(180deg);
        }
    }

    .references-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .ref-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 24px;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(139, 92, 246, 0.08) 100%);
        border: 1px solid rgba(99, 102, 241, 0.15);
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #6366f1;
        margin-bottom: 24px;
    }

    .ref-badge i {
        font-size: 0.9rem;
    }

    .references-hero h1 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    .references-hero h1 span {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .references-hero p {
        font-size: 1.15rem;
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Stats Bar */
    .ref-stats-bar {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin-top: 50px;
        padding-top: 40px;
        border-top: 1px solid rgba(99, 102, 241, 0.1);
    }

    .ref-stat {
        text-align: center;
    }

    .ref-stat-value {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
        margin-bottom: 8px;
    }

    .ref-stat-label {
        font-size: 0.9rem;
        color: #64748b;
        font-weight: 500;
    }

    /* ==========================================
       REFERENCES GRID SECTION
       ========================================== */

    .references-section {
        padding: 100px 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }

    /* Filter Tabs */
    .ref-filter-tabs {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 60px;
    }

    .ref-filter-btn {
        padding: 12px 28px;
        background: #ffffff;
        border: 2px solid #e2e8f0;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #64748b;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .ref-filter-btn:hover {
        border-color: #6366f1;
        color: #6366f1;
    }

    .ref-filter-btn.active {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        border-color: transparent;
        color: #ffffff;
        box-shadow: 0 8px 25px rgba(99, 102, 241, 0.35);
    }

    /* References Grid */
    .references-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    /* Reference Card */
    .reference-card {
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .reference-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(20, 184, 166, 0.15);
        /* Teal Shadow */
        border-color: rgba(20, 184, 166, 0.2);
        /* Teal Border */
    }

    .reference-card-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .reference-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .reference-card:hover .reference-card-image img {
        transform: scale(1.08);
    }

    .reference-card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(20, 184, 166, 0.4) 0%, rgba(13, 148, 136, 0.4) 100%);
        /* Teal & Şeffaf */
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .reference-card:hover .reference-card-overlay {
        opacity: 1;
    }

    .overlay-btn {
        width: 50px;
        height: 50px;
        background: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0d9488;
        /* Teal Text */
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        transform: translateY(20px);
    }

    .reference-card:hover .overlay-btn {
        transform: translateY(0);
    }

    .overlay-btn:nth-child(2) {
        transition-delay: 0.1s;
    }

    .overlay-btn:hover {
        background: #0d9488;
        /* Teal Background */
        color: #ffffff;
        transform: scale(1.1);
    }

    .reference-card-category {
        position: absolute;
        top: 16px;
        left: 16px;
        padding: 6px 14px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        color: #6366f1;
        backdrop-filter: blur(10px);
    }

    .reference-card-content {
        padding: 28px;
    }

    .reference-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .reference-card:hover .reference-card-title {
        color: #0d9488;
        /* Teal Title */
    }

    .reference-card-desc {
        font-size: 0.95rem;
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .reference-card-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .ref-tag {
        padding: 6px 12px;
        background: #f1f5f9;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 500;
        color: #475569;
        transition: all 0.3s ease;
    }

    .ref-tag:hover {
        background: rgba(20, 184, 166, 0.1);
        color: #0d9488;
    }

    /* ==========================================
       TESTIMONIALS SECTION
       ========================================== */

    .testimonials-section {
        padding: 100px 0;
        background: linear-gradient(135deg, #0a0f1c 0%, #1a1f35 100%);
        position: relative;
        overflow: hidden;
    }

    .testimonials-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(rgba(99, 102, 241, 0.02) 1px, transparent 1px),
            linear-gradient(90deg, rgba(99, 102, 241, 0.02) 1px, transparent 1px);
        background-size: 50px 50px;
        pointer-events: none;
    }

    .testimonials-header {
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        z-index: 2;
    }

    .testimonials-header h2 {
        font-size: clamp(2rem, 4vw, 2.75rem);
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 16px;
    }

    .testimonials-header h2 span {
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .testimonials-header p {
        font-size: 1.1rem;
        color: #94a3b8;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        position: relative;
        z-index: 2;
    }

    .testimonial-card {
        background: rgba(30, 41, 59, 0.6);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 36px;
        border: 1px solid rgba(255, 255, 255, 0.06);
        transition: all 0.4s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
        border-color: rgba(99, 102, 241, 0.3);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    }

    .testimonial-quote {
        font-size: 2rem;
        color: #6366f1;
        margin-bottom: 20px;
    }

    .testimonial-text {
        font-size: 1rem;
        color: #cbd5e1;
        line-height: 1.8;
        margin-bottom: 28px;
        font-style: italic;
    }

    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .testimonial-avatar {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        font-weight: 700;
        color: #ffffff;
    }

    .testimonial-info h4 {
        font-size: 1rem;
        font-weight: 600;
        color: #e2e8f0;
        margin-bottom: 4px;
    }

    .testimonial-info p {
        font-size: 0.875rem;
        color: #64748b;
    }

    .testimonial-stars {
        margin-left: auto;
        color: #fbbf24;
        font-size: 0.9rem;
    }

    /* ==========================================
       CTA SECTION
       ========================================== */

    .ref-cta-section {
        padding: 80px 0;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }

    .ref-cta-box {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        border-radius: 32px;
        padding: 60px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .ref-cta-box::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
        animation: ctaRotate 20s linear infinite;
    }

    @keyframes ctaRotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .ref-cta-content {
        position: relative;
        z-index: 2;
    }

    .ref-cta-box h2 {
        font-size: clamp(1.75rem, 4vw, 2.5rem);
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 16px;
    }

    .ref-cta-box p {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.85);
        max-width: 500px;
        margin: 0 auto 32px;
    }

    .ref-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 36px;
        background: #ffffff;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 700;
        color: #6366f1;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .ref-cta-btn:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        color: #6366f1;
    }

    /* ==========================================
       RESPONSIVE
       ========================================== */

    @media (max-width: 1200px) {
        .references-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 992px) {
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .ref-stats-bar {
            gap: 40px;
        }
    }

    @media (max-width: 768px) {
        .references-hero {
            padding: 100px 0 60px;
        }

        .references-grid {
            grid-template-columns: 1fr;
        }

        .testimonials-grid {
            grid-template-columns: 1fr;
        }

        .ref-stats-bar {
            flex-wrap: wrap;
            gap: 30px;
        }

        .ref-stat {
            flex: 0 0 45%;
        }

        .ref-cta-box {
            padding: 40px 24px;
        }

        .ref-filter-tabs {
            gap: 8px;
        }

        .ref-filter-btn {
            padding: 10px 20px;
            font-size: 0.85rem;
        }
    }

    /* Yeni Kart Hover Efektleri */
    .reference-card {
        display: block;
        /* Link olduğu için blok yap */
        text-decoration: none;
        /* Alt çizgiyi kaldır */
        color: inherit;
        /* Rengi miras al */
        position: relative;
        overflow: visible !important;
        /* Tooltip dışarı taşabilsin */
        z-index: 1;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border-radius: 20px;
        background: transparent;
        /* Wrapper transparent olsun */
    }

    /* Görsel ve İçerik wrapper'ları arka planı sağlasın */
    .reference-card-image,
    .reference-card-content {
        position: relative;
        z-index: 2;
        /* Tooltip'in üstünde kalsın */
        background: white;
    }

    .reference-card-image {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        overflow: hidden;
        /* Resim radius dışına taşmasın */
    }

    .reference-card-content {
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .reference-card:hover {
        transform: translateY(-10px);
        z-index: 100 !important;
        /* Diğer kartların üzerine çıksın */
    }

    .visit-hint {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%) translateX(0);
        background: linear-gradient(to bottom, #14b8a6 0%, #0d9488 100%);
        /* Teal Gradient */
        color: white;
        padding: 20px 4px;
        /* Daha ince */
        border-radius: 0 12px 12px 0;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: -1;
        box-shadow: 5px 0 20px rgba(20, 184, 166, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-weight: 600;
        font-size: 0.8rem;
        /* Daha küçük font */
        writing-mode: vertical-rl;
        text-orientation: mixed;
        height: auto;
        white-space: nowrap;
        letter-spacing: 1px;
    }

    .reference-card:hover .visit-hint {
        opacity: 1;
        visibility: visible;
        transform: translateY(-50%) translateX(100%);
        right: -3px;
        /* Kartla daha bitişik */
    }

    .visit-hint i {
        transform: rotate(90deg);
        font-size: 0.9rem;
    }

    /* Kartın sağ kenarını düzeltmek için (opsiyonel) */
    .reference-card-content h3 {
        transition: color 0.3s ease;
    }

    .reference-card:hover .reference-card-content h3 {
        color: #3b82f6;
    }
</style>

<!-- Hero Section -->
<section class="references-hero">
    <div class="ref-shape ref-shape-1"></div>
    <div class="ref-shape ref-shape-2"></div>

    <div class="container">
        <div class="references-hero-content" data-aos="fade-up">
            <div class="ref-badge">
                <i class="fas fa-briefcase"></i>
                Başarı Hikayeleri
            </div>
            <h1>En Büyük Referansımız: <span>Kendimiz</span></h1>
            <p>
                Şu an gezdiğiniz bu site; hazır altyapılara meydan okuyan bir ustalık eseridir.
                <strong>Saf PHP</strong>, <strong>JavaScript</strong>, <strong>CSS</strong> ve <strong>MySQL</strong>
                ile
                %100 özgün, satır satır kodlandı.
            </p>

            <div class="ref-stats-bar">
                <div class="ref-stat">
                    <div class="ref-stat-value">50+</div>
                    <div class="ref-stat-label">Tamamlanan Proje</div>
                </div>
                <div class="ref-stat">
                    <div class="ref-stat-value">100%</div>
                    <div class="ref-stat-label">Müşteri Memnuniyeti</div>
                </div>
                <div class="ref-stat">
                    <div class="ref-stat-value">15+</div>
                    <div class="ref-stat-label">Farklı Sektör</div>
                </div>
                <div class="ref-stat">
                    <div class="ref-stat-value">3+</div>
                    <div class="ref-stat-label">Yıllık Deneyim</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- References Grid Section -->
<section class="references-section">
    <div class="container">
        <!-- Filter Tabs -->
        <div class="ref-filter-tabs" data-aos="fade-up">
            <button class="ref-filter-btn active" data-filter="all">Tümü</button>
            <?php foreach ($categories as $cat): ?>
                <button class="ref-filter-btn" data-filter="<?php echo htmlspecialchars($cat); ?>">
                    <?php echo htmlspecialchars($cat); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- References Grid -->
        <div class="references-grid">
            <?php if (empty($projects)): ?>
                <div style="grid-column: 1/-1; text-align: center; padding: 60px;">
                    <i class="fas fa-briefcase" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 20px;"></i>
                    <h3 style="color: #64748b;">Henüz proje eklenmemiş</h3>
                </div>
            <?php else: ?>
                <?php foreach ($projects as $project): ?>
                    <a href="<?php echo !empty($project['url']) ? $project['url'] : '#'; ?>" class="reference-card"
                        target="<?php echo !empty($project['url']) ? '_blank' : '_self'; ?>"
                        data-category="<?php echo htmlspecialchars($project['category']); ?>" data-aos="fade-up">

                        <!-- Yandan Çıkan Badge -->
                        <div class="visit-hint">
                            <span>Projeyi İncele</span>
                            <i class="fas fa-arrow-right"></i>
                        </div>

                        <div class="reference-card-image">
                            <!-- Görsel -->
                            <img src="<?php echo !empty($project['image']) ? $project['image'] : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop'; ?>"
                                alt="<?php echo htmlspecialchars($project['title']); ?>">
                            <?php
                            $cats = explode(',', $project['category']);
                            $mainCat = trim($cats[0]);
                            ?>
                            <span class="reference-card-category"><?php echo htmlspecialchars($mainCat); ?></span>
                            <!-- Overlay artık sadece görsel efekt için, fonksiyonel değil -->
                            <div class="reference-card-overlay">
                                <div class="overlay-btn">
                                    <i class="fas fa-external-link-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="reference-card-content">
                            <h3 class="reference-card-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="reference-card-desc">
                                <?php echo htmlspecialchars($project['description']); ?>
                            </p>
                            <?php if (!empty($project['tags'])): ?>
                                <div class="reference-card-tags">
                                    <?php
                                    $tags = explode(',', $project['tags']);
                                    foreach ($tags as $tag):
                                        $tag = trim($tag);
                                        if (empty($tag))
                                            continue;
                                        ?>
                                        <span class="ref-tag"><?php echo htmlspecialchars($tag); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- JS Filter Script (Statik JS yerine dinamik kategori isimleriyle çalışması için güncellendi) -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const filterBtns = document.querySelectorAll('.ref-filter-btn');
                const refCards = document.querySelectorAll('.reference-card');

                filterBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        // Active class yönetimi
                        filterBtns.forEach(b => b.classList.remove('active'));
                        btn.classList.add('active');

                        const filter = btn.getAttribute('data-filter');

                        refCards.forEach(card => {
                            const categoryAttr = card.getAttribute('data-category');
                            const categories = categoryAttr ? categoryAttr.split(',').map(c => c.trim()) : [];

                            if (filter === 'all' || categories.includes(filter)) {
                                card.style.display = 'block';
                                // Animasyon
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(20px)';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, 50);
                            } else {
                                card.style.display = 'none';
                            }
                        });

                        if (typeof AOS !== 'undefined') {
                            setTimeout(() => AOS.refresh(), 100);
                        }
                    });
                });
            });
        </script>
        <span class="ref-tag">3D Görünüm</span>
        <span class="ref-tag">AR</span>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="testimonials-header" data-aos="fade-up">
            <h2>Müşterilerimiz <span>Ne Diyor?</span></h2>
            <p>Birlikte çalıştığımız markalardan geri bildirimler</p>
        </div>

        <div class="testimonials-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">
                    "Veddia Media ile çalışmak bizim için harika bir deneyimdi. Web sitemiz çok profesyonel görünüyor
                    ve müşterilerimizden sürekli olumlu geri dönüşler alıyoruz."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">AY</div>
                    <div class="testimonial-info">
                        <h4>Ahmet Yılmaz</h4>
                        <p>TechCorp CEO</p>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">
                    "E-ticaret sitemiz sayesinde satışlarımız %300 arttı. SEO çalışmaları ve Google Ads kampanyaları
                    gerçekten etkili oldu. Teşekkürler Veddia!"
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SK</div>
                    <div class="testimonial-info">
                        <h4>Selin Kaya</h4>
                        <p>ModaStore Kurucu</p>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="testimonial-text">
                    "Sosyal medya yönetimi ve içerik stratejisi konusunda gerçek uzmanlar. Instagram takipçi sayımız
                    6 ayda 50 binden 150 bine çıktı."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">MD</div>
                    <div class="testimonial-info">
                        <h4>Mehmet Demir</h4>
                        <p>BeautyBrand Pazarlama Müdürü</p>
                    </div>
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="ref-cta-section">
    <div class="container">
        <div class="ref-cta-box" data-aos="zoom-in">
            <div class="ref-cta-content">
                <h2>Sıradaki Başarı Hikayesi Sizin Olsun</h2>
                <p>Projenizi birlikte başarıya taşıyalım. Ücretsiz danışmanlık için hemen iletişime geçin.</p>
                <a href="contact.php" class="ref-cta-btn">
                    <i class="fas fa-rocket"></i>
                    Ücretsiz Teklif Alın
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Filter Script -->


<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

<?php include 'includes/footer.php'; ?>