<?php
error_reporting(0);
	$id_anggota = $_POST['id_anggota'];
	$nim = $_POST ['nim'];
	$nama = $_POST ['nama'];
	$jurusan = $_POST ['jurusan'];
	$tahun = $_POST ['tahun'];
	$jkelamin = $_POST ['jenis_kelamin'];
	$alamat = $_POST ['alamat'];
	$tgl_lahir = $_POST ['tanggal'];
	$telepon = $_POST ['no_telp'];
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
	if (strlen (trim($tahun)) == 0) {
		echo "Tahun Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}
	if (strlen (trim($jkelamin)) == 0) {
		echo "Jenis kelamin Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}
	if (strlen (trim($alamat)) == 0) {
		echo "Alamat Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}
	if (strlen (trim($tgl_lahir)) == 0) {
		echo "Tanggal Lahir Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($telepon)) == 0) {
		echo "Telepon Harus Diisi !! <br />";
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
		$sql = "insert into anggota (nim, nama, jurusan, thn_masuk, jenis_kelamin, alamat, tgl_lahir, no_telp) 
		       values ('$nim', '$nama', '$jurusan','$tahun','$jkelamin','$alamat','$tgl_lahir','$telepon')"; 
				echo "<script>
				alert('Data Berhasil Disimpan!');self.history.back();
				</script>";
	}else{
		$sql ="update anggota set nim = '$nim', nama= '$nama', jurusan ='$jurusan', thn_masuk = '$tahun', 
			   jenis_kelamin = '$jkelamin', alamat = '$alamat', tgl_lahir = '$tgl_lahir', no_telp = '$telepon' where id_anggota = $id_anggota;";
				echo "<script>
				alert('Data Berhasil Diubah!');self.history.back();
				</script>";
	}
	
	$hasil = mysqli_query ($kon, $sql);

	if (!$hasil) {
			echo "Terdapat Kesalahan!".mysqli_error($kon);	
		}
?>