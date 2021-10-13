<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Data Pasien</title>

  <link rel="icon" type="image/png" href="logo/sipakar.png">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assetslogin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assetslogin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="<?php echo base_url() ?>assetslogin/img/dokter.jpg" width="470px" height="1020px">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>DAFTAR PASIEN</b></h1>
                    <img src="<?php echo base_url() ?>logo/add.jpg" width="100" class="mb-3" alt="">
                  </div>

                  <hr>
                  <form class="user" action="<?php echo base_url('regist/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> ID Pasien</label>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="id_user" aria-describedby="emailHelp" placeholder="ID Pasien">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Password</label>
                        <div class="form-group col-sm-8">
                            <input type="password" class="form-control form-control-user" id="exampleInputEmail" name="password" aria-describedby="emailHelp" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Nama Lengkap</label>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Alamat</label>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Tempat Lahir</label>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="lahir" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Tanggal Lahir </label>
                            <div class="form-group col-sm-8">	
                                <input type="date" class="form-control form-control-user" name="tanggal_lahir" placeholder="TANGGAL LAHIR" required>  
                            </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Nomor HP</label>
                        <div class="form-group col-sm-8">
                            <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="nomor" aria-describedby="emailHelp" placeholder="Nomor HP">
                        </div>
                    </div>

                    <div class="form-group row">
                            <label  class="col-sm-4 col-form-label"> JENIS KELAMIN</label>
                            <div class="form-group col-sm-8">	
                                    <input type="radio"  name="jeniskelamin" value="L"  > Laki-laki <br>
                                    <input type="radio"  name="jeniskelamin" value="P" > Perempuan
                            </div>
                        </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Upload Foto </label>
                        <div class="form-group col-sm-8">	
                            <input type="file" name="filefoto">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" name="daftar">Daftar Pasien</button>
                    <hr>
                  </form>
                 
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ?>welcome">Kembali ke Halaman Utama</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assetslogin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assetslogin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assetslogin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assetslogin/js/sb-admin-2.min.js"></script>

</body>

</html>
