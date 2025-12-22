<?php
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Referanslar';
$projects = getProjects();

// Success message
$successMsg = isset($_GET['success']) ? 'Proje başarıyla kaydedildi!' : '';
$deleteMsg = isset($_GET['deleted']) ? 'Proje silindi!' : '';

include 'includes/header.php';
?>

<div class="admin-header">
    <div>
        <h1>Referanslar</h1>
        <p style="color: #64748b; font-size: 0.9rem; margin-top: 4px;">
            Toplam <?php echo count($projects); ?> proje
        </p>
    </div>
    <div class="header-actions">
        <a href="reference-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Referans Ekle
        </a>
    </div>
</div>

<?php if ($successMsg): ?>
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i>
        <?php echo $successMsg; ?>
    </div>
<?php endif; ?>

<?php if ($deleteMsg): ?>
    <div class="alert alert-warning">
        <i class="fas fa-trash"></i>
        <?php echo $deleteMsg; ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body" style="padding: 0;">
        <?php if (empty($projects)): ?>
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Henüz proje/referans yok</h3>
                <p>İlk projenizi ekleyerek portfolyonuzu oluşturun.</p>
                <a href="reference-add.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> İlk Projeyi Ekle
                </a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Proje Adı</th>
                            <th>Kategori</th>
                            <th>Link (URL)</th>
                            <th>Tarih</th>
                            <th style="text-align: right;">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project): ?>
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 14px;">
                                        <?php if (!empty($project['image'])): ?>
                                            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt=""
                                                style="width: 56px; height: 56px; border-radius: 12px; object-fit: cover; border: 1px solid rgba(255,255,255,0.1);">
                                        <?php else: ?>
                                            <div
                                                style="width: 56px; height: 56px; border-radius: 12px; background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(139, 92, 246, 0.1)); display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.05);">
                                                <i class="fas fa-image" style="color: #6366f1; font-size: 1.2rem;"></i>
                                            </div>
                                        <?php endif; ?>
                                        <div>
                                            <div style="font-weight: 600; color: #e2e8f0; margin-bottom: 4px;">
                                                <?php echo htmlspecialchars($project['title']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge"
                                        style="background: rgba(99, 102, 241, 0.1); color: #a5b4fc; border: 1px solid rgba(99, 102, 241, 0.2);">
                                        <?php echo htmlspecialchars($project['category']); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if (!empty($project['url'])): ?>
                                        <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank"
                                            style="color: #64748b; font-size: 0.9rem; text-decoration: none;">
                                            <i class="fas fa-external-link-alt"></i> Siteye Git
                                        </a>
                                    <?php else: ?>
                                        <span style="color: #64748b; font-size: 0.9rem;">-</span>
                                    <?php endif; ?>
                                </td>
                                <td style="color: #64748b; font-size: 0.9rem;">
                                    <?php echo formatDate($project['created_at']); ?>
                                </td>
                                <td style="text-align: right;">
                                    <div style="display: flex; gap: 8px; justify-content: flex-end;">
                                        <a href="reference-edit.php?id=<?php echo $project['id']; ?>"
                                            class="btn btn-outline btn-sm" title="Düzenle">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="reference-delete.php?id=<?php echo $project['id']; ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Bu projeyi silmek istediğinize emin misiniz?');"
                                            title="Sil">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

</main>
</div>
</body>

</html>