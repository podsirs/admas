<?php 
    session_start();
    include "../koneksi.php";

    // $username = $_POST['username'];
    // $password = $_POST['password'];

    // $query = "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'";
    // $sql_eksekusi = mysqli_query($koneksi, $query);
    // $cek = mysqli_num_rows($sql_eksekusi);


    // if($cek == 1) {
    //     $data = mysqli_fetch_array($sql_eksekusi);
    //     $_SESSION['nama'] = $data['nama'];
    //     $_SESSION['username'] = $data['username'];
    //     $_SESSION['password'] = $data['password'];
    //     $_SESSION['level'] = $data['level'];
    //     header('location:../dashboard/dashboard_masyarakat.php');
    // }
    // else {
    //     header('location:../view/index.php');
    // }

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query_masyarakat = "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'";
    $sql_masyarakat = mysqli_query($koneksi, $query_masyarakat);
    $cek_masyarakat = mysqli_num_rows($sql_masyarakat);
    if ($cek_masyarakat == 1) {
        $data_masyarakat = mysqli_fetch_array($sql_masyarakat);
        $_SESSION['nik'] = $data_masyarakat['nik'];
        $_SESSION['nama'] = $data_masyarakat['nama'];
        $_SESSION['username'] = $data_masyarakat['username'];
        $_SESSION['password'] = $data_masyarakat['password'];
        $_SESSION['telp'] = $data_masyarakat['telp'];
        $_SESSION['level'] = $data_masyarakat['level'];
        header('location:../dashboard/dashboard_masyarakat.php');
    }
    else if ($cek == 0) {
        $query_petugas = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
        $sql_petugas = mysqli_query($koneksi, $query_petugas);
        $cek_petugas = mysqli_num_rows($sql_petugas);
        if ($cek_petugas == 1) {
            $data_petugas = mysqli_fetch_array($sql_petugas);
            $_SESSION['id_petugas'] = $data_petugas['id_petugas'];
            $_SESSION['nama'] = $data_petugas['nama_petugas'];
            $_SESSION['username'] = $data_petugas['username'];
            $_SESSION['password'] = $data_petugas['password'];
            $_SESSION['level'] = $data_petugas['level'];
            header('location:../dashboard/dashboard_admin.php');
        }
        else {
            header('location:../view/index.php');
        }
    }
?>