<?php
include 'inc/cek_session.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kedai Woeloeng Dapoer</title>

<!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
  



<link rel="stylesheet" href="css/style_tabel.css" type="text/css" />


<script type="text/javascript" src="js/jquery-1.4.js"></script>
<script type="text/javascript" src="js/hoverIntent.js"></script>
<!-- untuk menu superfish -->
<script type="text/javascript" src="js/superfish.js"></script>

<!-- untuk datepicker -->
<link type="text/css" href="css/ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>
<script type="text/javascript" src="js/ui.datepicker-id.js"></script>

<!-- untuk autocomplite -->
<link rel="stylesheet" type="text/css" href="js/jquery.autocomplete.css" />
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>

<!-- plugin untuk tab -->
<link type="text/css" href="css/smoothness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
     $('ul.sf-menu').superfish();
  });
</script>

 

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><i class="fa fa-cutlery"></i>  Kedai Woeloeng Dapoer </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="?module=home" >
            <i class="fa fa-fw fa-home"></i>
             <span class="nav-link-text">Beranda</span></a>
          </a>
 
         
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart "></i>
            <span class="nav-link-text">Input</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            
             <li><a href="?module=barang">Bahan Baku</a></li>
             <li><a href="?module=menu" class="icon pembelian">Menu</a></li>
             <li><a href="?module=resep" class="icon pembelian">Resep</a></li>
             
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-exchange"></i>
            <span class="nav-link-text">Transaksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li><a href="?module=pembelian" class="icon pembelian">Pemasukan Stok</a></li>
            <li><a href="?module=penjualan" class="icon penjualan">Pengeluaran</a></li>
            <li><a href="#" class="icon returbeli">Retur Pembelian</a></li>
          </ul>
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-copy"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
           
          <li><a href="?module=lap_barang" class="icon lapbarang">Bahan</a></li>
          <li><a href="?module=lap_stok" class="icon lapstok">Stok Bahan</a></li>
          <li><a href="?module=pengeluaran" class="icon lapstok">Pengeluaran</a></li>
           <li><a href="?module=jurnal" class="fa fa-newspaper-o"> Jurnal</a></li>
          <li><a href="?module=supplier">Pemasok</a></li>

          </ul>
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="?module=pengguna">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Pengguna</span>

          </a>

        </li>

      </ul>


 
      <ul class="navbar-nav ml-auto">
         
       
        <li class="nav-item">
          <a href="logout.php" class="nav-link" >
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

 <div class="content-wrapper">
    <div class="container-fluid">
 
      <?php
      include 'content.php';
    ?>

</div>
</div>
</div>

  <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
     

 

</body>
</html>