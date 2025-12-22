<?php
/**
 * Veritabanı - MySQL PDO
 */

// Türkiye saat dilimi
date_default_timezone_set('Europe/Istanbul');

// MySQL Bağlantı Bilgileri
define('DB_HOST', 'localhost');
define('DB_NAME', 'veddia_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// PDO Bağlantısı
$pdo = null;

function getDB()
{
    global $pdo;

    if ($pdo === null) {
        try {
            $pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
                DB_USER,
                DB_PASS,
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

function getUserByUsername($username)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch();
}

function verifyUser($username, $password)
{
    $user = getUserByUsername($username);
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return null;
}

// ==================== BLOG FONKSİYONLARI ====================

function loadBlogs()
{
    $db = getDB();
    $stmt = $db->query("SELECT * FROM blogs ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

function getPublishedBlogs()
{
    $db = getDB();
    // Yayınlanmış ve planlanma zamanı geçmiş veya planlama yok blogları getir
    $stmt = $db->query("
        SELECT * FROM blogs 
        WHERE status = 'published' 
        AND (scheduled_at IS NULL OR scheduled_at <= NOW())
        ORDER BY created_at DESC
    ");
    return $stmt->fetchAll();
}

function getBlogById($id)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function getBlogBySlug($slug)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM blogs WHERE slug = ?");
    $stmt->execute([$slug]);
    return $stmt->fetch();
}

function createSlug($title)
{
    $slug = mb_strtolower($title, 'UTF-8');
    $slug = str_replace(['ş', 'ğ', 'ü', 'ö', 'ç', 'ı', 'İ', 'Ş', 'Ğ', 'Ü', 'Ö', 'Ç'], ['s', 'g', 'u', 'o', 'c', 'i', 'i', 's', 'g', 'u', 'o', 'c'], $slug);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return trim($slug, '-');
}

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

function addBlog($data)
{
    $db = getDB();

    // Özel yayın tarihi varsa onu kullan, yoksa NOW()
    $createdAt = !empty($data['created_at']) ? $data['created_at'] : date('Y-m-d H:i:s');

    $stmt = $db->prepare("
        INSERT INTO blogs (title, slug, excerpt, content, category, image, author, read_time, is_featured, status, scheduled_at, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
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
        $data['scheduled_at'] ?? null,
        $createdAt
    ]);
    return $db->lastInsertId();
}

function updateBlog($id, $data)
{
    $db = getDB();

    // Özel yayın tarihi varsa created_at'ı da güncelle
    if (!empty($data['created_at'])) {
        $stmt = $db->prepare("
            UPDATE blogs SET 
                title = ?, slug = ?, excerpt = ?, content = ?, 
                category = ?, image = ?, author = ?, read_time = ?, 
                is_featured = ?, status = ?, scheduled_at = ?, created_at = ?, updated_at = NOW()
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
            $data['scheduled_at'] ?? null,
            $data['created_at'],
            $id
        ]);
    } else {
        $stmt = $db->prepare("
            UPDATE blogs SET 
                title = ?, slug = ?, excerpt = ?, content = ?, 
                category = ?, image = ?, author = ?, read_time = ?, 
                is_featured = ?, status = ?, scheduled_at = ?, updated_at = NOW()
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
            $data['scheduled_at'] ?? null,
            $id
        ]);
    }
}

function deleteBlog($id)
{
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
}

function incrementViews($id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE blogs SET views = views + 1 WHERE id = ?");
    $stmt->execute([$id]);
}

function getBlogStats()
{
    $db = getDB();
    $stats = [];

    $stmt = $db->query("SELECT COUNT(*) FROM blogs");
    $stats['total'] = $stmt->fetchColumn();

    $stmt = $db->query("SELECT COUNT(*) FROM blogs WHERE status = 'published'");
    $stats['published'] = $stmt->fetchColumn();

    $stmt = $db->query("SELECT COUNT(*) FROM blogs WHERE status = 'draft'");
    $stats['draft'] = $stmt->fetchColumn();

    $stmt = $db->query("SELECT SUM(views) FROM blogs");
    $stats['views'] = $stmt->fetchColumn() ?? 0;

    return $stats;
}

function formatDate($date)
{
    if (empty($date))
        return '';
    $months = [1 => 'Ocak', 2 => 'Şubat', 3 => 'Mart', 4 => 'Nisan', 5 => 'Mayıs', 6 => 'Haziran', 7 => 'Temmuz', 8 => 'Ağustos', 9 => 'Eylül', 10 => 'Ekim', 11 => 'Kasım', 12 => 'Aralık'];
    $ts = strtotime($date);
    return date('j', $ts) . ' ' . $months[(int) date('n', $ts)] . ' ' . date('Y', $ts);
}


// ==================== REFERANS (PROJECT) FONKSİYONLARI ====================

function getProjects()
{
    $db = getDB();
    $stmt = $db->query("SELECT * FROM projects ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

function getProjectById($id)
{
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function addProject($data)
{
    $db = getDB();
    $stmt = $db->prepare("
        INSERT INTO projects (title, description, category, image, url, tags) 
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $data['title'],
        $data['description'] ?? '',
        $data['category'],
        $data['image'] ?? '',
        $data['url'] ?? '',
        $data['tags'] ?? ''
    ]);
    return $db->lastInsertId();
}

function updateProject($id, $data)
{
    $db = getDB();
    $stmt = $db->prepare("
        UPDATE projects SET 
            title = ?, description = ?, category = ?, 
            image = ?, url = ?, tags = ?
        WHERE id = ?
    ");
    $stmt->execute([
        $data['title'],
        $data['description'] ?? '',
        $data['category'],
        $data['image'] ?? '',
        $data['url'] ?? '',
        $data['tags'] ?? '',
        $id
    ]);
}

function deleteProject($id)
{
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->execute([$id]);
}

function getProjectStats()
{
    $db = getDB();
    $stmt = $db->query("SELECT COUNT(*) FROM projects");
    return $stmt->fetchColumn();
}
