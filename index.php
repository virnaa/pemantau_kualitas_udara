 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pemantauan Kualitas Udara dalam Ruangan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/clouds.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
 <script type="text/javascript">
       $(document).ready( function(){

        setInterval( function() {
          $("#suhu").load("suhu.php");
          $("#no2").load("no2.php");
          $("#co").load("co.php");
          $("#debu").load("debu.php");
          $("#kualitas").load("keterangan.php");
          $("#himbauan").load("himbauan.php");
        }, 3000 );

     });
    </script>
  <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
        date_default_timezone_set("Asia/jakarta");
    ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href=".">Pemantau Kualitas Udara dalam Ruangan</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href=".">Home</a></li>
          <li><a class="nav-link" href="history.php">History</a></li>
        </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row time">
      <div class="col">
            <h3><span id="waktu">23:00:00 </span></h3>
        </div>
      <div class="col suhu">
        <h3 class="suhu"><span id="suhu"> 0</span>°C </h3>
        </div>
     </div>
     
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <div class=" card text-center">
          <div class="card-body">
  <span id="kualitas"></span>
        </div>
      </div>
         <h2><span id="himbauan">dapat beraktivitas dengan baik</span></h2>
            </div>
</div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="counts icon-box">
            <div class="count-box">
              <span id="co"> 0 </span>
                <h3>ppm</h3>
              <p>Karbon Monoksida (CO)</p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="counts">
            <div class="count-box">
              <span id="no2"> 0 </span>
               <h3>ppm</h3>
              <p>Natrium Dioksida (NO2)</p>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
           <div class="counts">
            <div class="count-box">
              <span id="debu"> 0 </span>
               <h3>mg/m3</h3>
              <p>Debu (PM10)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- ======= Footer ======= -->
    
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
<script type="text/javascript">
        window.onload = function() { waktu(); }
       
        function waktu() {
            var e = document.getElementById('waktu'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('waktu()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>