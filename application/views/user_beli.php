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
		  	<li class="nav-item">
              <a class="nav-link" href="<?= site_url('user/readakun') ?>">Edit Akun</a>
            </li>
            <li class="nav-item active">
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

    <form action="<?= site_url('user/createtransaksi'); ?>" method="POST" enctype="multipart/form-data">
        <h2>Beli Obat</h2> 
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Akun ID" name="akun_id" value="<?= $this->session->userdata('akun_id'); ?>"  required>
        <div class="form-group">
            <label>Nama Obat</label>
            <select class="form-control" id="formGroupExampleInput" name="obat_id" required>
                <?php $no=1; foreach ($data as $d ): ?>  
                <option value="<?php echo $d->obat_id ?>"><?php echo $d->nama_obat ?></option>
                <?php endforeach; ?>
            </select>            
        </div>
		<div class="form-group">
			<input type="text" class="form-control" name="jumlah" placeholder="Jumlah" required>
          </div>
        <a href="<?= site_url('user/home_user') ?>" style="margin-right:20px">Batal</a>
		<button type="submit" class="btn btn-primary">Beli</button>
	</form>

</body>
</html>
