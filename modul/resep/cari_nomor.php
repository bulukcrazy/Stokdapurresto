<?php
include "../../inc/inc.koneksi.php";
//$kode	= $_POST['kode_resep'];
$text	= "SELECT max(kode_resep) as no_akhir FROM resep";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row>0){
	$data=mysql_fetch_array($sql);	
		//format kode beli BL0001
		$no = $data['no_akhir'];
		$no_akhir = (int) substr($no, 3, 4);
		
		$no_akhir++;
		//membuat format kode beli
		$kode_resep = 'RSP'. sprintf("%04s",$no_akhir);
		
		$data['nomor']	= $kode_resep;
		
		echo json_encode($data);
}else{
	$data['nomor']	= 'RSP0001';

	echo json_encode($data);
	
}

?>