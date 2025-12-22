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

        header('Location: blogs.php?success=1');
        exit;
    }
}

include 'includes/header.php';
?>

<div class="admin-header">
    <div>
        <h1>Blog Düzenle</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">
            "<?php echo htmlspecialchars($blog['title']); ?>" yazısını düzenliyorsunuz
        </p>
    </div>
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
                        <input type="text" name="title" class="form-control" 
                            value="<?php echo htmlspecialchars($blog['title']); ?>" 
                            placeholder="Blog başlığını girin" required>
                    </div>

                    <div class="form-group">
                        <label>Özet</label>
                        <textarea name="excerpt" class="form-control" rows="3" 
                            placeholder="Kısa bir özet yazın"><?php echo htmlspecialchars($blog['excerpt']); ?></textarea>
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>İçerik</label>
                        <textarea name="content" class="form-control" rows="12" 
                            placeholder="Blog içeriğini yazın..."><?php echo htmlspecialchars($blog['content']); ?></textarea>
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
                            <option value="published" <?php echo $blog['status'] === 'published' ? 'selected' : ''; ?>>
                                ✓ Yayında
                            </option>
                            <option value="draft" <?php echo $blog['status'] === 'draft' ? 'selected' : ''; ?>>
                                ◷ Taslak
                            </option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display: flex; align-items: center; gap: 12px; cursor: pointer; padding: 14px; background: rgba(99, 102, 241, 0.08); border-radius: 10px; border: 1px solid rgba(99, 102, 241, 0.15);">
                            <input type="checkbox" name="is_featured" value="1" 
                                <?php echo $blog['is_featured'] ? 'checked' : ''; ?>
                                style="width: 18px; height: 18px; accent-color: #6366f1;">
                            <div>
                                <span style="font-weight: 600; color: #e2e8f0;">Öne Çıkan Blog</span>
                                <p style="font-size: 0.8rem; color: #64748b; margin: 4px 0 0;">Ana sayfada vurgulansın</p>
                            </div>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-save"></i> Değişiklikleri Kaydet
                    </button>
                </div>
            </div>

            <!-- Image Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Kapak Görseli
                </div>
                <div class="card-body">
                    <?php if (!empty($blog['image'])): ?>
                        <div style="margin-bottom: 16px; position: relative;">
                            <img src="../<?php echo htmlspecialchars($blog['image']); ?>" 
                                alt="Mevcut görsel" 
                                style="width: 100%; height: 150px; object-fit: cover; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
                            <div style="position: absolute; bottom: 8px; left: 8px; background: rgba(0,0,0,0.7); padding: 4px 10px; border-radius: 6px; font-size: 0.75rem; color: #94a3b8;">
                                Mevcut görsel
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group" style="margin-bottom: 0;">
                        <div style="border: 2px dashed rgba(100, 116, 139, 0.3); border-radius: 12px; padding: 24px; text-align: center; transition: all 0.3s ease; cursor: pointer;" 
                            onclick="document.getElementById('imageInput').click();"
                            onmouseover="this.style.borderColor='#6366f1'; this.style.background='rgba(99, 102, 241, 0.05)';"
                            onmouseout="this.style.borderColor='rgba(100, 116, 139, 0.3)'; this.style.background='transparent';">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 1.5rem; color: #6366f1; margin-bottom: 10px;"></i>
                            <p style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 4px;">Yeni görsel yükle</p>
                            <p style="color: #64748b; font-size: 0.75rem;">Mevcut görseli değiştirir</p>
                        </div>
                        <input type="file" name="image" id="imageInput" class="form-control" accept="image/*" style="display: none;">
                        <p id="fileName" style="margin-top: 10px; color: #10b981; font-size: 0.85rem; text-align: center;"></p>
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
                            <?php
                            $cats = ['Web Tasarım', 'Dijital Pazarlama', 'SEO', 'Sosyal Medya', 'E-Ticaret', 'Teknoloji', 'Genel'];
                            foreach ($cats as $cat): ?>
                                <option <?php echo $blog['category'] === $cat ? 'selected' : ''; ?>>
                                    <?php echo $cat; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Yazar</label>
                        <input type="text" name="author" class="form-control" 
                            value="<?php echo htmlspecialchars($blog['author']); ?>">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Okuma Süresi (dakika)</label>
                        <input type="number" name="read_time" class="form-control" 
                            value="<?php echo $blog['read_time']; ?>" min="1">
                    </div>
                </div>
            </div>

            <!-- Stats Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-chart-bar"></i> İstatistikler
                </div>
                <div class="card-body">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                        <div style="text-align: center; padding: 16px; background: rgba(99, 102, 241, 0.08); border-radius: 12px;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: #a5b4fc;">
                                <?php echo number_format($blog['views']); ?>
                            </div>
                            <div style="font-size: 0.8rem; color: #64748b;">Görüntüleme</div>
                        </div>
                        <div style="text-align: center; padding: 16px; background: rgba(20, 184, 166, 0.08); border-radius: 12px;">
                            <div style="font-size: 1.5rem; font-weight: 700; color: #2dd4bf;">
                                <?php echo $blog['read_time']; ?> dk
                            </div>
                            <div style="font-size: 0.8rem; color: #64748b;">Okuma Süresi</div>
                        </div>
                    </div>
                    <div style="margin-top: 16px; padding: 12px; background: rgba(255,255,255,0.02); border-radius: 10px; font-size: 0.8rem; color: #64748b;">
                        <strong>Oluşturulma:</strong> <?php echo formatDate($blog['created_at']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : '';
        document.getElementById('fileName').textContent = fileName ? '✓ ' + fileName : '';
    });
</script>

</main>
</div>
</body>

</html>