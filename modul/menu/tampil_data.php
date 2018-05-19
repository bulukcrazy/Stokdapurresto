
<?php


error_reporting(0);
include '../../inc/inc.koneksi.php';
$kode	= $_POST['kode_menu'];

 

  //error_reporting(0);




echo "<table   class='table' cl width='100%'>
		<tr><th>No </th>
			<th>Nama</th>
			<th>Jenis</th>
			<th>Aksi</th>
		</tr>";
		$sql = "SELECT * from menu";
				
		//echo $sql;
		$query = mysql_query($sql);
		$g_total =0;
		$no=1;
		while($r_data=mysql_fetch_array($query)){
		 
			echo "<tr>
					<td align='center'>".$r_data['kode_menu']."</td>
					<td>".$r_data['nama']."</td>
					<td>".$r_data['jenis']."</td>
					<td>

					<a href='javascript:editRow(\"".$r_data['kode_menu']."\")' >
					 
					<i class='fa fa-pencil'></i>
					</a>

					<a href='javascript:void(0)' onClick=\"hapus_data('".$r_data['kode_menu']."')\">
					<i class='fa fa-trash'></i>
					</a>
					 
					</td>
					</tr>";
			 
		}
	echo "</table>";
	 
		
?>