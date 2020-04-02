<?php
include('function/koneksi.php');
try{
$preparekoneksi=$dbh->prepare("SELECT * from pembeli,beli_cash,mobil,login where username='ayu'");
$preparekoneksi->execute();
//$dais = mysql_query("select * from mobil") or die (mysql_error());
//while($data=mysql_fetch_array($dais)){
$data = $preparekoneksi->fetchAll();
foreach($data as $data){
?>
<tr>
<td><?php echo $data['ktp']; ?></td>
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
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>