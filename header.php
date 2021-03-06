<?php include('koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran Mahasiswa Baru FSH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/assetss/unsiq.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Fakultas Syariah dan Hukum</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Beranda</a></li>
          <?php
          if(!isset($_SESSION['Email'])){
            echo "<li><a href='about.php'>Pendaftaran</a></li>";
          }
          else{
            // $no = echo $_SESSION['No_Pendaftaran'];
            echo "<li><a href='profile.php'>Profile</a></li>";
            echo "<li><a href='pdf.php?id=".$_SESSION['No_Pendaftaran']."'>Status Pendaftaran</a></li>";
            echo "<li><a href='about.php?id=".$_SESSION['No_Pendaftaran']."'>Tentang</a></li>";
          }
          ?>

          <li class="dropdown"><a href="#"><span>Program Studi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="hukum_keluarga.php">Hukum Keluarga Islam</a></li>
              <!-- <li><a href="Hukum_Keluarga_Islam.php">Hukum Keluarga Islam</a></li> -->
              <li><a href="Hukum_Ekonomi_Syariah.php">Hukum Ekonomi Syairiah</a></li>
              <!-- <li><a href="Hukum_Ekonomi_Syariah.php">Hukum Ekonomi Syari'ah</a></li> -->
              <li><a href="Ilmu_Al-Qluraan_Dan_Tafsir.php">Ilmu Al-Quraan Dan Tafsir </a></li>
              <!-- <li><a href="Ilmu_Al-Quraan_Dan_Tafsir.php">Ilmu Al-Quraan Dan Tafsir</a></li> -->
              <li><a href="Ilmu_Hukum.php">Ilmu Hukum</a></li>
              <!-- <li><a href="Ilmu_Hukum.php">Ilmu Hukum</a></li> -->
            </ul>
          </li>
          <li><a href="contact.php">Kontak</a></li>
          <!-- <li><a href="about_registration.php">Cara Pendaftaran</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    <?php 
    if(!isset($_SESSION['Email'])){
    ?>
    <a href="registrasi.php" class="get-started-btn">Registrasi Mahasiswa Baru</a>
    <a href="login.php" class="get-started-btn" style="background-color:blue;">Login</a>
    <?php }
    else{
    echo "<a href='logout.php' class='get-started-btn' style='background-color:red;'>Logout</a>";
    }
    ?>
    </div>
  </header><!-- End Header -->