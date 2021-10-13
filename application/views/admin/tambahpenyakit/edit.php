<div id="content-wrapper">

    <div class="container-fluid">
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Edit Data Penyakit Tumor Otak</div>
            <div class="card-body">
            <?php echo $this->session->flashdata('pesan');?>
            <form action="<?php echo base_url(). 'admin/tambahpenyakit/edit' ?>"  method="post" enctype="multipart/form-data">
            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->kanker->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
              
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> ID </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="id" placeholder="ID PENYAKIT" value="<?php echo $row['id'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Kode Penyakit </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly name="kode" placeholder="KODE PENYAKIT" value="<?php echo $row['kode'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Nama Tumor </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namapenyakit" placeholder="NAMA KANKER" value="<?php echo $row['namapenyakit'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label  class="col-sm-3 col-form-label"> Definisi Tumor </label>
                  <div class="form-group col-sm-8">	
                    <textarea name="definisi" value="" class="ckeditor" cols="20" rows="4"> <?php echo $row['definisi'] ?> </textarea>
                  </div>
              </div>
                        
              <div class="form-group row">
                <label  class="col-sm-3 col-form-label"> Penanganan </label>
                  <div class="form-group col-sm-8">	
                    <textarea name="penanganan" value="" class="ckeditor" id="ckedtor"> <?php echo $row['penanganan'] ?> </textarea>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Pemeriksaan </label>
                  <div class="form-group col-sm-8">	
                    <textarea class="ckeditor" id="ckedtor" class="form-control" name="obat" placeholder="Pemeriksaan" value=""> <?php echo $row['obat'] ?> </textarea>
                  </div>
              </div>

              <div class="form-group row">
                <label  class="col-sm-3 col-form-label"> Rujukan Rumah Sakit </label>
                  <div class="form-group col-sm-8">	
                    <input type="text" class="form-control" name="rumahsakit" placeholder="Rumah Sakit" value="<?php echo $row['rumahsakit'] ?>" required>
                  </div>
              </div>

              <div class="form-group row">
                <label  class="col-sm-3 col-form-label"> Spesialis </label>
                  <div class="form-group col-sm-8">	
                    <textarea name="spesialis" value="" class="form-control" cols="20" rows="4"> <?php echo $row['spesialis'] ?> </textarea>
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


