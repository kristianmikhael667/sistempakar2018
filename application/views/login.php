<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>logo/sipakar.png">
  
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assetslogin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assetslogin/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .field-icon {
      float: right;
     margin-right: 10px;
      margin-top: -31px;
      position: relative;
      z-index: 2;
    }
  </style>
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
                <img src="<?php echo base_url() ?>assetslogin/img/doker.jpg" width="465px" height="600px">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>FORM LOGIN</b></h1>
                    <img src="<?php echo base_url() ?>logo/login.png" width="100" class="mb-3" alt="">
                  </div>
                  <?php echo $this->session->flashdata('pesan');?>
                  <form class="user" action="<?php echo base_url('login/login') ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="id_user" aria-describedby="emailHelp" placeholder="Masukkan ID...">
                      <?php echo form_error('id_user', '<div class="text-danger small ml-2">','</div>'); ?>
                    </div>
                    <!-- <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="myInput" placeholder="Masukkan Password...">
                      <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                    </div> -->

                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password...">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                    <hr>
                  </form>
                 
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ?>regist">Belum Punya Akun?</a>
                  </div>
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

  <script>
    $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
    });
  </script>

</body>

</html>
