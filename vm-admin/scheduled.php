<?php
/**
 * Planlı Gönderiler
 */
require_once 'includes/auth.php';
requireLogin();

$pageTitle = 'Planlı Gönderiler';

// Planlı blogları getir
$scheduledBlogs = getScheduledBlogs();

include 'includes/header.php';
?>

<!-- Header -->
<div class="admin-header">
    <h1><i class="fas fa-clock me-2"></i>Planlı Gönderiler</h1>
    <div class="header-actions">
        <a href="blog-add.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Yeni Blog Ekle
        </a>
    </div>
</div>

<?php if (empty($scheduledBlogs)): ?>
    <div class="content-card">
        <div class="card-body" style="text-align: center; padding: 60px 20px;">
            <i class="fas fa-calendar-check" style="font-size: 4rem; color: #3d4657; margin-bottom: 20px;"></i>
            <h3 style="color: #e2e8f0; margin-bottom: 10px;">Planlı Gönderi Yok</h3>
            <p style="color: #64748b; margin-bottom: 25px;">Henüz planlanmış blog yazısı bulunmuyor.</p>
            <a href="blog-add.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Yeni Blog Planla
            </a>
        </div>
    </div>
<?php else: ?>
    <div class="content-card">
        <div class="card-header">
            <h2>Yaklaşan Bloglar (<?php echo count($scheduledBlogs); ?>)</h2>
        </div>
        <div class="card-body" style="padding: 0;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Blog Başlığı</th>
                        <th>Kategori</th>
                        <th>Yayın Zamanı</th>
                        <th>Kalan Süre</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($scheduledBlogs as $blog): ?>
                        <?php
                        $scheduledTime = strtotime($blog['scheduled_at']);
                        $now = time();
                        $diff = $scheduledTime - $now;

                        if ($diff <= 0) {
                            $remaining = '<span style="color: #f59e0b;">Şimdi yayınlanacak</span>';
                        } elseif ($diff < 3600) {
                            $remaining = floor($diff / 60) . ' dakika';
                        } elseif ($diff < 86400) {
                            $remaining = floor($diff / 3600) . ' saat';
                        } else {
                            $remaining = floor($diff / 86400) . ' gün';
                        }
                        ?>
                        <tr>
                            <td>
                                <strong style="color: #e2e8f0;"><?php echo htmlspecialchars($blog['title']); ?></strong>
                            </td>
                            <td>
                                <span class="badge badge-info"><?php echo htmlspecialchars($blog['category']); ?></span>
                            </td>
                            <td>
                                <i class="fas fa-calendar-alt" style="color: #64748b; margin-right: 5px;"></i>
                                <?php echo date('d.m.Y H:i', $scheduledTime); ?>
                            </td>
                            <td>
                                <span style="color: #14b8a6;"><i class="fas fa-hourglass-half"></i>
                                    <?php echo $remaining; ?></span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 8px;">
                                    <a href="blog-edit.php?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-outline"
                                        title="Düzenle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="blog-delete.php?id=<?php echo $blog['id']; ?>" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bu planlı gönderiyi silmek istediğinize emin misiniz?');"
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
    </div>
<?php endif; ?>

<style>
    .admin-table {
        width: 100%;
        border-collapse: collapse;
    }

    .admin-table th,
    .admin-table td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .admin-table th {
        background: rgba(255, 255, 255, 0.02);
        color: #94a3b8;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
    }

    .admin-table td {
        color: #94a3b8;
    }

    .admin-table tr:hover {
        background: rgba(255, 255, 255, 0.02);
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 0.85rem;
    }

    .badge-info {
        background: rgba(14, 165, 233, 0.2);
        color: #0ea5e9;
    }
</style>

</main>
</body>

</html>