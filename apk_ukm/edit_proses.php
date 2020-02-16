<?php
	include "kon.php";
	if(isset($_POST['nim'])){
		$nim = $_POST ['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$telp = $_POST['telp'];
		$simpan = "Ubah";
	}else {
		$simpan = "Baru"; 
	}
	if ($simpan == "Ubah"){
		 $sql = "update maba_19 set nim='$nim', nama = $nama, jurusan='$jurusan', telp= $telp";
	}else{
		$sql = "insert into maba_19(nim, nama, jurusan, telp ) values ('$nim', '$nama', '$jurusan','$telp')"; 
	}

     
	$hsl = @mysqli_query ($kon,$sql);
	if (!$hsl) {
		echo "Gagal Edit $nim";
	} else {
	header("location:tampil_data.php");
	}

	

?>