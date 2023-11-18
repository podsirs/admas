<?php 
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
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Pengaduan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <p class="text-secondary">Halo, Admin</p>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
           <div class="row">

            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                <div class="inner">
                    <p>Jumlah Pengaduan</p>
                    <h3>13</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="data_pengaduan.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                <div class="inner">
                    <p class="text-white">Jumlah Belum diproses</p>
                    <h3 class="text-white">6</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer" style="color: white !important;">Selengkapnya <i class="fas fa-arrow-circle-right text-white"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                <div class="inner">
                    <p>Pengaduan diproses</p>
                    <h3>8</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                <div class="inner">
                    <p>Pengaduan Selesai</p>
                    <h3>65</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-12">
                 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengaduan Masyarakat</h3>
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
                  </tr>
                  </thead>

                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                        31242641941
                    </td>
                    <td>2023-05-21</td>
                    <td>Sampah berserakan di jalan!</td>
                    <td>Proses</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                        3124314512
                    </td>
                    <td>2023-05-23</td>
                    <td>Tolong perbaiki lampu jalan mati</td>
                    <td>Selesai</td>
                  </tr>
                  </tbody>
                </table>
                </div>
                </div>
            </div>

            </div> <!-- /.row -->
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