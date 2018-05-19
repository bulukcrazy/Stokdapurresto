<?php
include "../../inc/inc.koneksi.php";
include "../../inc/fungsi_tanggal.php";

 
//error_reporting(0);

//foreach ($_POST as $key => $value)
//       echo $key.'='.$value.'<br />';



$table		="resep";


$kode_barang	=$_POST['kode_barang'];
$kode_menu		=$_POST['kode_menu'];
$qt				=$_POST['qt'];

$sql = mysql_query("SELECT kode_resep, kode_barang, kode_menu, qt
				   FROM $table 
				   WHERE 
				   /*		kode_barang='$kode_barang' 
				   AND */
				   kode_menu='$kode_menu' AND kode_barang = '$kode_barang'");

//echo $sql;

$row	= mysql_num_rows($sql);

if ($row>0){
	$input	= "UPDATE $table SET qt = $qt WHERE kode_menu = '$kode_menu' AND kode_barang = '$kode_barang' ";
	mysql_query($input);
	//echo $input;								
	echo "<label id='info'><b>Data Sukses diubah</b></label>";
}else{
	$input = "INSERT INTO $table (kode_barang, kode_menu, qt)
				          VALUES('$kode_barang','$kode_menu','$qt')";
	mysql_query($input);
	echo "<label id='info'><b>Data sukses disimpan</b></label>";
}	
//echo $input."<br/>";
include "tampil_data.php";
?>