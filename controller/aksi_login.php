<?php 
    session_start();
    include "../koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'";
    $sql_eksekusi = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($sql_eksekusi);

    if($cek == 1) {
        $data = mysqli_fetch_array($sql_eksekusi);
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        
        header('location:../dashboard/dashboard_masyarakat.php');
    }
    else {
        header('location:../view/index.php');
    }
?>