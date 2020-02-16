<?php
	include "kon.php";
	  $nim = $_GET ['nim'];
      $sql = "delete from maba_19 where nim = '$nim'";

	$hsl = @mysqli_query ($kon,$sql);
	if (!$hsl) {
		echo "Gagal Hapus $nim";
	} else {
		header("location:tampil_data.php");
	}

	

?>