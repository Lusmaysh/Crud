<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial Narrow Bold, sans-serif;
            background: linear-gradient(135deg, #0072bc, #9b59b6);
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        .TombolTambahan {
            text-align: center;
            margin: 20px 0;
        }
        .TombolTambahan a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background-color: rgba(0, 123, 255, 0.7);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .TombolTambahan a:hover {
            background-color: rgba(0, 123, 255, 1);
            transform: scale(1.05);
        }
        .TableData {
            margin: 20px auto;
            width: 90%;
            max-width: 1000px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid rgba(255, 255, 255, 0.7);
        }
        th, td {
            padding: 12px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
        }
        th {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            position: relative;
            width: 100%;
            margin-top: auto;
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

    <h2 class="title" style="text-align:center; text-decoration: underline;">Laporan Data Tahun 2024</h2>

    <div class="TableData">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $table = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM $table");
                    if(mysqli_num_rows($query) == 0){
                        echo "<script>
                                alert('Data Kosong!');
                                document.location.href = '$table.php';
                            </script>";
                    }
                    $x = 1;
                    while($DataInventory = mysqli_fetch_array($query) ) 
                    {
                        echo "<tr>";
                        echo "<td>$x</td>";
                        echo "<td>".$DataInventory['kode']."</td>";
                        echo "<td>".$DataInventory['nama']."</td>";
                        echo "<td>".$DataInventory['Satuan']."</td>";
                        echo "<td>".$DataInventory['Jumlah']."</td>";
                        echo "</tr>";
                        $x++;
                    }
                ?>                    
            </tbody>
        </table>
    </div>

    <div class="footer">
        &copy; 2024 Sistem Informasi Perpustakaan | 23.240.0130-Syamsul Hidayat 
    </div>

</body>
</html>
