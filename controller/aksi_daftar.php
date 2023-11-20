<?php 
    include "../koneksi.php";

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $query = "INSERT INTO masyarakat (nik,nama,username,password,telp,level) VALUES ('$nik','$nama','$username','$password','$telp')";
    $sql_eksekusi = mysqli_query($koneksi, $query);

    if ($sql_eksekusi) {
        // echo "berhasil input ke database"
        header('location:../view/index.php');
    }
    else {
        // echo "gagal input";
        header('location:../view/daftar.php');
    }

?>  