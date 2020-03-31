<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.css.map" rel="stylesheet" />
<link href="bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
<title>login</title>
</head>

<body>
<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
<script src="bootstrap-3.3.2-dist/js/npm.js"></script>

<center>
<img src="images/banner-web-design.jpg" width="1024" height="400" />
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
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="form/form_input_pembeli.php">daftar</a></li>
      </ul>
</nav>
<div class="navbar navbar-static-top">

<div class="container">
<div class="row">
  <div class="span4"  style="margin-top:100px">
 <center>
<form class="FORM-CONTROL" action="ceklogin.php" method="post">
<table>
<tr>
<td ><label>username</label></td>
<td><input class="form-control form-horizontal" type="text" name="username" /></td>
</tr>
<tr>
<td><label>password</label></td>
<td><input class="form-control form-horizontal" type="password" name="password" /></td>
</tr>
<tr>
<td align="center"colspan="2"><input class="btn btn-primary"  type="image" value="login" /></td>
</tr>
</table>
</form>

</div>
</div>
</div>
</div>               
</div>
</div>


</body>
</html>