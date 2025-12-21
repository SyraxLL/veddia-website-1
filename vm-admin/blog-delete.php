<?php
require_once 'includes/auth.php';
requireLogin();

$id = intval($_GET['id'] ?? 0);

if ($id > 0) {
    deleteBlog($id);
}

header('Location: blogs.php?deleted=1');
exit;
