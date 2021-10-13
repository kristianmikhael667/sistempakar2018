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
<div class="container-fluid">
  <!-- Page Heading -->
    <!-- Content Row -->
<div class="row">
  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-11">
    <div class="card shadow mb-4 mt-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-danger">Menu Pasien</h6>
        
        <div class="dropdown no-arrow">
        
          <!-- <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
          
            <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
          </a>
        </div>
      </div>
      <?php
    $id = $this->session->userdata('id_user');
    $cek_query=$this->model_login->cek_data($id);
    foreach ($cek_query->result_array() as $row)
    {
        ?>
  <marquee style="font-size:20px;" scrollamount="15" class="text-dark"><p><b><i>Selamat Datang Di Sipakar <b class="text-success"><?php echo $row['nama'] ?></b>, Silahkan Melakukan Diagnosa Di Menu Diagnosa Penyakit</i></p></b></marquee>
    <?php } ?>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
            <!-- Color System -->
            <div class="row">
                <div class="card mr-4 ml-4 mb-4" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-danger ml2"><b>Diagnosa Penyakit</b></h5>
                        <center>
                            <i style="font-size:120px;" class="fa fa-stethoscope fa-10x center text-danger" aria-hidden="true"></i>
                        </center>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('user/diagnosa') ?>" class="btn btn-danger btn-block">KLIK SAYA</a>
                        </div>
                    </div>

                <div class="card mr-4 ml-4 mb-4" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-warning ml3"><b>Daftar Penyakit</b></h5>
                        <center>
                            <i style="font-size:120px;" class="fa fa-server fa-10x center text-warning" aria-hidden="true"></i>
                        </center>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url('user/penyakit') ?>" class="btn btn-warning btn-block">KLIK SAYA</a>
                    </div>
                </div>

                <div class="card mr-4 ml-4 mb-4" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-success ml4"><b>Informasi Kesehatan</b></h5>
                            <center>
                                <i style="font-size:120px;" class="fa fa-heartbeat fa-10x center text-success" aria-hidden="true"></i>
                            </center>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url('user/informasi') ?>" class="btn btn-success btn-block">KLIK SAYA</a>
                    </div>
                </div>

                <div class="card mr-4 ml-4 mb-4" style="width: 17rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary ml5"><b>Kontak Kami</b></h5>
                            <center>
                                <i style="font-size:120px;" class="fa fa-envelope fa-10x center text-primary" aria-hidden="true"></i>
                            </center>
                        </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url('user/about') ?>" class="btn btn-primary btn-block">KLIK SAYA</a>
                    </div>
                </div>
            </div>
        </div>  
        <div class="mt-4 text-center small">    
                      
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>