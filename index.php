<?php require 'config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan-UAS</title>
    <style>
        body {
            margin: 0;
            font-family: Arial Narrow Bold, sans-serif;
            background: linear-gradient(135deg, #0072bc, #9b59b6);
            color: #333;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .logo {
            width: 80px; 
            margin-right: 10px;
        }
        .title {
            font-size: 24px;
            color: white;
        }
        .nav-links {
            text-align: center;
            margin: 20px 0;
        }
        .nav-links a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.6);
            transform: scale(1.05);
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .foto {
            width: 200px; 
            display: block;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial;
        }
        .content h2 {
            text-align: center;
            color: #0072bc;
        }
        .content p {
            /* font-family: Arial, Helvetica, sans-serif; */
            line-height: 1.6;
        }
        .content li {
            margin-top: 6px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="logo.png" alt="logo" />
        <h1 class="title">Sistem Informasi Perpustakaan</h1>
    </div>

    <div class="nav-links">
        <a href="index.php">Beranda</a>
        <a href="inventory.php">Inventory</a>
        <a href="buku.php">Data Buku</a>
    </div>
    
    <!-- <img src="https://th.bing.com/th?id=OIP.CqdjwMEFrwQf3rHI_m3IqgHaIi&w=232&h=268&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" alt="" class="foto"> -->
    <img src="foto.jfif" alt="" class="foto">

    <div class="content">
        <h2>Pengertian Sistem Informasi Perpustakaan</h2>
        <p>Sistem Informasi Perpustakaan (juga dikenal sebagai e-library) adalah sistem yang digunakan untuk mengelola manajemen perpustakaan. Fungsinya adalah mengatur data buku, artikel, jurnal, majalah ilmiah, surat kabar, dokumen digital, thesis, laporan riset, dan konten digital lainnya yang ada di perpustakaan. Sistem ini membutuhkan tenaga manusia untuk memasukkan data, kemudian data tersebut diproses menjadi informasi dan didistribusikan kepada pengguna.</p>
        
        <h2>Manfaat Sistem Informasi Perpustakaan</h2>
        <ul>
            <li><strong>Memudahkan Pekerjaan Pustakawan:</strong> Sebelumnya, pustakawan harus melakukan pengarsipan manual menggunakan buku catatan. Kini, sistem informasi perpustakaan memudahkan mereka dalam mengelola koleksi dan mencari informasi.</li>
            <li><strong>Efisiensi Waktu:</strong> Pengguna dapat dengan cepat mencari data melalui komputer, dan informasi koleksi langsung muncul.</li>
            <li><strong>Pekerjaan Lebih Cepat:</strong> Integrasi dengan sistem informasi mempercepat pekerjaan pustakawan.</li>
            <li><strong>Layanan Terbaik bagi Pemustaka:</strong> Pengunjung perpustakaan dapat dengan mudah mengakses koleksi dan direkomendasikan ke perpustakaan rujukan.</li>
            <li><strong>Akses E-Library:</strong> Sistem ini dapat diakses oleh banyak orang.</li>
        </ul>
    </div>
    
    <div class="footer">
        &copy; 2024 Sistem Informasi Perpustakaan | 23.240.0130-Syamsul Hidayat 
    </div>
</body>
</html>
