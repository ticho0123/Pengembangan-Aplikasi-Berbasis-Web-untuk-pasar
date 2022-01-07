<?php

$id_akun = $_GET['id'];

$sql = $koneksi->query("select * from tb_user where id_akun = '$id_akun'");

$tampil = $sql->fetch_assoc();



?>




<div class="panel panel-primary">
<div class="panel-heading">
  Ubah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <form method="POST" action="?page=data_akun&aksi=simpan_ubah&id=<?= $id_akun; ?>">
                                        


                
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nama" value="<?php echo $tampil['nama']?>"/>
                                        </div>


                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text"  name="username" value="<?php echo $tampil['username']?>"/>
                                        </div>

                                         <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" type="text" name="level" value="<?php echo $tampil['level']?>"/>

                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="text"  name="password" placeholder="Isi jika ingin mengganti password"/>
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
