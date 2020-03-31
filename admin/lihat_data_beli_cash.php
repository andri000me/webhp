<?php
include('../koneksi.php');
?>
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
<center>
<ul class="pagination">
<li>
<?php
include('../koneksi.php');
 
include_once('paging.php');
 

$page = 1;
if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];
 

$dataPerPage = 5;
if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];
 
// tabel 
$table = 'beli_cash';
 

$dataTable = getTableData($table, $page, $dataPerPage);
 
showpaging($table, $dataPerPage);
?>
 </li>
 </ul>
</center>
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>kode cash</th>
            <th>ktp</th>
            <th>kode mobil</th>
            <th>cash tgl</th>
            <th>cash bayar</th>
             <th>option</th>
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
                <td><?php echo $data['kode_cash'];?></td>
				<td><?php echo $data['ktp'];?></td>
				<td><?php echo $data['kode_mobil'];?></td>
				<td><?php echo $data['cash_tgl'];?></td>
				<td><?php echo $data['cash_bayar'];?></td>
                <td><a href="../beli/delete_beli_cash.php?id=<?php echo $data['kode_cash']; ?>">Delete</a></td>
            </tr>
            <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
