<script type="text/javascript" src="modul/pembelian/ajax.js"></script>
<script type="text/javascript">	
	/*					  
	function kosong(){
		//$(".input").val('');
		$(".input_detail").val('');
		$(".detail_readonly").val('');
	}
	*/



	$(document).ready(function() {
	//$("#tabs").tabs();
	$("#tabs").tabs({selected:0});
	//$("#tabs").tabs({collapsible:true});
	$("#form").load('modul/penjualan/form.php');
	$("#tampil_data").load('modul/penjualan/tampil_data.php');
	$("#info_jual").hide();

 

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

	
 
	
	$("#tutup_detail").click(function() {
		$("#pencarian").show();
		$("#info_jual").hide();
		$("#tampil_data").load('modul/penjualan/tampil_data.php?');
	});
	});

	function hapus_data(ID) {
		var kode = $("#txt_kode_beli").val(); 
		var id	= ID;
	   var pilih = confirm('Data yang akan dihapus kode = '+id+ '?');
		if (pilih==true) {
			$.ajax({
				type	: "POST",
				url		: "modul/pembelian/hapus.php",
				data	: "kode="+kode+"&id="+id,
				success	: function(data){
					$("#info").html(data);
					kosong();
				}
			});
		}
	}
</script>


<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      	
    	   <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PIlih Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id='form_cari_barang' title='Pencarian Barang'>
		 
			 <input type='text' class='form-control' name='txt_cari' id='txt_cari'> 
			 
		<div id='info_barang' align='center'></div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>

    </div>
  </div>

<?php
include 'inc/inc.koneksi.php';
echo "<h3>TRANSAKSI PEMBELIAN BARANG</h3>";
echo "<table class='table table-bordered'  width='100%'>
<tr>
		<td>Kode Pembelian</td>
		<td>:</td>
		<td><input type='text' class='form-control col-sm-5' name='txt_kode_beli' id='txt_kode_beli'  size='10' lenght='10'  >


		</td>
	</tr>
	<tr>
		<td>Tanggal Beli</td>
		<td>:</td>
		<td><input type='date' class='form-control col-sm-5' name='txt_tgl_beli' id='txt_tgl_beli'  size='12' lenght='12'></td>
	</tr>
	<tr>
		<td>Supplier</td>
		<td>:</td>
		<td><select name='cbo_supplie' class='form-control col-sm-5' id='cbo_supplier' class='input'>
		<option value='' selected>-Pilih-</option>";
		$sql	= "SELECT * FROM supplier ";
		$query	= mysql_query($sql);
		while($r=mysql_fetch_array($query)){
			echo "<option value='".$r['kode_supplier']."'>".$r['kode_supplier']." - ".$r['nama_supplier']."</option>";
		}
		echo "</select>
		</td>
	</tr>


	</table>
	<div class='bg_input'>
	<table class='table table-bordered' id='dataTable' width='100%'>
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Satuan</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Total</th>
	</tr>
	<tr>
		<td>	
     
      <div class='input-group'>
        <div class='input-group-prepend'>
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
		  +
		</button>
        </div>
        <input type='text' name='txt_kode_barang' id='txt_kode_barang'  size='10' lenght='10' class='form-control'> 
    </div>



        </td>

		<td><input type='text' name='txt_nama_barang' id='txt_nama_barang'  size='50'  class='form-control' readonly></td>
		<td><input type='text' name='txt_satuan' id='txt_satuan'  size='7'  class='form-control' readonly></td>
		<td><input type='text' name='txt_jumlah' id='txt_jumlah'  size='4'  class='form-control'></td>
		<td><input type='text' name='txt_harga' id='txt_harga'  size='6'  class='form-control'></td>
		<td><input type='text' name='txt_total' id='txt_total'  size='12'  class='form-control' readonly></td>
	</tr>	
	<tr>
		<td colspan='6' align='center'>
		<button class='btn btn-primary' name='tambah_detail' id='tambah_detail'><span class='fa fa-fw fa-plus'></span>Tambah Barang</button>
		<button class='btn btn-success' name='simpan' id='simpan'><span class='fa fa-fw fa-save'></span>Simpan Barang</button>
		</td>
	</tr>
	</table>
	</div>";
echo "<div id='info' align='center'></div>";
echo "<div id='tombol'>
	<table width='100%'>
	<tr>
		<td align='center'>
		
		<button class='btn btn-info' name='tambah_beli' id='tambah_beli'><span class='fa fa-fw fa-plus'></span>Tambah Pembelian</button>
		<button class='btn btn-dark' name='keluar' id='keluar'>Keluar</button>
		</td>
	</tr>
	</table></div>";

?>
