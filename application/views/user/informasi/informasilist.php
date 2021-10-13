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
            Data Informasi</div>
          <div class="card-body">
          <?php
            $id = $this->input->get('id');
            $cek_query = $this->info->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" style="width: 100%; height: 380px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"><?php echo $row['judulinfo'];?></span>
                <!-- <span class="section-heading-lower"><?php echo $row['subjudul'];?></span> -->
              </h2>
              <p style="text-align:justify;"><?php echo $row['isiinfo'];?></p>
            </div>
          </div>
        </div>
      </div>
            <?php } ?>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

  
  </div>