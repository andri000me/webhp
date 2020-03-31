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
        <li><a href="lihat_data_beli_cash.php">Data beli Cash</a></li>
         <li><a href="lihat_pembeli.php">lihat pembeli</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<form action="input_paket" method="post">
<tr>
<td>Harga paket</td>
<td><input class="form-control" type="text" name="harga_paket"/></td>
</tr>
<tr>
<td>uang muka</td>
<td><input class="form-control" type="text" name="uang_muka"/></td>
</tr>
<tr>
<td>paket jumlah kredit</td>
<td><input class="form-control" type="text" name="paket_jumlah_kredit"/></td>
</tr>
<tr>
<td>paket jumlah cicilan</td>
<td><input class="form-control" type="text" name="paket_jumlah_cicilan"/></td>
</tr>
<tr>
<td>bunga</td>
<td><input class="form-control" type="text" name="bunga"/></td>
</tr>
<tr>
<td>nilai cicilan</td>
<td><input class="form-control" type="text" name="nilai_cicilan"/></td>
</tr>
<tr>
<td colspan="2"><input class="form-control btn btn-primary" type="submit" value="submit" /></td>
</tr>

</form>
</table>
</body>
</html>