<?php
/**
 * Blog Listesi
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Blog Yazıları';

// Blogları getir
$allBlogs = loadBlogs();

// Filtreleme
$status = $_GET['status'] ?? '';
$category = $_GET['category'] ?? '';

$blogs = $allBlogs;

if ($status) {
    $blogs = array_filter($blogs, fn($b) => $b['status'] === $status);
}

if ($category) {
    $blogs = array_filter($blogs, fn($b) => $b['category'] === $category);
}

// Tarihe göre sırala (en yeni önce)
usort($blogs, fn($a, $b) => strtotime($b['created_at']) - strtotime($a['created_at']));

// Kategorileri al
$categories = array_unique(array_column($allBlogs, 'category'));
sort($categories);

// Mesajlar
$success = $_GET['success'] ?? '';
$error = $_GET['error'] ?? '';

include 'includes/header.php';
?>

<!-- Header -->
<div class="admin-header">
    <h1><i class="fas fa-newspaper me-2"></i>Blog Yazıları</h1>
    <div class="header-actions">
        <a href="blog-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Blog Ekle
        </a>
    </div>
</div>

<?php if ($success): ?>
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i>
        <?php
        switch ($success) {
            case 'added':
                echo 'Blog başarıyla eklendi!';
                break;
            case 'updated':
                echo 'Blog başarıyla güncellendi!';
                break;
            case 'deleted':
                echo 'Blog başarıyla silindi!';
                break;
        }
        ?>
    </div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle"></i>
        Bir hata oluştu: <?php echo htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

<!-- Filters -->
<div class="content-card" style="margin-bottom: 20px;">
    <div class="card-body" style="padding: 15px 25px;">
        <form method="GET" style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
            <select name="status" class="form-control" style="width: auto; min-width: 150px;">
                <option value="">Tüm Durumlar</option>
                <option value="published" <?php echo $status === 'published' ? 'selected' : ''; ?>>Yayında</option>
                <option value="draft" <?php echo $status === 'draft' ? 'selected' : ''; ?>>Taslak</option>
            </select>

            <select name="category" class="form-control" style="width: auto; min-width: 150px;">
                <option value="">Tüm Kategoriler</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?php echo htmlspecialchars($cat); ?>" <?php echo $category === $cat ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($cat); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-outline btn-sm">
                <i class="fas fa-filter"></i> Filtrele
            </button>

            <?php if ($status || $category): ?>
                <a href="blogs.php" class="btn btn-outline btn-sm">
                    <i class="fas fa-times"></i> Temizle
                </a>
            <?php endif; ?>
        </form>
    </div>
</div>

<!-- Blog List -->
<div class="content-card">
    <div class="card-header">
        <h2>Tüm Bloglar (<?php echo count($blogs); ?>)</h2>
    </div>

    <?php if (empty($blogs)): ?>
        <div class="empty-state">
            <i class="fas fa-newspaper"></i>
            <h3>Blog bulunamadı</h3>
            <p>Filtreleri değiştirin veya yeni bir blog ekleyin.</p>
            <a href="blog-add.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Blog Ekle
            </a>
        </div>
    <?php else: ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 80px;">Görsel</th>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Durum</th>
                    <th>Öne Çıkan</th>
                    <th>Görüntüleme</th>
                    <th>Tarih</th>
                    <th style="width: 120px;">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blogs as $blog): ?>
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
                        <td>
                            <span class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></span>
                            <br>
                            <small style="color: #9ca3af;">/blog/<?php echo htmlspecialchars($blog['slug']); ?></small>
                        </td>
                        <td><span class="badge badge-primary"><?php echo htmlspecialchars($blog['category']); ?></span></td>
                        <td>
                            <?php if ($blog['status'] === 'published'): ?>
                                <span class="badge badge-success">Yayında</span>
                            <?php else: ?>
                                <span class="badge badge-warning">Taslak</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($blog['is_featured']): ?>
                                <i class="fas fa-star" style="color: #f59e0b;"></i>
                            <?php else: ?>
                                <i class="far fa-star" style="color: #d1d5db;"></i>
                            <?php endif; ?>
                        </td>
                        <td><?php echo number_format($blog['views']); ?></td>
                        <td><?php echo formatDate($blog['created_at']); ?></td>
                        <td>
                            <div class="action-btns">
                                <a href="../blog-detail.php?slug=<?php echo $blog['slug']; ?>" target="_blank"
                                    class="btn btn-outline btn-sm" title="Görüntüle">
                                    <i class="fas fa-eye"></i>
                                </a>
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