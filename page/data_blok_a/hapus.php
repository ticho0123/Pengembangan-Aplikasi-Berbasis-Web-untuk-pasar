<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_blok_a where id_blok_a ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_blok_a";
</script>