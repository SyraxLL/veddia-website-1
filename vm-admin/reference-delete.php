<?php
require_once 'includes/auth.php';
requireLogin();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Projeyi sil
    deleteProject($id);

    // Opsiyonel: Görseli de silebiliriz (Veritabanından görsel yolunu çekip unlink yaparak)
    // Şimdilik sadece veritabanından siliyoruz.

    header('Location: references.php?deleted=1');
    exit;
}

header('Location: references.php');
exit;
?>