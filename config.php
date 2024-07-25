<?php

$db = mysqli_connect('localhost', 'root', '', 'web1');

if (!$db) {
    die("gagal terhubung ke database".mysqli_connect_error());
}

function tambah($data, $table) 
{
    global $db;
    $kode = $data['kode'];
    $nama = $data['nama'];
    $satuan = $data['satuan'];
    $jumlah = $data['jumlah'];

    $CheckKode = mysqli_query($db, "SELECT kode FROM $table WHERE kode = '$kode'");
    if(mysqli_fetch_assoc($CheckKode)) {
        echo "<script> alert('Kode Barang Sudah Digunakan!'); </script>";
        return false;
    }
              
    $query = mysqli_query($db, "INSERT INTO $table VALUES ('$kode', '$nama', '$satuan', '$jumlah')");
    return mysqli_affected_rows($db);
}

function simpan($data, $table) 
{
    global $db;
    $id = $data['id'];
    $kode = $data['kode'];
    $nama = $data['nama'];
    $satuan = $data['satuan'];
    $jumlah = $data['jumlah'];

    $query = mysqli_query($db, "UPDATE $table SET kode = '$kode', nama='$nama', Satuan='$satuan', Jumlah='$jumlah' WHERE kode = '$id' ");
    return mysqli_affected_rows($db);
}

function hapus($id, $table) {
    global $db;
    mysqli_query($db, "DELETE FROM $table WHERE kode = '$id'");

    return mysqli_affected_rows($db);
}

?>