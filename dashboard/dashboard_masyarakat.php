<?php
    session_start();
    include "../view/assets.php";

    if(empty($_SESSION['username'])) {
        header('location:../view/index.php');
    }
    else {
      ?>
      <?php 
        echo $_SESSION['nama'];
      ?>
      <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- ini sidebar -->
    <?php 
        include "../navigasi/navside.php"
    ?>
    <!-- ini sidebar penutup -->
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="bg-darkred">
        <header class="d-flex flex-wrap container">
            
        </header>
<!-- header stop -->    
    <section class="container-fluid text-center text-white" style="margin-top: 8vh;">
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-danger w-75 mx-auto" style="margin-top: -180px;">
                <div class="container mt-2">
                    <div class="card container bg-darkred">
                        <p class="fs-4 text-white fw-bold text-center my-2">Sampaikan Laporan Anda</p>
                    </div>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Jelaskan Laporan Anda <span class="text-secondary">(Max : 70 Huruf)</span></label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn bg-darkred fw-bold text-white align-items ms-auto d-block px-5">Lapor!</button>
                </div>
              </form>
            </div>
            </div>
        </div>
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

      <div class="modal-body p-5 pt-0">
        <form action="" method="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nama Pengguna</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Footer -->
    <?php 
        include "../navigasi/footer.php"
    ?>
  <!-- footer tutup -->
    </div>
<!-- ./wrapper -->
</body>
      <?php  
    }
      ?>
