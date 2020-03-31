<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
</head>

<body>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.2-dist/js/npm.js"></script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index_admin.php">HOME</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="lihat_mobil.php">Lihat Data mobil<span class="sr-only">(current)</span></a></li>
        <li><a href="lihat_data_beli_cash.php">lihat data beli cash</a></li>
      </ul>
      
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<thead>
<tr>
<td>kode_mobil</td>
<td>merk</td>
<td>type</td>
<td>warna</td>
<td>harga mobil</td>
<td>gambar</td>
</tr>
</thead>
<tbody>
<?php
include ('../koneksi.php');
$tipe=$_POST['tipe'];
$cari=$_POST['cari'];
$dais = mysql_query("select * from mobil where $tipe like '%$cari%'") or die (mysql_error());
while($data=mysql_fetch_array($dais)){
?>
<tr>
<td><?php echo $data['kode_mobil']; ?></td>
<td><?php echo $data['merk']; ?></td>
<td><?php echo $data['type']; ?></td>
<td bgcolor="<?php echo $data['warna']; ?>"></td>
<td><?php echo $data['harga_mobil']; ?></td>
<td><img src="gambar/<?php echo $data['gambar']; ?>" width="150" height="150"/></td>
<td><a href="form_edit_siswa.php?id=<?php echo $data['siswa_nisn']; ?>">Edit</a>||<a href="delete_siswa.php?id=<?php echo $data['siswa_nisn']; ?>">Delete</a></td>
</tr>
</tbody>
<?php 
 }
?>
</table>
</body>
</html>