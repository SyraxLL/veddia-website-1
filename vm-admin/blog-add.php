<?php
/**
 * Yeni Blog Ekle
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Yeni Blog Ekle';
$error = '';

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
        // Slug oluştur
        $slug = createSlug($title);

        // Slug benzersiz mi kontrol et
        if (!isSlugUnique($slug)) {
            $slug .= '-' . time();
        }

        try {
            addBlog([
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

            header('Location: blogs.php?success=added');
            exit;
        } catch (Exception $e) {
            $error = 'Hata: ' . $e->getMessage();
        }
    }
}

include 'includes/header.php';
?>

<!-- Header -->
<div class="admin-header">
    <h1><i class="fas fa-plus-circle me-2"></i>Yeni Blog Ekle</h1>
    <div class="header-actions">
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
    </div>
    <div class="card-body">
        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Blog Başlığı *</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="<?php echo htmlspecialchars($_POST['title'] ?? ''); ?>" required
                    placeholder="Örn: SEO Stratejileri ile Web Sitenizi Üst Sıralara Taşıyın">
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
                        value="<?php echo htmlspecialchars($_POST['author'] ?? 'Admin'); ?>" placeholder="Yazar adı">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Görsel URL</label>
                <input type="url" class="form-control" id="image" name="image"
                    value="<?php echo htmlspecialchars($_POST['image'] ?? ''); ?>"
                    placeholder="https://example.com/image.jpg">
                <small style="color: #6b7280;">Unsplash veya başka bir kaynaktan görsel URL'si girin</small>
            </div>

            <div class="form-group">
                <label for="excerpt">Kısa Özet</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3"
                    placeholder="Blog yazısının kısa bir özeti (150-200 karakter)"><?php echo htmlspecialchars($_POST['excerpt'] ?? ''); ?></textarea>
            </div>

            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea class="form-control" id="content" name="content" rows="15"
                    placeholder="Blog içeriğini buraya yazın."><?php echo htmlspecialchars($_POST['content'] ?? ''); ?></textarea>
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
                    <input type="checkbox" name="is_featured" value="1" <?php echo isset($_POST['is_featured']) ? 'checked' : ''; ?>>
                    <span>Öne Çıkan Blog (Ana sayfada büyük gösterilir)</span>
                </label>
            </div>

            <div style="display: flex; gap: 15px; margin-top: 30px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Kaydet ve Yayınla
                </button>
                <button type="submit" name="status" value="draft" class="btn btn-outline">
                    <i class="fas fa-file-alt"></i> Taslak Olarak Kaydet
                </button>
            </div>
        </form>
    </div>
</div>

</main>
</body>

</html>