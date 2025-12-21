<?php
/**
 * Veritabanı - MySQL
 */

// Türkiye saat dilimi
date_default_timezone_set('Europe/Istanbul');

// MySQL Bağlantı Bilgileri
$db_host = 'localhost';
$db_name = 'veddia_db';
$db_user = 'root';
$db_pass = '';

// PDO Bağlantısı
$pdo = null;

function getDB()
{
    global $pdo, $db_host, $db_name, $db_user, $db_pass;

    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
                $db_user,
                $db_pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
        } catch (PDOException $e) {
            die("Veritabanı bağlantı hatası: " . $e->getMessage());
        }
    }

    return $pdo;
}

// ==================== KULLANICI FONKSİYONLARI ====================

/**
 * Kullanıcı getir (username ile)
 */
function getUserByUsername($username)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch();
}

/**
 * Kullanıcı doğrula
 */
function verifyUser($username, $password)
{
    $user = getUserByUsername($username);

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }

    return null;
}

/**
 * Tüm kullanıcıları getir
 */
function loadUsers()
{
    $db = getDB();
    $stmt = $db->query("SELECT * FROM users");
    return $stmt->fetchAll();
}

// ==================== BLOG FONKSİYONLARI ====================

/**
 * Tüm blogları getir
 */
function loadBlogs()
{
    $db = getDB();
    $stmt = $db->query("SELECT * FROM blogs ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

/**
 * Yeni blog ID'si
 */
function getNextBlogId()
{
    return null;
}

/**
 * Slug benzersiz mi kontrol et
 */
function isSlugUnique($slug, $excludeId = null)
{
    $db = getDB();

    if ($excludeId) {
        $stmt = $db->prepare("SELECT COUNT(*) FROM blogs WHERE slug = ? AND id != ?");
        $stmt->execute([$slug, $excludeId]);
    } else {
        $stmt = $db->prepare("SELECT COUNT(*) FROM blogs WHERE slug = ?");
        $stmt->execute([$slug]);
    }

    return $stmt->fetchColumn() == 0;
}

/**
 * Slug oluştur
 */
function createSlug($title)
{
    $slug = mb_strtolower($title, 'UTF-8');
    $slug = str_replace(['ş', 'ğ', 'ü', 'ö', 'ç', 'ı', 'İ', 'Ş', 'Ğ', 'Ü', 'Ö', 'Ç'], ['s', 'g', 'u', 'o', 'c', 'i', 'i', 's', 'g', 'u', 'o', 'c'], $slug);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

/**
 * Blog ekle
 */
function addBlog($data)
{
    $db = getDB();

    $stmt = $db->prepare("
        INSERT INTO blogs (title, slug, excerpt, content, category, image, author, read_time, views, is_featured, status, publish_date, scheduled_at, created_at, updated_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, 0, ?, ?, ?, ?, NOW(), NOW())
    ");

    $stmt->execute([
        $data['title'],
        $data['slug'],
        $data['excerpt'] ?? '',
        $data['content'] ?? '',
        $data['category'] ?? 'Genel',
        $data['image'] ?? '',
        $data['author'] ?? 'Veddia Media',
        $data['read_time'] ?? 5,
        $data['is_featured'] ?? 0,
        $data['status'] ?? 'published',
        $data['publish_date'] ?? date('Y-m-d'),
        $data['scheduled_at'] ?? null
    ]);

    return $db->lastInsertId();
}

/**
 * Blog güncelle
 */
function updateBlog($id, $data)
{
    $db = getDB();

    $stmt = $db->prepare("
        UPDATE blogs SET
            title = ?,
            slug = ?,
            excerpt = ?,
            content = ?,
            category = ?,
            image = ?,
            author = ?,
            read_time = ?,
            is_featured = ?,
            status = ?,
            publish_date = ?,
            scheduled_at = ?,
            updated_at = NOW()
        WHERE id = ?
    ");

    $stmt->execute([
        $data['title'],
        $data['slug'],
        $data['excerpt'] ?? '',
        $data['content'] ?? '',
        $data['category'] ?? 'Genel',
        $data['image'] ?? '',
        $data['author'] ?? 'Veddia Media',
        $data['read_time'] ?? 5,
        $data['is_featured'] ?? 0,
        $data['status'] ?? 'published',
        $data['publish_date'] ?? date('Y-m-d'),
        $data['scheduled_at'] ?? null,
        $id
    ]);
}

/**
 * Planlı blogları getir
 */
function getScheduledBlogs()
{
    $db = getDB();
    $stmt = $db->query("SELECT * FROM blogs WHERE status = 'scheduled' AND scheduled_at IS NOT NULL ORDER BY scheduled_at ASC");
    return $stmt->fetchAll();
}

/**
 * Zamanı gelen planlı blogları yayınla
 */
function publishScheduledBlogs()
{
    $db = getDB();
    $now = date('Y-m-d H:i:s');

    $stmt = $db->prepare("
        UPDATE blogs 
        SET status = 'published', publish_date = DATE(scheduled_at)
        WHERE status = 'scheduled' AND scheduled_at <= ?
    ");

    return $stmt->execute([$now]);
}

/**
 * Blog sil
 */
function deleteBlog($id)
{
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
}

/**
 * Blog bul (ID ile)
 */
function getBlogById($id)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

/**
 * Blog bul (slug ile)
 */
function getBlogBySlug($slug)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM blogs WHERE slug = ?");
    $stmt->execute([$slug]);
    return $stmt->fetch();
}

/**
 * Görüntüleme sayısını artır
 */
function incrementViews($id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE blogs SET views = views + 1 WHERE id = ?");
    $stmt->execute([$id]);
}

/**
 * Tarih formatla
 */
function formatDate($date)
{
    if (empty($date))
        return '';

    $months = [
        1 => 'Ocak',
        2 => 'Şubat',
        3 => 'Mart',
        4 => 'Nisan',
        5 => 'Mayıs',
        6 => 'Haziran',
        7 => 'Temmuz',
        8 => 'Ağustos',
        9 => 'Eylül',
        10 => 'Ekim',
        11 => 'Kasım',
        12 => 'Aralık'
    ];

    $timestamp = strtotime($date);
    $day = date('j', $timestamp);
    $month = $months[(int) date('n', $timestamp)];
    $year = date('Y', $timestamp);

    return "$day $month $year";
}