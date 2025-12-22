<?php
require_once 'includes/auth.php';
requireLogin();

if (!isset($_GET['id'])) {
    header('Location: references.php');
    exit;
}

$id = intval($_GET['id']);
$project = getProjectById($id);
// Seçili kategorileri diziye çevir
$selectedCategories = !empty($project['category']) ? explode(',', $project['category']) : [];
$selectedCategories = array_map('trim', $selectedCategories);

if (!$project) {
    header('Location: references.php');
    exit;
}

$pageTitle = 'Referans Düzenle';
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
    $image = $project['image']; // Mevcut görseli koru
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
        updateProject($id, [
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
        <h1>Referans Düzenle</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">
            <?php echo htmlspecialchars($project['title']); ?>
        </p>
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
                        <input type="text" name="title" class="form-control"
                            value="<?php echo htmlspecialchars($project['title']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Proje URL (Opsiyonel)</label>
                        <input type="url" name="url" class="form-control"
                            value="<?php echo htmlspecialchars($project['url']); ?>">
                    </div>

                    <div class="form-group">
                        <label>Etiketler (Virgülle ayırın)</label>
                        <input type="text" name="tags" class="form-control"
                            value="<?php echo htmlspecialchars($project['tags']); ?>">
                    </div>

                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Açıklama</label>
                        <textarea name="description" class="form-control"
                            rows="6"><?php echo htmlspecialchars($project['description']); ?></textarea>
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
                                <option value="Kurumsal Web Sitesi" <?php echo in_array('Kurumsal Web Sitesi', $selectedCategories) ? 'selected' : ''; ?>>Kurumsal Web Sitesi</option>
                                <option value="E-Ticaret Sitesi" <?php echo in_array('E-Ticaret Sitesi', $selectedCategories) ? 'selected' : ''; ?>>E-Ticaret Sitesi</option>
                                <option value="Kişisel Web Sitesi" <?php echo in_array('Kişisel Web Sitesi', $selectedCategories) ? 'selected' : ''; ?>>Kişisel Web Sitesi</option>
                                <option value="Ürün Tanıtım Sitesi" <?php echo in_array('Ürün Tanıtım Sitesi', $selectedCategories) ? 'selected' : ''; ?>>Ürün Tanıtım Sitesi</option>
                            </optgroup>
                            <optgroup label="Dijital Reklamcılık">
                                <option value="Google Reklamı" <?php echo in_array('Google Reklamı', $selectedCategories) ? 'selected' : ''; ?>>Google Reklamı</option>
                                <option value="YouTube Reklamı" <?php echo in_array('YouTube Reklamı', $selectedCategories) ? 'selected' : ''; ?>>YouTube Reklamı</option>
                                <option value="Instagram Reklamı" <?php echo in_array('Instagram Reklamı', $selectedCategories) ? 'selected' : ''; ?>>Instagram Reklamı</option>
                            </optgroup>
                            <optgroup label="Sosyal Medya Yönetimi">
                                <option value="Facebook Yönetimi" <?php echo in_array('Facebook Yönetimi', $selectedCategories) ? 'selected' : ''; ?>>Facebook Yönetimi</option>
                                <option value="Instagram Yönetimi" <?php echo in_array('Instagram Yönetimi', $selectedCategories) ? 'selected' : ''; ?>>Instagram Yönetimi</option>
                                <option value="X (Twitter) Yönetimi" <?php echo in_array('X (Twitter) Yönetimi', $selectedCategories) ? 'selected' : ''; ?>>X (Twitter) Yönetimi</option>
                                <option value="LinkedIn Yönetimi" <?php echo in_array('LinkedIn Yönetimi', $selectedCategories) ? 'selected' : ''; ?>>LinkedIn Yönetimi</option>
                            </optgroup>
                            <optgroup label="Grafik Tasarım">
                                <option value="Logo Tasarımı" <?php echo in_array('Logo Tasarımı', $selectedCategories) ? 'selected' : ''; ?>>Logo Tasarımı</option>
                                <option value="Broşür Tasarımı ve Basımı" <?php echo in_array('Broşür Tasarımı ve Basımı', $selectedCategories) ? 'selected' : ''; ?>>Broşür Tasarımı ve Basımı
                                </option>
                                <option value="Katalog Tasarımı ve Basımı" <?php echo in_array('Katalog Tasarımı ve Basımı', $selectedCategories) ? 'selected' : ''; ?>>Katalog Tasarımı ve Basımı
                                </option>
                            </optgroup>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">
                        <i class="fas fa-save"></i> Güncelle
                    </button>
                </div>
            </div>

            <!-- Image Box -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-image"></i> Proje Görseli
                </div>
                <div class="card-body" style="padding: 16px;">
                    <?php if (!empty($project['image'])): ?>
                        <div style="margin-bottom: 15px; text-align: center;">
                            <img src="../<?php echo htmlspecialchars($project['image']); ?>" alt="Mevcut Görsel"
                                style="max-width: 100%; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                            <p style="font-size: 0.8rem; color: #64748b; margin-top: 5px;">Mevcut Görsel</p>
                        </div>
                    <?php endif; ?>

                    <div style="border: 2px dashed #e2e8f0; border-radius: 10px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.3s;"
                        onclick="document.getElementById('imageInput').click();"
                        onmouseover="this.style.borderColor='#6366f1'; this.style.background='rgba(99, 102, 241, 0.03)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='transparent';">
                        <i class="fas fa-cloud-upload-alt"
                            style="font-size: 1.5rem; color: #6366f1; margin-bottom: 8px;"></i>
                        <p style="color: #64748b; font-size: 0.85rem; margin: 0;">
                            <?php echo !empty($project['image']) ? 'Görseli Değiştir' : 'Görsel Yükle'; ?>
                        </p>
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