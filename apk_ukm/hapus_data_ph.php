<?php
	include "kon.php";
	  $id_pengurus = $_GET ['id_pengurus'];
      $sql = "delete from pengurus where id_pengurus = '$id_pengurus'";

	$hsl = @mysqli_query ($kon,$sql);
	if (!$hsl) {
		echo "Gagal Hapus $id_pengurus";
	} else {
		header("location:tampil_data_ph.php");
	}

	

?>