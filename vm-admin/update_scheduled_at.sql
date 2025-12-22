-- Blog planlama özelliği için veritabanı güncellemesi
-- Bu SQL'i phpMyAdmin veya MySQL Workbench üzerinden çalıştırın

-- scheduled_at sütununu ekle (ileri tarihli yayınlama için)
ALTER TABLE blogs ADD COLUMN scheduled_at DATETIME NULL DEFAULT NULL AFTER status;

-- Mevcut blogların scheduled_at değerini NULL olarak bırakın (hemen yayınlanır)
