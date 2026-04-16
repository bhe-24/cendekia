<?php
// Mengambil nama dari URL parameter (GET)
$nama_pengguna = isset($_GET['pengguna']) ? htmlspecialchars($_GET['pengguna']) : 'Tamu';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Panel</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; display: flex; background-color: #ecf0f1; }
        .sidebar { width: 250px; background-color: #34495e; color: white; height: 100vh; padding: 20px 0; }
        .sidebar a { display: flex; align-items: center; gap: 10px; color: white; padding: 15px 20px; text-decoration: none; transition: 0.3s; }
        .sidebar a:hover { background-color: #2c3e50; }
        .content { flex: 1; padding: 30px; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3 style="text-align: center; margin-bottom: 30px;"><i class='bx bx-layer'></i> Menu</h3>
        <a href="#"><i class='bx bx-home-alt'></i> Beranda</a>
        <a href="#"><i class='bx bx-folder'></i> Arsip Data</a>
        <a href="/"><i class='bx bx-log-out'></i> Keluar</a>
    </div>

    <div class="content">
        <h2><i class='bx bx-grid-alt'></i> Dashboard Overview</h2>
        
        <div class="card">
            <h3>Halo, <?php echo $nama_pengguna; ?>!</h3>
            <p>Selamat datang di panel kontrol. Sistem berjalan lancar tanpa database eksternal yang berat, seluruh antarmuka dimuat secara efisien menggunakan ikon.</p>
        </div>
    </div>

</body>
</html>
