<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
 
            <i class="fas fa-table"></i>
            Data Berita</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <button class="btn btn-sm btn-primary mb-2 mr-4" data-toggle="modal" data-target="#add" name=""><i class="fas fa-plus fa-sm"></i> Tambah Data Berita </button>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th width="170px">Judul Berita</th>
                    <th width="250px">Sub Judul</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->berita->list(); 
                  $no = 1;
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['judulberita'] ; ?></td>
                    <td><?php echo $row['subjudul'] ; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['waktu']; ?></td>
                    <td><img style="width: 100px; height: 90px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                    <td>
                      <a href="<?php echo base_url('admin/tambahberita/lihat?id=') . $row['id']; ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-eye"></i> Lihat Isi Berita </a><br>

                      <a href="<?php echo base_url('admin/tambahberita/edit?id=') . $row['id']; ?>" class="btn btn-sm btn-warning mb-2"><i class="fa fa-edit"></i> Edit Berita </a><br>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Berita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url()?>admin/tambahberita/add"  method="post" enctype="multipart/form-data">
                    <div class="container"> 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-danger"><b><i>* JUDUL BERITA </i></b></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="judulberita" placeholder="JUDUL BERITA" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* SUB JUDUL</i></b></label>
                            <div class="form-group col-sm-8">
                                <input type="text" class="form-control" name="subjudul" placeholder="SEKILAS" required>	
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* SEKILAS </i></b></label>
                            <div class="form-group col-sm-8">	
                                <textarea name="sekilas" class="form-control" cols="20" rows="4" placeholder="SUB JUDUL"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label text-danger"><b><i>* ISI BERITA </i></b></label>
                            <div class="form-group col-sm-8">	
                            <textarea name="isiberita" class="ckeditor" id="ckedtor" placeholder="SUB JUDUL"></textarea>
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