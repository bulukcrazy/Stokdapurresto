<?php
session_start();
include "../../inc/inc.koneksi.php";
include "../../inc/fungsi_tanggal.php";
include "../../inc/fungsi_hdt.php";


//foreach ($_POST as $key => $value)
//        echo $key.'='.$value.'<br />';

$table		="penjualan";
$table2     ="resep";
 
$kode		=$_POST['kode'];

$kode_menu	=$_POST['kode_menu'];
$banyak		=$_POST['banyak'];

$tgl		=$_POST['tgl'];

$kode_menu	=$_POST['kode_menu'];
$jumlah	    =$_POST['jumlah'];

$kode_brg	=$_POST['kode_brg'];
$jumlah		=$_POST['jumlah'];
$harga		=$_POST['harga'];
$user		=$_SESSION['namauser'];

$sql = "SELECT kode_menu, kode_barang, qt
	    FROM $table2 
		WHERE kode_menu='$kode_menu'";
//echo $sql;

//$row	= mysql_num_rows($sql);

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
while ($row = mysql_fetch_assoc($result)) {
    echo $row["kode_menu"];

    $input = "INSERT INTO $table (kode_jual,tgl_jual,kode_barang,jumlah_jual,harga_jual,username,kode_menu,banyak)
				VALUES('$kode','$tgl','$row[kode_barang]','$row[qt]'*'$banyak','$harga','$user','$kode_menu','$banyak')";
	mysql_query($input);
	echo "Data sukses disimpan";
	//echo $input;


     
}
 


 
 

 
/*
//Cari stok barang
$stok_barang	= cari_stok_akhir($kode_brg);
if ($stok_barang>=$jumlah){
$sql = mysql_query("SELECT kode_jual,tgl_jual,kode_barang,jumlah_jual,harga_jual,username,penerima,keperluan
				   FROM $table 
				   WHERE kode_jual= '$kode' AND kode_barang='$kode_brg'");
$row	= mysql_num_rows($sql);
if ($row>0){
	$input	= "UPDATE $table SET jumlah_jual	='$jumlah',
								 harga_jual		='$harga'
					WHERE kode_jual= '$kode' AND kode_barang='$kode_brg'";
	mysql_query($input);								
	echo "Data Sukses diubah";
}else{
	$input = "INSERT INTO $table (kode_jual,tgl_jual,kode_barang,jumlah_jual,harga_jual,username,penerima,keperluan)
				VALUES('$kode','$tgl','$kode_brg','$jumlah','$harga','$user','$penerima','$keperluan')";
	mysql_query($input);
	echo "Data sukses disimpan.<br> Stok Barang : ".$stok_barang.". Jumlah jual : ".$jumlah;
}	
}else{
	echo "Maaf, Sisa Stok :".$stok_barang.", Stok Barang tidak mencukupi";
}
//echo "<br>".$input."<br/>";

*/
?>