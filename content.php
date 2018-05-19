<?php
include "inc/inc.koneksi.php";
include "inc/library.php";
include "inc/fungsi_indotgl.php";
include "inc/fungsi_combobox.php";
include "inc/class_paging.php";
include "inc/fungsi_rupiah.php";
include "inc/fungsi_tanggal.php";
include "inc/fungsi_hdt.php";

$mod = $_GET['module'];

// Bagian Home
if ($mod=='home'){
 	
	
 
  ?>

 <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard
          <?php
          echo "Login : $hari_ini, ";
           echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB";
  ?>

        </li>
      </ol>


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Grafik Penjualan</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated</div>
      </div>
       
<?php
include '../../inc/inc.koneksi.php';
$kode = $_POST['kode'];

 
    $sql = "SELECT SUM(penjualan.banyak) AS terjual, penjualan.kode_menu, menu.jenis, menu.nama FROM MENU JOIN penjualan ON penjualan.kode_menu = menu.kode_menu WHERE menu.jenis='MKN' group by penjualan.kode_menu";
        
    //echo $sql;
    $query = mysql_query($sql);
    $g_total =0;
    $no=1;
    $kode = $r_data['kode_beli'].$r_data['kode_supplier'].$r_data['kode_barang'];
    $total  = $r_data['jumlah_beli']*$r_data['harga_beli'];

     
    echo "<div class='row'>";
    while($r_data=mysql_fetch_array($query)){ 
      ?>

     
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $r_data['nama']?> </div>
              <div class="mr-5"><?php echo $r_data['terjual']?> Terjual</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>
   

      <?php }  ?>

    <?php

     $sql2 = "SELECT SUM(penjualan.banyak) AS terjual, penjualan.kode_menu, menu.jenis, menu.nama FROM MENU JOIN penjualan ON penjualan.kode_menu = menu.kode_menu WHERE menu.jenis='MNM' group by penjualan.kode_menu";
        
    //echo $sql;
    $query = mysql_query($sql2);
     
    

     
 
    while($r_data=mysql_fetch_array($query)){ 
      ?>

     
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-glass"></i>
              </div>
              <div class="mr-5"><?php echo $r_data['nama']?> </div>
              <div class="mr-5"><?php echo $r_data['terjual']?> Terjual</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>
   

      <?php }  ?>


  </div>


<script type="text/javascript">

$(document).ready(function(){
  $.ajax({
    url: "http://localhost/barang/graph.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var player = [];
      var score = [];

      for(var i in data) {
        player.push("Player " + data[i].terjual);
        score.push(data[i].score);
      }

      var chartdata = {
        labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
        datasets : [
          {
            label: 'Player Score',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = document.getElementById("myAreaChart");
      //var ctx = $("#mycanvas");
      var myLineChart = new Chart(ctx, {
       
        type: 'line',
        data: chartdata,
        options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false
            },
            ticks: {
              maxTicksLimit: 7
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 100,
              maxTicksLimit: 5
            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
 

     
 </script>        

<?php
}
//users
elseif ($mod=='pengguna'){
    include "modul/users/users.php";
}
elseif ($mod=='barang'){
    include "modul/barang/barang.php";
}
//supplier
elseif ($mod=='supplier'){
    include "modul/supplier/supplier.php";
}
elseif ($mod=='pembelian'){
    include "modul/pembelian/pembelian.php";
}
elseif ($mod=='penjualan'){
    include "modul/penjualan/penjualan.php";
}
elseif ($mod=='retur_beli'){
    include "modul/retur_beli/retur_beli.php";
}
//lap_barang
elseif ($mod=='lap_barang'){
    include "modul/lap_barang/lap_barang.php";
}
elseif ($mod=='pengeluaran'){
    include "modul/lap_barang/lap_pengeluaran.php";
}

elseif ($mod=='jurnal'){
    include "modul/lap_barang/jurnal.php";
}

elseif ($mod=='menu'){
    include "modul/menu/menu.php";
}

elseif ($mod=='resep'){
    include "modul/resep/resep.php";
}

elseif ($mod=='lap_stok'){
    include "modul/lap_stok/lap_stok.php";
}

// Apabila modul tidak ditemukan
else{
  echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP</b>";
}
?>
