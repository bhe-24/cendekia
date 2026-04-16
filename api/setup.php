<?php
// Menggunakan __DIR__ untuk rute absolut yang tidak akan gagal di Vercel
require_once __DIR__ . '/config/database.php';

try {
    // 1. Membuat tabel cerita
    $sql_cerita = "CREATE TABLE IF NOT EXISTS cerita (
        id_cerita VARCHAR(50) PRIMARY KEY,
        judul VARCHAR(255) NOT NULL,
        penulis VARCHAR(100) NOT NULL,
        sinopsis TEXT,
        jumlah_vote INT DEFAULT 0
    )";
    $pdo->exec($sql_cerita);
    echo "Tabel 'cerita' berhasil dibuat!<br>";

    // 2. Membuat tabel bab
    $sql_bab = "CREATE TABLE IF NOT EXISTS bab (
        id_bab INT AUTO_INCREMENT PRIMARY KEY,
        id_cerita VARCHAR(50),
        judul_bab VARCHAR(255),
        isi_cerita LONGTEXT,
        tanggal_publikasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (id_cerita) REFERENCES cerita(id_cerita) ON DELETE CASCADE
    )";
    $pdo->exec($sql_bab);
    echo "Tabel 'bab' berhasil dibuat!<br>";

    echo "<br><b>Selamat! Setup Database Selesai.</b> Silakan hapus file ini demi keamanan.";

} catch(PDOException $e) {
    echo "Gagal membuat tabel: " . $e->getMessage();
}
?>
