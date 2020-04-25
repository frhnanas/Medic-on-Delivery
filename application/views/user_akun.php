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

<div class="container">
    <div class="box">
      <h2>Data Akun <?= $this->session->userdata('username'); ?></h2>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th></th>
            <th>Username</th>
			<th>Password</th>
			<th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <form action="">
              <td><?php echo $no++ ?></td>
			  <td><?php echo $d->username ?></td>
			  <td><?php echo $d->password ?></td>
              <td><?php echo $d->alamat ?></td>
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->akun_id ?>"><i class="fas fa-user-edit"></i>Edit</button></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Akun -->
<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->akun_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data Akun </h2></center>
        </div>
        <div class="modal-body">
        <form method="post" action= "<?= site_url('user/updateakun'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Akun ID" name="akun_id" value="<?php echo $d->akun_id ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Nama Obat" name="username"  value="<?php echo $d->username ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" value="<?php echo $d->password ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Alamat</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

</body>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>
</html>
