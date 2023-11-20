<?php 
  session_start();
  include "../koneksi.php";
  include "../view/assets.php";
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
                <a href="dashboard_admin.php" class="btn btn-outline-info float-left">Kembali</a>
                <h1 class="m-0 d-block text-center">Semua Pengaduan Masyarakat</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengaduan Masyarakat</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nik Masyarakat</th>
                    <th>Tanggal</th>
                    <th>Isi Pengaduan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                   <tbody>
                  <?php 
                        $i = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY tgl_pengaduan DESC");
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "  <tr>
                                    <td>".$i++."</td>
                                    <td>".$data['nik']."</td>
                                    <td>".$data['tgl_pengaduan']."</td>
                                    <td>".$data['isi_laporan']."</td>
                                    <td>".$data['status']."</td>
                                    <td><a href='lihat_data.php?id_pengaduan=".$data['id_pengaduan']."'>Detail</a></td>
                                    </tr>";
                        }
                    ?>
                  </tbody>
                  
                </table>
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