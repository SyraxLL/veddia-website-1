<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Blog Yazıları';
$blogs = loadBlogs();

include 'includes/header.php';
?>

<div class="admin-header">
    <h1>Blog Yazıları</h1>
    <a href="blog-add.php" class="btn btn-primary"><i class="fas fa-plus"></i> Yeni Blog</a>
</div>

<div class="card">
    <div class="card-body" style="padding: 0;">
        <?php if (empty($blogs)): ?>
            <p style="padding: 40px; text-align: center; color: #64748b;">Henüz blog yazısı yok. <a href="blog-add.php"
                    style="color: #14b8a6;">İlk blogu ekleyin</a></p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Görüntüleme</th>
                        <th>Durum</th>
                        <th>Tarih</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $blog): ?>
                        <tr>
                            <td>
                                <strong><?php echo htmlspecialchars($blog['title']); ?></strong>
                                <?php if ($blog['is_featured']): ?><span class="badge badge-success"
                                        style="margin-left: 5px;">Öne Çıkan</span><?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($blog['category']); ?></td>
                            <td><?php echo number_format($blog['views']); ?></td>
                            <td>
                                <span
                                    class="badge <?php echo $blog['status'] === 'published' ? 'badge-success' : 'badge-warning'; ?>">
                                    <?php echo $blog['status'] === 'published' ? 'Yayında' : 'Taslak'; ?>
                                </span>
                            </td>
                            <td><?php echo formatDate($blog['created_at']); ?></td>
                            <td>
                                <a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-outline"
                                    style="padding: 6px 12px;"><i class="fas fa-edit"></i></a>
                                <a href="blog-delete.php?id=<?php echo $blog['id']; ?>" class="btn btn-danger"
                                    style="padding: 6px 12px;"
                                    onclick="return confirm('Bu blogu silmek istediğinize emin misiniz?');"><i
                                        class="fas fa-trash"></i></a>
                            </td>
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