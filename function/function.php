<?php
    function koneksi($sql){
        include('koneksi.php');
        $koneksi = $dbh->prepare($sql);
        $koneksi->execute();
    }
    //function select
    function lihat($sql){
        include('koneksi.php');
        $data_mobil = array();
        $koneksi = $dbh->prepare($sql);
        $koneksi->execute();
        $data = $koneksi->fetch(PDO::FETCH_ASSOC);
        while ($mobil = $data)
            array_push($mobil);
        //return $data_mobil;
    }
   //membuat pagging 
    function getTableData($namatable, $page =1, $limit = 20){
        include('koneksi.php');
        $dataTable = array();
        $startRow = ($page - 1) * $limit;
        $query = ('SELECT * FROM `'.$namatable.'` LIMIT '.$startRow.', '.$limit);
        $koneksi = $dbh->prepare($sql);
        $koneksi->execute();
     
        while ($data = $koneksi->fetch(PDO::FETCH_ASSOC))
            array_push($dataTable, $data);
     
        return $dataTable;
    }
    function showpaging($namatable, $limit = 100){
        $counttotalrow = mysql_query('SELECT COUNT(*) AS total FROM `'.$namatable.'`');
        $queryresult=mysql_fetch_assoc($counttotalrow);
        $totalrow=$queryresult['total'];
        $totalPage = ceil($totalrow / $limit);
        $page = 1;
        while ($page <= $totalPage)
        {
            echo '<a href="?page='.$page.'&perPage='.$limit.'">'.$page.'</a>';
            if ($page < $totalPage)
                echo " | ";
     
            $page++;
        }
    }
    
?>