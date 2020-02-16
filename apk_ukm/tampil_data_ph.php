<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APLIKASI KMK</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="halaman_admin.php">APLIKASI UKM KMK</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="halaman_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Input Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Pengurus Harian</h6>
          <a class="dropdown-item" href="p_ph.php">Input Pengurus Harian</a>
        </div>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Diagram</span></a>
      </li> -->
     <!--  <li class="nav-item active">
        <a class="nav-link" href="tampil_data.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="halaman_admin.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Tabel</li>
        </ol>
        <?php
          include "kon.php";
          $sql = "select * from pengurus";
          $result = mysqli_query ($kon, $sql);
          if (!$result) { //jika hasilnya false
            die("Gagal Query ".mysqli_error($kon));
          }
        ?>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Pengurus Harian 
            <div style = "text-align : right;">
                <a href ="p_ph.php"> <li class="btn btn-primary" ><span class="fa fa-clone"></span> Tambah Data</li></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%">    
                <thead>
                  <tr>
                    <th>Id Pengurus</th>
                    <th>Nim</th>
                    <th>Nama Pengurus</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
               <tbody>
                    <?php
                    $no= 0;

                        while ($data = mysqli_fetch_assoc($result)) {
                            $no++;
                          if ($no % 2 == 1 ) 
                            echo "<tr style='background:white'>";
                          else
                            echo "<tr style='background:white'>";
                    ?>
                    <td><?php echo $data['id_pengurus']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>

                   <td>
                    <a href="edit_ph.php?id_pengurus=<?php echo $data['id_pengurus']; ?>" class="btn btn-success" style= "width : 45%;">Edit</a>
                    <a href="hapus_data_ph.php?id_pengurus=<?php echo $data['id_pengurus']; ?>" 
                        name = "hapus" class="btn btn-danger" style= "width : 45%;" onClick = "return confirm('Yakin Ingin Hapus <?php echo "(".$data['nama'].")"; ?>')">Hapus</a>
                    </td>
                    <?php
                        }
                    ?>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted" style = "text-align : right;" ><?php echo "Terdapat: ".mysqli_num_rows($result)." Data Pengurus";?></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © KMK 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar dari aplikasi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Silahkan pilih "Logout" untuk keluar dari aplikasi.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
