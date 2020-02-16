<?php
	include "kon.php";
	  $id_kegiatan = $_GET ['id_kegiatan'];
      $sql = "delete from proker where id_kegiatan = '$id_kegiatan'";

	$hsl = @mysqli_query ($kon,$sql);
	if (!$hsl) {
		echo "Gagal Hapus $id_kegiatan";
	} else {
		header("location:tampil_data_proker.php");
	}

	

?>