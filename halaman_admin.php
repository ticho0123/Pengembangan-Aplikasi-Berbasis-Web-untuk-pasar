<?php
session_start();

include "function.php";

$koneksi = new mysqli ("localhost","root","","pegawai");


if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
  header("location: login.php");
}else{
  $wellcone = "Selamat Datang ";

}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="favicon.ico">
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pengelolaan Data KOPPKAL "BANGUN WIJAYA"</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
      <!--               <img src="assets/img/asmahill.png" class="user-image img-responsive"/><br/> -->
                   <h4><font color="white">Selamat Datang <?php echo $_SESSION['nama']; ?>,</font></h4>    
          </li>
         
                 <li>
                        <a  href="admin.php"> <i class="fa fa-desktop fa-2x"> </i> Dashboard</a>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Data Pegawai<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          

                   
     
                      <li>
                        <a  href="?page=view_stok_pakan"><i class="fa fa-table fa-2x"></i> Penyetokan Pakan</a>
                    </li>
                     <li>
                        <a  href="?page=view_stok_obat"><i class="fa fa-table fa-2x"></i> Penyetokan Obat</a>
                    </li>
</ul></li>
                 <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Data Blok<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                 

                     
                    <li>
                        <a  href="?page=data_blok_a"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK A<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_blok_a"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK A  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

</ul>
</li>
                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> AUNING BLOK B<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK B  (TEMPAT JUALAN MAKANAN)</a>
                    </li>

</ul>
</li>
                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> LOS PAPAN BLOK C<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS PAPAN BLOK C1 (TEMPAT JUALAN IKAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS PAPAN BLOK C2 (TEMPAT JUALAN IKAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS PAPAN BLOK C3  (TEMPAT JUALAN IKAN)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D1 (TEMPAT JUALA SEMBAKO)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D2 (TEMPAT JUALA SEMBAKO)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D3 (TEMPAT JUALAN SEMBAKO)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D4 (TEMPAT JUALA SEMBAKO)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK D5 (pelataran)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK D6 (pelataran)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS BLOK E<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS BLOK E1 (PELATARAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK E2  ( TEMPAT JUALAN PAKAIAN)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK F<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK F1 (TEMPAT JUALAN PAKAIAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK F2 (TEMPAT JUALAN PAKAIAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK F3 (TEMPAT JUALAN PAKAIAN)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK G<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK G1 (PELATARAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK G2 (TEMPAT JUALAN PAKAIAN)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK G3 (TEMPAT JUALAN SAYUR)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK H<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK H1 (DIRUBAH MENJADI RUMAH PENJAGA WC)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK H2  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK H3  (TEMPAT JUALAN SAYUR)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> AUNING BLOK I<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK I1  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK I2  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK I3  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK I4  (DI RUBAH MENJADI L6)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> AUNING BLOK J<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK J1  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK J2  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK J3  (TEMPAT JUALAN SAYUR)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> AUNING BLOK K<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K1  (TEMPAT JUALAN SAYUR)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K2  (TEMPAT JUALAN SAYUR)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K3  (TEMPAT JUALAN SAYUR)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K4 (DI RUBAH MENJADI L5)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K5  (TEMPAT JUALAN SAYUR)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K6  (TEMPAT JUALAN SAYUR)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K7  (TEMPAT JUALAN SAYUR)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BLOK K8  (TEMPAT JUALAN SAYUR)</a>
                    </li>

</ul>
</li>

                     <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> AUNING BESI BLOK L<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">


                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BESI BLOK L1 (Tahap 1)</a>
                    </li>

                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BESI BLOK L2 (Tahap 1)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> AUNING BESI BLOK L3 (Tahap 1)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK L4  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK L5  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>
                    
                    <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK L6  (TEMPAT JUALAN PAKAIAN)</a>
                    </li>

</ul>
</li>

</ul>
</li>

                 <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Data Rolling, Blok luar dan Los<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                 

                     
                    <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> Rolling Kecil (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS Blok A.Luar  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                    <li>
                        <a  href="?page=data_karyawan"><i class="fa fa-table fa-2x"></i> LOS Blok B.Luar  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> LOS Blok C.Luar (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK D Luar</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> LOS DAGING KERAMIK (TEMPAT JUALAN DAGING)</a>
                    </li>

</ul>
</li>
                 <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Data Auning<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                 

                     
                    <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK A  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS PAPAN BLOK C</a>
                    </li>

                    <li>
                        <a  href="?page=data_karyawan"><i class="fa fa-table fa-2x"></i> KIOS ROLING BLOK D</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS BLOK E</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK F</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK G</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS PAPAN / AUNING BLOK H</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING / KIOS PAPAN BLOK I</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BLOK J</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BLOK K</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BESI / KIOS PAPAN BLOK L</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BLOK K</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BLOK K</a>
                    </li>

</ul>
</li>

                 <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Data Auning Rolling, Blok luar, Kios dan Los<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                 

                     
                    <li>
                        <a  href="?page=data_jadwal"><i class="fa fa-table fa-2x"></i> Rolling Kecil (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=data_suplier"><i class="fa fa-table fa-2x"></i> LOS Blok A.Luar  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                    <li>
                        <a  href="?page=data_karyawan"><i class="fa fa-table fa-2x"></i> LOS Blok B.Luar  (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> LOS Blok C.Luar (TEMPAT JUALAN SEMBAKO)</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> KIOS PAPAN BLOK D Luar</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> LOS DAGING KERAMIK (TEMPAT JUALAN DAGING)</a>
                    </li>

                     <li>
                        <a  href="?page=view_obat"><i class="fa fa-table fa-2x"></i> AUNING BLOK B  (TEMPAT JUALAN MAKANAN)</a>
                    </li>

</ul>
</li>
<!--                      <li>
                        <a  href="?page=data_sirkulasi"><i class="fa fa-bar-chart-o fa-3x"></i> Sirkulasi Pakan</a>
                    </li>

                    <li>
                        <a  href="?page=data_sirkulasi_obat"><i class="fa fa-bar-chart-o fa-3x"></i> Sirkulasi Obat</a>
                    </li>
 -->




                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Database<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                   

                      <li>
                        <a  href="?page=backup"><i class="fa fa-table fa-2x"></i> Backup Data</a>
                    </li>



                     <li>
                        <a  href="?page=restore"><i class="fa fa-table fa-2x"></i> Restore Data</a>
                    </li>

                     <li>
                        <a  href="?page=resetdata"><i class="fa fa-table fa-2x"></i> Reset Data</a>
                    </li>
</ul>
</li>

 <li>
                        <a  href="?page=data_akun"><i class="fa fa-users fa-2x"></i> Data Akun</a>
                    </li>
 <li>
                        <a  href="?page=manual_book"><i class="fa fa-users fa-2x"></i> Manual Book</a>
                    </li>




                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <?php error_reporting(0);

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];


                        if ($page == "data_suplier") {
                          if ($aksi == ""){
                            include "page/data_barang/data_suplier/data_suplier.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_suplier/tambah.php";
                          }elseif ($aksi == "simpan"){
                            include "page/data_barang/data_suplier/simpan.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_suplier/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_suplier/hapus.php";
                          }elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_suplier/simpan_ubah.php";
                          }
                          

                          }elseif ($page == "data_karyawan"){
                          if ($aksi == ""){
                            include "page/data_barang/data_karyawan/data_karyawan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_karyawan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_karyawan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_karyawan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_karyawan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_barang/data_karyawan/simpan.php";
                          }



                        }elseif ($page == "view_pakan"){
                          if ($aksi == ""){
                            include "page/data_barang/data_pakan/view_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_pakan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_pakan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_pakan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_pakan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_barang/data_pakan/simpan.php";
                          }
                           elseif ($aksi == "data_pakan"){
                            include "page/data_barang/data_pakan/data_pakan.php";
                          }



                        }elseif ($page == "view_stok_pakan"){
                          if ($aksi == ""){
                            include "page/stok_pakan/stok_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/stok_pakan/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/stok_pakan/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/stok_pakan/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/stok_pakan/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/stok_pakan/simpan.php";
                          }
                           elseif ($aksi == "stok_pakan"){
                            include "page/stok_pakan/stok_pakan.php";
                          }

   }elseif ($page == "view_stok_obat"){
                          if ($aksi == ""){
                            include "page/stok_obat/stok_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/stok_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/stok_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/stok_obat/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/stok_obat/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/stok_obat/simpan.php";
                          }
                           elseif ($aksi == "stok_obat"){
                            include "page/stok_obat/stok_obat.php";
                          }


                           }elseif ($page == "view_obat"){
                          if ($aksi == ""){
                            include "page/data_barang/data_obat/view_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_obat/hapus.php";
                          }
                           elseif ($aksi == "data_obat"){
                            include "page/data_barang/data_obat/data_obat.php";
                          }elseif ($aksi == "simpan"){
                            include "page/data_barang/data_obat/simpan.php";
                          }elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_obat/simpan_ubah.php";
                          }

                       

                          }elseif ($page == "data_jadwal"){
                          if ($aksi == ""){
                            include "page/data_barang/data_jadwal/data_jadwal.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_jadwal/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_jadwal/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_jadwal/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_jadwal/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_barang/data_jadwal/simpan.php";
                          }


                           }elseif ($page == "data_telur"){
                          if ($aksi == ""){
                            include "page/data_barang/data_telur/data_telur.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_barang/data_telur/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_barang/data_telur/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_barang/data_telur/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_barang/data_telur/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_barang/data_telur/simpan.php";
                          } elseif ($aksi == "laporan"){
                            include "page/data_barang/data_telur/laporan.php";
                          }


                        
                            }elseif ($page == "data_sirkulasi"){
                          if ($aksi == ""){
                            include "page/data_sirkulasi/sirkulasi_pakan.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_sirkulasi/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_sirkulasi/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_sirkulasi/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_sirkulasi/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_sirkulasi/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_sirkulasi/laporan.php";
                          }

  }elseif ($page == "data_akun"){
                          if ($aksi == ""){
                            include "page/data_akun/data_akun.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_akun/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_akun/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_akun/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_akun/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_akun/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_akun/laporan.php";
                          }




}elseif ($page == "manual_book"){
                          if ($aksi == ""){
                            include "page/manualbook/index.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_akun/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_akun/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_akun/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_akun/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_akun/simpan.php";
                          }elseif ($aksi == "laporan"){
                            include "page/data_akun/laporan.php";
                          }




                            }elseif ($page == "data_sirkulasi_obat"){
                          if ($aksi == ""){
                            include "page/data_sirkulasi_obat/sirkulasi_obat.php";
                          }elseif ($aksi == "tambah"){
                            include "page/data_sirkulasi_obat/tambah.php";
                          }elseif ($aksi == "ubah"){
                            include "page/data_sirkulasi_obat/ubah.php";
                          }elseif ($aksi == "hapus"){
                            include "page/data_sirkulasi_obat/hapus.php";
                          }
                          elseif ($aksi == "simpan_ubah"){
                            include "page/data_sirkulasi_obat/simpan_ubah.php";
                          }
                          elseif ($aksi == "simpan"){
                            include "page/data_sirkulasi_obat/simpan.php";
                          }
                          elseif ($aksi == "laporan"){
                            include "page/data_sirkulasi_obat/laporan.php";
                          }

                }elseif($page=="backup"){
                    include "page/backup/index.php";
                      if ($aksi == "download"){
                            include "page/backup/backup.php";
                          }
                  }

        elseif($page=="restore"){
                    include "page/restore/index.php";
                  }

              elseif($page=="resetdata"){
                   include "page/resetdata/index.php";

                   if ($aksi == "reset"){
                            include "page/resetdata/reset.php";
                          }
                  }



                  elseif($page==""){
                    include "home.php";
                  }

                    ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
      
      $(document).ready(function() {
        $('#dataTables-example').dataTable();

      });
    </script>
   <!>
   <script src="assets/js/custom.js"></script>
  
        
 
    <script src="js/jquery.eventCalendar.js" ></script>

  </body>
</html>
