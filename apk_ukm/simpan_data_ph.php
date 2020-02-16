<?php
error_reporting(0);
	$id_pengurus = $_POST['id_pengurus'];
	$nim = $_POST ['nim'];
	$nama_pengurus = $_POST ['nama'];
	$jabatan = $_POST ['jabatan'];
	$proses = $_POST ['submit'];
	$dataValid = "YA";
	$pesanErr = "";

	if (strlen (trim($nim)) == 0) {
		echo "NIM Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($nama_pengurus)) == 0) {
		echo "Nama Pengurus Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($jabatan)) == 0) {
		echo "Jabatan Harus Diisi !! <br />";
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
		$sql = "insert into pengurus (id_pengurus, nim, nama, jabatan) 
		       values ('','$nim', '$nama_pengurus', '$jabatan')"; 
				echo "<script>
				alert('Data Berhasil Disimpan!');self.history.back();
				</script>";
	}else{
		$sql ="update pengurus set nim = '$nim', nama = '$nama_pengurus', jabatan ='$jabatan' where id_pengurus = $id_pengurus";
				echo "<script>
				alert('Data Berhasil Diubah!');self.history.back();
				</script>";
	}
	
	$hasil = mysqli_query ($kon, $sql);

	if (!$hasil) {
			echo "Terdapat Kesalahan!".mysqli_error($kon);	
		}
?>