// JavaScript Document
$(document).ready(function() {

	function kosong(){
		$("#kode_menu").val('');
		$("#nama_menu").val('');
		$("#jenis_menu").val('');
		 
	}
	
	var hal =0;

	$.ajax({
			type	: "GET",
			url		: "modul/menu/tampil_data.php",
			data	: "hal="+hal,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info").html(data);
			}
	});	
	
	$("#tambah").click(function(){
		kosong();	
		kode_menu.focus();

	});


	$("#simpan").click(function(){
				
		var	kode_menu		= $("#kode_menu").val();
		var	nama_menu		= $("#nama_menu").val();
		var	jenis_menu		= $("#jenis_menu").val();
	 
	 
		var error = false;

		if(kode_menu.length == 0){
           var error = true;
           alert("Maaf, Kode barang tidak boleh kosong");
		   $("#kode_menu").focus();
		   return (false);
         }
		if(nama_menu.length == 0){
           var error = true;
           alert("Maaf, Nama Barang tidak boleh kosong");
		   $("#nama_menu").focus();
		   return (false);
         }
        


		 		 
		if(error == false){
		$.ajax({
			type	: "POST",
			url		: "modul/menu/simpan.php",

			data	: "kode_menu="+kode_menu+
					"&nama_menu="+nama_menu+
					"&jenis_menu="+jenis_menu,
					 
				 
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

	$("#hapus").click(function(){
				
		var	kode_menu		= $("#kode_menu").val();
		var	nama_menu		= $("#nama_menu").val();
	
		var error = false;

		if(kode_menu.length == 0){
           var error = true;
           alert("Maaf, Kode barang tidak boleh kosong");
		   $("#kode_menu").focus();
		   return (false);
         }
		if(nama_menu.length == 0){
           var error = true;
           alert("Maaf, Nama Barang tidak boleh kosong");
		   $("#nama_menu").focus();
		   return (false);
         }

		 		 
		if(error == false){
		$.ajax({
			type	: "POST",
			url		: "modul/barang/hapus.php",
			data	: "kode_menu="+kode_menu,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#info").show();
				$("#info").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#info").show();
				$("#info").html(data);
				kosong();
			}
		});
		}
		return false; 
	});


	$("#keluar").click(function(){
		document.location='?module=home';
	});

});

