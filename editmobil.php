<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKOM 2015</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SPEED SPORTS</a>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../pembeli/pembeli.php">DATA PEMBELI</a></li>
            <li><a href="mobil.php">DATA MOBIL</a></li>
            <li><a href="../cash/cash.php">DATA BELI CASH</a></li>
            <li><a href="../kredit/kredit.php">DATA KREDIT</a></li>
            <li><a href="../kredit/paketkredit.php">DATA PAKET KREDIT</a></li>
            <li><a href="../cicilan/bayarcicilan.php">DATA BAYAR CICILAN</a></li>
          </ul>
           <ul class="nav nav-sidebar">
           <li><a href="../pembeli/editpembeli.php">EDIT PEMBELI</a></li>
           <li class="active"><a href="editmobil.php">EDIT MOBIL</a></li>
           <li><a href="../cash/editcash.php">EDIT DATA CASH</a></li>
           <li><a href="../kredit/editkredit.php">EDIT DATA KREDIT</a></li>
           <li><a href="../kredit/editpaketkredit.php">EDIT DATA PAKET KREDIT</a></li>
           <li><a href="../cicilan/editcicilan.php">EDIT DATA CICILAN</a></li>
            <li><a href="inputdatamobil.php">INPUT MOBIL</a></li>
            <li><a href="../kredit/inputpaketkredit.php">INPUT PAKET KREDIT</a></li>

          </ul>
          
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>EDIT DATA MOBIL</h2>
            <hr>
            <?php

              include('koneksi.php');

              $kd = $_GET['kode_mobil'];

              $sql = mysql_query("select * from mobil where kode_mobil=$kd");
              while($baris = mysql_fetch_array($sql)){

                $kd = $baris['kode_mobil'];
                $merk = $baris['merk'];
                $tipe = $baris['type'];
                $warna = $baris['warna'];
                $harga = $baris['harga_mobil'];
                $gambar = $baris['gambar'];

              }
              echo"
             <form method = POST action = do_editmobil.php enctype = multipart/form-data>
                    <form class=navbar-form navbar-left role=form>
                        <div class=form-group>

                          <label>Kode Mobil</label>
                          <input type=text class=form-control name=kode_mobil value=$kd>

                        </div>   
                        <br>
                        <br>  

                        <div class=form-group>

                          <label>Merk</label>
                          <input type=text class=form-control name=merk value=$merk>

                        </div>
                        <br>
                        <br>

                        <div class=form-group>

                          <label>Type</label>
                          <input type=text class=form-control name=type value='$tipe'>

                        </div>
                        <br>
                        <br>

                        <div class=form-group>

                          <label>Warna</label>
                          <input type=text class=form-control name=warna value=$warna>

                        </div>  
                        <br>
                        <br>

                        <div class=form-group>

                          <label>Harga Mobil</label>
                          <input type=text class=form-control name=harga_mobil value=$harga>

                        </div>  
                        <br>
                        <br>

                        <div class=form-group>

                          <label>Gambar</label>
                          <input type=file name=gambar>
                          <br>
                          <img src=$gambar width=500 height=500>

                        </div>  
                        <br>
                        <br>

                        <button type=submit>Update</button>
                        </form>
                    ";



              ?>

        </div>
        </div>
        </div>
        </body>
        </html>