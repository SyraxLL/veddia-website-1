<aside class="admin-sidebar">
    <div class="sidebar-brand">
        <h2><i class="fas fa-shield-halved"></i> Veddia Admin</h2>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="dashboard.php"
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="blogs.php"
                class="<?php echo in_array(basename($_SERVER['PHP_SELF']), ['blogs.php', 'blog-add.php', 'blog-edit.php']) ? 'active' : ''; ?>">
                <i class="fas fa-newspaper"></i> Blog Yazıları
            </a>
        </li>
        <li>
            <a href="blog-add.php">
                <i class="fas fa-plus-circle"></i> Yeni Blog Ekle
            </a>
        </li>
        <li style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
            <a href="../index.php" target="_blank">
                <i class="fas fa-external-link-alt"></i> Siteyi Görüntüle
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Çıkış Yap
            </a>
        </li>
    </ul>
</aside>