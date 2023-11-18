<?php 
    $localhost = "localhost";
    $user = "root";
    $password = "";
    $database = "admas";

    $koneksi = mysqli_connect($localhost,$user,$password,$database);

    if ($koneksi) {
        // echo "berhasil terhubung ke database";
    }
    else {
        echo "gagal terhubung";
    }
?>