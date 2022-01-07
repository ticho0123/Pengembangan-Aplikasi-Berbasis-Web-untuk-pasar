 <?php

$sql = $koneksi->query("select * from tb_blok_b where id_blok_b='".$_GET['id']."'");
$x = $sql->fetch_assoc();
?>

<div class="panel panel-primary">
<div class="panel-heading">
	Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_blok_b&aksi=simpan_ubah&id=<?= $_GET['id']; ?>">
                                        


                                        <div class="form-group">
                                            <label>No Tempat</label>
                                          	<input class="form-control" value="<?= $x['no_tempat']?>" placeholder="<?= $x['no_tempat']?>" name="no_tempat"/>
                                        </div>

								
                                         <div class="form-group">
                                            <label>Tanggal Di isi</label>
                                          	<input class="form-control" value="<?= $x['tanggal_diisi']?>" placeholder="<?= $x['tanggal_diisi']?>" type="date" name="tanggal_diisi"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Nama Pemilik</label>
                                          	<input class="form-control" value="<?= $x['nama_pemilik']?>" placeholder="<?= $x['nama_pemilik']?>"  name="nama_pemilik"/>
                                        </div>



                                        <div class="form-group">
                                            <label>Ukuran Tempat</label>
                                            <input class="form-control" value="<?= $x['ukuran']?>" placeholder="<?= $x['ukuran']?>" name="ukuran"/>
                                        </div>

                                        <div class="form-group">
                                            <label>STBMH</label>
                                            <input class="form-control" value="<?= $x['stbhm']?>" placeholder="<?= $x['stbhm']?>" name="stbmh"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Pokok</label>
                                            <input class="form-control" value="<?= $x['harga_pokok']?>" placeholder="<?= $x['harga_pokok']?>" name="harga_pokok"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input class="form-control" value="<?= $x['total']?>" placeholder="<?= $x['total']?>" name="total"/>
                                        </div>
                                        <div class="form-group">
                                            <label>DP</label>
                                            <input class="form-control" value="<?= $x['dp']?>" placeholder="<?= $x['dp']?>" name="dp"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Sisa</label>
                                            <input class="form-control" value="<?= $x['sisa']?>" placeholder="<?= $x['sisa']?>" name="sisa"/>
                                        </div>



                                       		 <div class="form-group">
                                            <label>Keterangan</label>
                                            <select class="form-control" name="keterangan"/>
                                            	<?php
                                            	if ($x['ket'] == "Ngutang"){
                                            		echo "<option selected>Ngutang</option>";
                                            	}else{
                                            		echo "<option>Ngutang</option>";
                                            	}
                                            	if ($x['ket'] == "LUNAS"){
                                            		echo "<option selected>LUNAS</option>";
                                            	}else{
                                            		echo "<option>LUNAS</option>";
                                            	}
                                            	?>
                                                
                                                 
                                            
                                            </select>
                                        </div>

                                        <div>
                                       			 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
     									</div>

					</div>

					</form>
				</div>
    
</div>

</div>
    
</div>

