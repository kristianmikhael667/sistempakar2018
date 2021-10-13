<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Pasien</title>

  <!-- Custom fonts for this template-->
   <link rel="icon" type="image/png" href="<?php echo base_url() ?>logo/sipakar.png">

  
  <link href="<?php echo base_url() ?>assetsuser/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>assetsuser/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assetsuser/css/sb-admin.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assetsuser/css/animate.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assetsuser/css/agency.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
  
  <!-- Halaman CSS -->
  <style type="text/css">
  .preloader{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #851717;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }

  .wadah-mengetik
  {
    white-space:nowrap;
    overflow:hidden;
    -webkit-animation: ketik 2s steps(70, end);
    animation: ketik 2s steps(70, end);
  }

  @keyframes ketik{
    from { width: 0; }
  }

  @-webkit-keyframes ketik{
    from { width: 0; }
  }

  .ml2 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml3 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml4 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml5 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ketik .letter {
    display: inline-block;
    line-height: 1em;
  }

  .tulisan {
    position: relative;
    font-weight: 900;
    font-size: 4.5em;
  }
  .tulisan .letters {
    position: absolute;
    margin: auto;
    left: 0;
    top: 0.3em;
    right: 0;
    opacity: 0; 
  }

  .badan
  {
    background-color: pink;
    padding: 13px 0;
    margin-top: 30px;
  }
 
  .peding-100
  {
    padding: 120px;
  }
 
  .peding-30
  {
    padding: 30px;
  }

  .chatbot {
    float: left;
    bottom: 20px;
}

</style>



</head>