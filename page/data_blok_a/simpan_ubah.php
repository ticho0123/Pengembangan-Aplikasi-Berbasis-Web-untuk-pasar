<?php
$sql = $koneksi->query("UPDATE tb_blok_a
	SET no_tempat='".$_POST['no_tempat']."', tanggal_diisi='".$_POST['tanggal_diisi']."', nama_pemilik='".$_POST['nama_pemilik']."', ukuran='".$_POST['ukuran']."', stbhm='".$_POST['stbmh']."', harga_pokok='".$_POST['harga_pokok']."', total='".$_POST['total']."', dp='".$_POST['dp']."', sisa='".$_POST['sisa']."', ket='".$_POST['keterangan']."'
 WHERE id_blok_a='".$_GET['id']."'");
if ($sql){
echo'<script type="text/javascript">
     alert("Simpan Data Berhasil ");
     window.location.href="?page=data_blok_a";
     </script>';
}else{
echo'<script type="text/javascript">
     alert("Simpan Data Gagal ");
     window.location.href="?page=data_blok_a&aksi=ubah&id='.$_GET["id"].'";
     </script>';
}
?>