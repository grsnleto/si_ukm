<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'kon.php';
 
// menangkap data yang dikirim dari form login
$nim = $_POST['nim'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($kon,"select * from pengguna where nim='$nim' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status']=="admin"){
 
		// buat session login dan username
		$_SESSION['nim'] = $username;
		$_SESSION['status'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai ketua
	}else if($data['status']=="ketua"){
		// buat session login dan username
		$_SESSION['nim'] = $nim;
		$_SESSION['status'] = "ketua";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_ketua.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['status']=="anggota"){
		// buat session login dan username
		$_SESSION['nim'] = $nim;
		$_SESSION['status'] = "anggota";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_anggota.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>