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
    
    // Planlama tarihi (Türkiye saati ile)
    $scheduled_at = null;
    if (!empty($_POST['scheduled_at'])) {
        $scheduled_at = $_POST['scheduled_at'] . ':00';
    }
    
    // Özel yayın tarihi
    $created_at = null;
    if (!empty($_POST['created_at'])) {
        $created_at = $_POST['created_at'] . ':00';
    }

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
    
    // Resim kaldırma
    if (isset($_POST['remove_image']) && $_POST['remove_image'] == '1') {
        $image = '';
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
            'image' => $image,
            'scheduled_at' => $scheduled_at,
            'created_at' => $created_at
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
            <!-- Publish & Settings Box (Compact) -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-paper-plane"></i> Yayın Ayarları
                </div>
                <div class="card-body">
                    <!-- Durum ve Okuma Süresi yan yana -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label>Durum</label>
                            <select name="status" id="statusSelect" class="form-control">
                                <option value="published" <?php echo $blog['status'] === 'published' ? 'selected' : ''; ?>>✅ Yayında</option>
                                <option value="draft" <?php echo $blog['status'] === 'draft' ? 'selected' : ''; ?>>⏳ Taslak</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label>Okuma Süresi</label>
                            <input type="number" name="read_time" class="form-control" 
                                value="<?php echo $blog['read_time']; ?>" min="1" placeholder="dk">
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category" id="categorySelect" class="form-control">
                            <?php
                            $cats = [
                                'Web Tasarım & UX',
                                'SEO & İçerik Pazarlaması',
                                'Google Ads & Performans Pazarlaması',
                                'Kurumsal Web Sitesi',
                                'E-Ticaret Sitesi',
                                'Kişisel Web Sitesi',
                                'Ürün Tanıtım Sitesi',
                                'Google Reklamı',
                                'YouTube Reklamı',
                                'Instagram Reklamı',
                                'Facebook Yönetimi',
                                'Instagram Yönetimi',
                                'X (Twitter) Yönetimi',
                                'LinkedIn Yönetimi',
                                'Logo Tasarımı',
                                'Broşür Tasarımı ve Basımı',
                                'Katalog Tasarımı ve Basımı'
                            ];
                            foreach ($cats as $cat): ?>
                                <option <?php echo $blog['category'] === $cat ? 'selected' : ''; ?>><?php echo $cat; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Yazar -->
                    <div class="form-group">
                        <label>Yazar</label>
                        <input type="text" name="author" class="form-control" 
                            value="<?php echo htmlspecialchars($blog['author']); ?>">
                    </div>

                    <!-- Öne Çıkan -->
                    <div class="form-group">
                        <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 12px; background: rgba(99, 102, 241, 0.05); border-radius: 10px; border: 1px solid rgba(99, 102, 241, 0.15); margin-bottom: 0;">
                            <input type="checkbox" name="is_featured" value="1" 
                                <?php echo $blog['is_featured'] ? 'checked' : ''; ?>
                                style="width: 18px; height: 18px; accent-color: #6366f1;">
                            <span style="font-weight: 600; color: #1e293b; font-size: 0.9rem;">Öne Çıkan Blog</span>
                        </label>
                    </div>

                    <!-- Planlama Tarihi (Collapse) -->
                    <details style="margin-bottom: 12px;" <?php echo (!empty($blog['scheduled_at']) && strtotime($blog['scheduled_at']) > time()) ? 'open' : ''; ?>>
                        <summary style="cursor: pointer; padding: 10px 12px; background: #f8fafc; border-radius: 8px; font-size: 0.85rem; color: #64748b; display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-clock" style="color: #14b8a6;"></i>
                            İleri Tarihli Yayın
                            <?php if (!empty($blog['scheduled_at']) && strtotime($blog['scheduled_at']) > time()): ?>
                            <span style="color: #f59e0b; font-weight: 600; margin-left: auto;">Planlandı</span>
                            <?php endif; ?>
                        </summary>
                        <div style="padding: 12px 0 0;">
                            <?php 
                            $scheduledValue = '';
                            if (!empty($blog['scheduled_at'])) {
                                $scheduledValue = date('Y-m-d H:i', strtotime($blog['scheduled_at']));
                            }
                            ?>
                            <input type="text" name="scheduled_at" id="scheduledPicker" class="form-control"
                                value="<?php echo $scheduledValue; ?>"
                                placeholder="Tarih ve saat seçin..." readonly>
                            <p style="font-size: 0.7rem; color: #94a3b8; margin-top: 6px;">
                                <i class="fas fa-info-circle"></i> Gelecekte yayınlanacak
                            </p>
                        </div>
                    </details>

                    <!-- Özel Yayın Tarihi (Eski tarih için) -->
                    <details style="margin-bottom: 16px;">
                        <summary style="cursor: pointer; padding: 10px 12px; background: #fef3c7; border-radius: 8px; font-size: 0.85rem; color: #92400e; display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-history" style="color: #f59e0b;"></i>
                            Özel Yayın Tarihi
                            <span style="font-size: 0.75rem; margin-left: auto;"><?php echo formatDate($blog['created_at']); ?></span>
                        </summary>
                        <div style="padding: 12px 0 0;">
                            <?php 
                            $createdValue = date('Y-m-d H:i', strtotime($blog['created_at']));
                            ?>
                            <input type="text" name="created_at" id="createdPicker" class="form-control"
                                value="<?php echo $createdValue; ?>"
                                placeholder="Tarih seçin..." readonly>
                            <p style="font-size: 0.7rem; color: #94a3b8; margin-top: 6px;">
                                <i class="fas fa-info-circle"></i> Tarih/saati değiştirerek eski görünmesini sağlayın
                            </p>
                        </div>
                    </details>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-save"></i> Değişiklikleri Kaydet
                    </button>
                </div>
            </div>

            <!-- Image Box (Compact) -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Kapak Görseli
                </div>
                <div class="card-body" style="padding: 16px;">
                    <?php if (!empty($blog['image'])): ?>
                        <div style="margin-bottom: 12px; position: relative;">
                            <img src="../<?php echo htmlspecialchars($blog['image']); ?>" 
                                alt="Mevcut görsel" 
                                style="width: 100%; height: 100px; object-fit: cover; border-radius: 10px; border: 1px solid #e2e8f0;">
                            <button type="button" onclick="toggleRemoveImage()" 
                                style="position: absolute; top: 8px; right: 8px; width: 28px; height: 28px; border-radius: 50%; background: #ef4444; border: none; color: white; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; transition: all 0.2s;"
                                title="Görseli kaldır">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div id="removeImageBox" style="display: none; margin-bottom: 12px; padding: 10px; background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px;">
                            <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; font-size: 0.85rem; color: #dc2626;">
                                <input type="checkbox" name="remove_image" value="1" id="removeImageCheck" style="accent-color: #dc2626;">
                                <span>Mevcut görseli kaldır</span>
                            </label>
                        </div>
                    <?php endif; ?>
                    <div style="border: 2px dashed #e2e8f0; border-radius: 10px; padding: 16px; text-align: center; cursor: pointer; transition: all 0.3s;" 
                        onclick="document.getElementById('imageInput').click();"
                        onmouseover="this.style.borderColor='#6366f1'; this.style.background='rgba(99, 102, 241, 0.03)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='transparent';">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 1.2rem; color: #6366f1; margin-bottom: 6px;"></i>
                        <p style="color: #64748b; font-size: 0.8rem; margin: 0;">Yeni görsel yükle</p>
                    </div>
                    <input type="file" name="image" id="imageInput" class="form-control" accept="image/*" style="display: none;">
                    <p id="fileName" style="margin-top: 8px; color: #10b981; font-size: 0.8rem; text-align: center;"></p>
                </div>
            </div>

            <!-- Mini Stats -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                <div style="text-align: center; padding: 14px; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 1.25rem; font-weight: 700; color: #6366f1;"><?php echo number_format($blog['views']); ?></div>
                    <div style="font-size: 0.75rem; color: #64748b;">Görüntüleme</div>
                </div>
                <div style="text-align: center; padding: 14px; background: white; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 0.75rem; color: #64748b;">Oluşturulma</div>
                    <div style="font-size: 0.8rem; font-weight: 600; color: #1e293b;"><?php echo formatDate($blog['created_at']); ?></div>
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

    // Flatpickr Tarihi Seçiciler
    const fpConfig = {
        locale: 'tr',
        enableTime: true,
        time_24hr: true,
        dateFormat: 'Y-m-d H:i',
        altInput: true,
        altFormat: 'd F Y - H:i',
        disableMobile: true,
        theme: 'airbnb'
    };

    // İleri tarihli yayın için
    flatpickr('#scheduledPicker', {
        ...fpConfig,
        minDate: 'today'
    });

    // Özel yayın tarihi için
    flatpickr('#createdPicker', fpConfig);

    // Choices.js Kategori Seçici
    new Choices('#categorySelect', {
        searchEnabled: true,
        searchPlaceholderValue: 'Kategori ara...',
        itemSelectText: '',
        noResultsText: 'Sonuç bulunamadı',
        noChoicesText: 'Seçenek yok',
        shouldSort: false,
        classNames: {
            containerOuter: 'choices',
            containerInner: 'choices__inner',
        }
    });

    // Durum Seçici
    new Choices('#statusSelect', {
        searchEnabled: false,
        itemSelectText: '',
        shouldSort: false
    });

    // Resim kaldırma toggle
    function toggleRemoveImage() {
        const box = document.getElementById('removeImageBox');
        const check = document.getElementById('removeImageCheck');
        if (box.style.display === 'none') {
            box.style.display = 'block';
            check.checked = true;
        } else {
            box.style.display = 'none';
            check.checked = false;
        }
    }
    window.toggleRemoveImage = toggleRemoveImage;
</script>

</main>
</div>
</body>

</html>