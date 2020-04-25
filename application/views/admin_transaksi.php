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
              <a class="nav-link" href="<?= site_url('admin/home_admin') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('admin/readakun') ?>">Data Akun</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('admin/readobat') ?>">Data Obat</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('admin/readtransaksi') ?>">Data Transaksi</a>
            </li>
          </ul>
          <ul class="navbar-nav nav justify-content-end ">
            <li class="nav-item active">
              <a class="nav-link" href="#"> hello, <?= $this->session->userdata('username'); ?> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('admin/logout') ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container">
    <div class="box">
      <h2>Data Transaksi</h2>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Pesanan</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->nama_pemesan ?></td>
              <td><?php echo $d->pesanan ?></td>
              <td><?php echo $d->total_harga ?></td>
              <td><?php echo $d->status_transaksi ?></td>
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->transaksi_id ?>"><i class="fas fa-user-edit"></i>Edit</button></td>
              <td><a type="button" class="btn btn-danger"  href="<?= site_url('admin/deletetransaksi/') . $d->transaksi_id; ?>" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i>Delete</a></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

<!-- Modal Edit Transaksi -->
<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="edit<?php echo $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data Transaksi </h2></center>
        </div>
        <div class="modal-body">
        <form method="post" action= "<?= site_url('admin/updatetransaksi'); ?>">
        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Transaksi ID" name="transaksi_id" value="<?php echo $d->transaksi_id ?>"  required>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama Pesanan</label>
            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Nama Pesanan" name="nama_pesanan"  value="<?php echo $d->nama_pesanan ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Jenis</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Pesanan" name="pesanan" value="<?php echo $d->pesanan ?>" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Harga</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Total Harga" name="total_harga" value="<?php echo $d->total_harga ?>" required>
          </div>
          <div class="form-group">
            <label>Status Transaksi</label>
            <select class="form-control" id="formGroupExampleInput4" name="status_transaksi" required>
              <option value="sudah bayar">Sudah Bayar</option>
              <option value="belum bayar">Belum Bayar</option>
            </select>            
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
