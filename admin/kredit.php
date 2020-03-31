<?php
include('../koneksi.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
$query=mysql_query("select * from pembeli where ktp='$id'")or die (mysql_error());
$data=mysql_fetch_array($query);

?>

<table border="0" cellpadding="5">
<form action="input_kredit.php" method="post">
<tr>
<td>No Ktp</td>
<td><input   name="ktp" type="text" value="<?php echo $id; ?>"/></td>
</tr>
<tr>
<td>kode paket</td>
<td><select name="kode_paket">
<?php
include('../koneksi.php'); 
$sql = mysql_query("select * from paket_kredit");
while($baris=mysql_fetch_array($sql))
{
$kode_paket = $baris['kode_paket'];
echo "
<option value='$kode_paket'>$kode_paket
";
}
?></select></td>
</tr>
<tr>
<td>kode mobil</td>
<td><select name="kode_mobil">
<?php
include('../koneksi.php'); 
$sql = mysql_query("select * from mobil");
while($baris=mysql_fetch_array($sql))
{
$kode_mobil = $baris['kode_mobil'];
echo "
<option value='$kode_mobil'>$kode_mobil
";
}
?></select></td>
</tr>
<tr>
<td>tgl_kredit</td>
<td><input  name="tgl_kredit" type="text" value=""/></td>
</tr>
<tr>
<tr>
<td>Foto kopi ktp</td>
<td><label>sudah</label><input type="radio" name="fotocopy_ktp" value="1" />
<label>belum</label><input type="radio" name="fotocopy_ktp" value="0" /></td>
</tr>
<tr>
<td>Foto kopi kk</td>
<td><label>sudah</label><input type="radio" name="fotocopy_kk" value="1" />
<label>belum</label><input type="radio" name="fotocopy_kk" value="0" /></td>
</tr>
<tr>
<td>Foto kopi slip gaji</td>
<td><label>sudah</label><input type="radio" name="fotocopy_slip_gaji" value="1" />
<label>belum</label><input type="radio" name="fotocopy_slip_gaji" value="0" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="edit"/></td>
</tr>
</form>
</table>

</body>
</html>