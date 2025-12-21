<?php
/**
 * Kimlik Doğrulama Kontrolü
 */
if (session_status() === PHP_SESSION_NONE) {
    // Tarayıcı kapandığında session'ı sil (lifetime = 0)
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

// Veritabanı bağlantısı
require_once __DIR__ . '/../../includes/database.php';

/**
 * Kullanıcı giriş yapmış mı kontrol et
 */
function isLoggedIn()
{
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

/**
 * Giriş kontrolü - giriş yapılmadıysa login sayfasına yönlendir
 */
function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: /vm-admin/index.php');
        exit;
    }
}

/**
 * Kullanıcı girişi yap
 */
function login($username, $password)
{
    $user = verifyUser($username, $password);

    if ($user) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        return true;
    }

    return false;
}

/**
 * Çıkış yap
 */
function logout()
{
    session_destroy();
    header('Location: /vm-admin/index.php');
    exit;
}
?>