<?php
include('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
</head>

<body>
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.2-dist/js/npm.js"></script>


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
        <li><a href="#">Link</a></li>
      </ul>
      
      <form action="search.php" class="navbar-form navbar-left" role="search">
      
      

        <div class="form-group">
        <select name="tipe" class="btn btn-primary" data-toggle="dropdown">
<option value="kode_mobil">KODE</option>
<option value="merk">Nama club</option>
<option value="type">Asal Club</option>
<option value="harga_mobil">Asal Club</option>

</select>
          <input type="text" name="cari" class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="cari" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
include('koneksi.php');
 
include_once('paging.php');
 
// untuk mengetahui halaman keberapa yang sedang dibuka
// juga untuk men-set nilai default ke halaman 1 jika tidak ada
// data $_GET['page'] yang dikirimkan
$page = 1;
if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];
 
// untuk mengetahui berapa banyak data yang akan ditampilkan
// juga untuk men-set nilai default menjadi 5 jika tidak ada
// data $_GET['perPage'] yang dikirimkan
$dataPerPage = 5;
if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];
 
// tabel yang akan diambil datanya
$table = 'mobil';
 
// ambil data
$dataTable = getTableData($table, $page, $dataPerPage);
 
// menampilkan tombol paginasi
showpaging($table, $dataPerPage);
?>
 
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>kode</th>
            <th>merk</th>
            <th>type</th>
            <th>warna</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($dataTable as $i => $data)
    {
		
        $no = ($i + 1) + (($page - 1) * $dataPerPage);
		?>
        
        <tr>
        	<td><?php echo $no; ?></td>
                <td><?php echo $data['kode_mobil'];?></td>
				<td><?php echo $data['merk'];?></td>
				<td><?php echo $data['type'];?></td>
				<td bgcolor="<?php echo $data['warna'];?>"></td>
				<td><?php echo $data['harga_mobil'];?></td>
				<td><img src="gambar/<?php echo $data['gambar'];?>" width="150" height="150"/></td>
            </tr>
            <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>

	<?php 
        if(isset($_GET['page'])){
        	$page=htmlentities($_GET['page']);
        }else{
       		$page="lihat_mobil";
        }
        
        $file="$page.php";
        $cek=strlen($page);
        
        if($cek>30 || !file_exists($file) || empty($page)){
        	include ("admin/lihat_mobil.php");
        }else{
        	include ($file);
        }
        ?>