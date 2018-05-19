// JavaScript Document
$(document).ready(function() {
	//membuat text kode barang menjadi Kapital
	$("#kode_barang").keyup(function(e){
		var isi = $(e.target).val();
		$(e.target).val(isi.toUpperCase());
	});

	
	//hanya angka yang dapat dientry
	$("#txt_jumlah").keypress(function(data){
		if (data.which!=8 && data.which!=0 && (data.which<48 || data.which>57)) 
		{
			return false;
		}
	});

	


	function kosong(){
		$(".detail_readonly").val('');
		$(".input_detail").val('');
	}
	
	function cari_nomor() {
		var no		=1;
		$.ajax({
			type	: "POST",
			url		: "modul/pembelian/cari_nomor.php",
			data	: "no="+no,
			dataType : "json",
			success	: function(data){
				$("#txt_kode_beli").val(data.nomor);
				tampil_data();
			}
		});		
	}

	function tampil_data() {
		var kode 	= $("#txt_kode_menu").val();;
		$.ajax({
				type	: "POST",
				url		: "modul/resep/tampil_data.php",
				data	: "kode="+kode,
				timeout	: 3000,
				beforeSend	: function(){		
					$("#info").html("<img src='loading.gif' />");			
				},				  
				success	: function(data){
					$("#info").html(data);
				}
		});			
	}

	
	cari_nomor();
	
	$("#txt_kode_barang").autocomplete("modul/pembelian/list_barang.php", {
				width:100,
				max: 10,
				scroll:false,
	});
	
	function cari_kode() {
		var kode	= $("#txt_kode_barang").val();
		$.ajax({
			type	: "POST",
			url		: "modul/pembelian/cari_barang.php",
			data	: "kode="+kode,
			dataType : "json",
			success	: function(data){
				$("#txt_nama_barang").val(data.nama_barang);
				$("#txt_satuan").val(data.satuan);
				$("#txt_harga").val(data.harga);
			}
		});		
	}
	
	$("#txt_kode_barang").keyup(function() {
		cari_kode();
	});
	$("#txt_kode_barang").focus(function() {
		cari_kode();
	});
	
 


	$("#tambah_detail").click(function(){
		kosong();	
		$("#txt_kode_barang").focus();
	});

	
	$("#simpan").click(function(){
		//var kode			= $("#txt_kode_menu").val();
		var kode_barang		= $("#txt_kode_barang").val();	
		var kode_menu		= $("#txt_kode_menu").val();
		var qt				= $("#txt_jumlah").val();
	 	
		
		var error = false;
	 
		 
		 		 
		if(error == false){
		$.ajax({
			type	: "POST",
			url		: "modul/resep/simpan.php",
			data	: "kode_barang="+kode_barang+
			          "&kode_menu="+kode_menu+
			          "&qt="+qt,
						 
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info").show();
				$("#info").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info").show();
				$("#info").html(data);
			}
		});
		}
		return false; 
	});

	$("#load_resep").click(function(){
		//var kode			= $("#txt_kode_menu").val();
		var kode_barang		= $("#txt_kode_barang").val();	
		var kode_menu		= $("#txt_kode_menu").val();
		var qt				= $("#txt_jumlah").val();
	 	
		
		var error = false;
	 
		 
		 		 
		if(error == false){
		$.ajax({
			type	: "POST",
			url		: "modul/resep/load.php",
			data	: "kode_barang="+kode_barang+
			          "&kode_menu="+kode_menu+
			          "&qt="+qt,
						 
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info").show();
				$("#info").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info").show();
				$("#info").html(data);
			}
		});
		}
		return false; 
	});

	

	$("#tambah_beli").click(function() {
		$(".input").val('');
		kosong();
		cari_nomor();
		$("#txt_tgl_beli").focus();
	});

	$("#keluar").click(function(){
		document.location='?module=home';
	});

});

