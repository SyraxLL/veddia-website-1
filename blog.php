<?php
$pageTitle = "Blog";
require_once 'includes/database.php';

$blogs = getPublishedBlogs();
$categories = array_unique(array_column($blogs, 'category'));
sort($categories);

$category = $_GET['category'] ?? '';
if ($category) {
    $blogs = array_filter($blogs, fn($b) => $b['category'] === $category);
}

include 'includes/header.php';
?>

<style>
    .blog-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
        padding: 160px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .blog-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 80%, rgba(20, 184, 166, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.15) 0%, transparent 50%);
    }

    .blog-hero .container {
        position: relative;
        z-index: 2;
    }

    .blog-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin-bottom: 20px;
    }

    .blog-hero h1 span {
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .blog-hero p {
        color: #94a3b8;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
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
        transition: all 0.2s;
    }

    .category-btn:hover,
    .category-btn.active {
        background: #14b8a6;
        color: white;
        border-color: #14b8a6;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .blog-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.3s;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .blog-card-img {
        height: 200px;
        background-size: cover;
        background-position: center;
        background-color: #e2e8f0;
    }

    .blog-card-body {
        padding: 25px;
    }

    .blog-card-category {
        display: inline-block;
        background: rgba(20, 184, 166, 0.1);
        color: #14b8a6;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .blog-card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .blog-card-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.2s;
    }

    .blog-card-title a:hover {
        color: #14b8a6;
    }

    .blog-card-excerpt {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .blog-card-meta {
        display: flex;
        justify-content: space-between;
        padding-top: 15px;
        border-top: 1px solid #f1f5f9;
        color: #94a3b8;
        font-size: 0.85rem;
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
        <h1 data-aos="fade-up">Dijital Dünyadan <span>İçerikler</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">Web tasarım, dijital pazarlama ve teknoloji hakkında faydalı yazılar
        </p>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php if (!empty($categories)): ?>
            <div class="category-filter" data-aos="fade-up">
                <a href="blog.php" class="category-btn <?php echo empty($category) ? 'active' : ''; ?>">Tümü</a>
                <?php foreach ($categories as $cat): ?>
                    <a href="blog.php?category=<?php echo urlencode($cat); ?>"
                        class="category-btn <?php echo $category === $cat ? 'active' : ''; ?>"><?php echo htmlspecialchars($cat); ?></a>
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
                    <article class="blog-card" data-aos="fade-up">
                        <div class="blog-card-img"
                            style="background-image: url('<?php echo $blog['image'] ?: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400'; ?>');">
                        </div>
                        <div class="blog-card-body">
                            <span class="blog-card-category"><?php echo htmlspecialchars($blog['category']); ?></span>
                            <h2 class="blog-card-title">
                                <a
                                    href="blog-detail.php?slug=<?php echo $blog['slug']; ?>"><?php echo htmlspecialchars($blog['title']); ?></a>
                            </h2>
                            <p class="blog-card-excerpt"><?php echo htmlspecialchars(substr($blog['excerpt'], 0, 120)); ?>...
                            </p>
                            <div class="blog-card-meta">
                                <span><i class="fas fa-calendar-alt"></i> <?php echo formatDate($blog['created_at']); ?></span>
                                <span><i class="fas fa-eye"></i> <?php echo number_format($blog['views']); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>