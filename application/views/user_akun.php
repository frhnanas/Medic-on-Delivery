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
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('template/css/bootstrap.min.css'); ?>"/>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('template/css/style.css'); ?>"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <style type="text/css">
	  .box {
		  margin-top: 80px;
      margin-bottom: 20px;
		  padding: 10px;
		  background-color: #fff	;
		  border-radius: 5px;
	  }
	  body {
		  background-color: #D8D8D8;
	  }
  </style>
  
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
              <a class="nav-link" href="<?= site_url('user/home_user') ?>">Home</a>
            </li>  
		  	<li class="nav-item active">
              <a class="nav-link" href="<?= site_url('user/readakun') ?>">Edit Akun</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('user/readbeli') ?>">Beli Obat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('user/readriwayat') ?>">Riwayat Transaksi</a>
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

    <form action="<?= site_url('user/updateakun'); ?>" method="POST" enctype="multipart/form-data">
        <h2>Update Data Akun</h2>
        <?php $no=1; foreach ($data as $d ): ?>  
        <div class="form-group">
          <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Akun ID" name="akun_id" value="<?php echo $d->akun_id ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Username " name="username"  value="<?php echo $d->username ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Re-Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Re-Password" name="re-password" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Alamat</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
          </div>            
        </div>
        <?php endforeach; ?>
        <a href="<?= site_url('user/home_user') ?>" style="margin-right:20px">Batal</a>
		<button type="submit" class="btn btn-primary">Ubah</button>
	</form>

</body>
</html>
