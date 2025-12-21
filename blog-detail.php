<?php
require_once 'includes/database.php';

// Slug kontrolü
$slug = $_GET['slug'] ?? '';

if (empty($slug)) {
    header('Location: blog.php');
    exit;
}

// Blog'u getir
$blog = getBlogBySlug($slug);

if (!$blog || $blog['status'] !== 'published') {
    header('Location: blog.php');
    exit;
}

// Görüntüleme sayısını artır
incrementViews($blog['id']);
$blog['views']++; // Gösterim için

$pageTitle = $blog['title'];

// İlgili bloglar
$allBlogs = loadBlogs();
$relatedBlogs = array_filter($allBlogs, function ($b) use ($blog) {
    return $b['status'] === 'published' && $b['id'] !== $blog['id'] && $b['category'] === $blog['category'];
});
usort($relatedBlogs, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));
$relatedBlogs = array_slice($relatedBlogs, 0, 3);

include 'includes/header.php';
?>

<style>
    .blog-detail-hero {
        position: relative;
        min-height: 55vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
        overflow: hidden;
    }

    .blog-detail-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            radial-gradient(circle at 20% 80%, rgba(20, 184, 166, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(99, 102, 241, 0.1) 0%, transparent 40%);
    }

    .blog-detail-hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2314b8a6' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    /* Floating shapes */
    .hero-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .hero-shape {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        animation: float 8s ease-in-out infinite;
    }

    .hero-shape-1 {
        width: 300px;
        height: 300px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        top: -100px;
        right: -50px;
        animation-delay: 0s;
    }

    .hero-shape-2 {
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        bottom: -50px;
        left: -50px;
        animation-delay: 2s;
    }

    .hero-shape-3 {
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, #f59e0b, #ef4444);
        top: 50%;
        left: 10%;
        animation-delay: 4s;
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

    .blog-detail-hero .container {
        position: relative;
        z-index: 2;
    }

    .blog-detail-category {
        display: inline-block;
        background: linear-gradient(135deg, rgba(20, 184, 166, 0.2), rgba(14, 165, 233, 0.2));
        border: 1px solid rgba(20, 184, 166, 0.3);
        backdrop-filter: blur(10px);
        color: #5eead4;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .blog-detail-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: white;
        margin-bottom: 25px;
        line-height: 1.3;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .blog-detail-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        color: #94a3b8;
        font-size: 0.95rem;
    }

    .blog-detail-meta span {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .blog-detail-meta i {
        color: #14b8a6;
    }

    /* Content */
    .blog-content-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .blog-content-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }

    .blog-content-card {
        background: white;
        border-radius: 24px;
        padding: 50px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    }

    .blog-content {
        font-size: 1.1rem;
        line-height: 2;
        color: #374151;
    }

    .blog-content p {
        margin-bottom: 1.5rem;
    }

    .blog-content h2,
    .blog-content h3,
    .blog-content h4 {
        color: #1e293b;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .blog-content h2 {
        font-size: 1.75rem;
    }

    .blog-content h3 {
        font-size: 1.5rem;
    }

    .blog-content ul,
    .blog-content ol {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }

    .blog-content li {
        margin-bottom: 0.5rem;
    }

    .blog-content img {
        max-width: 100%;
        border-radius: 12px;
        margin: 2rem 0;
    }

    .blog-content blockquote {
        border-left: 4px solid #14b8a6;
        padding-left: 20px;
        margin: 2rem 0;
        font-style: italic;
        color: #6b7280;
    }

    .blog-content a {
        color: #14b8a6;
        text-decoration: underline;
    }

    /* Share */
    .blog-share {
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #e5e7eb;
    }

    .blog-share h4 {
        font-size: 1rem;
        color: #6b7280;
        margin-bottom: 15px;
    }

    .share-buttons {
        display: flex;
        gap: 10px;
    }

    .share-btn {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .share-btn:hover {
        transform: translateY(-3px);
        color: white;
    }

    .share-btn.facebook {
        background: #1877f2;
    }

    .share-btn.twitter {
        background: #1da1f2;
    }

    .share-btn.linkedin {
        background: #0a66c2;
    }

    .share-btn.whatsapp {
        background: #25d366;
    }

    /* Author */
    .blog-author {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 40px;
        padding: 30px;
        background: #f8fafc;
        border-radius: 16px;
    }

    .author-avatar {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #14b8a6, #0ea5e9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        font-weight: 700;
    }

    .author-info h4 {
        font-size: 1.1rem;
        color: #1e293b;
        margin-bottom: 5px;
    }

    .author-info p {
        color: #6b7280;
        margin: 0;
        font-size: 0.9rem;
    }

    /* Related Posts */
    .related-posts {
        padding: 80px 0;
        background: white;
    }

    .section-title-sm {
        font-size: 1.75rem;
        color: #1e293b;
        margin-bottom: 40px;
        text-align: center;
    }

    .related-card {
        background: #f8fafc;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .related-card-image {
        height: 180px;
        background-size: cover;
        background-position: center;
    }

    .related-card-content {
        padding: 25px;
    }

    .related-card-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .related-card-title a {
        color: inherit;
        text-decoration: none;
    }

    .related-card-title a:hover {
        color: #14b8a6;
    }

    .related-card-meta {
        font-size: 0.85rem;
        color: #6b7280;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .blog-detail-title {
            font-size: 1.8rem;
        }

        .blog-content-card {
            padding: 30px 20px;
        }

        .blog-detail-meta {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<!-- Blog Detail Hero -->
<section class="blog-detail-hero">
    <div class="hero-shapes">
        <div class="hero-shape hero-shape-1"></div>
        <div class="hero-shape hero-shape-2"></div>
        <div class="hero-shape hero-shape-3"></div>
    </div>
    <div class="container text-center" style="padding: 180px 0 100px;">
        <span class="blog-detail-category"><?php echo htmlspecialchars($blog['category']); ?></span>
        <h1 class="blog-detail-title" data-aos="fade-up"><?php echo htmlspecialchars($blog['title']); ?></h1>
        <div class="blog-detail-meta justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <span><i class="fas fa-user"></i> <?php echo htmlspecialchars($blog['author']); ?></span>
            <span><i class="fas fa-calendar-alt"></i> <?php echo formatDate($blog['created_at']); ?></span>
            <span><i class="fas fa-clock"></i> <?php echo $blog['read_time']; ?> dk okuma</span>
            <span><i class="fas fa-eye"></i> <?php echo number_format($blog['views']); ?> görüntüleme</span>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="blog-content-section">
    <div class="container">
        <div class="blog-content-wrapper">
            <div class="blog-content-card" data-aos="fade-up">
                <div class="blog-content">
                    <?php echo nl2br(htmlspecialchars($blog['content'])); ?>
                </div>

                <!-- Share -->
                <div class="blog-share">
                    <h4>Bu yazıyı paylaşın</h4>
                    <div class="share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                            target="_blank" class="share-btn facebook" title="Facebook'ta Paylaş">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($blog['title']); ?>"
                            target="_blank" class="share-btn twitter" title="Twitter'da Paylaş">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                            target="_blank" class="share-btn linkedin" title="LinkedIn'de Paylaş">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode($blog['title'] . ' - https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                            target="_blank" class="share-btn whatsapp" title="WhatsApp'ta Paylaş">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Author -->
                <div class="blog-author">
                    <div class="author-avatar">
                        <?php echo strtoupper(substr($blog['author'], 0, 1)); ?>
                    </div>
                    <div class="author-info">
                        <h4><?php echo htmlspecialchars($blog['author']); ?></h4>
                        <p>Veddia Media İçerik Ekibi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($relatedBlogs)): ?>
    <!-- Related Posts -->
    <section class="related-posts">
        <div class="container">
            <h2 class="section-title-sm">İlgili Yazılar</h2>
            <div class="row g-4">
                <?php foreach ($relatedBlogs as $related): ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <article class="related-card">
                            <div class="related-card-image"
                                style="background-image: url('<?php echo htmlspecialchars($related['image'] ?: 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=400'); ?>');">
                            </div>
                            <div class="related-card-content">
                                <h3 class="related-card-title">
                                    <a href="blog-detail.php?slug=<?php echo $related['slug']; ?>">
                                        <?php echo htmlspecialchars($related['title']); ?>
                                    </a>
                                </h3>
                                <div class="related-card-meta">
                                    <i class="fas fa-calendar-alt me-1"></i> <?php echo formatDate($related['created_at']); ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>