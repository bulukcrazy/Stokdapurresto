<?php
//setting header to json
header('Content-Type: application/json');

include "/inc/inc.koneksi.php";

//get connection
 
$sql2 = "SELECT SUM(penjualan.banyak) AS terjual, penjualan.kode_menu, menu.jenis, menu.nama FROM MENU JOIN penjualan ON penjualan.kode_menu = menu.kode_menu WHERE menu.jenis='MNM' group by penjualan.kode_menu";
        
    //echo $sql;
 $query = mysql_query($sql2);

$result = mysql_fetch_array($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
  

//now print the data
print json_encode($data);


?>