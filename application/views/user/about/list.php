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
<div class="container badan">
       <?php echo $this->session->flashdata('pesan');?>
      <div class="row">
        <div class="col peding-100">
          <h1><i class="fa fa-envelope" aria-hidden="true"></i> Kontak Kami</h1>
          <p>
            Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
          </p>
        </div>
 
        <div class="col peding-30">
          <form method="post" action="<?php echo base_url()?>user/about/add">
             
            <div class="form-group">
              <label for="">Nama Anda:</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>

            <div class="form-group">
              <label for="">Nomor Anda:</label>
              <input type="number" class="form-control" name="nomor" placeholder="Masukkan Nomor">
            </div>

            <div class="form-group">
              <label for="">E-mail Anda:</label>
              <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
            </div>
 
            <div class="form-group">
              <label for="">Pesan Anda:</label>
              <textarea name="pesan" class="form-control" cols="30" rows="7" required="required" data-validation-required-message="Anda Belum Menulis Pesan..."></textarea>
            </div>
 
            <input class="btn btn-primary" type="submit" value="Kirim Pesan">
 
          </form>
        </div>
      </div>
 
    </div>