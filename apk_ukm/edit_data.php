<?php
	// include "kon.php";
	//   $nim = $_GET ['nim'];
 //      $sql = "select * from maba_19 where nim = '$nim'";

	// $hsl = mysqli_query ($kon,$sql);
	// if(!$hsl) die ("Gagal Query...");

	// $data = mysqli_fetch_array($hsl);
	// $nim = $data["nim"];
	// $nama = $data["nama"];
	// $jurusan = $data["jurusan"];
	// $telp = $data["telp"];
  $nim = $_GET['nim'];
  include "kon.php";
  $sql = "select * from maba_19 where nim = '$nim'";
  $hsl = mysqli_query($kon,$sql) or die ("Gagal");
  $r = mysqli_fetch_assoc($hsl);
?>
<html>
  <head>
    <title>Apk KMK</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  </head>
  <body>
    
    <nav class="navbar navbar-default navbar-inverse" role="navigation" style = "background-color : green; border-radius : 0px;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UKM KMK</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar Anggota<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="divider"></li>
                <li><a href="#">Data Anggota Lama</a></li>
                <li class="divider"></li>
                <li><a href="tampil_data.php">Data Anggota Baru</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#onphpidLogin"><b>Input Data</b></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <h1 class="text-center">
      
      </h1>
    </div>
    <div id="onphpidLogin" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Data</h4>
          </div>
          <div class="modal-body">
            <form action="simpan_data.php" method="post">
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" placeholder="nim" class="form-control" value = '<?=$r['nim'];?>' />
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama"  placeholder="nama" class="form-control" value = '<?=$r['nama'];?>' />
              </div>
               <label>Jurusan</label>
               <select name="jurusan"  class="form-control" >
                <option value ="" >-- Pilih--</option>
                <option  value ="Teknik Informatika"<?php if ($r['jurusan']=='Teknik Informatika'){echo "selected";}?>  >Teknik Informatika</option>
                <option  value ="Sistem Informasi" <?php if ($r['jurusan']=='Sistem Informasi'){echo "selected";}?>  >Sistem Informasi</option>
                <option  value ="Teknik Komputer" <?php if ($r['jurusan']=='Teknik Komputer'){echo "selected";}?>  >Teknik Komputer</option>
                <option  value ="Komputerisasi Akuntansi" <?php if ($r['jurusan']=='Komputerisasi Akuntansi'){echo "selected";}?>  >Komputerisasi Akuntansi</option>
                <option  value ="Manajemen Informatika" <?php if ($r['jurusan']=='Manajemen Informatika'){echo "selected";}?>  >Manajemen Informatika</option>
               </select>
               <br/>
               <div class="form-group">
                <label for="tlp">No. Telp/ WA</label>
                <input type="text" name="telp"  placeholder="telepon" class="form-control" value = '<?=$r['telp'];?>' />
              </div>
              <div class="text-right">
                <button class="btn btn-danger" type="submit" name="submit" value="Ubah">Ubah</button>
                 <button class="btn btn-danger" type="reset" name="reset">Reset</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script>
      $('#onphpidLogin').on('shown.bs.modal');
    </script> -->
  </body>
</html>
