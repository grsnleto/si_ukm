<!DOCTYPE html>
<html>
<head>
	<title>Daftar UKM KMK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="kotak_login">
		<p class="tulisan_login">Silahkan Mendaftar</p>
 
		<form action="pro_daftar.php" method="post">
            <label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">
 
			<label>NIM</label>
			<input type="text" name="nim" class="form_login" placeholder="NIM .." required="required">
 
            <label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<label>Confirm Password</label>
			<input type="password" name="c_password" class="form_login" placeholder="Confirm Password .." required="required">

            <label>Status : </label>
            <input type="radio" name="status" required="required"
            <?php if (isset($status) && $status=="anggota") echo "checked";?>
            value="anggota">Anggota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="status" required="required"
            <?php if (isset($status) && $status=="admin") echo "checked";?>
            value="admin">Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" name="status" required="required"
            <?php if (isset($status) && $status=="ketua") echo "checked";?>
            value="ketua">Ketua
            <br/>
            <br/>
			<input type="submit" class="tombol_login" value="Daftar" >
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">Login</a>
			</center>
		</form>
		
	</div>

</html>
