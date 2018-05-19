<script type="text/javascript">
$(document).ready(function() {
	$("#txt_kode_barang").keyup(function(e){
		var isi = $(e.target).val();
		$(e.target).val(isi.toUpperCase());
	});
						   
 
	$("#txt_jumlah").keypress(function(data){
		if (data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)) 
		{
			return false;
		}
	});

	$('#form_cari_barang').dialog({
		autoOpen: false,
		modal	: true,
		width: 600,
	});
	
	// Dialog Link
	$('#list_barang').click(function(){
		$('#form_cari_barang').dialog('open');
		return false;
	});
	
	cari_nomor();
	
	function cari_nomor(){
		var no = 1;
		$.ajax({
			type	: "POST",
			url		: "modul/penjualan/cari_nomor.php",
			data	: "no="+no,
			dataType: "json",
			success	: function(data){
				$("#txt_kode").val(data.nomor);
				tampil_data_detail();
			}
		});
	}
	
	function tampil_data_detail(){
		var kode = $("#txt_kode").val();
		$("#data_detail").load("modul/penjualan/tampil_data_detail.php?kode="+kode);
	}
	
	$("#tambah_barang").click(function(){
		$(".input_detail").val('');
		$("#txt_kode_barang").focus();
	});
	
	$("#txt_kode_barang").keyup(function() {
		var kode 	= $("#txt_kode_barang").val()
		//var akses	= 1; //1 cari, 2 edit, 3 baru
		$.ajax({
			type	: "POST",
			url		: "modul/penjualan/cari_barang.php",
			data	: "kode="+kode,
			dataType	: "json",
			success	: function(data){
				$("#txt_nama_barang").val(data.nama_barang);
				$("#txt_satuan").val(data.satuan);
				$("#txt_harga").val(data.harga);
			}
		});
	});

	$("#txt_jumlah").keyup(function(){
		var jml		= $("#txt_jumlah").val();
		var harga	= $("#txt_harga").val();
		if (jml.length!='') {
			var total	= parseInt(jml)*parseInt(harga);
			$("#txt_total").val(total);
		}else{
			$("#txt_total").val(0);
		}
	});

	$("#load_menu").click(function(){
		load_menu();
	});


	$("#simpan").click(function(){
		simpan_data();
	});

	function simpan_data(){

		var	kode_menu 	= $("#txt_kode_menu").val();
		var	kode		= $("#txt_kode").val();
		var banyak  	= $("#txt_banyak").val();
		var	tgl			= $("#txt_tgl_jual").val();

		var	kode_brg	= $("#txt_kode_barang").val();
		var	nama_brg	= $("#txt_nama_barang").val();
		var	jumlah		= $("#txt_jumlah").val();
		var	harga		= $("#txt_harga").val();
		
		var error = false;

		if(kode.length == 0){
           var error = true;
           alert("Maaf, Kode Penjualan tidak boleh kosong");
		   $("#txt_kode").focus();
		   return (false);
         }
		if(tgl.length == 0){
           var error = true;
           alert("Maaf, Tanggal tidak boleh kosong");
		   //$("#txt_nama").focus();
		   return (false);
         }	 
		 
		 
		if(error == false){
		$.ajax({
			type	: "POST",
			url		: "modul/penjualan/simpan.php",
			data	: "kode="+kode+
					"&kode_menu="+kode_menu+
					"&banyak="+banyak+
					"&tgl="+tgl+
					"&kode_brg="+kode_brg+
					"&jumlah="+jumlah+
					"&harga="+harga,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info").html(data);
				tampil_data_detail();
			}
		});
		}
		return false; 		
	}
	
	$("#tambah").click(function(){
		cari_nomor();
		$(".input_detail").val('');
	});

	$("#txt_cari").keyup(function(){
		var cari	= $("#txt_cari").val();								  
		$.ajax({
			type	: "POST",
			url		: "modul/penjualan/tampil_data_barang.php",
			data	: "cari="+cari,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info_barang").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info_barang").html(data);
			}
		});
	});

	 

	
});
</script>
<style type="text/css">
#txt_kode {
	background:#CCC;
}
#list_barang{
	cursor:pointer;
}
.input_detail readonly {
	background:#666;
}
</style>
 



<?php
include '../../inc/inc.koneksi.php';

echo "

<table class='table'>
	<tr>
		<td width='15%'>Kode Pengeluaran</td>
		<td width='2%'>:</td>
		<td width='50%'><input type='text' name='txt_kode' id='txt_kode'  size='15' class='form-control col-sm-5' readonly></td>
	</tr>

	<tr>
		<td>Nama Menu</td>
		<td>:</td>
		<td><select name='txt_kode_menu' class='form-control col-sm-5' id='txt_kode_menu' class='input'>
		<option value='' selected>-Pilih-</option>";
		$sql	= "SELECT * FROM menu ";
		$query	= mysql_query($sql);
		while($r=mysql_fetch_array($query)){
			echo "<option value='".$r['kode_menu']."'>".$r['nama']."</option>";
		}
		echo "</select>
		
		</td>
		
	</tr>

	<tr>
		<td>Banyaknya</td>
		<td>:</td>
		<td><input type='text' name='txt_banyak' id='txt_banyak'  size='3' class='form-control col-sm-3'  ></td>

	</tr> 
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><input type='date' name='txt_tgl_jual' id='txt_tgl_jual'  size='10' class='form-control col-sm-5'  ></td>
	</tr>
	 
 	  
	</table>";


/*
echo "<table class='table table-striped table-dark'>
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan</th>
			<th>Jumlah</th>
			<th>Harga Jual</th>
			<th>Total</th>
		<tr>
		<tr>
			<td align='center'>

			<div class='input-group'>
		        <div class='input-group-prepend'>
		          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
				  +
				</button>
		        </div>
		        <input type='text' name='txt_kode_barang' id='txt_kode_barang' class='form-control' size='12' maxlength='20'>
		    </div>


			
			
			</td>
			<td align='center'><input type='text' name='txt_nama_barang' id='txt_nama_barang' class='form-control' size='35' readonly></td>
			<td align='center'><input type='text' name='txt_satuan' id='txt_satuan' class='form-control'   readonly></td>
			<td align='center'><input type='text' name='txt_jumlah' id='txt_jumlah' class='form-control' size='5' maxlength='10'></td>
			<td align='center'><input type='text' name='txt_harga' id='txt_harga' class='form-control' size='8' readonly></td>
			<td align='center'><input type='text' name='txt_total' id='txt_total' class='form-control' size='12' readonly></td>
		</tr>
	</table>";
	*/

echo "<table class='table table-bordered'>


	<tr>
		<td colspan='3' align='center'>
		<button class='btn btn-success' name='simpan' id='simpan'><span class='fa fa-fw fa-save'></span>Input Pembelian</button>
		
		</td>
	</tr>
	</table>";
echo "<div id='data_detail'></div>";


echo "<table class='table table-bordered'>
	<tr>
		<td colspan='3' align='center'>
 
		<button class='btn btn-info' name='tambah_beli' id='tambah_beli'><span class='fa fa-fw fa-plus'></span>Tambah Pembelian</button>
		<button class='btn btn-dark' name='keluar' id='keluar'>Keluar</button>
		</td>
	</tr>
	</table>";
echo "<div id='form_cari_barang' title='Pencarian Barang'>
		<table class='table table-bordered'>
			<td>
				<td width='15%'>Cari Barang</td>
				<td width='2%'>:</td>
				<td><input type='text' name='txt_cari' id='txt_cari' size='50''</td>
			</td>
		</table>
		<div id='info_barang' align='center'></div>
	</div>";
			
?>