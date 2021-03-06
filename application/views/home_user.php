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
              <a class="nav-link" href="#"> hello, <?= $this->session->userdata('username'); ?> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('user/logout') ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <main role="main">
        <center><h1>Menu User </h1></center>
        <?php if(isset($error_message)) { ?>
			    <div class="alert alert-danger" role="alert">
				  <?= $error_message ?>
		      </div>
			  <?php } ?>
        <div class="container marketing">
          <div class="row">
            <div class="col-lg-4">
              <img class="rounded-circle" src="<?= base_url() ?>template/images/account.png" alt="Generic placeholder image" width="140" height="140">
              <p><a class="btn btn-secondary" href="<?= site_url('user/readakun') ?>">Edit Akun &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <img class="rounded-circle" src="<?= base_url() ?>template/images/medicine.png" alt="Generic placeholder image" width="140" height="140">
              <p><a class="btn btn-secondary" href="<?= site_url('user/readbeli') ?>">Beli Obat &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <img class="rounded-circle" src="<?= base_url() ?>template/images/transaction.png" alt="Generic placeholder image" width="140" height="140">
              <p><a class="btn btn-secondary" href="<?= site_url('user/readriwayat') ?>">Riwayat Transaksi &raquo;</a></p>
            </div>
          </div>
        </div>

      <!-- </div> -->

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