<aside class="admin-sidebar">
    <div class="sidebar-brand">
        <div class="sidebar-brand-icon">
            <i class="fas fa-shield-halved"></i>
        </div>
        <div class="sidebar-brand-text">
            <h2>Veddia Admin</h2>
            <span>Yönetim Paneli</span>
        </div>
    </div>

    <ul class="sidebar-menu">
        <li class="sidebar-menu-label">Ana Menü</li>
        <li>
            <a href="dashboard.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                <i class="fas fa-th-large"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="blogs.php"
                class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['blogs.php', 'blog-add.php', 'blog-edit.php']) ? 'active' : ''; ?>">
                <i class="fas fa-newspaper"></i> Blog Yazıları
            </a>
        </li>

        <li class="sidebar-menu-label">Hızlı İşlemler</li>
        <li>
            <a href="blog-add.php">
                <i class="fas fa-plus-circle"></i> Yeni Blog Ekle
            </a>
        </li>

        <hr class="menu-divider">

        <li>
            <a href="../index.php" target="_blank">
                <i class="fas fa-external-link-alt"></i> Siteyi Görüntüle
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <a href="logout.php">
            <i class="fas fa-sign-out-alt"></i> Çıkış Yap
        </a>
    </div>
</aside>