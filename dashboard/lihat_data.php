<?php 
    include "../view/assets.php"
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
        <!-- Content Header (Page header) -->
         <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-2">
            <div class="col-sm-12">
                <a href="data_pengaduan.php" class="btn btn-outline-info float-left">Kembali</a>
                <h1 class="m-0 d-block text-center">Data Pengaduan</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="card">
                    <h4 class="text-center text-success my-1">PENGERJAAN TELAH SELESAI</h4>
                </div>
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="../template/dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <div class="card-tools">
                   <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      Aksi 
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" data-toggle="modal" data-target="#modal-default" style="cursor: pointer;">Ubah Status</a>
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalhapus">Hapus Pengaduan</a>
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modaltambah">Tambah Balasan</a>
                    </div> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <img class="img-fluid pad" src="../template/dist/img/photo2.png" alt="Photo">
                <hr style="border: 1px solid black;">
                <p class="text-center">I took this photo this morning. What do you guys think?</p>
                
                <hr style="border: 1px solid black;">
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../template/dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">Petugas</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../template/dist/img/user4-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Luna Stark
                      <span class="text-muted float-right">Admin</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
            </div>
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Form Pengubahan Status</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Progres Pengerjaan Laporan</p>
              <select name="" id="" class="form-control">
                <option selected disabled>-- Pilih Status --</option>
                <option value="">Belum Diproses</option>
                <option value="">Sedang Diproses</option>
                <option value="">Pengerjaan Telah Selesai</option>
              </select>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Ubah Status</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



      <!-- Modal -->
        <div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Laporan?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Data yang di hapus tidak akan bisa di kembalikan. apakah anda yakin?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
            </div>
        </div>
        </div>
<!-- modal end -->

      <!-- Modal -->
        <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Balasan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Kirim Balasan kepada Pelapor.</p>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
            </div>
        </div>
        </div>
<!-- modal end -->

  <!-- Footer -->
    <?php 
        include "../navigasi/footer.php"
    ?>
  <!-- footer tutup -->
  
    </div>
<!-- ./wrapper -->
</body>