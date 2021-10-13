<div class="container-fluid">
  <!-- Page Heading -->
    <!-- Content Row -->
<div class="row">
  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-11">
    <div class="card shadow mb-4 mt-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Data Pasien</h6>
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
                $cek_query = $this->model_login->list();
                foreach ($cek_query->result_array() as $row)
                {
                  ?>
                  <?php
                  if($row['role_id'] == 2)
                  {
                    ?>
                        <div class="card ml-3 mb-3" style="width: 15rem;">
                      <div class="card-body bg-primary">
                        <h5 class="card-title text-center text-danger"><b><?php echo $row['nama'] ; ?></b></h5>
                          <center><i style="font-size:120px;" class="fas fa-lock"></i></center>
                          <h6 class="card-text"><b><?php echo $row['id_user'] ; ?></b></h6>
                  
                          <?php
                            if ($row['status'] == 'AKTIF')
                            {
                              ?>
                              <button class="btn btn-success" disabled="disabled"><?php echo $row['status'] ; ?></button>
                          <?php } ?> 
                          <?php
                            if ($row['status'] == 'NONE')
                            {
                              ?>
                              <button class="btn btn-danger" disabled="disabled"><?php echo $row['status'] ; ?></button>
                          <?php } ?>
                      </div> 
                      <div class="card-footer">	
                        <p><i class = "fas fa-map-marker-alt"></i> <span><?php echo $row['alamat']; ?></span></p>
                        <p><i class = "fas fa-phone"></i> <span><?php echo $row['nomor']; ?></span></p>
                        <p>
                        <?php
                        if ($row['jeniskelamin'] == 'L')
                        {
                          ?>
                          <i class = "fas fa-male"></i> <?php echo $row['jeniskelamin'] ; ?></button>
                          <?php } ?> 
                        <?php
                        if ($row['jeniskelamin'] == 'P')
                        {
                          ?>
                          <i class = "fas fa-female"></i> <?php echo $row['jeniskelamin'] ; ?></button>
                          <?php } ?>

                        <p><i class = "fa fa-birthday-cake"></i> <span><?php echo $row['tanggal_lahir']; ?></span></p>
                      </div>

                      <div class="card-footer">
                        <button disabled="disabled" class="btn btn-danger btn-block"><b> Saya Admin </b></button>
                      </div> 
                    </div>
                  <?php } ?>
                  <?php
                  if($row['role_id'] == 1)
                  {
                    ?>
                        <div class="card ml-3 mb-3" style="width: 15rem;">
                      <div class="card-body">
                        <h5 class="card-title text-center text-primary"><b><?php echo $row['nama'] ; ?></b></h5>
                          <center>
                            <img width = '150' height = '120' src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                          </center>
                          <h6 class="card-text"><b><?php echo $row['id_user'] ; ?></b></h6>
                  
                          <?php
                            if ($row['status'] == 'AKTIF')
                            {
                              ?>
                              <button class="btn btn-success" disabled="disabled"><?php echo $row['status'] ; ?></button>
                          <?php } ?> 
                          <?php
                            if ($row['status'] == 'NONE')
                            {
                              ?>
                              <button class="btn btn-danger" disabled="disabled"><?php echo $row['status'] ; ?></button>
                          <?php } ?>
                      </div>
                      <div class="card-footer">	
                        <p><i class = "fas fa-map-marker-alt"></i> <span><?php echo $row['alamat']; ?></span></p>
                        <p><i class = "fas fa-phone"></i> <span><?php echo $row['nomor']; ?></span></p>
                        <p>
                        <?php
                        if ($row['jeniskelamin'] == 'L')
                        {
                          ?>
                          <i class = "fas fa-male"></i> <?php echo $row['jeniskelamin'] ; ?></button>
                          <?php } ?> 
                        <?php
                        if ($row['jeniskelamin'] == 'P')
                        {
                          ?>
                          <i class = "fas fa-female"></i> <?php echo $row['jeniskelamin'] ; ?></button>
                          <?php } ?>

                        <p><i class = "fa fa-birthday-cake"></i> <span><?php echo $row['tanggal_lahir']; ?></span></p>
                        <p><i class = "fa fa-key"></i> <span><?php echo $row['last_login']; ?></span></p>
                      </div>

                      <div class="card-footer bg-primary">
                        <form action="<?php echo base_url('admin/datapasien/edit?id=') . $row['id_user']; ?>" method="post">
                          <button type="submit" class="btn btn-warning btn-block mb-2"><b> Update Status </b></button>
                        </form>
                        <form action="<?php echo base_url('admin/datapasien/delete?id=') . $row['id_user']; ?>" method="post">
                          <button type="submit" class="btn btn-danger btn-block"><b> Delete Pasien </b></button>
                        </form>
                      </div> 
                    </div>
                  <?php } ?>
                
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
