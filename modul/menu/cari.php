<?php
include "../../inc/inc.koneksi.php";
$kode	= $_POST['kode'];
$text	= "SELECT * FROM menu WHERE kode_menu= '$kode'";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row>0){
while ($r=mysql_fetch_array($sql)){	
	
	$data['kode_menu']	= $r['kode_menu'];
	$data['nama']		= $r['nama'];
	$data['jenis']		= $r['jenis'];
 
	
	echo json_encode($data);
}
}else{
	$data['kode_menu']	= '';
	$data['nama']		= '';
	$data['jenis']		= '';
	 
	echo json_encode($data);
	
}


?>