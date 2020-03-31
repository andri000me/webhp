<?php
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user</title>
<link href="../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
</head>
<body>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.2-dist/js/npm.js"></script>
</head>


<body onload="javasript:window.print();">
<center>
<img src="../images/banner-web-design.jpg" width="1024" height="400" />
</center>
&nbsp;
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<thead>
<tr>
<td>Ktp</td>
<td>Nama</td>
<td>alamat</td>
<td>telepon</td>
<td>merk</td>
<td>type</td>
<td>harga_mobil</td>
<td>gambar</td>
<td>cash tanggal</td>
<td> cash bayar</td>
</tr>
</thead>
<tbody>

<?php 
 @ $query = mysql_fetch_array(mysql_query("SELECT * from pembeli,beli_cash,mobil,login where username='".$_SESSION['username']."'"));
  
  
  $ktp=$query['ktp'];
  $nama_pembeli=$query['nama_pembeli'];
  $alamat_pembeli=$query['alamat_pembeli'];
  $telp_pembeli=$query['telp_pembeli'];
  $merk=$query['merk'];
  $type=$query['type'];
  $harga=$query['harga_mobil'];
  $gambar=$query['gambar'];  
  $cash_tgl=$query['cash_tgl'];
  $cash_bayar=$query['cash_bayar'];
  ?>
      <tr>
          
          <td><?php echo $ktp; ?></td>
          <td><?php echo $nama_pembeli; ?></td>
          
          <td><?php echo $alamat_pembeli; ?></td>
          <td><?php echo $telp_pembeli; ?></td>
           <td><?php echo $merk?></td>
				<td><?php echo $type ?></td>
                 <td><?php echo $harga?></td>
                 <td><img src="../admin/gambar/<?php echo $gambar ?>" width="150" height="150"/></td>
				<td><?php echo $cash_tgl?></td>
                <td><?php echo $cash_bayar?></td>
                
        </tr>
   
    </tbody>
</table>
</body>
</html>
