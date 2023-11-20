<?php 
    session_start();
    include "../koneksi.php";
    include "../view/assets.php";

    if ($_SESSION['level'] == 'admin') {
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
                <h1 class="m-0">Setting Pengguna</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
                </ol>
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
          <h3 class="card-title">Data User</h3>
        </div>
        <div class="card-body p-0" style="display: block;">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                        No
                      </th>
                      <th>
                        NIK
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Level
                      </th>
                      <th class="text-center">
                      Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                    $i = 1;
                    $query = "SELECT * FROM masyarakat";
                    $sql_eksekusi = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($sql_eksekusi)) {
                           echo "  <tr>
                                        <td>".$i++."</td>
                                        <td>".$data['nik']."</td>
                                        <td>".$data['nama']."</td>
                                        <td>".$data['level']."</td>
                                        <td class='text-center'>
                                            <button class='btn btn-info btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal".$data['nik']."'>
                                            <i class='fas fa-pencil-alt'></i>Edit</button>
                                        </td>
                                    </tr>";
                                    // modal
                                    echo "<div class='modal fade' id='exampleModal".$data['nik']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h1 class='modal-title fs-5' id='exampleModalLabel'>Ubah Level</h1>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                <form action='../controller/aksi_level.php' method='GET'>
                                                    <label>NIK</label>
                                                    <input type='text' class='form-control' readonly name='nik' value='".$data['nik']."'>
                                                    <label>Nama Pengguna</label>
                                                    <input type='text' name='nama' class='form-control mb-2' readonly value='".$data['nama']."'>
                                                    <label>Level Pengguna</label>
                                                    <select name='level' class='form-control'>
                                                        <option value='masyarakat'>masyarakat</option>
                                                        <option value='admin'>admin</option>
                                                    </select>
                                                    </div>
                                                    <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>
                                                    <button type='submit' class='btn btn-primary'>Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                // modal
                    }
                ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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
    else {
        header('location:error.php');
    }
 ?>

 <!-- modal -->

 <!-- modal end -->
