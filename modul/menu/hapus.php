<?php
include "../../inc/inc.koneksi.php";
$kode	= $_POST['kode_menu'];
$id		= $_POST['id'];

$query	= "SELECT * FROM  menu WHERE kode_menu = '$id'";
$sql 	= mysql_query($query);
$row	= mysql_num_rows($sql);


if ($row>0){
	$input = "DELETE FROM menu  WHERE kode_menu = '$id'";
	mysql_query($input);

	echo "<label id='info'>Data sukses dihapus</label>";
}else{
	echo "<label id='info'>Maaf, tidak ada</label>";
}
//echo $query."<br>".$input;
include "tampil_data.php";
?>