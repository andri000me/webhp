<?php
include('../koneksi.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>edit mobil</title>
</head>
<?php
$id=$_GET['id'];
$query=mysql_query("select * from mobil where kode_mobil='$id'")or die (mysql_error());
$data=mysql_fetch_array($query);
?>
<form action="edit_mobil.php" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="5">
		<form action="edit_user.php" method="post">
			<tr>
				<td>kode mobil</td>
				<td><input   name="kode_mobil" type="text" value="<?php echo $id; ?>"/></td>
			</tr>
			<tr>
				<td>merk</td>
				<td><input  name="merk" type="text" value="<?php echo $data['merk']; ?>"/></td>
			</tr>
			<tr>
				<td>type</td>
				<td><input  name="type" type="text" value="<?php echo $data['type']; ?>"/></td>
			</tr>
			<tr>
				<td>warna</td>
				<td><input  name="warna" type="color" value="<?php echo $data['warna']; ?>"/></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input  name="warna" type="file" value="<?php echo $data['gambar']; ?>"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="edit"/></td>
			</tr>
		</form>
	</table>
</form>
<body>
</body>
</html>
