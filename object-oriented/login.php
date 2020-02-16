<?php 
session_start();
include_once 'Controller/class.user.php';
//instansiasi objek
$user = new User();

if (isset($_POST['proses'])) { 
    extract($_POST);  
    //pemanggilan method check_login 
      $login = $user->check_login($emailusername, $password);
      if ($login) {
          // Apabila Registrasi Berhasil
          echo "<script>
                      alert('Login Sukses!!');
                      document.location='sistem.php';
                  </script>";
      } else {
          // Apabila Registration Gagal
          echo "<script>
                      alert('Passowrd atau Username Salah!!');
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
  <title>Tugas PBO 9</title>
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
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white" style ="margin: 70px 335px;">
              <div class="device">
                <div class="screen">
                  <div class="konten">
                    <div class="kepala">
                      <div class="lock"></div>
                        <h2 class="judul2">Login</h2>
                          </div>
                           <div class="artikel">
                            <form action="" method="post" name ="login">
                                <div class="grup">
                                    <label for="email">Email or Phone Number or Username</label>
                                    <input type="text" name="emailusername"  placeholder="Email or Phone Number or Username" required>
                                </div>
                                <div class="grup">
                                    <label for="password">Password</label>
                                    <input type="password" name="password"  placeholder="Password" required>
                                </div>
                                <div class="grup">
                                    <input type="submit" value="Login" name="proses" onclick="return(submitlogin());"> <br/>
                                    <input type="reset" value="Reset" name="reset">  </td>
                                </div>
                                <br/>
                                <br/>
                                 <div class="header-content mx-auto" style ="background: #C71585 ; border-radius: 100px;">
                                  <a href="index.php" class="btn btn-outline btn-xl js-scroll-trigger">Belum Punya akun? Registrasi Sekarang!</a>
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
  <script>//pesan!! apabila user tidak mengisi kolom isian pada form login
      function submitlogin() {
        var form = document.login;
        if (form.emailusername.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.password.value == "") {
          alert("Enter password.");
          return false;
        }
      }
    </script>
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
