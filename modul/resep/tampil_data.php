
<?php
include '../../inc/inc.koneksi.php';
$kode	= $_POST['kode_menu'];
 

echo "<table   class='table'  width='100%'>
		<tr>
			<th>No.</th>
			<th>Bahan</th>
			<th>Jumlah</th>
			<th>Satuan</th>
			<th>Aksi</th>
			 
		</tr>";
		$sql = "SELECT resep.kode_resep as kode_resep, resep.kode_barang as kode_barang, resep.kode_menu as kode_menu, barang.nama_barang AS bahan, qt, satuan FROM resep INNER JOIN menu ON menu.kode_menu = resep.kode_menu INNER JOIN barang ON resep.kode_barang = barang.kode_barang WHERE resep.kode_menu='$kode'";
				
		//echo $sql;

		$query = mysql_query($sql);
		$no=1;

		while($r_data=mysql_fetch_array($query)){
			$kode = $r_data['kode_menu'];
			 
			echo "<tr>
					<td align='center'>".$no++."</td>
					<td>".$r_data['bahan']."</td>
					<td>".$r_data['qt']."</td>
					<td>".$r_data['satuan']."</td>
					<td>
					  <a href='javascript:editRow(\"".$r_data['kode_barang']."\")' >
					 
					<i class='fa fa-pencil'></i>
					</a>

					<a href='javascript:void(0)' onClick=\"hapus_data('".$r_data['kode_resep']."')\">
					<i class='fa fa-trash'></i>
					</a>

					</td>
				 
					</tr>";
			 
		}
	 
?>