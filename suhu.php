<?php 	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	$sql = mysqli_query($connect, "SELECT * FROM suhu ORDER BY id_suhu DESC"); 

	$data = mysqli_fetch_array($sql);
	$suhu = $data['suhu'];

	if ($suhu == "" ) $suhu = 0;

	echo $suhu;
 ?>