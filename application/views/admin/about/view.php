<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Pesan Pasien</div>
          
            <div class="card-body">

            <?php
            $id = $this->input->get('id');
            $cek_query = $this->pesan->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Nama </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="nama" value="<?php echo $row['nama'] ?>" required>
                  </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Nomor </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="nomor" value="<?php echo $row['nomor'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Email </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="email" readonly value="<?php echo $row['email'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Pesan </label>
                  <div class="col-sm-8">
                    <textarea name="pesan" value="" readonly class="ckeditor" id="ckedtor" cols="20" rows="4"> <?php echo $row['pesan'] ?> </textarea>
                  </div>
              </div>

            </div>
            <?php } ?>
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


