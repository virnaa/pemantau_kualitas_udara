<?php 	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	$sql = mysqli_query($connect, "SELECT * FROM sensor ORDER BY id_sensor DESC"); 

	$data = mysqli_fetch_array($sql);
	$keterangan = $data['keterangan'];

	if ($keterangan == "" ) $keterangan = 0;
   

 if ($keterangan == 'Baik') {
            $himbauan = "dapat beraktivitas dengan baik";
        }  
        
 if ($keterangan == 'Sedang') { 
            $himbauan = "Masih dapat beraktivitas dengan baik, untuk kelompok sensitif kurangi aktivitas yang berat";
 		}  

if ($keterangan == 'Tidak Sehat') {
            $himbauan = "Kurangi aktivitas fisik yang terlalu lama dan berat";
		}

if ($keterangan == 'Sangat Tidak Sehat') { 
            $himbauan = "Hindari aktivitas fisik yang terlalu lama,  lakukan penjadwalan ulang pada waktu dengan kualitas udara yang baik";
		} 

if ($keterangan == 'Bahaya') {
            $himbauan = "Hindari semua aktivitas, lakukan penjadwalan ulang pada waktu dengan kualitas udara yang baik ";
 		} 

	echo $himbauan;
	
 ?>