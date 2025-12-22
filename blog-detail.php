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

// Diğer blogları al (mevcut hariç)
$allBlogs = getPublishedBlogs();
$otherBlogs = array_filter($allBlogs, fn($b) => $b['id'] !== $blog['id']);
$otherBlogs = array_slice($otherBlogs, 0, 5); // Son 5 blog

$pageTitle = $blog['title'];
include 'includes/header.php';
?>

<style>
    .blog-detail-hero {
        position: relative;
        min-height: 42vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8fafc;
        overflow: hidden;
    }

    /* =========================================
       LIGHT REFRACTION EFFECT
       ========================================= */

    /* Main refraction beam */
    .blog-detail-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 120%;
        height: 200%;
        background: linear-gradient(135deg,
                transparent 0%,
                transparent 30%,
                rgba(255, 255, 255, 0.1) 32%,
                rgba(249, 115, 22, 0.1) 35%,
                rgba(234, 179, 8, 0.1) 38%,
                rgba(34, 197, 94, 0.1) 42%,
                rgba(6, 182, 212, 0.15) 48%,
                rgba(59, 130, 246, 0.15) 52%,
                rgba(139, 92, 246, 0.1) 58%,
                rgba(236, 72, 153, 0.05) 62%,
                transparent 65%,
                transparent 100%);
        transform: rotate(-15deg);
        filter: blur(40px);
        z-index: 1;
        pointer-events: none;
        animation: refractionShift 15s ease-in-out infinite alternate;
    }

    /* Secondary refraction */
    .blog-detail-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -30%;
        width: 100%;
        height: 150%;
        background: linear-gradient(-45deg,
                transparent 0%,
                transparent 40%,
                rgba(20, 184, 166, 0.1) 45%,
                rgba(99, 102, 241, 0.1) 50%,
                rgba(236, 72, 153, 0.05) 55%,
                transparent 60%,
                transparent 100%);
        transform: rotate(10deg);
        filter: blur(60px);
        z-index: 1;
        pointer-events: none;
        animation: refractionShift 20s ease-in-out infinite alternate-reverse;
    }

    @keyframes refractionShift {
        0% {
            opacity: 0.5;
            transform: rotate(-15deg) translateX(0);
        }

        100% {
            opacity: 0.8;
            transform: rotate(-15deg) translateX(30px);
        }
    }

    .blog-detail-hero .container {
        position: relative;
        z-index: 2;
    }


    /* Breadcrumb */
    .blog-breadcrumb {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 24px;
        font-size: 0.85rem;
    }

    .blog-breadcrumb a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }

    .blog-breadcrumb a:hover {
        color: #3b82f6;
    }

    .blog-breadcrumb span {
        color: #94a3b8;
    }

    .blog-breadcrumb .current {
        color: #1e293b;
        font-weight: 500;
    }

    .blog-detail-category {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(59, 130, 246, 0.08);
        /* Soft Brand Color */
        border: 1px solid rgba(59, 130, 246, 0.2);
        color: #2563eb;
        padding: 10px 24px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 24px;
        backdrop-filter: blur(10px);
    }

    .blog-detail-category i {
        font-size: 0.75rem;
    }

    .blog-detail-title {
        font-size: clamp(1.8rem, 4vw, 2.8rem);
        font-weight: 800;
        margin-bottom: 28px;
        line-height: 1.25;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        text-shadow: none;

        /* Gradient Text Style */
        background: linear-gradient(135deg, #0f766e, #0ea5e9, #4f46e5);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    /* Highlight'ı da uyumlu yap veya kaldır (zaten başlık renkli olduğu için gerek kalmayabilir ama ton farkı için tutuyorum) */
    .blog-detail-title .highlight {
        background: linear-gradient(135deg, #14b8a6, #38bdf8, #818cf8);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Meta Card - Glassmorphism Light */
    .blog-meta-card {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 24px;
        justify-content: center;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 16px;
        padding: 16px 32px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.05);
        /* Soft Shadow */
    }

    .blog-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #1e293b;
        font-size: 0.9rem;
    }

    .blog-meta-item i {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(59, 130, 246, 0.1);
        border-radius: 8px;
        color: #3b82f6;
        font-size: 0.8rem;
    }

    .blog-meta-item .label {
        font-size: 0.7rem;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .blog-meta-item .value {
        font-weight: 600;
    }


    .blog-content-section {
        padding: 60px 0;
        background: #f8fafc;
    }


    .blog-layout {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 40px;
        align-items: start;
    }

    .blog-content-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
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
        font-size: 0.95rem;
    }

    .share-buttons {
        display: flex;
        gap: 10px;
    }

    .share-btn {
        width: 42px;
        height: 42px;
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
        color: #6366f1;
        text-decoration: none;
        margin-bottom: 24px;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .back-btn:hover {
        color: #4f46e5;
    }

    /* Sidebar */
    .blog-sidebar {
        position: sticky;
        top: 100px;
    }

    .sidebar-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
    }

    .sidebar-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #6366f1);
    }

    .sidebar-card h3 {
        font-size: 1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .sidebar-card h3 i {
        color: #6366f1;
    }

    .other-blog-item {
        display: block;
        padding: 12px 0;
        border-bottom: 1px solid #f1f5f9;
        text-decoration: none;
        transition: all 0.2s;
    }

    .other-blog-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .other-blog-item:hover {
        padding-left: 8px;
    }

    .other-blog-item h4 {
        font-size: 0.9rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 4px;
        line-height: 1.4;
        transition: color 0.2s;
    }

    .other-blog-item:hover h4 {
        color: #6366f1;
    }

    .other-blog-item span {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .contact-links {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .contact-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        background: #f8fafc;
        border-radius: 10px;
        text-decoration: none;
        color: #1e293b;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s;
    }

    .contact-link:hover {
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(20, 184, 166, 0.1) 100%);
        transform: translateX(4px);
    }

    .contact-link i {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #6366f1, #14b8a6);
        border-radius: 8px;
        color: white;
        font-size: 0.85rem;
    }

    .cta-sidebar {
        background: white;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        color: #1e293b;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
    }

    .cta-sidebar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        /* Sadece üstte çizgi */
        background: linear-gradient(90deg, #3b82f6, #6366f1);
    }

    .cta-sidebar h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 12px;
        position: relative;
        z-index: 1;
    }

    .cta-sidebar p {
        font-size: 0.9rem;
        color: #64748b;
        /* Koyu tema gri */
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
        line-height: 1.6;
    }

    .cta-sidebar .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        padding: 14px 28px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        width: 100%;
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);

    }

    .cta-sidebar .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }

    @media (max-width: 992px) {
        .blog-layout {
            grid-template-columns: 1fr;
        }

        .blog-sidebar {
            position: static;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .cta-sidebar {
            grid-column: span 2;
        }

        .blog-meta-card {
            gap: 16px;
            padding: 14px 20px;
        }

        .hero-orb {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .blog-detail-hero {
            min-height: auto;
        }

        .blog-detail-title {
            font-size: 1.5rem;
        }

        .blog-meta-card {
            flex-direction: column;
            gap: 12px;
            padding: 16px;
        }

        .blog-meta-item {
            justify-content: flex-start;
            width: 100%;
        }

        .blog-breadcrumb {
            font-size: 0.75rem;
        }

        .blog-content-card {
            padding: 24px;
        }

        .blog-sidebar {
            grid-template-columns: 1fr;
        }

        .cta-sidebar {
            grid-column: span 1;
        }
    }
</style>

<section class="blog-detail-hero text-center">
    <div class="container" style="padding: 130px 0 50px;">
        <!-- Breadcrumb -->
        <div class="blog-breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i></a>
            <span>/</span>
            <a href="blog.php">Blog</a>
            <span>/</span>
            <span class="current"><?php echo htmlspecialchars(mb_substr($blog['title'], 0, 30)); ?>...</span>
        </div>

        <!-- Category Badge -->
        <span class="blog-detail-category">
            <i class="fas fa-folder"></i>
            <?php echo htmlspecialchars($blog['category']); ?>
        </span>

        <!-- Title -->
        <h1 class="blog-detail-title"><?php echo htmlspecialchars($blog['title']); ?></h1>

        <!-- Meta Card -->
        <div class="blog-meta-card">
            <div class="blog-meta-item">
                <i class="fas fa-user"></i>
                <div>
                    <div class="label">Yazar</div>
                    <div class="value"><?php echo htmlspecialchars($blog['author']); ?></div>
                </div>
            </div>
            <div class="blog-meta-item">
                <i class="fas fa-calendar-alt"></i>
                <div>
                    <div class="label">Tarih</div>
                    <div class="value"><?php echo formatDate($blog['created_at']); ?></div>
                </div>
            </div>
            <div class="blog-meta-item">
                <i class="fas fa-clock"></i>
                <div>
                    <div class="label">Okuma</div>
                    <div class="value"><?php echo $blog['read_time']; ?> dakika</div>
                </div>
            </div>
            <div class="blog-meta-item">
                <i class="fas fa-eye"></i>
                <div>
                    <div class="label">Görüntüleme</div>
                    <div class="value"><?php echo number_format($blog['views']); ?></div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="blog-content-section">
    <div class="container">
        <a href="blog.php" class="back-btn"><i class="fas fa-arrow-left"></i> Tüm Yazılar</a>

        <div class="blog-layout">
            <!-- Main Content -->
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

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- Other Blogs -->
                <?php if (!empty($otherBlogs)): ?>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-newspaper"></i> Diğer Yazılar</h3>
                        <?php foreach ($otherBlogs as $otherBlog): ?>
                            <a href="blog-detail.php?slug=<?php echo $otherBlog['slug']; ?>" class="other-blog-item">
                                <h4><?php echo htmlspecialchars($otherBlog['title']); ?></h4>
                                <span><i class="fas fa-clock"></i> <?php echo $otherBlog['read_time']; ?> dk •
                                    <?php echo formatDate($otherBlog['created_at']); ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Contact Links -->
                <div class="sidebar-card">
                    <h3><i class="fas fa-link"></i> Hızlı Linkler</h3>
                    <div class="contact-links">
                        <a href="contact.php" class="contact-link">
                            <i class="fas fa-envelope"></i>
                            <span>Bize Ulaşın</span>
                        </a>
                        <a href="index.php#services" class="contact-link">
                            <i class="fas fa-briefcase"></i>
                            <span>Hizmetlerimiz</span>
                        </a>
                        <a href="referans.php" class="contact-link">
                            <i class="fas fa-star"></i>
                            <span>Referans</span>
                        </a>
                    </div>
                </div>

                <!-- CTA -->
                <div class="cta-sidebar">
                    <h3>Projeniz mi var?</h3>
                    <p>Dijital dünyada fark yaratmaya hazır mısınız?</p>
                    <a href="contact.php" class="btn">
                        <i class="far fa-paper-plane"></i> Hemen Teklif Alın
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>