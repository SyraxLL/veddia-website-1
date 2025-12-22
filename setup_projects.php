<?php
require_once 'includes/database.php';

try {
    $db = getDB();

    $sql = "CREATE TABLE IF NOT EXISTS projects (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        category VARCHAR(100) NOT NULL,
        image VARCHAR(500),
        url VARCHAR(500),
        tags VARCHAR(500),
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $db->exec($sql);
    echo "Projects tablosu başarıyla oluşturuldu!";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?>