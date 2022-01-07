<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_blok_c1 where id_blok_c1 ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_blok_c1";
</script>