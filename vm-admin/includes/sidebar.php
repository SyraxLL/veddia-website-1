<!-- Admin Sidebar -->
<?php
// Planlı gönderileri getir
require_once __DIR__ . '/../../includes/database.php';
$scheduledBlogs = getScheduledBlogs();
$scheduledCount = count($scheduledBlogs);
?>
<aside class="admin-sidebar">
    <div class="sidebar-brand">
        <img src="../assets/img/logo.png" alt="Veddia Media">
        <h2>Admin <span>Panel</span></h2>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="dashboard.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="blogs.php"
                class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['blogs.php', 'blog-add.php', 'blog-edit.php']) ? 'active' : ''; ?>">
                <i class="fas fa-newspaper"></i>
                <span>Blog Yazıları</span>
            </a>
        </li>
        <li>
            <a href="scheduled.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'scheduled.php' ? 'active' : ''; ?>">
                <i class="fas fa-clock"></i>
                <span>Planlı Gönderiler</span>
                <?php if ($scheduledCount > 0): ?>
                    <span class="sidebar-badge"><?php echo $scheduledCount; ?></span>
                <?php endif; ?>
            </a>
        </li>
        <li>
            <a href="blog-add.php">
                <i class="fas fa-plus-circle"></i>
                <span>Yeni Blog Ekle</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-divider"></div>

    <ul class="sidebar-menu">
        <li>
            <a href="../index.php" target="_blank">
                <i class="fas fa-external-link-alt"></i>
                <span>Siteyi Görüntüle</span>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Çıkış Yap</span>
            </a>
        </li>
    </ul>
</aside>

<style>
    .sidebar-badge {
        background: linear-gradient(135deg, #f59e0b, #ef4444);
        color: white;
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 10px;
        margin-left: auto;
        font-weight: 600;
    }
</style>

<style>
    .sidebar-section {
        padding: 15px 20px;
    }

    .sidebar-section h3 {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #64748b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .scheduled-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .scheduled-list li {
        margin-bottom: 8px;
    }

    .scheduled-list a {
        display: flex;
        flex-direction: column;
        padding: 8px 12px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.2s;
    }

    .scheduled-list a:hover {
        background: rgba(255, 255, 255, 0.08);
    }

    .scheduled-title {
        color: #e2e8f0;
        font-size: 0.85rem;
        margin-bottom: 4px;
    }

    .scheduled-date {
        color: #64748b;
        font-size: 0.75rem;
    }

    .view-all {
        display: block;
        text-align: center;
        color: #64748b;
        font-size: 0.8rem;
        margin-top: 10px;
        text-decoration: none;
    }

    .view-all:hover {
        color: #94a3b8;
    }
</style>