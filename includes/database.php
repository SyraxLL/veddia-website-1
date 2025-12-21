<?php
/**
 * Veritabanı - JSON Tabanlı
 * SQLite driver gerektirmez
 */

// Data klasörü
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

// JSON dosya yolları
$usersFile = $dataDir . '/users.json';
$blogsFile = $dataDir . '/blogs.json';

/**
 * Kullanıcıları yükle
 */
function loadUsers()
{
    global $usersFile;

    if (!file_exists($usersFile)) {
        // Varsayılan admin kullanıcısı
        $defaultUsers = [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'email' => 'admin@veddia.com',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];
        saveUsers($defaultUsers);
        return $defaultUsers;
    }

    return json_decode(file_get_contents($usersFile), true) ?: [];
}

/**
 * Kullanıcıları kaydet
 */
function saveUsers($users)
{
    global $usersFile;
    file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

/**
 * Blogları yükle
 */
function loadBlogs()
{
    global $blogsFile;

    if (!file_exists($blogsFile)) {
        saveBlogs([]);
        return [];
    }

    return json_decode(file_get_contents($blogsFile), true) ?: [];
}

/**
 * Blogları kaydet
 */
function saveBlogs($blogs)
{
    global $blogsFile;
    file_put_contents($blogsFile, json_encode($blogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

/**
 * Yeni blog ID'si al
 */
function getNextBlogId()
{
    $blogs = loadBlogs();
    if (empty($blogs))
        return 1;
    return max(array_column($blogs, 'id')) + 1;
}

/**
 * Blog ekle
 */
function addBlog($data)
{
    $blogs = loadBlogs();

    $blog = [
        'id' => getNextBlogId(),
        'title' => $data['title'],
        'slug' => $data['slug'],
        'excerpt' => $data['excerpt'] ?? '',
        'content' => $data['content'] ?? '',
        'category' => $data['category'] ?? 'Genel',
        'image' => $data['image'] ?? '',
        'author' => $data['author'] ?? 'Admin',
        'read_time' => $data['read_time'] ?? 5,
        'views' => 0,
        'is_featured' => $data['is_featured'] ?? 0,
        'status' => $data['status'] ?? 'published',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];

    $blogs[] = $blog;
    saveBlogs($blogs);

    return $blog['id'];
}

/**
 * Blog güncelle
 */
function updateBlog($id, $data)
{
    $blogs = loadBlogs();

    foreach ($blogs as &$blog) {
        if ($blog['id'] == $id) {
            $blog['title'] = $data['title'] ?? $blog['title'];
            $blog['slug'] = $data['slug'] ?? $blog['slug'];
            $blog['excerpt'] = $data['excerpt'] ?? $blog['excerpt'];
            $blog['content'] = $data['content'] ?? $blog['content'];
            $blog['category'] = $data['category'] ?? $blog['category'];
            $blog['image'] = $data['image'] ?? $blog['image'];
            $blog['author'] = $data['author'] ?? $blog['author'];
            $blog['read_time'] = $data['read_time'] ?? $blog['read_time'];
            $blog['is_featured'] = $data['is_featured'] ?? $blog['is_featured'];
            $blog['status'] = $data['status'] ?? $blog['status'];
            $blog['updated_at'] = date('Y-m-d H:i:s');
            break;
        }
    }

    saveBlogs($blogs);
}

/**
 * Blog sil
 */
function deleteBlog($id)
{
    $blogs = loadBlogs();
    $blogs = array_filter($blogs, function ($blog) use ($id) {
        return $blog['id'] != $id;
    });
    saveBlogs(array_values($blogs));
}

/**
 * Blog bul (ID ile)
 */
function getBlogById($id)
{
    $blogs = loadBlogs();
    foreach ($blogs as $blog) {
        if ($blog['id'] == $id) {
            return $blog;
        }
    }
    return null;
}

/**
 * Blog bul (slug ile)
 */
function getBlogBySlug($slug)
{
    $blogs = loadBlogs();
    foreach ($blogs as $blog) {
        if ($blog['slug'] == $slug) {
            return $blog;
        }
    }
    return null;
}

/**
 * Görüntüleme sayısını artır
 */
function incrementViews($id)
{
    $blogs = loadBlogs();
    foreach ($blogs as &$blog) {
        if ($blog['id'] == $id) {
            $blog['views'] = ($blog['views'] ?? 0) + 1;
            break;
        }
    }
    saveBlogs($blogs);
}

/**
 * Slug oluşturma fonksiyonu
 */
function createSlug($text)
{
    $turkish = array('ş', 'Ş', 'ı', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'ç', 'Ç');
    $english = array('s', 's', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c');
    $text = str_replace($turkish, $english, $text);
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}

/**
 * Slug benzersiz mi kontrol et
 */
function isSlugUnique($slug, $excludeId = null)
{
    $blogs = loadBlogs();
    foreach ($blogs as $blog) {
        if ($blog['slug'] == $slug && $blog['id'] != $excludeId) {
            return false;
        }
    }
    return true;
}

/**
 * Tarih formatla
 */
function formatDate($date)
{
    $months = [
        '01' => 'Ocak',
        '02' => 'Şubat',
        '03' => 'Mart',
        '04' => 'Nisan',
        '05' => 'Mayıs',
        '06' => 'Haziran',
        '07' => 'Temmuz',
        '08' => 'Ağustos',
        '09' => 'Eylül',
        '10' => 'Ekim',
        '11' => 'Kasım',
        '12' => 'Aralık'
    ];

    $timestamp = strtotime($date);
    $day = date('d', $timestamp);
    $month = $months[date('m', $timestamp)];
    $year = date('Y', $timestamp);

    return "$day $month $year";
}

/**
 * Kullanıcıyı doğrula
 */
function verifyUser($username, $password)
{
    $users = loadUsers();
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            return $user;
        }
    }
    return null;
}

// Kullanıcıları başlat (ilk çalıştırmada admin oluşturur)
loadUsers();
?>