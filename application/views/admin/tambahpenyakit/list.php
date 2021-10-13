<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Jenis Penyakit Tumor Otak</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <button class="btn btn-sm btn-primary mb-2 mr-4" data-toggle="modal" data-target="#add" name=""><i class="fas fa-plus fa-sm"></i> Tambah Data Penyakit Kanker Otak </button>
              <button class="btn btn-sm btn-success mb-2 mr-4" data-toggle="modal" data-target="#addjenis" name=""><i class="fas fa-plus fa-sm"></i> Tambah Data Jenis Stadium </button>  
              <button class="btn btn-sm btn-warning mb-2" data-toggle="modal" data-target="#lihat" name=""><i class="fas fa-eye fa-sm"></i> Lihat Data Jenis Stadium </button>  
  
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>ID Penyakit</th>
                    <th>Foto</th>
                    <th>Nama Penyakit</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->kanker->list(); 
                  $no = 1;
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode'] ; ?></td>
                    <td><img style="width: 100px; height: 90px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                    <td><?php echo $row['namapenyakit'] ; ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/tambahpenyakit/lihat?id=') . $row['id']; ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-eye"></i> Lihat Data </a><br>

                      <a href="<?php echo base_url('admin/tambahpenyakit/edit?id=') . $row['id']; ?>" class="btn btn-sm btn-warning mb-2"><i class="fa fa-edit"></i> Edit </a><br>

                      <a href="<?php echo base_url('admin/tambahpenyakit/delete?id=') .$row['id']; ?>" class="btn btn-sm btn-danger mb-2"><i class="fa fa-trash"></i> Hapus </a>
                    </td>
                  </tr>

                  <?php } ?>
              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
  
  <!-- Modal ADD -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kanker Otak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url()?>admin/tambahpenyakit/add"  method="post" enctype="multipart/form-data">
                    <div class="container"> 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> KODE PENYAKIT </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode" placeholder="Kode Penyakit" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> JENIS TUMOR OTAK </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="namapenyakit" placeholder="Jenis Tumor Otak" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> DEFINISI TUMOR OTAK </label>
                            <div class="col-sm-8">
                              <textarea name="definisi" class="ckeditor" id="ckedtor"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> PENANGANAN </label>
                            <div class="form-group col-sm-8">	
                                <textarea name="penanganan" class="ckeditor" id="ckedtor"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> PEMERIKSAAN </label>
                            <div class="form-group col-sm-8">	
                              <textarea name="obat" class="ckeditor" id="ckedtor"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> RUMAH SAKIT </label>
                            <div class="form-group col-sm-8">	
                                <input type="text" class="form-control" name="rumahsakit" placeholder="Rumah Sakit" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> Spesialis </label>
                            <div class="form-group col-sm-8">	
                                <input type="text" class="form-control" name="spesialis" placeholder="spesialis" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> FOTO </label>
                            <div class="form-group col-sm-8">	
                                    <input type="file" name="filefoto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10" style="float: right;">	
                                <button type="submit" class="btn btn-lg btn-primary" name="tambah">TAMBAH</button>
                                <button type="reset" class="btn btn-lg btn-danger" name="batal">BATAL</button>
                            </div>	
                        </div>
                    </div>
                </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    
  </div>

</div>

<!-- Modal Lihat -->
<div class="modal fade" id="lihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lihat Data Penyakit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>ID Jenis Penyakit</th>
                <th>Nama Jenis Penyakit</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $cek_query=$this->kanker->lihat(); 
                $no = 1;
                foreach ($cek_query->result_array() as $row)
                {       
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['id'] ; ?></td>
                    <td><?php echo $row['namajenis'] ; ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/tambahpenyakit/hapus?id=') .$row['id']; ?>" class="btn btn-sm btn-danger mb-2"><i class="fa fa-trash"></i> Hapus </a>
                    </td>
                  </tr>

                  <?php } ?>
              
                </tbody>
              </table>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    
  </div>

</div>
</div>

 <!-- Modal ADD -->
 <div class="modal fade" id="addjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jenis Penyakit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url()?>admin/tambahpenyakit/addjenis"  method="post" enctype="multipart/form-data">
                    <div class="container"> 

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> NAMA JENIS PENYAKIT </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="namajenis" placeholder="NAMA JENIS PENYAKIT" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10" style="float: right;">	
                                <button type="submit" class="btn btn-lg btn-primary" name="tambah">TAMBAH</button>
                                <button type="reset" class="btn btn-lg btn-danger" name="batal">BATAL</button>
                            </div>	
                        </div>
                    </div>
                </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    
  </div>
  
  </div>