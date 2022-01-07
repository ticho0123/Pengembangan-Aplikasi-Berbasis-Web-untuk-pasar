<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_user where id_akun ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_akun";
</script>