
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dealer</title>
<link href="../bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="../bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="../bootstrap-3.3.2-dist/js/npm.js"></script>
</head>

<body>
<center>
<img src="../images/banner-web-design.jpg" width="1024" height="400" />
</center>
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
        <li><a href="login.php">Login<span class="sr-only">(current)</span></a></li>
        <li><a href="form_input_pembeli.php">daftar</a></li>
      </ul>
</nav>

<form action="../function/crud.php" method="post">
<table align="center" class="table-condensed table-bordered list-group table-striped table-hover">
<tr>
<td>Ktp</td>
<td><input class="form-control" type="text" name="ktp" /></td>
</tr>
<tr>
<td>Nama</td>
<td><input class="form-control" type="text" name="nama_pembeli" /></td>
</tr>
<tr>
<td>Alamat</td>
<td><input class="form-control" type="text" name="alamat_pembeli" /></td>
</tr>
<tr>
<td>Telepon</td>
<td><input class="form-control" type="text" name="telp_pembeli" /></td>
</tr>
<tr>
<td>username</td>
<td><input class="form-control" type="text" name="username" /></td>
</tr>
<tr>
<td>password</td>
<td><input class="form-control" type="password" name="password" /></td>
</tr>
<tr>

<td><input class="form-control" type="hidden"name="level" value="2" /></td>
</tr>
<tr>
<td colspan="2"><input class="btn btn-primary" type="submit" value="submit" /></td>
</tr>
</table>

</form>
</body>
</html>
