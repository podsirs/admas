<?php 
    include "../koneksi.php";

    $nik = $_GET['nik'];
    $nama = $_GET['nama'];
    $level = $_GET['level'];

    $query = "UPDATE masyarakat SET level = '$level' WHERE nik = '$nik'";
    $sql_eksekusi = mysqli_query($koneksi, $query);

    if ($sql_eksekusi) {
        header('location:../dashboard/setting_pengguna.php');
    }
    else {
        echo "gagal, update data";
        echo "<a href='../dashboard/setting_pengguna.php'>Kembali</a>";
    }
?>