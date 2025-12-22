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
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
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
    <div>
        <h1>Yeni Blog Ekle</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">Yeni bir blog yazısı oluşturun</p>
    </div>
    <a href="blogs.php" class="btn btn-outline">
        <i class="fas fa-arrow-left"></i> Geri Dön
    </a>
</div>

<?php if ($error): ?>
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle"></i>
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
        <!-- Main Content -->
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-edit"></i> İçerik
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Başlık *</label>
                        <input type="text" name="title" class="form-control" placeholder="Blog başlığını girin"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Özet</label>
                        <textarea name="excerpt" class="form-control" rows="3"
                            placeholder="Kısa bir özet yazın (blog listelerinde görünecek)"></textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>İçerik</label>
                        <textarea name="content" class="form-control" rows="12"
                            placeholder="Blog içeriğini yazın..."></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <!-- Publish Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-paper-plane"></i> Yayınla
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Durum</label>
                        <select name="status" class="form-control">
                            <option value="published">✓ Yayınla</option>
                            <option value="draft">◷ Taslak Olarak Kaydet</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label
                            style="display: flex; align-items: center; gap: 12px; cursor: pointer; padding: 14px; background: rgba(99, 102, 241, 0.08); border-radius: 10px; border: 1px solid rgba(99, 102, 241, 0.15);">
                            <input type="checkbox" name="is_featured" value="1"
                                style="width: 18px; height: 18px; accent-color: #6366f1;">
                            <div>
                                <span style="font-weight: 600; color: #e2e8f0;">Öne Çıkan Blog</span>
                                <p style="font-size: 0.8rem; color: #64748b; margin: 4px 0 0;">Ana sayfada vurgulansın
                                </p>
                            </div>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-save"></i> Kaydet
                    </button>
                </div>
            </div>

            <!-- Image Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Kapak Görseli
                </div>
                <div class="card-body">
                    <div class="form-group" style="margin-bottom: 0;">
                        <div style="border: 2px dashed rgba(100, 116, 139, 0.3); border-radius: 12px; padding: 30px; text-align: center; transition: all 0.3s ease; cursor: pointer;"
                            onclick="document.getElementById('imageInput').click();"
                            onmouseover="this.style.borderColor='#6366f1'; this.style.background='rgba(99, 102, 241, 0.05)';"
                            onmouseout="this.style.borderColor='rgba(100, 116, 139, 0.3)'; this.style.background='transparent';">
                            <i class="fas fa-cloud-upload-alt"
                                style="font-size: 2rem; color: #6366f1; margin-bottom: 12px;"></i>
                            <p style="color: #94a3b8; margin-bottom: 8px;">Görsel yüklemek için tıklayın</p>
                            <p style="color: #64748b; font-size: 0.8rem;">JPG, PNG, GIF, WEBP</p>
                        </div>
                        <input type="file" name="image" id="imageInput" class="form-control" accept="image/*"
                            style="display: none;">
                        <p id="fileName"
                            style="margin-top: 12px; color: #10b981; font-size: 0.85rem; text-align: center;"></p>
                    </div>
                </div>
            </div>

            <!-- Details Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-cog"></i> Detaylar
                </div>
                <div class="card-body">
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

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Okuma Süresi (dakika)</label>
                        <input type="number" name="read_time" class="form-control" value="5" min="1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('imageInput').addEventListener('change', function (e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : '';
        document.getElementById('fileName').textContent = fileName ? '✓ ' + fileName : '';
    });
</script>

</main>
</div>
</body>

</html>