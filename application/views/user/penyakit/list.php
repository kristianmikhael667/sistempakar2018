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
        <h6 class="m-0 font-weight-bold text-danger"><i class="fa fa-medkit"></i> Daftar Penyakit Tumor Otak</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
          
        </div>
      </div>
      <!-- Card Body User -->
	 
      <div class="card-body mb-5">
        <div class="chart-area">
            <!-- Color System -->
            <div class="row text-center mt-4">
                <?php
                $cek_query = $this->kanker->list();
                foreach ($cek_query->result_array() as $row)
                {
                  ?>
                    <div class="card ml-3 mb-3" style="width: 15rem;">
                      <div class="card-body">
                        <h5 class="card-title text-center text-danger"><b><?php echo $row['namapenyakit'] ; ?></b></h5>
                          <center>
                            <img width = "150" height = "120" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                          </center>
                          <h6 class="card-text"><b><?php echo $row['kode'] ; ?></b></h6>
                      </div> 
                      <div class="card-footer">	
                        <p><i class = "fa fa-stethoscope"></i> <span><?php echo $row['spesialis']; ?></span></p>
                        <p><i class = "fa fa-hospital-o"></i> <span><?php echo $row['rumahsakit']; ?></span></p>
                        <p><i class = "fa fa-medkit"></i> <span><?php echo $row['obat']; ?></span></p>
                      </div>

                      <!-- <div class="card-footer">
                        <button disabled="disabled" class="btn btn-danger btn-block"><b> Saya Admin </b></button>
                      </div>  -->
                    </div>
                  <?php } ?>
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
