<!-- Admin Sidebar -->
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