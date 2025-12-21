<?php
/**
 * Blog Düzenle
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Blog Düzenle';
$error = '';

// Blog ID kontrolü
$id = intval($_GET['id'] ?? 0);

if (!$id) {
    header('Location: blogs.php?error=invalid_id');
    exit;
}

// Blog'u getir
$blog = getBlogById($id);

if (!$blog) {
    header('Location: blogs.php?error=not_found');
    exit;
}

// Kategoriler
$defaultCategories = ['Web Tasarım', 'Dijital Pazarlama', 'SEO', 'Sosyal Medya', 'E-Ticaret', 'Grafik Tasarım', 'Genel'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $excerpt = trim($_POST['excerpt'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $category = trim($_POST['category'] ?? 'Genel');
    $image = trim($_POST['image'] ?? '');
    $author = trim($_POST['author'] ?? 'Admin');
    $read_time = intval($_POST['read_time'] ?? 5);
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    $status = $_POST['status'] ?? 'published';

    // Validasyon
    if (empty($title)) {
        $error = 'Blog başlığı gereklidir.';
    } else {
        // Başlık değiştiyse slug'ı güncelle
        if ($title !== $blog['title']) {
            $slug = createSlug($title);

            // Slug benzersiz mi kontrol et (kendisi hariç)
            if (!isSlugUnique($slug, $id)) {
                $slug .= '-' . time();
            }
        } else {
            $slug = $blog['slug'];
        }

        try {
            updateBlog($id, [
                'title' => $title,
                'slug' => $slug,
                'excerpt' => $excerpt,
                'content' => $content,
                'category' => $category,
                'image' => $image,
                'author' => $author,
                'read_time' => $read_time,
                'is_featured' => $is_featured,
                'status' => $status
            ]);

            header('Location: blogs.php?success=updated');
            exit;
        } catch (Exception $e) {
            $error = 'Hata: ' . $e->getMessage();
        }
    }
} else {
    // Formu mevcut verilerle doldur
    $_POST = $blog;
}

include 'includes/header.php';
?>

<!-- Header -->
<div class="admin-header">
    <h1><i class="fas fa-edit me-2"></i>Blog Düzenle</h1>
    <div class="header-actions">
        <a href="../blog-detail.php?slug=<?php echo $blog['slug']; ?>" target="_blank" class="btn btn-outline">
            <i class="fas fa-eye"></i> Önizle
        </a>
        <a href="blogs.php" class="btn btn-outline">
            <i class="fas fa-arrow-left"></i> Geri Dön
        </a>
    </div>
</div>

<?php if ($error): ?>
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle"></i> <?php echo htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

<div class="content-card">
    <div class="card-header">
        <h2>Blog Bilgileri</h2>
        <span class="badge <?php echo $blog['status'] === 'published' ? 'badge-success' : 'badge-warning'; ?>">
            <?php echo $blog['status'] === 'published' ? 'Yayında' : 'Taslak'; ?>
        </span>
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Blog Başlığı *</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="<?php echo htmlspecialchars($_POST['title'] ?? ''); ?>" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" id="category" name="category">
                        <?php foreach ($defaultCategories as $cat): ?>
                            <option value="<?php echo $cat; ?>" <?php echo ($_POST['category'] ?? '') === $cat ? 'selected' : ''; ?>>
                                <?php echo $cat; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="author">Yazar</label>
                    <input type="text" class="form-control" id="author" name="author"
                        value="<?php echo htmlspecialchars($_POST['author'] ?? 'Admin'); ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Görsel URL</label>
                <input type="url" class="form-control" id="image" name="image"
                    value="<?php echo htmlspecialchars($_POST['image'] ?? ''); ?>"
                    placeholder="https://example.com/image.jpg">
                <?php if (!empty($_POST['image'])): ?>
                    <div style="margin-top: 10px;">
                        <img src="<?php echo htmlspecialchars($_POST['image']); ?>" alt="Önizleme"
                            style="max-width: 200px; border-radius: 8px;">
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="excerpt">Kısa Özet</label>
                <textarea class="form-control" id="excerpt" name="excerpt"
                    rows="3"><?php echo htmlspecialchars($_POST['excerpt'] ?? ''); ?></textarea>
            </div>

            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea class="form-control" id="content" name="content"
                    rows="15"><?php echo htmlspecialchars($_POST['content'] ?? ''); ?></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="read_time">Okuma Süresi (dakika)</label>
                    <input type="number" class="form-control" id="read_time" name="read_time"
                        value="<?php echo htmlspecialchars($_POST['read_time'] ?? '5'); ?>" min="1" max="60">
                </div>

                <div class="form-group">
                    <label for="status">Durum</label>
                    <select class="form-control" id="status" name="status">
                        <option value="published" <?php echo ($_POST['status'] ?? '') === 'published' ? 'selected' : ''; ?>>Yayınla</option>
                        <option value="draft" <?php echo ($_POST['status'] ?? '') === 'draft' ? 'selected' : ''; ?>>Taslak
                        </option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-check">
                    <input type="checkbox" name="is_featured" value="1" <?php echo !empty($_POST['is_featured']) ? 'checked' : ''; ?>>
                    <span>Öne Çıkan Blog (Ana sayfada büyük gösterilir)</span>
                </label>
            </div>

            <div style="display: flex; gap: 15px; margin-top: 30px; justify-content: space-between;">
                <div style="display: flex; gap: 15px;">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Değişiklikleri Kaydet
                    </button>
                    <a href="blogs.php" class="btn btn-outline">
                        İptal
                    </a>
                </div>
                <a href="blog-delete.php?id=<?php echo $id; ?>" class="btn btn-danger"
                    onclick="return confirm('Bu blogu silmek istediğinize emin misiniz?');">
                    <i class="fas fa-trash"></i> Sil
                </a>
            </div>
        </form>
    </div>
</div>

<div class="content-card" style="margin-top: 20px;">
    <div class="card-body" style="padding: 15px 25px;">
        <div style="display: flex; gap: 30px; color: #6b7280; font-size: 0.9rem;">
            <span><i class="fas fa-calendar-plus me-1"></i> Oluşturulma:
                <?php echo formatDate($blog['created_at']); ?></span>
            <span><i class="fas fa-calendar-check me-1"></i> Güncelleme:
                <?php echo formatDate($blog['updated_at']); ?></span>
            <span><i class="fas fa-eye me-1"></i> Görüntüleme: <?php echo number_format($blog['views']); ?></span>
        </div>
    </div>
</div>

</main>
</body>

</html>