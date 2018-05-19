<script type="text/javascript">	
$(document).ready(function() {
	$("#data").load('modul/lap_barang/tampil_data.php');
	
	$("#cari").click(function() {
		var kode1	= $("#kode1").val();
		var kode2	= $("#kode2").val();
		
		if (kode1.length==''){
			alert('Maaf, Kriteria belum lengkap');
			$("#kode1").focus();
			return false;
		}
		if (kode2.length==''){
			alert('Maaf, Kriteria belum lengkap');
			$("#kode2").focus();
			return false;
		}
	   	$.ajax({
			type	: "GET",
			url		: "modul/lap_stok/tampil_data.php",
			data	: "kode1="+kode1+"&kode2="+kode2,
			success	: function(data){
				$("#data").html(data);
			}
		});		
	});
	
	$("#refresh").click(function() {
		window.location.reload();
		//alert('tes');
	});
	
	$("#cetak").click(function() {
		var kode1	= $("#kode1").val();
		var kode2	= $("#kode2").val();
		window.location.href='modul/laporan/lap_barang.php?kode1='+kode1+'&kode2='+kode2;
		/*
	   	$.ajax({
			type	: "GET",
			url		: "modul/laporan/lap_stok_barang.php",
			data	: "kode1="+kode1+"&kode2="+kode2,
			success	: function(data){
				//$("#data").html(data);
				alert('Data Sukses dicetak');
			}
		});
		*/
	});
});
</script>
<style type="text/css">
#info {
	font-size:12px;
	font-weight:bold;
	color:#F00;
}
</style>

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Lihat Stok</div>
  <div class="card-body">
   
     
     <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Barang Awal</label>
    <select class="form-control" nama='kode1' id='kode1'>
    	 <option value=''>-Pilih Kode-</option>";
    	 <?php
				$query	= "SELECT * FROM barang ORDER BY kode_barang";
				$sql	= mysql_query($query);
				while($r_data=mysql_fetch_array($sql)){
					echo "<option value='".$r_data['kode_barang']."'>".$r_data['kode_barang']." - ".$r_data['nama_barang']."</option>"; }
         ?>
    </select>
 </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Barang Akhir</label>
    <select class="form-control" nama='kode2' id='kode2'>
    	 <option value=''>-Pilih Kode-</option>";
    	 <?php
				$query	= "SELECT * FROM barang ORDER BY kode_barang";
				$sql	= mysql_query($query);
				while($r_data=mysql_fetch_array($sql)){
					echo "<option value='".$r_data['kode_barang']."'>".$r_data['kode_barang']." - ".$r_data['nama_barang']."</option>"; }
         ?>
    </select>
  </div>

   <div class="btn-group" role="group" aria-label="Basic example">
	<button name='cari' class="btn btn-success btn-sm" id='cari'>Cari Data</button>
	<button name='refresh' class="btn btn-info btn-sm" id='refresh'>Refresh</button>
 
	</div>


	 <div class="btn-group" role="group" aria-label="Basic example">
	 
	<button name='cetak' class="btn btn-warning btn-sm" id='cetak'>Cetak</button> 
	</div>

 </div>
</div>






<?php
 
 
echo "<div id='data' align='center'></div>";
echo "";
?>
