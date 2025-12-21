<?php
require_once 'includes/auth.php';
requireLogin();

$id = intval($_GET['id'] ?? 0);
$blog = getBlogById($id);

if (!$blog) {
    header('Location: blogs.php');
    exit;
}

$pageTitle = 'Blog Düzenle';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $excerpt = trim($_POST['excerpt'] ?? '');
    $category = trim($_POST['category'] ?? 'Genel');
    $author = trim($_POST['author'] ?? 'Veddia Media');
    $read_time = intval($_POST['read_time'] ?? 5);
    $status = $_POST['status'] ?? 'published';
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;

    $slug = $blog['slug'];
    if ($title !== $blog['title']) {
        $slug = createSlug($title);
        if (!isSlugUnique($slug, $id)) {
            $slug = $slug . '-' . time();
        }
    }

    // Görsel
    $image = $blog['image'];
    if (!empty($_FILES['image']['name'])) {
        $uploadDir = '../uploads/blog/';
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($ext, $allowed)) {
            $fileName = uniqid() . '.' . $ext;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName)) {
                $image = 'uploads/blog/' . $fileName;
            }
        }
    }

    if (empty($title)) {
        $error = 'Başlık zorunludur!';
    }

    if (empty($error)) {
        updateBlog($id, [
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'excerpt' => $excerpt,
            'category' => $category,
            'author' => $author,
            'read_time' => $read_time,
            'status' => $status,
            'is_featured' => $is_featured,
            'image' => $image
        ]);

        header('Location: blogs.php?updated=1');
        exit;
    }
}

include 'includes/header.php';
?>

<div class="admin-header">
    <h1>Blog Düzenle</h1>
    <a href="blogs.php" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Geri Dön</a>
</div>

<?php if ($error): ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Başlık *</label>
                <input type="text" name="title" class="form-control"
                    value="<?php echo htmlspecialchars($blog['title']); ?>" required>
            </div>

            <div class="form-group">
                <label>Özet</label>
                <textarea name="excerpt" class="form-control"
                    rows="2"><?php echo htmlspecialchars($blog['excerpt']); ?></textarea>
            </div>

            <div class="form-group">
                <label>İçerik</label>
                <textarea name="content" class="form-control"
                    rows="10"><?php echo htmlspecialchars($blog['content']); ?></textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category" class="form-control">
                        <?php
                        $cats = ['Web Tasarım', 'Dijital Pazarlama', 'SEO', 'Sosyal Medya', 'E-Ticaret', 'Teknoloji', 'Genel'];
                        foreach ($cats as $cat): ?>
                            <option <?php echo $blog['category'] === $cat ? 'selected' : ''; ?>><?php echo $cat; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Yazar</label>
                    <input type="text" name="author" class="form-control"
                        value="<?php echo htmlspecialchars($blog['author']); ?>">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Okuma Süresi (dk)</label>
                    <input type="number" name="read_time" class="form-control"
                        value="<?php echo $blog['read_time']; ?>">
                </div>

                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="published" <?php echo $blog['status'] === 'published' ? 'selected' : ''; ?>>Yayında
                        </option>
                        <option value="draft" <?php echo $blog['status'] === 'draft' ? 'selected' : ''; ?>>Taslak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Görsel</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <?php if ($blog['image']): ?>
                        <small style="color: #64748b;">Mevcut: <?php echo basename($blog['image']); ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_featured" value="1" <?php echo $blog['is_featured'] ? 'checked' : ''; ?>>
                    <span>Öne Çıkan Blog</span>
                </label>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Güncelle</button>
        </div>
    </div>
</form>

</main>
</div>
</body>

</html>