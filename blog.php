<?php
$pageTitle = "Blog";
require_once 'includes/database.php';

$blogs = getPublishedBlogs();
$categories = array_unique(array_column($blogs, 'category'));
sort($categories);

// Filtreleme artık JS ile yapıldığı için PHP filtreleme kaldırıldı
// $category = $_GET['category'] ?? '';
// if ($category) {
//     $blogs = array_filter($blogs, fn($b) => $b['category'] === $category);
// }

include 'includes/header.php';
?>

<style>
    .blog-hero {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
        padding: 140px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .blog-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .blog-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.06) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .blog-hero .container {
        position: relative;
        z-index: 2;
    }

    .blog-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 22px;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(139, 92, 246, 0.08) 100%);
        border: 1px solid rgba(99, 102, 241, 0.15);
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        color: #6366f1;
        margin-bottom: 20px;
    }

    .blog-hero h1 {
        font-size: clamp(2.25rem, 5vw, 3.5rem);
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
    }

    .blog-hero h1 span {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .blog-hero p {
        color: #64748b;
        font-size: 1.15rem;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .blog-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .category-filter {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 40px;
    }

    .category-btn {
        padding: 8px 20px;
        border-radius: 20px;
        background: white;
        color: #64748b;
        text-decoration: none;
        border: 1px solid #e2e8f0;
        transition: all 0.25s ease;
        font-weight: 500;
        cursor: pointer;
        display: inline-block;
    }

    .category-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(20, 184, 166, 0.15);
    }

    .category-btn:hover,
    .category-btn.active {
        background: #3b82f6;
        color: white;
        border-color: #3b82f6;
    }

    .category-btn.active {
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .blog-card {
        display: block;
        text-decoration: none;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        /* Çok hafif başlangıç gölgesi */
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Daha yumuşak easing */
        position: relative;
        cursor: pointer;
        border: 1px solid rgba(0, 0, 0, 0.04);
        z-index: 1;
    }

    /* Sadece üstte değil, şık bir iç ışıltı efekti */
    .blog-card::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 20px;
        padding: 2px;
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        z-index: 2;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(59, 130, 246, 0.12), 0 5px 15px rgba(0, 0, 0, 0.05);
        /* Soft ve yaygın gölge */
        border-color: transparent;
        /* Border yerine gradient ring gelecek */
    }

    .blog-card:hover::after {
        opacity: 1;
        /* Gradient border belirsin */
    }

    /* Eski before çizgisini kaldırıyorum, yerine full border geldi */
    .blog-card::before {
        display: none;
    }

    .blog-card-img-wrapper {
        position: relative;
        overflow: hidden;
    }

    .blog-card-img {
        height: 240px;
        width: 100%;
        object-fit: cover;
        object-position: center;
        background-color: #e2e8f0;
        position: relative;
        transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Yavaş çekim zoom */
        image-rendering: -webkit-optimize-contrast;
    }

    .blog-card:hover .blog-card-img {
        transform: scale(1.08);
        /* Biraz daha belirgin zoom */
    }

    .blog-card-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 60%, rgba(0, 0, 0, 0.5) 100%);
        transition: all 0.4s;
        pointer-events: none;
    }

    .blog-card:hover .blog-card-img-overlay {
        background: linear-gradient(180deg, rgba(59, 130, 246, 0.1) 0%, rgba(0, 0, 0, 0.6) 100%);
        /* Hafif mavi tint */
    }

    .blog-card-category {
        position: absolute;
        top: 16px;
        left: 16px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        color: #2563eb;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 5;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .blog-card-body {
        padding: 28px;
    }

    .blog-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 14px;
        line-height: 1.5;
        transition: color 0.3s;
    }

    .blog-card:hover .blog-card-title {
        color: #3b82f6;
    }

    .blog-card-excerpt {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .blog-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 18px;
        border-top: 1px solid #f1f5f9;
    }

    .blog-card-meta {
        display: flex;
        gap: 16px;
        color: #94a3b8;
        font-size: 0.85rem;
    }

    .blog-card-meta span {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .blog-card-meta i {
        font-size: 0.8rem;
    }

    .blog-card-arrow {
        width: 36px;
        height: 36px;
        background: white;
        /* Logosu mavi olsun, arkası beyaz - daha clean */
        color: #3b82f6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        opacity: 0;
        transform: translateX(-15px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .blog-card:hover .blog-card-arrow {
        opacity: 1;
        transform: translateX(0);
        background: #3b82f6;
        /* Hoverda mavi olsun */
        color: white;
        box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
    }

    .blog-card:hover .blog-card-arrow {
        opacity: 1;
        transform: translateX(0);
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 20px;
    }

    .empty-state h3 {
        color: #64748b;
        margin-bottom: 10px;
    }

    @media (max-width: 992px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .blog-hero h1 {
            font-size: 2rem;
        }

        .blog-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="blog-hero text-center">
    <div class="container">
        <div class="blog-hero-badge" data-aos="fade-up">
            <i class="fas fa-newspaper"></i>
            Blog & İçerikler
        </div>
        <h1 data-aos="fade-up" data-aos-delay="50">Dijital Dünyadan <span>İçerikler</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Web tasarım, dijital pazarlama ve teknoloji hakkında faydalı yazılar
        </p>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php if (!empty($categories)): ?>
            <div class="category-filter" data-aos="fade-up">
                <button class="category-btn active" data-filter="all">Tümü</button>
                <?php foreach ($categories as $cat): ?>
                    <button class="category-btn" data-filter="<?php echo htmlspecialchars($cat); ?>">
                        <?php echo htmlspecialchars($cat); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (empty($blogs)): ?>
            <div class="empty-state" data-aos="fade-up">
                <i class="fas fa-feather-alt"></i>
                <h3>Blog Yazıları Yakında!</h3>
                <p>Dijital pazarlama ve web tasarım hakkında içeriklerimiz çok yakında.</p>
            </div>
        <?php else: ?>
            <div class="blog-grid">
                <?php foreach ($blogs as $blog): ?>
                    <a href="blog-detail?slug=<?php echo $blog['slug']; ?>" class="blog-card" data-aos="fade-up"
                        data-category="<?php echo htmlspecialchars($blog['category']); ?>">
                        <div class="blog-card-img-wrapper">
                            <img class="blog-card-img"
                                src="<?php echo $blog['image'] ?: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=90'; ?>"
                                alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy">
                            <div class="blog-card-img-overlay"></div>
                            <span class="blog-card-category"><?php echo htmlspecialchars($blog['category']); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h2 class="blog-card-title"><?php echo htmlspecialchars($blog['title']); ?></h2>
                            <p class="blog-card-excerpt"><?php echo htmlspecialchars(substr($blog['excerpt'], 0, 120)); ?>...
                            </p>
                            <div class="blog-card-footer">
                                <div class="blog-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i>
                                        <?php echo formatDate($blog['created_at']); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo number_format($blog['views']); ?></span>
                                </div>
                                <div class="blog-card-arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.category-btn');
        const blogCards = document.querySelectorAll('.blog-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                blogCards.forEach(card => {
                    const category = card.getAttribute('data-category');

                    if (filterValue === 'all' ||  filterValue === category) {
                        card.style.display = 'block';
                        // Add fade in animation
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.opacity = '1';
                        }, 50);
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Re-initialize AOS if needed or just trigger layout update
                if(typeof AOS !== 'undefined') {
                    setTimeout(() => AOS.refresh(), 100);
                }
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>