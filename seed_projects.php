<?php
require_once 'includes/database.php';

try {
    // Zaten varsa ekleme
    $projects = getProjects();
    if (!empty($projects)) {
        echo "Zaten projeler var, eklenmedi.";
        exit;
    }

    addProject([
        'title' => 'TechCorp Kurumsal Site',
        'description' => 'Teknoloji firması için modern ve profesyonel kurumsal web sitesi tasarımı ve geliştirmesi.',
        'category' => 'Web Tasarım',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
        'url' => '#',
        'tags' => 'WordPress, Responsive, SEO'
    ]);

    addProject([
        'title' => 'ModaStore E-Ticaret',
        'description' => 'Giyim markası için kapsamlı e-ticaret platformu. Ödeme entegrasyonları ve stok yönetimi.',
        'category' => 'E-Ticaret',
        'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop',
        'url' => '#',
        'tags' => 'WooCommerce, Ödeme Sistemi, Kargo'
    ]);

    addProject([
        'title' => 'FoodDelivery Kampanyası',
        'description' => 'Yemek teslimat uygulaması için Google Ads ve sosyal medya reklam kampanyası yönetimi.',
        'category' => 'Dijital Pazarlama',
        'image' => 'https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&h=400&fit=crop',
        'url' => '#',
        'tags' => 'Google Ads, Facebook Ads, %280 ROI'
    ]);

    addProject([
        'title' => 'BeautyBrand Instagram',
        'description' => 'Kozmetik markası için Instagram hesap yönetimi ve içerik stratejisi. +50K takipçi artışı.',
        'category' => 'Sosyal Medya',
        'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&h=400&fit=crop',
        'url' => '#',
        'tags' => 'Instagram, İçerik, Influencer'
    ]);

    echo "Örnek projeler başarıyla eklendi.";

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?>