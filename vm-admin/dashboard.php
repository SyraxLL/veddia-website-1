<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Dashboard';
$stats = getBlogStats();

include 'includes/header.php';
?>

<div class="admin-header">
    <h1>Dashboard</h1>
    <a href="blog-add.php" class="btn btn-primary"><i class="fas fa-plus"></i> Yeni Blog</a>
</div>

<div class="stats-grid">
    <div class="stat-card primary">
        <h3><?php echo $stats['total']; ?></h3>
        <p>Toplam Blog</p>
    </div>
    <div class="stat-card purple">
        <h3><?php echo $stats['published']; ?></h3>
        <p>Yayında</p>
    </div>
    <div class="stat-card orange">
        <h3><?php echo $stats['draft']; ?></h3>
        <p>Taslak</p>
    </div>
    <div class="stat-card blue">
        <h3><?php echo number_format($stats['views']); ?></h3>
        <p>Toplam Görüntüleme</p>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fas fa-clock"></i> Son Bloglar
    </div>
    <div class="card-body" style="padding: 0;">
        <?php $recentBlogs = array_slice(loadBlogs(), 0, 5); ?>
        <?php if (empty($recentBlogs)): ?>
            <p style="padding: 30px; text-align: center; color: #64748b;">Henüz blog yazısı yok.</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Durum</th>
                        <th>Tarih</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recentBlogs as $blog): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($blog['title']); ?></td>
                            <td><?php echo htmlspecialchars($blog['category']); ?></td>
                            <td>
                                <span
                                    class="badge <?php echo $blog['status'] === 'published' ? 'badge-success' : 'badge-warning'; ?>">
                                    <?php echo $blog['status'] === 'published' ? 'Yayında' : 'Taslak'; ?>
                                </span>
                            </td>
                            <td><?php echo formatDate($blog['created_at']); ?></td>
                            <td><a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline"
                                    style="padding: 6px 12px;">Düzenle</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

</main>
</div>
</body>

</html>