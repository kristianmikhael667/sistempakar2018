<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Edit Berita</div>
            <div class="card-body">
            <?php echo $this->session->flashdata('pesan');?>
            <form action="<?php echo base_url(). 'admin/tambahberita/edit' ?>"  method="post" enctype="multipart/form-data">
            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->berita->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> ID Berita </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="id" placeholder="ID Berita" value="<?php echo $row['id'] ?>" required>
                  </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Judul Berita </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="judulberita" placeholder="ID Gejala" value="<?php echo $row['judulberita'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Sub Judul </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="subjudul" placeholder="Sub Judul" value="<?php echo $row['subjudul'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Tanggal Update </label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="tanggal" placeholder="Sekilas" value="<?php echo $row['tanggal'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Waktu Update </label>
                  <div class="col-sm-8">
                    <input type="time" class="form-control" name="waktu" placeholder="Sekilas" value="<?php echo $row['waktu'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Sekilas </label>
                  <div class="col-sm-8">
                    <textarea name="sekilas" value="" class="form-control" cols="20" rows="10"> <?php echo $row['sekilas'] ?> </textarea>
                  </div>
              </div>
            
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Isi Berita </label>
                  <div class="col-sm-8">
                    <textarea name="isiberita" value="" class="ckeditor" id="ckedtor"> <?php echo $row['isiberita'] ?> </textarea>
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


