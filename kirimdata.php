<?php 
	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	// $realtime = $_GET['realtime'];
	$suhu = $_GET['suhu'];
	$co = $_GET['co'];
	$no2 = $_GET['no2'];
	$debu = $_GET['debu'];

mysqli_query($connect, "ALTER TABLE sensor AUTO_INCREMENT=1");
$simpan= mysqli_query($connect, "insert into sensor(co, no2, debu)values('$co','$no2','$debu')");
if ($simpan)
	echo "sukses menyimpan co, no2, debu";
else
	echo "Failed";

$sql = mysqli_query($connect, "SELECT * FROM sensor ORDER BY id_sensor DESC"); 
$data = mysqli_fetch_array($sql);
$id_sensor = $data['id_sensor'];

mysqli_query($connect, "ALTER TABLE suhu AUTO_INCREMENT=1");
$simpan1 = mysqli_query($connect, "insert into suhu(id_sensor,suhu)values('$id_sensor','$suhu')");
if ($simpan1)
	echo " ,suhu";
else
	echo "Failed";

$co = $data['co'];
$no2 = $data['no2'];
$debu = $data['debu'];

$co = floor($co);
$no2 = floor($no2);
$debu = floor($debu);

if ( $co>= 0 && $co <=50 && $no2 >= 0 && $no2 <=50 && $debu >= 0 && $debu <=50){
		$keterangan = "Baik";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 51 && $no2 <=100 && $debu >= 51 && $debu <=100){
		$keterangan = "Sedang";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 51 && $no2 <=100 && $debu >= 51 && $debu <=100){
		$keterangan = "Sedang";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 0 && $no2 <=50 && $debu >= 51 && $debu <=100){
		$keterangan = "Sedang";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 51 && $no2 <=100 && $debu >= 0 && $debu <=50){
		$keterangan = "Sedang";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 0 && $no2 <=50 && $debu >= 0 && $debu <=50){
		$keterangan = "Sedang";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 51 && $no2 <=100 && $debu >= 0 && $debu <=50){
		$keterangan = "Sedang";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 0 && $no2 <=50 && $debu >= 51 && $debu <=100){
		$keterangan = "Sedang";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 101 && $no2 <=199 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 101 && $no2 <=199 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 0 && $no2 <=50 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 101 && $no2 <=199 && $debu >= 0 && $debu <= 50){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 101 && $no2 <=199 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 51 && $no2 <=100 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 101 && $no2 <=199 && $debu >= 51 && $debu <=100){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 0 && $no2 <= 50 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 101 && $no2 <=199 && $debu >= 0 && $debu <=50){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 0 && $no2 <=50 && $debu >= 0 && $debu <=50){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 51 && $no2 <=100 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 101 && $no2 <=199 && $debu >= 51 && $debu <=100){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 51 && $no2 <=100 && $debu >= 51 && $debu <=100){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 51 && $no2 <=100 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 101 && $no2 <=199 && $debu >= 51 && $debu <=100){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 0 && $no2 <=50 && $debu >= 51 && $debu <=100){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 0 && $no2 <=50 && $debu >= 101 && $debu <=199){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 101 && $no2 <=199 && $debu >= 0 && $debu <=50){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 51 && $no2 <=100 && $debu >= 0 && $debu <=50){
		$keterangan = "Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 200 && $no2 <=299 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 200 && $no2 <=299 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 0 && $no2 <=50 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 200 && $no2 <=299 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 200 && $no2 <=299 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 51 && $no2 <=100 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 200 && $no2 <=299 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 200 && $no2 <=299 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 101 && $no2 <=199 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 200 && $no2 <=299 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 0 && $no2 <=50 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 200 && $no2 <=299 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 0 && $no2 <=50 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 51 && $no2 <=100 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 200 && $no2 <=299 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 51 && $no2 <=100 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 101 && $no2 <=199 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 100 && $co <= 199 && $no2 >= 200 && $no2 <=299 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 101 && $no2 <=199 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 51 && $no2 <=100 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 200 && $no2 <=299 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 0 && $no2 <=50 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 0 && $no2 <=50 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 200 && $no2 <=299 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 51 && $no2 <=100 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 101 && $no2 <=199 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 200 && $no2 <=299 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 0 && $no2 <=50 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 0 && $no2 <=50 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 200 && $no2 <=299 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 101 && $no2 <=199 && $debu >= 0 && $debu <=50){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 51 && $no2 <=100 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 200 && $no2 <=299 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 101 && $no2 <=199 && $debu >= 51 && $debu <=100){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 101 && $no2 <=199 && $debu >= 200 && $debu <=299){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 200 && $no2 <=299 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 51 && $no2 <=100 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 51 && $no2 <=100 && $debu >= 101 && $debu <=199){
		$keterangan = "Sangat Tidak Sehat";
	}else if ($co >= 300 && $no2 >= 300 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 300 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 0 && $no2 <= 50 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 300 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 300 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 51 && $no2 <= 100 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 300 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 300 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 101 && $no2 <= 199 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 300 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 300 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 300 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 0 && $no2 <= 50 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 300 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 0 && $no2 <= 50 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 51 && $no2 <= 100 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 300 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 51 && $no2 <= 100 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >=101 && $no2 <= 199 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 300 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 101 && $no2 <= 199 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >=200 && $no2 <= 299 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 300 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 51 && $no2 <= 100 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 300 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 0 && $no2 <= 50 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >=0 && $no2 <= 50 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 300 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 51 && $no2 <= 100 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >=101 && $no2 <= 199 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 300 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 0 && $no2 <= 50 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >=0 && $no2 <= 50 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 300 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 101 && $no2 <= 199 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >=51 && $no2 <= 100 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 300 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 101 && $no2 <= 199 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >=101 && $no2 <= 199 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 300 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 51 && $no2 <= 100 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >=200 && $no2 <= 299 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 0 && $co <= 50 && $no2 >= 300 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >=0 && $no2 <= 50 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 300 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 0 && $debu <= 50){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >=51 && $no2 <= 100 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 300 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 51 && $debu <= 100){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >=200 && $no2 <= 299 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 51 && $co <= 100 && $no2 >= 300 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 51 && $no2 <= 100 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >=101 && $no2 <= 199 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 200 && $co <= 299 && $no2 >= 300 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 200 && $no2 <= 299 && $debu >= 101 && $debu <= 199){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >=200 && $no2 <= 299 && $debu >= 300){
		$keterangan = "Bahaya";
	}else if ($co >= 101 && $co <= 199 && $no2 >= 300 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else if ($co >= 300 && $no2 >= 101 && $no2 <= 199 && $debu >= 200 && $debu <= 299){
		$keterangan = "Bahaya";
	}else{
		$keterangan = "error";
	}


$simpan2 = mysqli_query($connect, "UPDATE sensor SET keterangan = '$keterangan' where id_sensor = '$id_sensor'");


if ($simpan2)
	echo ", kategori";
else
	echo "Failed";


 ?>