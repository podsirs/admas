<?php 
    session_start();
    include "../koneksi.php";
    $tgl_pengaduan = date('Y-m-d');
    $nik = $_SESSION['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    
    move_uploaded_file($file_tmp, '../assets/foto_pengaduan/'.$foto);

    $query = "INSERT INTO pengaduan (tgl_pengaduan,nik,isi_laporan, foto) VALUES ('$tgl_pengaduan','$nik','$isi_laporan','$foto')";

    $sql_eksekusi = mysqli_query($koneksi,$query);

    if ($sql_eksekusi) {
        header('location:../dashboard/dashboard_masyarakat.php');
    }
    else {
        echo "Data yang dikirimkan atau sesi anda tidak valid. silahkan login ulang";
        echo "<a href='../dashboard/logout.php'>Log out</a>";
    }

?>  