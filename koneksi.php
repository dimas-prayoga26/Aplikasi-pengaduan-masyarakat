<?php

	$koneksi = mysqli_connect("localhost" , "root" , "" , "appem");


	if(!$koneksi) {
		echo "Koneksi Gagal" . mysqli_connect_error();
	}
	
 ?>
