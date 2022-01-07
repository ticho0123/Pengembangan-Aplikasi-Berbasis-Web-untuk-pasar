
<?php 

	
	$id_akun = $_POST ['id_akun'];
	$nama = $_POST ['nama'];
	$username = $_POST ['username'];
	$level = $_POST ['level'];
	$password = md5($_POST ['password']);

	

	


		$sql = $koneksi->query("INSERT INTO `tb_user` (`id_akun`, `nama`, `username`, `level`, `password`) VALUES (NULL, '$nama', '$username', '$level', '$password');");
	
		if($sql){

		
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_akun";
     </script>';


		}else {
			# code...
		}


?>                         
