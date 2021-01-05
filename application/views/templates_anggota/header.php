<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons -->
    <link href="<?php echo base_url('assets/img/bjannah.jpeg');?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/assets/vendor/icofont/icofont.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/assets/vendor/venobox/venobox.css');?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/assets/css/style.css');?>" rel="stylesheet">

</head>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Baitul Jannah</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('anggota/dashboard')?>">Home</a></li>
          <li><a href="<?php echo base_url('anggota/User/foto')?>">Gallery</a></li>
          <li><a href="<?php echo base_url('anggota/User/pengumuman')?>">Pengumuman</a></li>
          <li><a href="<?php echo base_url('pembayaran/pembayaran/index_a')?>">Pembayaran</a></li>
          <li><a href="<?php echo base_url('anggota/User')?>">Data User</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="<?php echo base_url('anggota/login')?>">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End #header -->