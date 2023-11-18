<?php 
    include "assets.php";  
?>
<body>
<!-- header start -->
    <div class="bg-darkred">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="../assets/img/logo.png" alt="">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn me-2 text-white" data-bs-toggle="modal" data-bs-target="#loginmodal">Masuk</button>
                <a href="daftar.php" class="btn btn-outline-light rounded-1">Daftar</a>
            </div>
        </header>
<!-- header stop -->    
    <section class="container-fluid text-center text-white" style="margin-top: 12vh;">
        <h4>Layanan Aspirasi dan Pengaduan Online Rakyat</h4>
        <h4 class="fw-light">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
        <center>
            <hr style="border-top: 8px solid; width: 20vh; border-color: white;">
        </center>
    </section>
    </div>
    <div style="background-image: url(../assets/img/Wave-bot.svg); height: 220px;
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: -20px;">
    </div>
</body>


<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-darkred rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-white">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body pt-0">
        <form action="../controller/aksi_login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="username" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nama Pengguna</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->


