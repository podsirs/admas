<?php 
    include "assets.php";
?>
<section style="background: url(../assets/img/shiny.svg); background-repeat: no-repeat; background-size: cover; height: 100vh;">
    <nav class="navbar">
        <a class="navbar-brand container-fluid" href="#">
          <img src="../assets/img/logo.png" class="mx-auto d-block">
        </a>
    </nav>
    <div class="container-fluid w-75">
        <div class="card container">
            <a href="index.php" class="text-danger mt-3">Kembali Kehalaman Depan</a>
            <h2 class="text-center fw-bold mt-">DAFTAR</h2>
            <form action="../controller/aksi_daftar.php" method="post">
                <div class="row container mt-2">
                    <div class="col-6 mb-3">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control rounded-3" id="floatingInput" required placeholder="NOMOR INDUK KEWENEGARAAN (NIK)">
                    </div>
                    <div class="col-6 mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control rounded-3" id="floatingInput" required placeholder="NAMA LENGKAP">
                    </div>
                    <div class="col-6 mb-3">
                        <label>Nama Pengguna</label>
                        <input type="text" name="username" class="form-control rounded-3" id="floatingInput" required placeholder="NAMA PENGGUNA">
                    </div>
                    <div class="col-6 mb-3">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control rounded-3" id="floatingInput" required placeholder="PASSWORD">
                    </div>
                    <div class="col-12 mb-3">
                        <label>Telp</label>
                        <input type="text" name="telp" class="form-control rounded-3" id="floatingInput" required placeholder="08xx xxxx xxxx">
                    </div>
                    <div class="col-12 mb-5">
                        <input type="submit" class="btn btn-danger form-control mt-3" value="Daftar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>