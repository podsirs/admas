<?php
    session_start();
    include "../view/assets.php";

    if(empty($_SESSION['username'])) {
        header('location:../view/index.php');
    }
    else {
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
              <form action="../controller/aksi_pengaduan.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" value="3" name="status" hidden>
                    <label>Jelaskan Laporan Anda <span class="text-secondary">(Max : 70 Huruf)</span></label>
                    <input type="text" class="form-control" name="isi_laporan" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Kejadian</label>
                    <input type="date" class="form-control" name="tgl_pengaduan" id="">
                  </div>
                  <div class="form-group">
                    <label>Pilih Foto</label>
                    <div class="input-group">
                        <input class="form-control" type="file" id="formFile" name="foto" required accept="image/png, image/jpg, image/jpeg"/>
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
