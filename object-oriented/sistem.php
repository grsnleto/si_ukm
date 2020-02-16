
<?php 
session_start();
    include_once 'Controller/class.user.php';
    include_once 'Controller/Upload.php';
    //instansiasi objek
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }
    
    //kondisi untuk melakukan proses logout
    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas PBO 9</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0 ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" style="background: #C71585; background-image: url(img/inst.png); background-repeat:no-repeat; background-size:57px;">&nbsp; Instagram</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="sistem.php?q=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="background: white;">
        <ul class="nav" id="main-menu">
        <li class="text-center" style="background: white;">

                    <img src="img/find_user.png" class="user-image img-responsive"/>
                      <h3>
                        <!--Pemanggilan method get_fullname-->
                          <?php $user->get_fullname($uid); ?>
                     </h3>
          </li>
<!--                     <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Pilih Foto </label>
                        <input  type="file" name="file" id="exampleInputFile" >
                    </div>
                        <input class="btn btn-info btn-sm" type="submit" id="btn" value="Kirim Foto" name="submit" >
                    </form> -->
                </ul>
 
            </div> 
           
        </nav>  

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">                         
                    </div>
                </div>              
                 <!-- /. ROW  -->
  <!--                 <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="panel panel-back noti-box">
                <h1>COba</h1>
                <div class="text-box" >
                </div>
             </div>
         </div> -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="panel panel-back noti-box">
                <div class="text-box" > -->
                   <!-- /. isi image atau video  -->
 <!--                </div>
             </div>
         </div> -->
         <!--            <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="panel panel-back noti-box">
                <div class="text-box" > -->
                    <!-- /. isi image atau video  -->
                <!-- </div>
             </div>
         </div> -->
                    <!-- <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="panel panel-back noti-box">
                <div class="text-box" > -->
                     <!-- /. isi image atau video  -->
               <!--  </div>
             </div>
         </div>
      </div> -->
                 <!-- /. ROW  -->               
    <div class="row">
       <div class="col-md-6 col-sm-12 col-xs-12">           
         <div class="panel panel-back noti-box" style = "width :206%">
                <div class="text-box" >
                   <?php 
                   //magic method autoload
                    function __autoload($class)
                    {
                        include $class.'.php';
                    }
                    //instansiasi objek
                    $up = new Upload;
                    //pemanggilan method save
                    $up->save();

                    include 'include/header.php';

                        if (isset($_GET['home'])) include 'pages/home.php';
                            else include 'pages/home.php';

                    include 'include/footer.php';

                    ?><!-- /. isi image atau video  -->
                    <p class="text-muted">

                    </p>
                </div>
          </div>
         </div>
        </div>
        </div>
        </div>
        <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>   
    <script src="assets/js/jquery-1.10.2.js"></script>
  
    <script src="assets/js/bootstrap.min.js"></script>
   
    <script src="assets/js/jquery.metisMenu.js"></script>
    
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
