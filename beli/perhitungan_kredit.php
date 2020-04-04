<?php
$harga_mobil = 138800000;
$dp = 0.20;
$dp_mobil = $harga_mobil * $dp;
$bunga = 5;
$bunga_bulan = $bunga/12;
$tenor = 3;
$bunga_bayar = ($harga_mobil-$dp_mobil)*(($bunga * $tenor)/100);
echo "Harga mobil = ".$harga_mobil."<p>";
echo "dp mobil = ".$dp_mobil."<p>";
echo "Harga mobil setelah dp = ".($harga_mobil-$dp_mobil)."<p>";
echo "bunga perbulan = ".$bunga_bulan."<p>";
echo "bunga yang harus di bayar = ".$bunga_bayar."<p>";
echo "angsuran perbulan = ".((($harga_mobil-$dp_mobil)+$bunga_bayar)/36)."<p>";

DELIMITER $$
CREATE TRIGGER cicilan 
    AFTER INSERT ON kredit
    FOR EACH ROW 
BEGIN
    INSERT INTO bayar_cicilan
    set kode_kredit = new.kode_kredit,
    ktp=new.ktp
END$$
DELIMITER 
?>
