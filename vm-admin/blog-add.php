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

    // Planlama tarihi (Türkiye saati ile)
    $scheduled_at = null;
    if (!empty($_POST['scheduled_at'])) {
        $scheduled_at = $_POST['scheduled_at'] . ':00';
    }

    // Özel yayın tarihi (eski tarih gibi göstermek için)
    $created_at = null;
    if (!empty($_POST['created_at'])) {
        $created_at = $_POST['created_at'] . ':00';
    }

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
            <!-- Publish & Settings Box (Compact) -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-paper-plane"></i> Yayın Ayarları
                </div>
                <div class="card-body">
                    <!-- Durum ve Kategori yan yana -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label>Durum</label>
                            <select name="status" id="statusSelect" class="form-control">
                                <option value="published">✅ Yayınla</option>
                                <option value="draft">⏳ Taslak</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label>Okuma Süresi</label>
                            <input type="number" name="read_time" class="form-control" value="5" min="1"
                                placeholder="dk">
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category" id="categorySelect" class="form-control">
                            <optgroup label="Web Tasarım & UX">
                                <option>Web Tasarım & UX</option>
                            </optgroup>
                            <optgroup label="SEO & İçerik">
                                <option>SEO & İçerik Pazarlaması</option>
                            </optgroup>
                            <optgroup label="Google Ads">
                                <option>Google Ads & Performans Pazarlaması</option>
                            </optgroup>
                            <optgroup label="Web Siteleri">
                                <option>Kurumsal Web Sitesi</option>
                                <option>E-Ticaret Sitesi</option>
                                <option>Kişisel Web Sitesi</option>
                                <option>Ürün Tanıtım Sitesi</option>
                            </optgroup>
                            <optgroup label="Dijital Reklamcılık">
                                <option>Google Reklamı</option>
                                <option>YouTube Reklamı</option>
                                <option>Instagram Reklamı</option>
                            </optgroup>
                            <optgroup label="Sosyal Medya Yönetimi">
                                <option>Facebook Yönetimi</option>
                                <option>Instagram Yönetimi</option>
                                <option>X (Twitter) Yönetimi</option>
                                <option>LinkedIn Yönetimi</option>
                            </optgroup>
                            <optgroup label="Grafik Tasarım">
                                <option>Logo Tasarımı</option>
                                <option>Broşür Tasarımı ve Basımı</option>
                                <option>Katalog Tasarımı ve Basımı</option>
                            </optgroup>
                        </select>
                    </div>

                    <!-- Yazar -->
                    <div class="form-group">
                        <label>Yazar</label>
                        <input type="text" name="author" class="form-control" value="Veddia Media">
                    </div>

                    <!-- Öne Çıkan -->
                    <div class="form-group">
                        <label
                            style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 12px; background: rgba(99, 102, 241, 0.05); border-radius: 10px; border: 1px solid rgba(99, 102, 241, 0.15); margin-bottom: 0;">
                            <input type="checkbox" name="is_featured" value="1"
                                style="width: 18px; height: 18px; accent-color: #6366f1;">
                            <div>
                                <span style="font-weight: 600; color: #1e293b; font-size: 0.9rem;">Öne Çıkan Blog</span>
                            </div>
                        </label>
                    </div>

                    <!-- Planlama Tarihi (Collapse) -->
                    <details style="margin-bottom: 12px;">
                        <summary
                            style="cursor: pointer; padding: 10px 12px; background: #f8fafc; border-radius: 8px; font-size: 0.85rem; color: #64748b; display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-clock" style="color: #14b8a6;"></i>
                            İleri Tarihli Yayın
                        </summary>
                        <div style="padding: 12px 0 0;">
                            <input type="text" name="scheduled_at" id="scheduledPicker" class="form-control"
                                placeholder="Tarih ve saat seçin..." readonly>
                            <p style="font-size: 0.7rem; color: #94a3b8; margin-top: 6px;">
                                <i class="fas fa-info-circle"></i> Gelecekte yayınlanacak
                            </p>
                        </div>
                    </details>

                    <!-- Özel Yayın Tarihi (Eski tarih için) -->
                    <details style="margin-bottom: 16px;">
                        <summary
                            style="cursor: pointer; padding: 10px 12px; background: #fef3c7; border-radius: 8px; font-size: 0.85rem; color: #92400e; display: flex; align-items: center; gap: 8px;">
                            <i class="fas fa-history" style="color: #f59e0b;"></i>
                            Özel Yayın Tarihi
                        </summary>
                        <div style="padding: 12px 0 0;">
                            <input type="text" name="created_at" id="createdPicker" class="form-control"
                                placeholder="Eski tarih seçin..." readonly>
                            <p style="font-size: 0.7rem; color: #94a3b8; margin-top: 6px;">
                                <i class="fas fa-info-circle"></i> Eski tarihte yayınlanmış gibi göster
                            </p>
                        </div>
                    </details>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-save"></i> Kaydet
                    </button>
                </div>
            </div>

            <!-- Image Box (Compact) -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Kapak Görseli
                </div>
                <div class="card-body" style="padding: 16px;">
                    <div style="border: 2px dashed #e2e8f0; border-radius: 10px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.3s;"
                        onclick="document.getElementById('imageInput').click();"
                        onmouseover="this.style.borderColor='#6366f1'; this.style.background='rgba(99, 102, 241, 0.03)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='transparent';">
                        <i class="fas fa-cloud-upload-alt"
                            style="font-size: 1.5rem; color: #6366f1; margin-bottom: 8px;"></i>
                        <p style="color: #64748b; font-size: 0.85rem; margin: 0;">Görsel yükle</p>
                    </div>
                    <input type="file" name="image" id="imageInput" class="form-control" accept="image/*"
                        style="display: none;">
                    <p id="fileName" style="margin-top: 8px; color: #10b981; font-size: 0.8rem; text-align: center;">
                    </p>
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
        minDate: 'today',
        placeholder: 'Gelecek tarih seçin...'
    });

    // Özel yayın tarihi için (eski tarih)
    flatpickr('#createdPicker', {
        ...fpConfig,
        maxDate: 'today',
        defaultDate: new Date()
    });

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
</script>

</main>
</div>
</body>

</html>