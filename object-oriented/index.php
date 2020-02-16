<?php 
include_once 'Controller/class.user.php';
//instansiasi objek
$user = new User();

if (isset($_POST['register'])){
        extract($_POST);
        //pemanggilan method reg_user
        $register = $user->reg_user($fullname, $uname, $upass, $uemail);
        if ($register) {
            // Apabila Registration Berhasil
            echo "<script>
                      alert('Registrasi Sukses!! Login Sekarang!');
                      document.location='login.php';
                  </script>";
        } else {
            // Apabila Registration Gagal
            echo "<script>
                      alert('Registrasi Gagal!! Cek Lagi!!');
                  </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tugas Akhir</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" >
</head>
<body id="page-top">
  <!-- Navigation -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">WELCOME TO INSTAGRAM</h1>
            <a href="login.php" class="btn btn-outline btn-xl js-scroll-trigger">Sudah Punya akun? Login</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <div class="konten">
                  <div class="kepala">
                        <div class="lock"></div>
                      <h2 class="judul">Registrasi</h2>
                  </div>
                  <div class="artikel">
                      <form action="" method="post">
                          <div class="grup">
                              <label for="email">Email or Phone Number</label>
                              <input type="text" name="uemail" placeholder="Email or Phone Number"required>
                          </div>
                          <div class="grup">
                              <label for="namalengkap">Nama Lengkap</label>
                              <input type="text" name="fullname" placeholder="Nama Lengkap"required>
                          </div>
                          <div class="grup">
                              <label for="username">Username</label>
                              <input type="text" name="uname" placeholder="Username" required>
                          </div>
                          <div class="grup">
                              <label for="password">Password</label>
                              <input type="password" name="upass" placeholder="Password" required>
                          </div>
                          <div class="grup">
                              <input type="submit" name="register" value="Register"> <br/>
                              <input type="reset" value="Reset" name="reset">  </td>
                          </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <footer>
    <div class="container">
      <p>&copy; Soleh:Gerson:Kusi</p>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>
</body>
</html>
