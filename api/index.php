<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Cendekia Aksara</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f4f7f6; color: #333; }
        header { background-color: #2c3e50; color: white; padding: 1.5rem; text-align: center; }
        .container { max-width: 800px; margin: 2rem auto; padding: 1rem; text-align: center; }
        .btn { display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        .btn:hover { background-color: #2980b9; }
        .icon-large { font-size: 4rem; color: #3498db; margin-bottom: 1rem; }
    </style>
</head>
<body>

    <header>
        <h1><i class='bx bx-book-open'></i> Portal Utama</h1>
    </header>

    <div class="container">
        <i class='bx bx-data icon-large'></i>
        <h2>Selamat Datang</h2>
        <p>Silakan masuk menggunakan nama Anda untuk mengakses panel manajemen.</p>
        
        <form action="/dashboard" method="GET" style="margin-top: 20px;">
            <input type="text" name="pengguna" placeholder="Masukkan Nama Anda..." required style="padding: 10px; width: 60%; border: 1px solid #ccc; border-radius: 5px;">
            <button type="submit" class="btn"><i class='bx bx-log-in'></i> Masuk Dashboard</button>
        </form>
    </div>

</body>
</html>
