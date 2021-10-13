   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="#"><img src="<?php echo base_url() ?>logo/sipakar.png" width="40" height="40" alt=""></i><b> Halaman Pasien</b></a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto mt-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      
      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1 hidden-xs">
      <a class="nav-link dropdown-toggle"><i class="fa fa-user-md text-warning"></i> <b>Status Pasien : </b> <b><span class="mr-2 d-none d-lg-inline text-dark-600 large text-primary">
            <?php
              $id_user = $this->session->userdata('id_user');
              $cek_query=$this->model_login->cek_data($id_user);  
              $a = 1;
                foreach ($cek_query->result_array() as $row)
                {       
                     echo $row['status'] ; 
                } 
            ?></span></b></a>
      </li>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-dark-600 large"><?php
              $id_user = $this->session->userdata('id_user');
              $cek_query=$this->model_login->cek_data($id_user); 
                foreach ($cek_query->result_array() as $row)
                {       
              ?><?php echo $row['nama'] ; ?> 
          <?php } ?></span>
          <?php
              $id_user = $this->session->userdata('id_user');
              $cek_query=$this->model_login->cek_data($id_user); 
                foreach ($cek_query->result_array() as $row)
                {       
              ?>
          <img class="img-profile rounded-circle" width="35px" height="30px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
          <?php } ?>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url() ?>user/dashboard_user/profile">
            <i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
            Lihat Profil
          </a>

          <?php
            $id_user = $this->session->userdata('id_user');
            $cek_query=$this->model_login->cek_data($id_user); 
              foreach ($cek_query->result_array() as $row)
              {       
              ?>
                <a class="dropdown-item" href="<?php echo base_url('user/dashboard_user/edit?id=') .$row['id_user']; ?>">
                  <i class="fas fa-wrench fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profil
                </a>
          <?php } ?>

          <!-- <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Histori Diagnosa
          </a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
