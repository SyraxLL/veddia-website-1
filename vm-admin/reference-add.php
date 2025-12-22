<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Yeni Referans Ekle';
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    // Kategori array olarak gelebilir, string'e çevir
    $categories = $_POST['category'] ?? [];
    if (is_array($categories)) {
        $category = implode(',', $categories);
    } else {
        $category = trim($categories);
    }
    $url = trim($_POST['url'] ?? '');
    $tags = trim($_POST['tags'] ?? '');

    // Görsel yükleme
    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $uploadDir = '../uploads/references/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($ext, $allowed)) {
            $fileName = uniqid() . '.' . $ext;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $fileName)) {
                $image = 'uploads/references/' . $fileName;
            }
        }
    }

    if (empty($title)) {
        $error = 'Proje başlığı zorunludur!';
    }

    if (empty($error)) {
        addProject([
            'title' => $title,
            'description' => $description,
            'category' => $category,
            'image' => $image,
            'url' => $url,
            'tags' => $tags
        ]);

        header('Location: references.php?success=1');
        exit;
    }
}

include 'includes/header.php';
?>

<div class="admin-header">
    <div>
        <h1>Yeni Referans Ekle</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">Portfolyoya yeni bir referans ekleyin</p>
    </div>
    <a href="references.php" class="btn btn-outline">
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
                    <i class="fas fa-edit"></i> Proje Bilgileri
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Proje Adı *</label>
                        <input type="text" name="title" class="form-control" placeholder="Örn: TechCorp Kurumsal Sitesi"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Proje URL (Opsiyonel)</label>
                        <input type="url" name="url" class="form-control" placeholder="https://example.com">
                    </div>

                    <div class="form-group">
                        <label>Etiketler (Virgülle ayırın)</label>
                        <input type="text" name="tags" class="form-control" placeholder="WordPress, E-Ticaret, PHP">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Açıklama</label>
                        <textarea name="description" class="form-control" rows="6"
                            placeholder="Proje hakkında detaylar..."></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <!-- Category Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> Kategori
                </div>
                <div class="card-body">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Kategori Seçin</label>
                        <select name="category[]" id="categorySelect" class="form-control" multiple>
                            <optgroup label="Web Siteleri">
                                <option value="Kurumsal Web Sitesi">Kurumsal Web Sitesi</option>
                                <option value="E-Ticaret Sitesi">E-Ticaret Sitesi</option>
                                <option value="Kişisel Web Sitesi">Kişisel Web Sitesi</option>
                                <option value="Ürün Tanıtım Sitesi">Ürün Tanıtım Sitesi</option>
                            </optgroup>
                            <optgroup label="Dijital Reklamcılık">
                                <option value="Google Reklamı">Google Reklamı</option>
                                <option value="YouTube Reklamı">YouTube Reklamı</option>
                                <option value="Instagram Reklamı">Instagram Reklamı</option>
                            </optgroup>
                            <optgroup label="Sosyal Medya Yönetimi">
                                <option value="Facebook Yönetimi">Facebook Yönetimi</option>
                                <option value="Instagram Yönetimi">Instagram Yönetimi</option>
                                <option value="X (Twitter) Yönetimi">X (Twitter) Yönetimi</option>
                                <option value="LinkedIn Yönetimi">LinkedIn Yönetimi</option>
                            </optgroup>
                            <optgroup label="Grafik Tasarım">
                                <option value="Logo Tasarımı">Logo Tasarımı</option>
                                <option value="Broşür Tasarımı ve Basımı">Broşür Tasarımı ve Basımı</option>
                                <option value="Katalog Tasarımı ve Basımı">Katalog Tasarımı ve Basımı</option>
                            </optgroup>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">
                        <i class="fas fa-save"></i> Kaydet
                    </button>
                </div>
            </div>

            <!-- Image Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Proje Görseli
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

    // Choices.js Kategori Seçici
    new Choices('#categorySelect', {
        searchEnabled: true,
        searchPlaceholderValue: 'Kategori ara...',
        itemSelectText: '',
        shouldSort: false,
        removeItemButton: true,
        placeholder: true,
        placeholderValue: 'Kategori seçin'
    });
</script>

</main>
</div>
</body>

</html>