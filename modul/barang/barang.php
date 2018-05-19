<div class="card bg-light mb-3">
  <div class="card-header">Input data barang</div>
  <div class="card-body">
   
        <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name='kode_barang' id='kode_barang' placeholder="Kode Barang">
            </div>
         </div>

         <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name='nama_barang' id='nama_barang'  placeholder="Nama Barang">
            </div>
         </div>
         

          <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-5">
              <select name='satuan' id='satuan' class="form-control">
                <option value='' selected>-Pilih-</option>
            <option value='Buah' >Buah</option>
            <option value='RIM' >RIM</option>
            <option value='PCS' >PCS</option>
            <option value='Galon' >Galon</option>
            <option value='Box' >Box</option>
              </select>
            </div>
         </div>


          <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-5">
            <select name='kategori' id='kategori' class="form-control">
                <option value='' selected>-Pilih-</option>
            <option value='ATK' >Alat Tulis Kantor</option>
            <option value='RIM' >Alat Listik dan Penerangan</option>
            <option value='AKB' >Alat Kebersihan dan Bahan Pembersih</option>
            <option value='KSM' >Konsumsi</option>
            <option value='DLL' >Lainya</option>
              </select>
            </div>
         </div>


          <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-4">
              <input type="text" class="form-control"  name='harga_beli' id='harga_beli'  placeholder="Harga Beli">
            </div>
         </div>


         <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Stok Awal</label>
            <div class="col-sm-4">
              <input type="text" class="form-control"  name='stok_awal' id='stok_awal'  placeholder="Stok Awal">
            </div>
         </div>
 
         


</div>

<div class="card-footer">

        <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label"> </label>
            <div class="col-sm-10">
            <button type="button" class="btn btn-primary  " name='tambah' id='tambah'><span class="fa fa-fw fa-plus"></span>Tambah</button>
            <button type="button" class="btn btn-success  " name='simpan' id='simpan'><span class="fa fa-fw fa-save"></span>Simpan</button>
            <button type="button" class="btn btn-danger  " name='hapus' id='hapus'><span class="fa fa-fw fa-trash-o"></span>Hapus</button>
            <button type="button" class="btn btn-dark  " name='keluar' id='keluar'><span class="fa fa-fw fa-close"></span>Keluar</button>
            </div>
         </div>
</div>
</div>



<?php
 
echo "<div id='info'  ></div>";

?>


<script type="text/javascript" src="modul/barang/ajax.js"></script>
<script language="javascript">	
	function editRow(ID){
	   var kode = ID; 
	   	$.ajax({
			type	: "POST",
			url		: "modul/barang/cari.php",
			data	: "kode="+kode,
			dataType: "json",
			success	: function(data){
    				$("#kode_barang").val(kode);
    				$("#nama_barang").val(data.nama_barang);
    				$("#satuan").val(data.satuan); 
                    $("#kategori").val(data.kategori);
    				$("#harga_beli").val(data.harga_beli);
    				$("#harga_jual").val(data.harga_jual);
    				$("#stok_awal").val(data.stok_awal);
                    $("#kategori").val(data.kategori);
			}
		});

	}

   

</script>


 


  
