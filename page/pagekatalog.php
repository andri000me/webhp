<?php
include('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dealer</title>
<link href="bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.2-dist/js/npm.js"></script>
</head>

<body>
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
$dais = mysql_query("select * from mobil") or die (mysql_error());
while($data=mysql_fetch_array($dais)){
?>
<tr>
<td><?php echo $data['kode_mobil']; ?></td>
<td><?php echo $data['merk']; ?></td>
<td><?php echo $data['type']; ?></td>
<td bgcolor="<?php echo $data['warna']; ?>"></td>
<td><?php echo $data['harga_mobil']; ?></td>
<td><img src="admin/gambar/<?php echo $data['gambar']; ?>" width="150" height="150"/></td>
<td><a class="btn btn-primary" href="beli/form_beli_cash.php?id=<?php echo $data['kode_mobil']; ?>"><span class="glyphicon glyphicon-shopping-cart"> Beli Cash</span></a> <a class="btn btn-primary" href="beli/form_beli_kredit.php?id=<?php echo $data['kode_mobil']; ?>"><span class="glyphicon glyphicon-shopping-cart"> Beli Kredit</span></a></td>
</tr>
</tbody>
<?php
}
?>

</body>
</html>
