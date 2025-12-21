-- Veddia Media Veritabanı Tabloları
-- phpMyAdmin'de "SQL" sekmesine yapıştırın ve çalıştırın

-- Kullanıcılar Tablosu
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100),
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Bloglar Tablosu
CREATE TABLE IF NOT EXISTS `blogs` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `slug` VARCHAR(255) NOT NULL UNIQUE,
    `excerpt` TEXT,
    `content` LONGTEXT,
    `category` VARCHAR(100) DEFAULT 'Genel',
    `image` VARCHAR(500),
    `author` VARCHAR(100) DEFAULT 'Veddia Media',
    `read_time` INT DEFAULT 5,
    `views` INT DEFAULT 0,
    `is_featured` TINYINT(1) DEFAULT 0,
    `status` ENUM('published', 'draft', 'scheduled') DEFAULT 'published',
    `publish_date` DATE,
    `scheduled_at` DATETIME,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Varsayılan Admin Kullanıcısı
-- Şifre: admin123
INSERT INTO `users` (`username`, `password`, `email`) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@veddia.com');
