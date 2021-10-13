<div class="preloader">
    <div class="loading">
        <center><img src="<?php echo base_url() ?>logo/sipakar.png" alt="" srcset="" width="80">
        <br>
        <p class="ketik" style="font-size:30px;"><b><i>Memuat Halaman...</i></b></p>
        
        <div class="spinner-grow text-light" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>  
        </center>
    </div>
</div>
<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Media Informasi Kanker</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->info->list(); 
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr>
                    <td><img style="width: 120px; height: 100px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                    <td>
                    <a href="<?php echo base_url('user/informasi/lihat?id=') . $row['id']; ?>"><b style="font-size: 16px; color: #00FFFF"><u><?php echo $row['judulinfo'] ; ?></b></u></a><br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("d/F/Y", strtotime($row['tanggal'])) ?> <br>
                    <p style="text-align: justify;"><?php echo $row['sekilas'] ; ?></p> <br>
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
                            <textarea name="isiberita" class="form-control" cols="20" rows="20" placeholder="SUB JUDUL"></textarea>
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