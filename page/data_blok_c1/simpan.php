
<?php 

	
	$no_tempat = $_POST['no_tempat'];
	$tanggal_diisi = $_POST['tanggal_diisi'];
	$nama_pemilik = $_POST['nama_pemilik'];                        
	$ukuran = $_POST['ukuran'];
	$stbhm = $_POST['stbmh'];
	$harga_pokok = $_POST['harga_pokok'];
	$total = $_POST['total'];
	$dp = $_POST['dp'];
	$sisa = $_POST['sisa'];
	$ket = $_POST['keterangan'];
	



		$sql = $koneksi->query("INSERT INTO `tb_blok_c1` (`no_tempat`, `tanggal_diisi`, `nama_pemilik`,  
			`ukuran`, `stbhm`, `harga_pokok`, `total`, `dp`, `sisa`, `ket`) VALUES ('".$no_tempat."', '".$tanggal_diisi."', '".$nama_pemilik."', '".$ukuran."', '".$stbhm."', '".$harga_pokok."', '".$total."', '".$dp."', '".$sisa."', '".$ket."');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_blok_c1";
     </script>';


		}else {
			echo'<script type="text/javascript">
     alert("Gagal");
     window.location.href="?page=data_blok_c1";
     </script>';
		}


?>                         
