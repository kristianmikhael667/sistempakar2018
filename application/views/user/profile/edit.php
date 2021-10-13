<div id="content-wrapper">

    <div class="container-fluid">
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Edit Data Pasien</div>
            <div class="card-body">
            <?php echo $this->session->flashdata('pesan');?>
            <form action="<?php echo base_url(). 'user/dashboard_user/edit' ?>"  method="post" enctype="multipart/form-data">
            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->login->cek_data($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> ID </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="id_user" placeholder="ID Pasien" value="<?php echo $row['id_user'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ubah Password </label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" placeholder="ID Pasien" value="<?php echo $row['password'] ?>" required>
                  </div>
              </div>
            
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Nama </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row['nama'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Tempat Lahir </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lahir" placeholder="Tempat Lahir" value="<?php echo $row['lahir'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Tanggal Lahir </label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $row['tanggal_lahir'] ?>" required>
                  </div>
              </div>
                        
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Jenis Kelamin </label>
                  <div class="col-sm-8">
                      <input type="radio" name="jeniskelamin" value="L" <?php echo ($row['jeniskelamin'] == 'L') ? "checked": "" ?> > Laki - Laki <br>
                      <input type="radio" name="jeniskelamin" value="P" <?php echo ($row['jeniskelamin'] == 'P') ? "checked": "" ?> > Perempuan
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Alamat </label>
                  <div class="form-group col-sm-8">	
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label  class="col-sm-3 col-form-label"> Nomor HP </label>
                  <div class="form-group col-sm-8">	
                    <input type="number" class="form-control" name="nomor" placeholder="Nomor HP" value="<?php echo $row['nomor'] ?>" required>
                  </div>
              </div>
                        
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> FOTO </label>
                  <div class="form-group col-sm-8">	
                    <input type="file" name="filefoto">
                  </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-10" style="float: right;">	
                  <button type="submit" class="btn btn-lg btn-primary" name="tambah">EDIT</button>
                  <button type="reset" class="btn btn-lg btn-danger" name="batal">BATAL</button>
                </div>	
              </div>
            </div>
            <?php } ?>
          </form>
            </div>
        </div>
    </div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href=" <?php echo base_url("#page-top")?>">
<i class="fas fa-angle-up"></i>
</a>


