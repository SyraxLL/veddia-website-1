<?php
/**
 * Blog Silme
 */
require_once 'includes/auth.php';
requireLogin();

$id = intval($_GET['id'] ?? 0);

if (!$id) {
    header('Location: blogs.php?error=invalid_id');
    exit;
}

try {
    deleteBlog($id);
    header('Location: blogs.php?success=deleted');
    exit;
} catch (Exception $e) {
    header('Location: blogs.php?error=' . urlencode($e->getMessage()));
    exit;
}
?>