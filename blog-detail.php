<?php
require_once 'includes/database.php';

$slug = $_GET['slug'] ?? '';
if (empty($slug)) {
    header('Location: blog.php');
    exit;
}

$blog = getBlogBySlug($slug);
if (!$blog || $blog['status'] !== 'published') {
    header('Location: blog.php');
    exit;
}

incrementViews($blog['id']);
$blog['views']++;

$pageTitle = $blog['title'];
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
        background: radial-gradient(circle at 20% 80%, rgba(20, 184, 166, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.15) 0%, transparent 50%);
    }

    .blog-detail-hero .container {
        position: relative;
        z-index: 2;
    }

    .blog-detail-category {
        display: inline-block;
        background: rgba(20, 184, 166, 0.2);
        border: 1px solid rgba(20, 184, 166, 0.3);
        color: #5eead4;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .blog-detail-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 25px;
        line-height: 1.3;
    }

    .blog-detail-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        color: #94a3b8;
        font-size: 0.95rem;
        justify-content: center;
    }

    .blog-detail-meta i {
        color: #14b8a6;
    }

    .blog-content-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .blog-content-card {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 20px;
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

    .blog-share {
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #e5e7eb;
    }

    .blog-share h4 {
        color: #64748b;
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
        transition: all 0.3s;
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

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #14b8a6;
        text-decoration: none;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .back-btn:hover {
        color: #0d9488;
    }

    @media (max-width: 768px) {
        .blog-detail-title {
            font-size: 1.8rem;
        }

        .blog-content-card {
            padding: 30px 20px;
        }
    }
</style>

<section class="blog-detail-hero text-center">
    <div class="container" style="padding: 180px 0 100px;">
        <span class="blog-detail-category"><?php echo htmlspecialchars($blog['category']); ?></span>
        <h1 class="blog-detail-title"><?php echo htmlspecialchars($blog['title']); ?></h1>
        <div class="blog-detail-meta">
            <span><i class="fas fa-user"></i> <?php echo htmlspecialchars($blog['author']); ?></span>
            <span><i class="fas fa-calendar-alt"></i> <?php echo formatDate($blog['created_at']); ?></span>
            <span><i class="fas fa-clock"></i> <?php echo $blog['read_time']; ?> dk okuma</span>
            <span><i class="fas fa-eye"></i> <?php echo number_format($blog['views']); ?> görüntüleme</span>
        </div>
    </div>
</section>

<section class="blog-content-section">
    <div class="container">
        <a href="blog.php" class="back-btn"><i class="fas fa-arrow-left"></i> Bloga Dön</a>
        <div class="blog-content-card">
            <?php if ($blog['image']): ?>
                <img src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>"
                    style="width: 100%; border-radius: 12px; margin-bottom: 30px;">
            <?php endif; ?>

            <div class="blog-content">
                <?php echo nl2br(htmlspecialchars($blog['content'])); ?>
            </div>

            <div class="blog-share">
                <h4>Bu yazıyı paylaşın</h4>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                        target="_blank" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($blog['title']); ?>"
                        target="_blank" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                        target="_blank" class="share-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/?text=<?php echo urlencode($blog['title'] . ' - https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                        target="_blank" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>