<?php
// 1. KODE KONEKSI DATABASE (Langsung di dalam file)
$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$port = getenv('DB_PORT') ?: 3306; 

try {
    // Mencoba terhubung ke Aiven MySQL
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi ke Database Berhasil!<br><br>";

    // 2. MEMBUAT TABEL CERITA
    $sql_cerita = "CREATE TABLE IF NOT EXISTS cerita (
        id_cerita VARCHAR(50) PRIMARY KEY,
        judul VARCHAR(255) NOT NULL,
        penulis VARCHAR(100) NOT NULL,
        sinopsis TEXT,
        jumlah_vote INT DEFAULT 0
    )";
    $pdo->exec($sql_cerita);
    echo "✅ Tabel 'cerita' berhasil dibuat!<br>";

    // 3. MEMBUAT TABEL BAB
    $sql_bab = "CREATE TABLE IF NOT EXISTS bab (
        id_bab INT AUTO_INCREMENT PRIMARY KEY,
        id_cerita VARCHAR(50),
        judul_bab VARCHAR(255),
        isi_cerita LONGTEXT,
        tanggal_publikasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (id_cerita) REFERENCES cerita(id_cerita) ON DELETE CASCADE
    )";
    $pdo->exec($sql_bab);
    echo "✅ Tabel 'bab' berhasil dibuat!<br>";

    echo "<br><b>Selamat! Setup Database Selesai.</b> Silakan hapus file setup.php ini nanti.";

} catch(PDOException $e) {
    // Jika gagal, tampilkan pesan error yang jelas
    echo "❌ Terjadi Kesalahan: " . $e->getMessage();
}
?>
