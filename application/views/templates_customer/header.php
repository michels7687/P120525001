<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>akbar</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/owl.css">
   
    
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Car Rental Website<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('customer/dashboard'); ?>">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <?php $tipe = $this->rental_model->get_all_tipe(); ?>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori Mobil</a>
                <ul class="dropdown-menu border-0 shadow">
                  <?php foreach($tipe as $key => $value) { ?>
                    <li><a class="nav-link" href="<?= base_url('Kategori/merek/' . $value->kode_tipe) ?>"><?= $value->kode_tipe ?></a></li>
                  <?php } ?>
                
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('customer/transaksi') ?>">Transaksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
              </li>
              <?php if($this->session->userdata('nama')){ ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Welcome <?= $this->session->userdata('nama'); ?><span> | Logout</span></a>
              </li>
              <?php }
              else{ ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>