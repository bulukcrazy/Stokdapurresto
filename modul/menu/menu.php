<div class="card bg-light mb-3">
  <div class="card-header">Input Menu & Resep</div>
  <div class="card-body">
   
        <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Kode Menu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name='kode_menu' id='kode_menu' placeholder="Kode Menu">
            </div>
         </div>

         <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name='nama_menu' id='nama_menu'  placeholder="Nama Menu">
            </div>
         </div>
         

          <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label">Jenis Menu</label>
            <div class="col-sm-5">
              <select name='jenis_menu' id='jenis_menu' class="form-control">
            <option value='' selected>-Pilih-</option>
            <option value='MKN' >Makanan</option>
            <option value='MNM' >Minuman</option>
           
              </select>
            </div>
         </div>
         </div>
</div>

<div class="card-footer">

        <div class="form-group row col-sm-10">
            <label for="kode_barang" class="col-sm-2 col-form-label"> </label>
            <div class="col-sm-10">
            <button type="button" class="btn btn-primary  " name='tambah' id='tambah'><span class="fa fa-fw fa-plus"></span>Tambah</button>
            <button type="button" class="btn btn-success  " name='simpan' id='simpan'><span class="fa fa-fw fa-save"></span>Simpan</button>
            
            </div>
         </div>
</div>
</div>



<?php
 
echo "<div id='info'  ></div>";



?>

<script type="text/javascript" src="modul/menu/ajax.js"></script>
<script language="javascript">  
    function editRow(ID){
     var kode = ID; 
      $.ajax({
      type  : "POST",
      url   : "modul/menu/cari.php",
      data  : "kode="+kode,
      dataType: "json",
      success : function(data){
            $("#kode_menu").val(kode);
            $("#nama_menu").val(data.nama);
          
                    
      }
    });

  }

  function hapus_data(ID) {
    var kode = $("#kode_menu").val(); 
    var id  = ID;
     var pilih = confirm('Data yang akan dihapus kode = '+id+ '?');
    if (pilih==true) {
      $.ajax({
        type  : "POST",
        url   : "modul/menu/hapus.php",
        data  : "kode_menu="+kode+"&id="+id,
        success : function(data){
          $("#info").html(data);
          kosong();
        }
      });
    }
  }
</script>


 



 


  
