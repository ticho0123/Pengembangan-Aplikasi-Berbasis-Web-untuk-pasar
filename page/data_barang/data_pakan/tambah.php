<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data 
</div>
 
 <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12">

                             
                                  
                                    <form method="POST" action="?page=view_pakan&aksi=simpan">
                                        <div class="form-group">
                                            <label>Nama Pakan</label>
                                          

<select name="nama_pakan" id="nama_pakan" class="form-control" required> <option value="">-- Pilih Nama Pakan --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from t_kategoripakan"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_kategori].$data[nama_pakan]'>$data[id_kategori] ($data[nama_pakan])</option>"; } 
     ?>


      </select>


                                        </div>

                                       <div class="form-group">
                                            <label>Stok</label>
                                          	<input type="number" class="form-control" name="stok"/>
                                        </div>

                                        <div class="form-group">
                                             <label>Id Suplier</label>
                                            

<select name="id_suplier" id="id_suplier" class="form-control" required> <option value="">-- Pilih Kode Suplier --</option> 
    <?php 
  
  $tampils=$koneksi->query("select * from tb_suplier"); 

  while ($data=mysqli_fetch_assoc($tampils)){ echo"<option value='$data[id_suplier]'>$data[id_suplier] ($data[nama_suplier])</option>"; } 
     ?>


      </select>
    

                                        </div>

                                          <div class="form-group">
                                            <label>Tanggal Masuk</label>
                                            <input class="form-control" type="date" name="tgl_masuk"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Kadaluarsa</label>
                                            <input class="form-control" type="date" name="tgl_kadaluarsa"/>
                                        </div>
<div>
                                             <input type="submit" name="simpan" value="Simpan" style="margin-top:" class="btn btn-primary">  

                                        </div>

                                       
                                        
                                        
					</form>
				</div>
    
</div>

</div>
    
</div>
              

