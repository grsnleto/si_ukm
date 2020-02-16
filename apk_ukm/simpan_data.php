<?php

	$nim = $_POST ['nim'];
	$nama = $_POST ['nama'];
	$jurusan = $_POST ['jurusan'];
	$telepon = $_POST ['telp'];
	$proses = $_POST ['submit'];
	$dataValid = "YA";
	$pesanErr = "";

	if (strlen (trim($nim)) == 0) {
		echo "Nim Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($nama)) == 0) {
		echo "Nama Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($jurusan)) == 0) {
		echo "Jurusan Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($telepon)) == 0) {
		echo "No. Telepon Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if ($dataValid == "TIDAK") {
		$pesanErr = "Masih ada kesalahan, silahkan diperbaiki! \\n".$pesanErr;
		echo "
		<script>
		alert('$pesanErr');
		self.history.back();
		</script>";
		exit;
	}
		
	include "kon.php";
	if($proses == "Simpan"){
		$sql = "insert into maba_19 (nim, nama, jurusan, telp ) values ('$nim', '$nama', '$jurusan','$telepon')"; 
		echo "<script>
		alert('Data Berhasil Disimpan!');self.history.back();
		</script>";
	}else{
		$sql ="update maba_19 set nama= '$nama', jurusan ='$jurusan', telp = '$telepon' where nim = '$nim'";
		echo "<script>
		alert('Data Berhasil Diubah!');self.history.back();
		</script>";
	}
	
	$hasil = mysqli_query ($kon, $sql);

	if (!$hasil) {
			echo "Terdapat Kesalahan!".mysqli_error($kon);	
		}
?>