<?php 
require "config.php";

if(isset($_POST['submit'])){
    if( tambah($_POST, 'inventory') > 0 ) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'inventory.php';
                </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'AddDataBarang.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang Inventory</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0072bc, #9b59b6);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            justify-content: center;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
        }
        .logo {
            width: 80px;
            margin-right: 10px;
        }
        .title {
            font-size: 24px;
            color: grey;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 20px;
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
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .input-group button {
            background: #0072bc;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            margin-top: 10px;
            transition: background 0.3s;
            border-radius: 5px;
        }
        .input-group button:hover {
            background: #005b9e;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
        @media (max-width: 600px) {
            .header, .title {
                flex-direction: column;
                text-align: center;
            }
            .logo {
                margin: 0 auto 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="logo.png" alt="logo" />
        <h1 class="title">Sistem Informasi Perpustakaan</h1>
    </div>

    <div class="container">
        <h2 class="title" style="text-align:center; text-decoration: underline;">Tambah Data Barang</h2>    

        <form action="" method="POST" class="form-daftar">
            <div class="input-group">
                <label for="kode">Kode Barang</label>
                <input type="text" name="kode" id="kode" required>
            </div>

            <div class="input-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            
            <div class="input-group">
                <label for="satuan">Satuan</label>
                <select name="satuan" id="satuan" required>
                    <option value="Buah">Buah</option>
                    <option value="Unit">Unit</option>
                    <option value="Lembar">Lembar</option>
                    <option value="Dll">Dll</option>
                </select>
            </div>
            
            <div class="input-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" required>
            </div>
                
            <div class="input-group">
                <button type="submit" name="submit">Simpan</button>
                <button type="button" onclick="history.back()">Kembali</button>
            </div>
        </form>
    </div>

    <div class="footer">
        &copy; 2024 Sistem Informasi Perpustakaan | 23.240.0130-Syamsul Hidayat 
    </div>

</body>
</html>
