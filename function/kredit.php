<?php
    include('koneksi.php');
    include('function.php');
    //deklarasi post dari kredit
    /*
    $ktp = $_POST['ktp'];
    $fotokopi_ktp = $_POST['fotokopi_ktp'];
    $_POST['fotokopi_kk'];
    $fotokopi_slip_gaji = $_POST['fotokopi_slip_gaji'];
    $kode_paket = $_POST['kode_paket'];
    $tgl_kredit = $_POST['tgl_kredit'];
    $kd_mobil = $_POST['kode_mobil'];
    */
    //tabel mobil
    $kd_mobil = '2';
    $sql=("Select merk from mobil where kode_mobil='".$kd_mobil."'");
    /*
    $mobil=$dbh->prepare($perintah);
    $mobil->execute();
    $data_mobil = $mobil->fetchAll();
    */
    /*
    function lihatdata($perintah){
        include('koneksi.php');
        $mobil=$dbh->prepare("Select merk from mobil where kode_mobil='".$perintah."'");
        $mobil->execute();
        
    }
    */
    //$data_mobil = lihatdata('2')->fetch(PDO::FETCH_ASSOC);
    
    $data_mobil = lihat($sql);
    foreach ($data_mobil as $data)
    {
		
        echo $data['merk'];
    }
?>