<?php
	include "kon.php";
	  $id_anggota= $_GET ['id_anggota'];
      $sql = "delete from anggota where id_anggota = '$id_anggota'";

	$hsl = @mysqli_query ($kon,$sql);
	if (!$hsl) {
		echo "Gagal Hapus $id_anggota";
	} else {
		header("location:tampil_data_anggota_admin.php");
	}

	

?>