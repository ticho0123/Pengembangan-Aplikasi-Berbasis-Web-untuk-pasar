<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             AUNING BLOK B  (TEMPAT JUALAN MAKANAN)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Id</th>
                                            <th>No Tempat</th>
                                            <th>Tanggal Di isi</th>
                                            <th>Nama Pemilik</th>
                                            <th>Ukuran</th>
                                            <th>STBMH</th>
                                            <th>Harga Pokok</th>
                                            <th>TOTAL</th>
                                            <th>DP</th>
                                            <th>SISA</th>
                                            <th>KET</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $no = 1;


                                    $sql = $koneksi->query("select * from tb_blok_b");

                                    while ($data= $sql->fetch_assoc()){

                                    ?>




                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['id_blok_b']; ?></td>
                                    <td><?php echo $data['no_tempat']; ?></td>
                                    <td><?php echo $data['tanggal_diisi']; ?></td>
                                    <td><?php echo $data['nama_pemilik']; ?></td>
                                    <td><?php echo $data['ukuran']; ?></td>
                                    <td><?php echo $data['stbhm']; ?></td>
                                    <td><?php echo $data['harga_pokok']; ?></td>
                                    <td><?php echo $data['total']; ?></td>
                                    <td><?php echo $data['dp']; ?></td>
                                    <td><?php echo $data['sisa']; ?></td>
                                    <td><?php echo $data['ket']; ?></td>

                                    <td>
                                    <a href="?page=data_blok_b&aksi=ubah&id=<?php echo $data['id_blok_b'];?>"  class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')" href="?page=data_blok_b&aksi=hapus&id=<?php echo $data['id_blok_b']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>



                                    <?php } ?>
                                    </tbody>

                                    </table>

                                    </div> 

                                    <a href="?page=data_blok_b&aksi=tambah" class="btn btn-success" style="margin-bottom: : 8px";><i class="fa fa-plus"></i>Tambah Data</a>

                                    <a href="./laporan/laporan_karyawan.php" target="blank" class="btn btn-default" style="margin-bottom: : 8px";><i class="fa fa-print"></i>Cetak Laporan</a>

                                 
                                      
                                       </div>   
                                       
                                        </div>   
                                        
                                         </div>   

                                          </div>