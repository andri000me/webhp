<?php
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.2-dist/js/npm.js"></script>
</head>

<body>
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
      <a class="navbar-brand" href="../index.php">HOME</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="lihat_mobil.php">Lihat Data mobil<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
      
      
      

        <div class="form-group">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
$id=$_GET['id'];
$query=mysql_query("select * from mobil where kode_mobil='$id'")or die (mysql_error());
$data=mysql_fetch_array($query);
$tanggalbayar['cash_tgl']=date("Y-m-d");
?>
<div align="center" style="margin-top:50px; margin-left:310px;">
<div class="container">
<div class="col-xs-6">
<div class="row">
<div class="thumbnail">
<label>Beli cash</label>
<img class="caption" src="../admin/gambar/<?php echo $data['gambar']; ?>" height="250" width="150" />
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<tr>
<td>Merk</td>
<td><?php echo $data['merk']; ?></td>
</tr>
<tr>
<td>Type</td>
<td><?php echo $data['type']; ?></td>
</tr>
<tr>
<td>Warna</td>
<td bgcolor="<?php echo $data['warna']; ?>"></td>
</tr>
<tr>
<td>Harga</td>
<td>RP.<?php echo $data['harga_mobil']; ?></td>
</tr>
</table>
<center>
<label>Masukkan Data User</label>
</center>
<form action="beli_cash.php" method="post">

<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<tr>
<td><label>Masukkan Ktp</label></td>
<td><select>
<?php
include('../koneksi.php'); 
$sql = mysql_query("select * from pembeli");
while($baris=mysql_fetch_array($sql))
{
$ktp = $baris['ktp'];
$nama_pembeli = $baris['nama_pembeli'];
echo "
<option value='$ktp'>$nama_pembeli
";
}
?></select>

</select></td>
<tr>
<td><label>kode mobil</label></td>
<td><input class="form-control" type="text" name="kode_mobil" value="<?php echo $id; ?>" /></td>
</tr>
<tr>
<td><label>tanggal</label></td>
<td><input class="form-control" type="text" name="cash_tgl" value="<?php echo $tanggalbayar['cash_tgl']; ?>"  /></td>
</tr>
<tr>
<td><label>Jumlah cash</label></td>
<td><input class="form-control" type="text" name="cash_bayar" /></td>
</tr>
</tr>
<tr>
<td colspan="2" align="center"><input class="btn btn-primary" type="submit" value="submit" /></td>
</tr>
</tr>

</table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
