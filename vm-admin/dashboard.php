<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Dashboard';
$stats = getBlogStats();

include 'includes/header.php';
?>

<div class="admin-header">
    <div>
        <h1>Dashboard</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">Hoş geldiniz! İşte blog istatistikleriniz.</p>
    </div>
    <div class="header-actions">
        <a href="blog-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Blog Yazısı
        </a>
    </div>
</div>

<div class="stats-grid">
    <div class="stat-card primary">
        <div class="stat-card-icon">
            <i class="fas fa-file-alt"></i>
        </div>
        <h3><?php echo $stats['total']; ?></h3>
        <p>Toplam Blog</p>
    </div>
    <div class="stat-card purple">
        <div class="stat-card-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h3><?php echo $stats['published']; ?></h3>
        <p>Yayında</p>
    </div>
    <div class="stat-card orange">
        <div class="stat-card-icon">
            <i class="fas fa-edit"></i>
        </div>
        <h3><?php echo $stats['draft']; ?></h3>
        <p>Taslak</p>
    </div>
    <div class="stat-card blue">
        <div class="stat-card-icon">
            <i class="fas fa-eye"></i>
        </div>
        <h3><?php echo number_format($stats['views']); ?></h3>
        <p>Toplam Görüntüleme</p>
    </div>
</div>

<!-- Quick Actions -->
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 36px;">
    <a href="blog-add.php" class="card"
        style="padding: 24px; text-decoration: none; text-align: center; transition: all 0.3s ease;">
        <div
            style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.1)); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
            <i class="fas fa-pen-to-square" style="font-size: 1.4rem; color: #818cf8;"></i>
        </div>
        <h4 style="color: #e2e8f0; font-size: 1rem; margin-bottom: 6px;">Yeni Yazı Oluştur</h4>
        <p style="color: #64748b; font-size: 0.85rem;">Hemen yeni bir blog yazısı ekleyin</p>
    </a>
    <a href="blogs.php" class="card"
        style="padding: 24px; text-decoration: none; text-align: center; transition: all 0.3s ease;">
        <div
            style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(20, 184, 166, 0.15), rgba(8, 145, 178, 0.1)); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
            <i class="fas fa-list" style="font-size: 1.4rem; color: #2dd4bf;"></i>
        </div>
        <h4 style="color: #e2e8f0; font-size: 1rem; margin-bottom: 6px;">Tüm Yazılar</h4>
        <p style="color: #64748b; font-size: 0.85rem;">Blog yazılarını görüntüle ve düzenle</p>
    </a>
    <a href="../index.php" target="_blank" class="card"
        style="padding: 24px; text-decoration: none; text-align: center; transition: all 0.3s ease;">
        <div
            style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(245, 158, 11, 0.15), rgba(234, 88, 12, 0.1)); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
            <i class="fas fa-globe" style="font-size: 1.4rem; color: #fbbf24;"></i>
        </div>
        <h4 style="color: #e2e8f0; font-size: 1rem; margin-bottom: 6px;">Siteyi Görüntüle</h4>
        <p style="color: #64748b; font-size: 0.85rem;">Web sitenizi yeni sekmede açın</p>
    </a>
</div>

<div class="card">
    <div class="card-header">
        <i class="fas fa-clock"></i> Son Blog Yazıları
    </div>
    <div class="card-body" style="padding: 0;">
        <?php $recentBlogs = array_slice(loadBlogs(), 0, 5); ?>
        <?php if (empty($recentBlogs)): ?>
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-feather-pointed"></i>
                </div>
                <h3>Henüz blog yazısı yok</h3>
                <p>İlk blog yazınızı oluşturarak başlayın.</p>
                <a href="blog-add.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> İlk Yazıyı Oluştur
                </a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Kategori</th>
                            <th>Durum</th>
                            <th>Tarih</th>
                            <th style="text-align: right;">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recentBlogs as $blog): ?>
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 12px;">
                                        <?php if (!empty($blog['image'])): ?>
                                            <img src="../uploads/<?php echo htmlspecialchars($blog['image']); ?>" alt=""
                                                style="width: 44px; height: 44px; border-radius: 10px; object-fit: cover;">
                                        <?php else: ?>
                                            <div
                                                style="width: 44px; height: 44px; border-radius: 10px; background: rgba(99, 102, 241, 0.1); display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-image" style="color: #6366f1;"></i>
                                            </div>
                                        <?php endif; ?>
                                        <span style="font-weight: 600;"><?php echo htmlspecialchars($blog['title']); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-info"><?php echo htmlspecialchars($blog['category']); ?></span>
                                </td>
                                <td>
                                    <span
                                        class="badge <?php echo $blog['status'] === 'published' ? 'badge-success' : 'badge-warning'; ?>">
                                        <i
                                            class="fas <?php echo $blog['status'] === 'published' ? 'fa-check' : 'fa-clock'; ?>"></i>
                                        <?php echo $blog['status'] === 'published' ? 'Yayında' : 'Taslak'; ?>
                                    </span>
                                </td>
                                <td style="color: #64748b;"><?php echo formatDate($blog['created_at']); ?></td>
                                <td style="text-align: right;">
                                    <a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline btn-sm">
                                        <i class="fas fa-pen"></i> Düzenle
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div style="padding: 20px; text-align: center; border-top: 1px solid rgba(255,255,255,0.05);">
                <a href="blogs.php" style="color: #6366f1; text-decoration: none; font-weight: 600; font-size: 0.9rem;">
                    Tüm Blog Yazılarını Görüntüle <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

</main>
</div>
</body>

</html>