<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Yeni Blog Ekle';
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $excerpt = trim($_POST['excerpt'] ?? '');
    $category = trim($_POST['category'] ?? 'Genel');
    $author = trim($_POST['author'] ?? 'Veddia Media');
    $read_time = intval($_POST['read_time'] ?? 5);
    $status = $_POST['status'] ?? 'published';
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;

    $slug = createSlug($title);

    // Görsel yükleme
    $image = '';
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
    } elseif (!isSlugUnique($slug)) {
        $slug = $slug . '-' . time();
    }

    if (empty($error)) {
        addBlog([
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

        header('Location: blogs.php?success=1');
        exit;
    }
}

include 'includes/header.php';
?>

<div class="admin-header">
    <h1>Yeni Blog Ekle</h1>
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
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Özet</label>
                <textarea name="excerpt" class="form-control" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label>İçerik</label>
                <textarea name="content" class="form-control" rows="10"></textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category" class="form-control">
                        <option>Web Tasarım</option>
                        <option>Dijital Pazarlama</option>
                        <option>SEO</option>
                        <option>Sosyal Medya</option>
                        <option>E-Ticaret</option>
                        <option>Teknoloji</option>
                        <option>Genel</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Yazar</label>
                    <input type="text" name="author" class="form-control" value="Veddia Media">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label>Okuma Süresi (dk)</label>
                    <input type="number" name="read_time" class="form-control" value="5">
                </div>

                <div class="form-group">
                    <label>Durum</label>
                    <select name="status" class="form-control">
                        <option value="published">Yayınla</option>
                        <option value="draft">Taslak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Görsel</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_featured" value="1">
                    <span>Öne Çıkan Blog</span>
                </label>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Kaydet</button>
        </div>
    </div>
</form>

</main>
</div>
</body>

</html>