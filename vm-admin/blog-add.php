<?php
/**
 * Yeni Blog Ekle
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Yeni Blog Ekle';
$error = '';

// Kategoriler
$defaultCategories = [
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

// Uploads klasörü
$uploadDir = __DIR__ . '/../uploads/blog/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $excerpt = trim($_POST['excerpt'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $category = trim($_POST['category'] ?? 'Genel');
    $author = trim($_POST['author'] ?? 'Veddia Media');
    $read_time = intval($_POST['read_time'] ?? 5);
    $publish_date = trim($_POST['publish_date'] ?? date('Y-m-d'));
    $scheduled_at = trim($_POST['scheduled_at'] ?? '');
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;

    // Durum belirleme: scheduled_at doluysa scheduled, değilse normal status
    if (!empty($scheduled_at)) {
        $status = 'scheduled';
    } else {
        $status = $_POST['status'] ?? 'published';
    }

    $image = '';

    // Görsel yükleme
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
        $fileType = $_FILES['image']['type'];

        if (in_array($fileType, $allowedTypes)) {
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $fileName = time() . '_' . uniqid() . '.' . $extension;
            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                $image = '/uploads/blog/' . $fileName;
            } else {
                $error = 'Görsel yüklenirken bir hata oluştu.';
            }
        } else {
            $error = 'Sadece JPG, PNG, WebP ve GIF formatları desteklenmektedir.';
        }
    }

    // Validasyon
    if (empty($error) && empty($title)) {
        $error = 'Blog başlığı gereklidir.';
    }

    if (empty($error)) {
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
                'publish_date' => $publish_date,
                'scheduled_at' => !empty($scheduled_at) ? $scheduled_at : null,
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
        <form method="POST" action="" enctype="multipart/form-data">
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
                        value="<?php echo htmlspecialchars($_POST['author'] ?? 'Veddia Media'); ?>"
                        placeholder="Yazar adı">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Blog Görseli</label>
                <div class="upload-area" id="uploadArea" onclick="document.getElementById('image').click();">
                    <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/webp,image/gif"
                        style="display: none;">
                    <div class="upload-content" id="uploadContent">
                        <i class="fas fa-cloud-upload-alt"
                            style="font-size: 2.5rem; color: #64748b; margin-bottom: 10px;"></i>
                        <p style="margin: 0; color: #94a3b8;">Görsel yüklemek için tıklayın veya sürükleyin</p>
                        <small style="color: #64748b;">JPG, PNG, WebP, GIF (Max: 5MB)</small>
                    </div>
                    <img id="imagePreview" src="" alt="Önizleme"
                        style="display: none; max-width: 100%; max-height: 200px; border-radius: 8px;">
                </div>
            </div>

            <style>
                .upload-area {
                    border: 2px dashed #3d4657;
                    border-radius: 12px;
                    padding: 30px;
                    text-align: center;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    background: rgba(255, 255, 255, 0.02);
                }

                .upload-area:hover {
                    border-color: #64748b;
                    background: rgba(255, 255, 255, 0.04);
                }

                .upload-area.dragover {
                    border-color: #14b8a6;
                    background: rgba(20, 184, 166, 0.1);
                }
            </style>

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
                    <label for="publish_date">Yayın Tarihi</label>
                    <input type="text" class="form-control" id="publish_date" name="publish_date"
                        value="<?php echo htmlspecialchars($_POST['publish_date'] ?? date('Y-m-d')); ?>">
                </div>

                <div class="form-group">
                    <label for="scheduled_at"><i class="fas fa-clock"></i> Planlı Gönderi</label>
                    <input type="text" class="form-control" id="scheduled_at" name="scheduled_at"
                        value="<?php echo htmlspecialchars($_POST['scheduled_at'] ?? ''); ?>"
                        placeholder="Boş bırakın = hemen yayınla">
                    <small style="color: #64748b;">Tarih ve saat seçerseniz planlı gönderi olarak kaydedilir</small>
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

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/tr.js"></script>
<script>
    // Flatpickr - Yayın Tarihi
    flatpickr("#publish_date", {
        locale: "tr",
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "d F Y",
        disableMobile: true,
        monthSelectorType: "dropdown"
    });

    // Flatpickr - Planlı Gönderi (datetime)
    flatpickr("#scheduled_at", {
        locale: "tr",
        enableTime: true,
        time_24hr: true,
        dateFormat: "Y-m-d H:i",
        altInput: true,
        altFormat: "d F Y - H:i",
        disableMobile: true,
        minDate: "today",
        monthSelectorType: "dropdown"
    });

    // Görsel Upload
    const uploadArea = document.getElementById('uploadArea');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const uploadContent = document.getElementById('uploadContent');

    // Drag & Drop
    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            imageInput.files = files;
            showPreview(files[0]);
        }
    });

    // File input change
    imageInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            showPreview(e.target.files[0]);
        }
    });

    function showPreview(file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
            uploadContent.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
</script>
</body>

</html>