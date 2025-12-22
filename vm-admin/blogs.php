<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Blog Yazıları';
$blogs = loadBlogs();

// Success message
$successMsg = isset($_GET['success']) ? 'Blog başarıyla kaydedildi!' : '';
$deleteMsg = isset($_GET['deleted']) ? 'Blog silindi!' : '';

include 'includes/header.php';
?>

<div class="admin-header">
    <div>
        <h1>Blog Yazıları</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">
            Toplam <?php echo count($blogs); ?> blog yazısı
        </p>
    </div>
    <div class="header-actions">
        <a href="blog-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Blog Yazısı
        </a>
    </div>
</div>

<?php if ($successMsg): ?>
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i>
        <?php echo $successMsg; ?>
    </div>
<?php endif; ?>

<?php if ($deleteMsg): ?>
    <div class="alert alert-warning">
        <i class="fas fa-trash"></i>
        <?php echo $deleteMsg; ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body" style="padding: 0;">
        <?php if (empty($blogs)): ?>
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3>Henüz blog yazısı yok</h3>
                <p>İlk blog yazınızı oluşturarak başlayın.</p>
                <a href="blog-add.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> İlk Blogu Ekle
                </a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Blog Yazısı</th>
                            <th>Kategori</th>
                            <th>Görüntüleme</th>
                            <th>Durum</th>
                            <th>Tarih</th>
                            <th style="text-align: right;">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($blogs as $blog): ?>
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 14px;">
                                        <?php if (!empty($blog['image'])): ?>
                                            <img src="../<?php echo htmlspecialchars($blog['image']); ?>" alt=""
                                                style="width: 56px; height: 56px; border-radius: 12px; object-fit: cover; border: 1px solid rgba(255,255,255,0.1);">
                                        <?php else: ?>
                                            <div
                                                style="width: 56px; height: 56px; border-radius: 12px; background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.1)); display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.05);">
                                                <i class="fas fa-image" style="color: #6366f1; font-size: 1.2rem;"></i>
                                            </div>
                                        <?php endif; ?>
                                        <div>
                                            <div style="font-weight: 600; color: #e2e8f0; margin-bottom: 4px;">
                                                <?php echo htmlspecialchars($blog['title']); ?>
                                            </div>
                                            <?php if ($blog['is_featured']): ?>
                                                <span class="badge badge-info" style="font-size: 0.7rem;">
                                                    <i class="fas fa-star"></i> Öne Çıkan
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge"
                                        style="background: rgba(99, 102, 241, 0.1); color: #a5b4fc; border: 1px solid rgba(99, 102, 241, 0.2);">
                                        <?php echo htmlspecialchars($blog['category']); ?>
                                    </span>
                                </td>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 6px; color: #94a3b8;">
                                        <i class="fas fa-eye" style="font-size: 0.85rem;"></i>
                                        <?php echo number_format($blog['views']); ?>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="badge <?php echo $blog['status'] === 'published' ? 'badge-success' : 'badge-warning'; ?>">
                                        <i
                                            class="fas <?php echo $blog['status'] === 'published' ? 'fa-check' : 'fa-clock'; ?>"></i>
                                        <?php echo $blog['status'] === 'published' ? 'Yayında' : 'Taslak'; ?>
                                    </span>
                                </td>
                                <td style="color: #64748b; font-size: 0.9rem;">
                                    <?php echo formatDate($blog['created_at']); ?>
                                </td>
                                <td style="text-align: right;">
                                    <div style="display: flex; gap: 8px; justify-content: flex-end;">
                                        <a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline btn-sm"
                                            title="Düzenle">
                                            <i class="fas fa-pen"></i>
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
            </div>
        <?php endif; ?>
    </div>
</div>

</main>
</div>
</body>

</html>