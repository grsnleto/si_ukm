<!DOCTYPE html>
<html>
<head>
	<title>UKM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>UKM KMK</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>NIM dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>NIM</label>
			<input type="text" name="nim" class="form_login" placeholder="NIM .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="daftar.php">Daftar</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>