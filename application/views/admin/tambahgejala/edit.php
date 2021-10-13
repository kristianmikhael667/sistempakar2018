<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Edit Data Gejala</div>
          
            <div class="card-body">
            <?php echo $this->session->flashdata('pesan');?>
            <form action="<?php echo base_url(). 'admin/tambahgejala/edit' ?>"  method="post" enctype="multipart/form-data">
            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->gejala->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> ID Gejala </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="ids" placeholder="ID Gejala" value="<?php echo $row['ids'] ?>" required>
                  </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Kode Gejala </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="kode" placeholder="ID Gejala" value="<?php echo $row['kode'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> GEJALA </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namagejala" placeholder="NAMA KANKER" value="<?php echo $row['namagejala'] ?>" required>
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


