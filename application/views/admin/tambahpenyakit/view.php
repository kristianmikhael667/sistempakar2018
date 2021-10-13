<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Data Penyakit Tumor Otak</div>
            <div class="card-body">
                            
            <?php
            $id = $this->input->get('id');
            $cek_query = $this->kanker->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
            <div class="container"> 
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-login-image">
                <img class="form-control mb-3" style="width: 368px; height: 380px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>">
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"> <b> Kode Penyakit </b> </label>
                        <div class="form-group col-sm-6">
                            <input type="text" readonly class="form-control form-control-user" value="<?php echo $row['kode'] ?>" id="exampleInputEmail" name="id_user" aria-describedby="emailHelp">
                        </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"> <b> Nama Penyakit </b> </label>
                        <div class="form-group col-sm-6">
                            <input type="text" readonly class="form-control form-control-user" value="<?php echo $row['namapenyakit'] ?>" id="exampleInputEmail" name="id_user" aria-describedby="emailHelp">
                        </div>
                </div>

              </div>
              <div class="col-lg-7">

                    <div class="form-group row">
                            <label  class="col-sm-4 col-form-label"> <b> Definisi Penyakit </b> </label>
                                <div class="form-group col-sm-8">
                                    <textarea name="definisi" value="" readonly class="ckeditor" id="ckedtor"> <?php echo $row['definisi'] ?>  </textarea>
                                </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Penanganan</label>
                        <div class="form-group col-sm-8">
                            <textarea name="penanganan" value="" readonly class="ckeditor" id="ckedtor"> <?php echo $row['penanganan'] ?>  </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Pemeriksaan</label>
                        <div class="form-group col-sm-8">
                            <textarea name="obat" value="" readonly class="ckeditor" id="ckedtor"> <?php echo $row['obat'] ?>  </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Rekomendasi Rumah Sakit </label>
                        <div class="form-group col-sm-8">
                        <textarea name="penanganan" value="" readonly class="form-control" cols="10"> <?php echo $row['rumahsakit'] ?>  </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label"> Spesialis </label>
                        <div class="form-group col-sm-8">
                            <textarea name="spesialis" value="" readonly class="form-control" cols="20" rows="2"> <?php echo $row['spesialis'] ?>  </textarea>
                        </div>
                    </div>
                  
            <?php } ?>
                  
                  
                </div>
                
              </div>
              
            </div>
            
            </div>
            
        </div>
        <div class="text-center mb-3">
        <a class="small" href="<?php echo base_url() ?>admin/tambahpenyakit/index"><b><i> Kembali ke Data Penyakit </b></i></a>
        </div>
        
    </div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href=" <?php echo base_url("#page-top")?>">
<i class="fas fa-angle-up"></i>
</a>


