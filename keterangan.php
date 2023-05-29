<?php 	
	$connect = mysqli_connect("localhost", "root", "", "sensor");

	$sql = mysqli_query($connect, "SELECT * FROM sensor ORDER BY id_sensor DESC"); 

	$data = mysqli_fetch_array($sql);
	$keterangan = $data['keterangan'];

	if ($keterangan == "" ) $keterangan = 0;
   
 if ($keterangan == 'Baik') {
           $kualitas =  "<div class='baik'> 
            <h1> Kualitas Udara Baik </h1>
            </div>";
       }  
 if ($keterangan == 'Sedang') { 
             $kualitas = "<div class='sedang'> 
            <h1> Kualitas Udara Sedang </h1>
            </div>";
    }  
if ($keterangan == 'Tidak Sehat') {
             $kualitas = "<div class='tidaksehat'> 
            <h1> Kualitas Udara Tidak Sehat </h1>
            </div>";    }
if ($keterangan == 'Sangat Tidak Sehat') { 
              $kualitas = " <div class='sangattidaksehat'> 
            <h1> Kualitas Udara Sangat Tidak Sehat </h1>
            </div>";    } 
if ($keterangan == 'Bahaya') {
             $kualitas = " <div class='bahaya'> 
            <h1> Kualitas Udara Bahaya </h1>
            </div>";    }  
if ($keterangan == 'error') {
             $kualitas = "<h1>error</h1>";    }  
             echo $kualitas;
 ?>