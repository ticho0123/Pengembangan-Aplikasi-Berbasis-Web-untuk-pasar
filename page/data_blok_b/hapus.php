<?php

$id = $_GET ['id'];

$koneksi->query("delete from tb_blok_b where id_blok_b ='$id'");

?>


<script type="text/javascript">
	window.location.href="?page=data_blok_b";
</script>