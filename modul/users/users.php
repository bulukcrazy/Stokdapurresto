<script type="text/javascript">	
$(document).ready(function() {
	//$("#tabs").tabs();
	$("#tabs").tabs({selected:0});
	//$("#tabs").tabs({collapsible:true});
	$("#form").load('modul/users/form.php');
	$("#tampil_data").load('modul/users/tampil_data.php');
	
	$("#txt_cari").keyup(function() {
		var cari 	= $("#txt_cari").val()
		var akses	= 1; //1 cari, 2 edit, 3 baru
		$.ajax({
			type	: "GET",
			url		: "modul/users/tampil_data.php",
			data	: "cari="+cari,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#tampil_data").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#tampil_data").html(data);
				$("#cari_txt_all").attr("checked","checked");
				$("#cari_txt_a").attr("checked","checked");
				//$("#data").load('modul/supplier/tampil_data.php');
			}
		});
	});
	
	$(".cari_blokir").click(function() {
		var blokir = $(".cari_blokir:checked").val();
		//alert('Pilih '+blokir);
		$.ajax({
			type	: "GET",
			url		: "modul/users/tampil_data.php",
			data	: "blokir="+blokir,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#tampil_data").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#tampil_data").html(data);
				$("#txt_cari").val('');
				//$("#data").load('modul/supplier/tampil_data.php');
			}
		});
	});

	$(".cari_level").click(function() {
		var level = $(".cari_level:checked").val();
		//alert('Pilih '+blokir);
		$.ajax({
			type	: "GET",
			url		: "modul/users/tampil_data.php",
			data	: "level="+level,
			timeout	: 3000,
			beforeSend	: function(){		
				$("#tampil_data").html("<img src='loading.gif' />");			
			},				  
			success	: function(data){
				$("#tampil_data").html(data);
				$("#txt_cari").val('');
				//$("#data").load('modul/supplier/tampil_data.php');
			}
		});

	});

	$("#btn").click(function() {
		//alert('tes');							 
		//$("#tabs").tabs('select':1);
		//return false;
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
 

<?php
 
	echo "<div id='form'> </div>";
	echo "<div id='data'> <div id='tampil_data' align='center'></div>
	</div>";
	echo "<div id='info' align='center'></div>";
    echo "</div>";
?>
