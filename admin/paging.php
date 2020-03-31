<?php
function getTableData($namatable, $page =1, $limit = 20){
	$dataTable = array();
    $startRow = ($page - 1) * $limit;
    $query = mysql_query('SELECT * FROM `'.$namatable.'` LIMIT '.$startRow.', '.$limit);
 
    while ($data = mysql_fetch_assoc($query))
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