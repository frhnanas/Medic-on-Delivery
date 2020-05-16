<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> -->
  <link rel="icon" href="<?= base_url() ?>template/images/icon_top.png">

  <title>Medic on Delivery</title>
  <link href="<?= base_url() ?>template/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>template/css/carousel.css" rel="stylesheet">
</head>

<body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="">Medic on Delivery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav nav justify-content-end ">
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('user/go_login') ?>">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('user/go_register') ?>">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?= base_url() ?>template/images/carousel1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Ingin Membeli Obat?</h1>
                <p>Klik tombol dibawah untuk melakukan login.</p>
                <p><a class="btn btn-lg btn-primary" href="<?= site_url('user/go_login') ?>" role="button">Login</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?= base_url() ?>template/images/carousel2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Belum Memiliki Akun?</h1>
                <p>Klik tombol dibawah untuk melakukan pendaftaran akun.</p>
                <p><a class="btn btn-lg btn-primary" href="<?= site_url('user/go_register') ?>" role="button">Register</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?= base_url() ?>template/images/carousel3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>COVID-19 Update</h1>
                <p>Coronavirus COVID-19 sudah mempengaruhi 210 negara di seluruh dunia.</p>
                <p><a class="btn btn-lg btn-primary" href="https://www.worldometers.info/coronavirus/" role="button">More</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Tidak ada biaya pengiriman!</h2>
            <p class="lead">Takut Ongkos Pengiriman mahal? Tenang saja! Pada Medic on Delivery tidak ada ongkir!</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?= base_url() ?>template/images/free_delivery.png" alt="Generic placeholder image" width="400">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Stok Obat Terjamin Ada!</h2>
            <p class="lead">Jangan Khawatir dengan stok obat di Medic on Delivery, karena stok obat kami sangat banyak! </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="<?= base_url() ?>template/images/ready_stock.jpg" alt="Generic placeholder image" width="400">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Respon Relatif Cepat!</h2>
            <p class="lead">Takut Pengiriman lama? Jangan Khawatir! setelah anda memesan obat kami langsung mengirimkan obatnya sesuai tujuan!</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?= base_url() ?>template/images/fast_response.png" alt="Generic placeholder image" width="400">
          </div>
        </div>
        
        <hr class="featurette-divider">
      </div>

      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 MoD, f.</p>
      </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url() ?>template/js/jquery-slim.min.js"><\/script>')</script>
    <script src="<?= base_url() ?>template/js/popper.min.js"></script>
    <script src="<?= base_url() ?>template/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/js/holder.min.js"></script>
  </body>

</html>