CREATE DATABASE IF NOT EXISTS db_kampus;
USE db_kampus;

CREATE TABLE IF NOT EXISTS mahasiswa (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nim VARCHAR(30) NOT NULL,
 nama VARCHAR(100) NOT NULL,
 prodi VARCHAR(100) NOT NULL
);

INSERT INTO mahasiswa(nim,nama,prodi) VALUES
('2026001','Andi Setiawan','Teknologi Rekayasa Komputer Jaringan'),
('2026002','Budi Santoso','Sistem Informasi'),
('2026003','Citra Lestari','Informatika');
