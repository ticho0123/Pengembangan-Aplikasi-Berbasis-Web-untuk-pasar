
<?php 

$sql = $koneksi->query("select * from tb_user where id_akun='".$_GET['id']."'");

$tampil = $sql->fetch_assoc();

if(isset($_POST['simpan'])){
	$id_akun = $_GET ['id'];
	$nama = $_POST ['nama'];
	$username = $_POST ['username'];
	$level = $_POST ['level'];
	$password = $_POST ['password'];
	if(!empty($_POST['password'])){
		$password = md5($password);

	}else{
		$password = $tampil['password'];
	}


	
	


		$sql = $koneksi->query("UPDATE `tb_user` set  nama='$nama', username='$username',  level='$level',  password='$password' where id_akun='$id_akun'");
	
		if($sql){


		
echo'<script type="text/javascript">
     alert(" Simpan Data Berhasil ");
     window.location.href="?page=data_akun";
     </script>';


		}else {
			echo"gagal simpan cok";
		}
}

?>                   
  