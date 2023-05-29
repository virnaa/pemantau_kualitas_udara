<?php 	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	$sql = mysqli_query($connect, "SELECT * FROM sensor ORDER BY id_sensor DESC"); 

	$data = mysqli_fetch_array($sql);
	$no2 = $data['no2'];

	if ($no2 == "" ) $no2 = 0;

	echo $no2;
 ?>