
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data STOK Barang</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 <th>No.</th>
					<th>Penerima</th>
					<th>Nama Barang</th>
					<th>Satuan</th>
					<th>Stok Awal</th>
					<th>Jumlah <br>Pengadaan</th>
					<th>Jumlah <br>Pengeluaran</th>
					<th>Stok Akhir</th>
					<th>Tanggal</th>.
					 
                </tr>
              </thead>
              
              <tbody>

              	<?php

 //error_reporting(0);
include '../../inc/inc.koneksi.php';
include '../../inc/fungsi_hdt.php';
 
 
		 
		$sql = "SELECT * FROM penjualan inner join barang ON penjualan.kode_barang = barang.kode_barang";
		 
				
		//echo $sql;
		$query = mysql_query($sql);
		
		$no=1+$hal;
		while($r_data=mysql_fetch_array($query)){
			$kode		= $r_data['kode_barang'];
			$penerima	= $r_data['nama_penerima'];
			
			$stok_awal 	= cari_stok_awal($kode);
			$jml_beli	= cari_jml_beli($kode);
			$jml_jual	= cari_jml_jual($kode);
			$stok_akhir	= cari_stok_akhir($kode);
			//$keperluan	= $r_data['keperluan'];
			$tanggal	= $r_data['tgl_jual'];
			 

			echo " 
					<tr>
					<td align='center'>".$no."</td>
					<td align='center'>".$penerima."</td>
					<td>".$r_data['nama_barang']."</td>
					<td>".$r_data['satuan']."</td>
					<td align='center'>".$stok_awal."</td>
					<td align='center'>".$jml_beli."</td>
					<td align='center'>".$jml_jual."</td>
					<td align='center'>".$stok_akhir."</td>
					 
					<td align='center'>".$tanggal."</td>
				 
					</tr>
					 ";
			$no++;
		}
		
	echo "</table>";
	 
	echo "</div>";
?>


 
              </tbody>
            </table>

 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>