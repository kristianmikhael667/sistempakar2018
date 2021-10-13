<div id="content-wrapper">
  <div class="container-fluid">
  <?php

$id_user = $this->session->userdata('id_user');
        
        $cek_data = $this->model_login->cek_data($id_user);

        foreach ($cek_data->result_array() as $row)
        {
          
          ?>
        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-user"></i>
                Profil Pasien</div>
              <div class="card-body">
                  ID Pasien
                  <div class="card-footer small text-muted"><?php echo $row['id_user'] ?></div><br>
                  Nama Pasien
                  <div class="card-footer small text-muted"><?php echo $row['nama'] ?></div><br>
                  Jenis Kelamin
                  <div class="card-footer small text-muted"><?php echo $row['jeniskelamin'] ?></div><br>
                  Alamat
                  <div class="card-footer small text-muted"><?php echo $row['alamat'] ?></div><br>
                  Status
                  <div class="card-footer small text-muted"><?php echo $row['status']  ?></div><br>
                  Nomor Hp
                  <div class="card-footer small text-muted"><?php echo $row['nomor']  ?></div><br>

              </div>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class=""></i>
                Foto Profil</div>
              <div class="card-body">
                <center><img style="width:200px;" src="<?php echo base_url().'assets/images/'.$row['foto'];?>"></center>
              </div>
              <div class="card-footer small text-muted"> </div>
            </div>
          </div>
        </div>

        <?php } ?>




  </div>
</div>
        