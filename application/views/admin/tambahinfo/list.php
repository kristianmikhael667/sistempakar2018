<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Informasi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <button class="btn btn-sm btn-primary mb-2 mr-4" data-toggle="modal" data-target="#add" name=""><i class="fas fa-plus fa-sm"></i> Tambah Data Informasi </button>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th width="170px">Judul Informasi</th>
                    <th>Tanggal</th>
                    <th>Sekilas</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->info->list(); 
                  $no = 1;
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['judulinfo'] ; ?></td>
                    <td><?php echo $row['tanggal'] ; ?></td>
                    <td><?php echo $row['sekilas']; ?></td>
                    <td><img style="width: 100px; height: 90px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                    <td>
                      <a href="<?php echo base_url('admin/tambahinformasi/lihat?id=') . $row['id']; ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-eye"></i> Lihat Isi Informasi </a><br>

                      <a href="<?php echo base_url('admin/tambahinformasi/edit?id=') . $row['id']; ?>" class="btn btn-sm btn-warning mb-2"><i class="fa fa-edit"></i> Edit Informasi </a><br>
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
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Informasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url()?>admin/tambahinformasi/add"  method="post" enctype="multipart/form-data">
                    <div class="container"> 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-danger"><b><i>* JUDUL INFORMASI </i></b></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="judulinfo" placeholder="JUDUL INFORMASI" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-danger"><b><i>* TANGGAL </i></b></label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* SEKILAS </i></b></label>
                            <div class="form-group col-sm-8">	
                                <textarea name="sekilas" class="form-control" cols="20" rows="4" placeholder="SEKILAS"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* ISI INFORMASI </i></b></label>
                            <div class="form-group col-sm-8">	
                            <textarea name="isiinfo" class="ckeditor" id="ckedtor" placeholder="Informasi"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* FOTO </b></label>
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

  
  </div>