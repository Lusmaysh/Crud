<?php

require "config.php";

if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $table = $_GET['table'];

    $query = mysqli_query($db, "DELETE FROM $table WHERE kode = '$id'");

    if($query) {
        echo "<script>
        alert('data berhasil dihapus!');
        document.location.href = '$table.php';
                </script>";
    } else {
        echo "<script>
        alert('data gagal dihapus!');
        document.location.href = '$table.php';
                </script>";
    }
}

?>