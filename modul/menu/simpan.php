<?php
include "../../inc/inc.koneksi.php";
include "../../inc/fungsi_tanggal.php";

//foreach ($_POST as $key => $value)
//       echo $key.'='.$value.'<br />';

error_reporting(0);

$table1		="resep";
$table2		="menu";


$kode_menu      =$_POST['kode_menu'];
$nama_menu		=$_POST['nama_menu'];
$jenis_menu		=$_POST['jenis_menu'];
$keterangan		=$_POST['keterangan'];

 

$sql = mysql_query("SELECT kode_menu, nama, jenis, keterangan
				   FROM $table2 
				   WHERE kode_menu= '$kode_menu' AND nama='$nama_menu' AND jenis_menu='$jenis_menu'");

$row	= mysql_num_rows($sql);
if ($row>0){
	$input	= "UPDATE $table2 SET  kode_menu =$kode_menu,
								   nama		=$nama_menu,
								   jenis		='$jenis_menu'
					              WHERE kode_menu= '$kode_menu' AND nama='$nama_menu' AND jenis='$jenis_menu'";
	mysql_query($input);								
	echo "<label id='info'><b>Data Sukses diubah</b></label>";
}else{
	$input = "INSERT INTO $table2 (kode_menu, nama, jenis)
				          VALUES('$kode_menu','$nama_menu','$jenis_menu')";
	mysql_query($input);
	echo "<label id='info'><b>Data sukses disimpan</b></label>";
}	
//echo $input."<br/>";
include "tampil_data.php";
?>