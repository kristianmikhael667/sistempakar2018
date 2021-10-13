<div id="content-wrapper">
    <div class="container-fluid">
    
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart Example-->
        <div class="col-xl-12 col-lg-11">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-lock mr-2" aria-hidden="true"></i> Administrator</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-sm-6 mb-3 mr-4">
                                <div class="card text-white bg-primary o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="mr-5">Tambah Data Penyakit Tumor Otak</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/tambahpenyakit') ?>">
                                        <span class="float-left">Klik Disini</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-2 col-sm-6 mb-3 mr-4">
                                <div class="card text-white bg-dark o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="mr-5">Tambah Data Stadium</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/stadium') ?>">
                                        <span class="float-left">Klik Disini</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-2 col-sm-6 mb-3 mr-4">
                                <div class="card text-white bg-warning o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="mr-5">Tambah Data Gejala</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/tambahgejala') ?>">
                                        <span class="float-left">Klik Disini</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-2 col-sm-6 mb-3 mr-4">
                                <div class="card text-dark bg-light o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="mr-5">Tambah Data Pencegahan</div>
                                    </div>
                                    <a class="card-footer text-dark clearfix small z-1" href="<?php echo base_url('admin/tambahpencegahan') ?>">
                                        <span class="float-left">Klik Disini</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-2 col-sm-6 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="mr-5">Tambah Hasil</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/tambahhasil') ?>">
                                        <span class="float-left">Klik Disini</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card-footer small text-muted"></div>
        </div>
        <!-- Area Chart Example-->
        </div>
        <!-- Content Row -->
        <div class="row">

        </div>
        <!-- Content Row -->
        <div class="row">

        </div>

        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                </div>
                <div class="modal-body">Pilih Logout Untuk Keluar dari Halaman Karyawan</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>