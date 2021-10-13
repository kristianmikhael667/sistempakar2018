<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Aktivasi Akun Pasien</div>
            <div class="card-body">
                
            <form action="<?php echo base_url(). 'admin/datapasien/edit' ?>"  method="post" enctype="multipart/form-data">
            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->login->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> ID Pasien </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="id_user" placeholder="ID PENYAKIT" value="<?php echo $row['id_user'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Nama Pasien </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="nama" placeholder="NAMA KANKER" value="<?php echo $row['nama'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Status Akun </label>
                  <div class="col-sm-8">
                      <input type="radio" name="status" value="AKTIF" <?php echo ($row['status'] == 'AKTIF') ? "checked": "" ?> > Aktif <br>
                      <input type="radio" name="status" value="NONE" <?php echo ($row['status'] == 'NONE') ? "checked": "" ?> > None
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


