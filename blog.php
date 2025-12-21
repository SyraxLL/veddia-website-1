<?php
$pageTitle = "Blog";
require_once 'includes/database.php';

// Zamanı gelen planlı blogları yayınla
publishScheduledBlogs();

// Blogları getir
$category = $_GET['category'] ?? '';

$allBlogs = loadBlogs();

// Sadece yayınlanmış blogları filtrele
$blogs = array_filter($allBlogs, fn($b) => $b['status'] === 'published');

if ($category) {
    $blogs = array_filter($blogs, fn($b) => $b['category'] === $category);
}

// Tarihe göre sırala (en yeni önce)
usort($blogs, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));

// Öne çıkan blog
$featuredBlog = null;
foreach ($blogs as $blog) {
    if ($blog['is_featured']) {
        $featuredBlog = $blog;
        break;
    }
}

// Kategorileri al
$publishedBlogs = array_filter($allBlogs, fn($b) => $b['status'] === 'published');
$categories = array_unique(array_column($publishedBlogs, 'category'));
sort($categories);

include 'includes/header.php';
?>

<style>
    /* Blog Soft Design */
    .blog-hero-soft {
        background: linear-gradient(135deg, #f0fdfa 0%, #e0f2fe 50%, #ede9fe 100%);
        padding: 140px 0 80px;
        position: relative;
    }

    .blog-hero-soft::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2314b8a6' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
    }

    .hero-content-soft {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-subtitle {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #14b8a6;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 15px;
    }

    .hero-subtitle i {
        font-size: 0.8rem;
    }

    .hero-title-soft {
        font-size: 3rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-title-soft span {
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-desc-soft {
        font-size: 1.1rem;
        color: #64748b;
        max-width: 550px;
        margin: 0 auto;
    }

    /* Categories */
    .categories-soft {
        padding: 50px 0 30px;
        background: #f8fafc;
    }

    .category-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }

    .cat-btn {
        padding: 10px 22px;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        color: #64748b;
        font-weight: 500;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    .cat-btn:hover {
        border-color: #14b8a6;
        color: #14b8a6;
        background: #f0fdfa;
    }

    .cat-btn.active {
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        border-color: transparent;
        color: white;
    }

    /* Blog Section */
    .blog-section-soft {
        padding: 40px 0 80px;
        background: #f8fafc;
    }

    /* Featured */
    .featured-soft {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        margin-bottom: 50px;
        border: 1px solid #e2e8f0;
    }

    .featured-soft .row {
        align-items: stretch;
    }

    .featured-img-soft {
        height: 100%;
        min-height: 350px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .featured-img-soft::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(20, 184, 166, 0.2), rgba(14, 165, 233, 0.2));
    }

    .featured-badge-soft {
        position: absolute;
        top: 20px;
        left: 20px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        gap: 6px;
        z-index: 2;
    }

    .featured-body-soft {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .featured-cat {
        display: inline-block;
        background: #f0fdfa;
        color: #14b8a6;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 15px;
        width: fit-content;
    }

    .featured-title-soft {
        font-size: 1.6rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .featured-excerpt-soft {
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .featured-meta-soft {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        color: #94a3b8;
        font-size: 0.85rem;
        margin-bottom: 25px;
    }

    .featured-meta-soft span {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .featured-meta-soft i {
        color: #14b8a6;
    }

    .btn-read {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        color: white;
        padding: 12px 28px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        width: fit-content;
    }

    .btn-read:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(20, 184, 166, 0.35);
        color: white;
    }

    /* Blog Cards */
    .blog-grid-soft {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .blog-card-soft {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }

    .blog-card-soft:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        border-color: #14b8a6;
    }

    .card-img-soft {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .card-img-soft img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .blog-card-soft:hover .card-img-soft img {
        transform: scale(1.05);
    }

    .card-cat-soft {
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: white;
        color: #14b8a6;
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .card-body-soft {
        padding: 22px;
    }

    .card-meta-soft {
        display: flex;
        gap: 15px;
        color: #94a3b8;
        font-size: 0.8rem;
        margin-bottom: 12px;
    }

    .card-meta-soft span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .card-title-soft {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .card-title-soft a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .card-title-soft a:hover {
        color: #14b8a6;
    }

    .card-excerpt-soft {
        color: #64748b;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 18px;
    }

    .card-footer-soft {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 15px;
        border-top: 1px solid #f1f5f9;
    }

    .author-soft {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .author-avatar-soft {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .author-soft span {
        color: #64748b;
        font-size: 0.85rem;
    }

    .read-link-soft {
        color: #14b8a6;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.2s ease;
    }

    .read-link-soft:hover {
        gap: 8px;
        color: #0ea5e9;
    }

    /* Empty State */
    .empty-soft {
        text-align: center;
        padding: 80px 20px;
        background: white;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
    }

    .empty-soft i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 20px;
    }

    .empty-soft h3 {
        color: #475569;
        font-size: 1.3rem;
        margin-bottom: 10px;
    }

    .empty-soft p {
        color: #94a3b8;
    }

    /* Newsletter */
    .newsletter-soft {
        padding: 80px 0;
        background: white;
    }

    .newsletter-box-soft {
        background: linear-gradient(135deg, #14b8a6, #0ea5e9, #6366f1);
        border-radius: 24px;
        padding: 50px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .newsletter-box-soft::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 60%;
        height: 200%;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        transform: rotate(-15deg);
    }

    .newsletter-content-soft {
        position: relative;
        z-index: 2;
        max-width: 500px;
        margin: 0 auto;
    }

    .newsletter-box-soft h3 {
        color: white;
        font-size: 1.8rem;
        margin-bottom: 15px;
    }

    .newsletter-box-soft p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 25px;
    }

    .newsletter-form-soft {
        display: flex;
        gap: 12px;
        max-width: 450px;
        margin: 0 auto;
    }

    .newsletter-form-soft input {
        flex: 1;
        padding: 14px 20px;
        border: none;
        border-radius: 10px;
        font-size: 0.95rem;
        outline: none;
    }

    .newsletter-form-soft button {
        padding: 14px 28px;
        background: #1e293b;
        color: white;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .newsletter-form-soft button:hover {
        background: #0f172a;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .blog-grid-soft {
            grid-template-columns: repeat(2, 1fr);
        }

        .featured-soft .row {
            flex-direction: column;
        }

        .featured-img-soft {
            min-height: 250px;
        }
    }

    @media (max-width: 768px) {
        .hero-title-soft {
            font-size: 2rem;
        }

        .blog-grid-soft {
            grid-template-columns: 1fr;
        }

        .featured-body-soft {
            padding: 25px;
        }

        .newsletter-box-soft {
            padding: 35px 20px;
        }

        .newsletter-form-soft {
            flex-direction: column;
        }

        .category-list {
            justify-content: flex-start;
            overflow-x: auto;
            flex-wrap: nowrap;
            padding-bottom: 5px;
        }

        .cat-btn {
            white-space: nowrap;
        }
    }
</style>

<!-- Hero Section -->
<section class="blog-hero-soft">
    <div class="container">
        <div class="hero-content-soft" data-aos="fade-up">
            <div class="hero-subtitle">
                <i class="fas fa-circle"></i>
                Blog
            </div>
            <h1 class="hero-title-soft">
                Dijital Dünyadan <span>İçerikler</span>
            </h1>
            <p class="hero-desc-soft">
                Web tasarım, pazarlama ve teknoloji hakkında faydalı yazılar
            </p>
        </div>
    </div>
</section>

<!-- Categories -->
<?php if (!empty($categories)): ?>
    <section class="categories-soft">
        <div class="container">
            <div class="category-list" data-aos="fade-up">
                <a href="blog.php" class="cat-btn <?php echo empty($category) ? 'active' : ''; ?>">Tümü</a>
                <?php foreach ($categories as $cat): ?>
                    <a href="blog.php?category=<?php echo urlencode($cat); ?>"
                        class="cat-btn <?php echo $category === $cat ? 'active' : ''; ?>">
                        <?php echo htmlspecialchars($cat); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Blog Content -->
<section class="blog-section-soft">
    <div class="container">

        <?php if ($featuredBlog && empty($category)): ?>
            <!-- Featured Post -->
            <div class="featured-soft" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="featured-img-soft"
                            style="background-image: url('<?php echo htmlspecialchars($featuredBlog['image'] ?: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800'); ?>');">
                            <span class="featured-badge-soft">
                                <i class="fas fa-star"></i> Öne Çıkan
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-body-soft">
                            <span class="featured-cat"><?php echo htmlspecialchars($featuredBlog['category']); ?></span>
                            <h2 class="featured-title-soft"><?php echo htmlspecialchars($featuredBlog['title']); ?></h2>
                            <p class="featured-excerpt-soft"><?php echo htmlspecialchars($featuredBlog['excerpt']); ?></p>
                            <div class="featured-meta-soft">
                                <span><i class="far fa-calendar"></i>
                                    <?php echo formatDate($featuredBlog['created_at']); ?></span>
                                <span><i class="far fa-clock"></i> <?php echo $featuredBlog['read_time']; ?> dk okuma</span>
                            </div>
                            <a href="blog-detail.php?slug=<?php echo $featuredBlog['slug']; ?>" class="btn-read">
                                Yazıyı Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        $displayBlogs = array_filter($blogs, function ($blog) use ($featuredBlog) {
            return !$featuredBlog || $blog['id'] !== $featuredBlog['id'];
        });
        $displayBlogs = array_values($displayBlogs);
        ?>

        <?php if (empty($displayBlogs) && empty($featuredBlog)): ?>
            <div class="empty-soft" data-aos="fade-up">
                <i class="fas fa-feather-alt"></i>
                <h3>Henüz blog yazısı yok</h3>
                <p>Yakında yeni içerikler eklenecek!</p>
            </div>
        <?php else: ?>
            <!-- Blog Grid -->
            <div class="blog-grid-soft">
                <?php foreach ($displayBlogs as $index => $blog): ?>
                    <article class="blog-card-soft" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                        <div class="card-img-soft">
                            <img src="<?php echo htmlspecialchars($blog['image'] ?: 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=600'); ?>"
                                alt="<?php echo htmlspecialchars($blog['title']); ?>" loading="lazy">
                            <span class="card-cat-soft"><?php echo htmlspecialchars($blog['category']); ?></span>
                        </div>
                        <div class="card-body-soft">
                            <div class="card-meta-soft">
                                <span><i class="far fa-calendar"></i> <?php echo formatDate($blog['created_at']); ?></span>
                                <span><i class="far fa-clock"></i> <?php echo $blog['read_time']; ?> dk</span>
                            </div>
                            <h3 class="card-title-soft">
                                <a href="blog-detail.php?slug=<?php echo $blog['slug']; ?>">
                                    <?php echo htmlspecialchars($blog['title']); ?>
                                </a>
                            </h3>
                            <p class="card-excerpt-soft">
                                <?php echo htmlspecialchars(substr($blog['excerpt'], 0, 100) . (strlen($blog['excerpt']) > 100 ? '...' : '')); ?>
                            </p>
                            <div class="card-footer-soft">
                                <div class="author-soft">
                                    <div class="author-avatar-soft">
                                        <?php echo strtoupper(substr($blog['author'], 0, 1)); ?>
                                    </div>
                                    <span><?php echo htmlspecialchars($blog['author']); ?></span>
                                </div>
                                <a href="blog-detail.php?slug=<?php echo $blog['slug']; ?>" class="read-link-soft">
                                    Oku <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter-soft">
    <div class="container">
        <div class="newsletter-box-soft" data-aos="fade-up">
            <div class="newsletter-content-soft">
                <h3>Bültenimize Katılın</h3>
                <p>Haftalık dijital içeriklerimizi e-postanıza alın</p>
                <form class="newsletter-form-soft">
                    <input type="email" placeholder="E-posta adresiniz" required>
                    <button type="submit">Abone Ol</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>