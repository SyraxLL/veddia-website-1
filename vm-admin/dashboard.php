<?php
/**
 * Admin Dashboard
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Dashboard';

// İstatistikleri al
$blogs = loadBlogs();
$totalBlogs = count($blogs);
$publishedBlogs = count(array_filter($blogs, fn($b) => $b['status'] === 'published'));
$draftBlogs = count(array_filter($blogs, fn($b) => $b['status'] === 'draft'));
$totalViews = array_sum(array_column($blogs, 'views'));

// Son 5 blog
usort($blogs, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));
$recentBlogs = array_slice($blogs, 0, 5);

include 'includes/header.php';
?>

<!-- Header -->
<div class="admin-header">
    <h1><i class="fas fa-home me-2"></i>Dashboard</h1>
    <div class="header-actions">
        <a href="blog-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Blog Ekle
        </a>
        <div class="user-dropdown">
            <div class="user-avatar">
                <?php echo strtoupper(substr($_SESSION['admin_username'], 0, 1)); ?>
            </div>
            <span><?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
        </div>
    </div>
</div>

<!-- Stats -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon primary">
            <i class="fas fa-newspaper"></i>
        </div>
        <div class="stat-info">
            <h3><?php echo $totalBlogs; ?></h3>
            <p>Toplam Blog</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon success">
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="stat-info">
            <h3><?php echo $publishedBlogs; ?></h3>
            <p>Yayınlanan</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon warning">
            <i class="fas fa-edit"></i>
        </div>
        <div class="stat-info">
            <h3><?php echo $draftBlogs; ?></h3>
            <p>Taslak</p>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon info">
            <i class="fas fa-eye"></i>
        </div>
        <div class="stat-info">
            <h3><?php echo number_format($totalViews); ?></h3>
            <p>Toplam Görüntüleme</p>
        </div>
    </div>
</div>

<!-- Recent Blogs -->
<div class="content-card">
    <div class="card-header">
        <h2><i class="fas fa-clock me-2"></i>Son Eklenen Bloglar</h2>
        <a href="blogs.php" class="btn btn-outline btn-sm">Tümünü Gör</a>
    </div>

    <?php if (empty($recentBlogs)): ?>
        <div class="empty-state">
            <i class="fas fa-newspaper"></i>
            <h3>Henüz blog yazısı yok</h3>
            <p>İlk blog yazınızı ekleyerek başlayın!</p>
            <a href="blog-add.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Blog Ekle
            </a>
        </div>
    <?php else: ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Görsel</th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Durum</th>
                    <th>Görüntüleme</th>
                    <th>Tarih</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recentBlogs as $blog): ?>
                    <tr>
                        <td>
                            <?php if ($blog['image']): ?>
                                <img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="" class="blog-image">
                            <?php else: ?>
                                <div class="blog-image"
                                    style="background: #e5e7eb; display: flex; align-items: center; justify-content: center; width: 60px; height: 45px; border-radius: 8px;">
                                    <i class="fas fa-image" style="color: #9ca3af;"></i>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></td>
                        <td><span class="badge badge-primary"><?php echo htmlspecialchars($blog['category']); ?></span></td>
                        <td>
                            <?php if ($blog['status'] === 'published'): ?>
                                <span class="badge badge-success">Yayında</span>
                            <?php else: ?>
                                <span class="badge badge-warning">Taslak</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo number_format($blog['views']); ?></td>
                        <td><?php echo formatDate($blog['created_at']); ?></td>
                        <td>
                            <div class="action-btns">
                                <a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline btn-sm"
                                    title="Düzenle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="blog-delete.php?id=<?php echo $blog['id']; ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Bu blogu silmek istediğinize emin misiniz?');" title="Sil">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

</main>
</body>

</html>