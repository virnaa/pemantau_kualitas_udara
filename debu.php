<?php 	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	$sql = mysqli_query($connect, "SELECT * FROM sensor ORDER BY id_sensor DESC"); 

	$data = mysqli_fetch_array($sql);
	$debu = $data['debu'];

	if ($debu == "" ) $debu = 0;

	echo $debu;
 ?>