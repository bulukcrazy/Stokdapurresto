<script type="text/javascript">
$(document).ready(function() {
    $(function() {
        $("#theList tr:even").addClass("stripe1");
        $("#theList tr:odd").addClass("stripe2");

        $("#theList tr").hover(
            function() {
                $(this).toggleClass("highlight");
            },
            function() {
                $(this).toggleClass("highlight");
            }
        );
    });	
});
	function edit_data(ID){
		//location.window();
		//window.location.href='media.php?module=supplier';
		var kode = ID;
		$.ajax({
			type	: "POST",
			url		: "modul/supplier/cari.php",
			data	: "kode="+kode,
			dataType	: "json",
			success	: function(data){
				$("#txt_kode").val(kode);
				$("#txt_nama").val(data.nama);
				$("#txt_alamat").val(data.alamat);
				$("#akses").val(data.akses);
				$("#info").html("Data sudah di tampung pada tab inputan, silahkan klik");
			}
		});
	}
	function hapus_data(ID){
		//location.window();
		//window.location.href='media.php?module=supplier';
		var pilih = confirm('Data yang akan dihapus kode = '+ID+ '?');
		if (pilih==true) {
		var kode = ID;
		$.ajax({
			type	: "POST",
			url		: "modul/supplier/hapus.php",
			data	: "kode="+kode,
			success	: function(data){
				$("#info").html(data);
				$("#tampil_data").load('modul/supplier/tampil_data.php');
				$("#akses").val('');
			}
		});
		}
	}

</script>
<?php
include '../../inc/inc.koneksi.php';
$cari	= isset($_GET['cari']);
$hal	= isset($_GET['hal']) ? $_GET['hal'] : 0;
$lim	= 10;

	$query2	= "SELECT * FROM supplier 
			WHERE (kode_supplier LIKE '%$cari%' OR nama_supplier LIKE '%$cari%')  ";
	$data2	= mysql_query($query2);
	$jml	= mysql_num_rows($data2);
	
	$max	= ceil($jml/$lim);

echo "<table class='table table-striped'>
		<tr>
			<th>No.</th>
			<th>Kode Supplier</th>
			<th>Nama Supplier</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>";
		$sql = "SELECT * FROM supplier
				WHERE (kode_supplier LIKE '%$cari%' OR nama_supplier LIKE '%$cari%')
				ORDER BY kode_supplier
				LIMIT $hal,$lim";
				
		//echo $sql;
		$query = mysql_query($sql);
		
		$no=1+$hal;
		while($r_data=mysql_fetch_array($query)){
			$kode_barang = isset($r_data['kode_barang']);
			echo "<tr>
					<td align='center'>$no</td>
					<td>".$r_data['kode_supplier']."</td>
					<td>".$r_data['nama_supplier']."</td>
					<td>".$r_data['alamat']."</td>
					<td align='center'>
					<a href='javascript:void(0)' onClick=\"edit_data('".$r_data['kode_supplier']."')\">
					 <i class='fa fa-pencil'></i>
					</a>
					<a href='javascript:void(0)' onClick=\"hapus_data('".$r_data['kode_supplier']."')\">
					<i class='fa fa-trash'></i>
					</a>					
					</td>
					</tr>";
			$no++;
		}
		
	echo "</table>";
	echo "<table width='100%'>
		<tr>
			<td>Jumlah Data : $jml</td>
			<td align='right'>Halaman :";
			for ($h = 1; $h <= $max; $h++) {
					$list[$h] = $lim * $h - $lim;
					echo " <a href='javascript:void(0)' ";?> 
                    onClick="$.get('modul/supplier/tampil_data.php?cari=<?php echo $_GET['cari'];?>&hal=<?php echo $list[$h]; ?>', 
                    null, function(data) {$('#tampil_data').html(data);})" <?php echo">".$h."</a> ";
				}
	echo "</td>
		</tr>
		</table>";
?>