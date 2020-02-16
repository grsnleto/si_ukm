<?php
error_reporting(0);
	$id_kegiatan = $_POST['id_kegiatan'];
	$tgl_kegiatan = $_POST ['tgl_kgt'];
	$nama_kegiatan = $_POST ['nama'];
	$jatuh_tempo = $_POST ['tempo_kgt'];
	$proses = $_POST ['submit'];
	$dataValid = "YA";
	$pesanErr = "";

	if (strlen (trim($tgl_kegiatan)) == 0) {
		echo "Tanggal Kegiatan Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($nama_kegiatan)) == 0) {
		echo "Nama Kegiatan Harus Diisi !! <br />";
		$dataValid = "TIDAK";
	}

	if (strlen (trim($jatuh_tempo)) == 0) {
		echo "Jatuh Tempo Kegiatan Harus Diisi !! <br />";
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
		$sql = "insert into proker (nama_kegiatan, tgl_kegiatan, jatuh_tempo_kegiatan) 
		       values ('$nama_kegiatan', '$tgl_kegiatan', '$jatuh_tempo')"; 
				echo "<script>
				alert('Data Berhasil Disimpan!');self.history.back();
				</script>";
	}else{
		$sql ="update proker set nama_kegiatan = '$nama_kegiatan', tgl_kegiatan = '$tgl_kegiatan', jatuh_tempo_kegiatan ='$jatuh_tempo'where id_kegiatan = $id_kegiatan";
				echo "<script>
				alert('Data Berhasil Diubah!');self.history.back();
				</script>";
	}
	
	$hasil = mysqli_query ($kon, $sql);

	if (!$hasil) {
			echo "Terdapat Kesalahan!".mysqli_error($kon);	
		}
?>