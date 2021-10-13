
<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Hasil Diagnosa</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered mb-4" id="dataTable" width="100%" cellspacing="0">
                <center><h3 class="mb-4" style="color : #FF0000; ">Hasil Diagnosa Pasien</h3></center>
                <hr>
                <thead>
                <h5 class="text-danger">Gejala yang dipilih pasien</h5>
                  <tr class="text-center">
                    <th>No</th>
                    <th width="200px">Kode Gejala</th>
                    <th>Gejala</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; foreach($listGejala->result() as $value){?>
                        <tr class="text-center">
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kode?></td>
                            <td><?php echo $value->namagejala?></td>
                        </tr>
                    <?php }?>
                
                </tbody>
                
              </table>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <h5 class="text-danger">Hasil Diagnosa</h5>
                  <tr class="text-center">
                    <th>No</th>
                    <th width="200px">Kode Penyakit</th>
                    <th>Penyakit</th>
                    <th>Stadium</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; 
                  foreach($listPenyakit->result() as $value){ 
                      foreach($listStadium->result() as $value2){ ?>
                        <tr class="text-center">
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kode ?></td>
                            <td><?php echo $value->namapenyakit?></td>
                            <td><?php echo $value2->namastadium?></td>
                        </tr>
                    <?php }?>
                    <?php }?>
                </tbody>
              </table>
              
              <div class="box box-success">
        <div class="box-header with-border">
            <h5 class="box-title text-danger">Kesimpulan</h5>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php 
            foreach($listPenyakit->result() as $value){ 
              foreach($listStadium->result() as $value2){
              ?>
                <p>
                    * Berdasarkan Hasil Diagnosa, Pasien di prediksi mengidap penyakit <b class="text-danger"><?php echo $value->namapenyakit;?> <?php echo $value2->namastadium;?></b><br>
                    * Definisi dari Tumor <?php echo $value->namapenyakit;?> adalah <b class="text-danger"><?php echo $value->definisi;?></b>
                    * Rekomendasi Rujukan Rumah Sakit yang diajukan oleh sistem pakar <b class="text-danger"> <?php echo $value->rumahsakit; ?> </b> <br>
                    * Pemeriksaan Lebih Lanjut Dapat Melakukan <b class="text-danger"> <?php echo $value->obat; ?> </b> <br>
                    * Spesialis yang diajukan <b class="text-danger"> <?php echo $value->spesialis;?> </b> <br> <br>
                    <b class="text-warning">*Hasil diagnosa ini masih membutuhkan pemeriksaan lebih lanjut yaitu dengan penanganan : </b>
                    <p style="font-style: bold; color: blue; font-size: 14px; text-align: justify;"><?php echo $value->penanganan;?></p><br>
                </p>
            <?php  } ?>
            <?php  } ?>
 
        </div>
        <div class="box-body">
        <b class="text-success">*Pencegahan dapat dilakukan dengan cara: </b>
            <?php 
            foreach($listPencegahan->result() as $value){ ?>
                <p>
                    <p style="font-style: bold; color: blue; font-size: 14px; text-align: justify;"><?php echo $value->namapencegahan;?></p>
                </p>
            <?php  } ?>
 
        </div>
        
    </div><!--box-->
            </div>
          </div>
          <div class="card-footer small text-muted">
            <a class="btn btn-sm btn-flat pull-right" style="background: red; color: white;" href="<?php echo site_url()?>user/diagnosa">Deteksi Ulang</a>
            <button onclick="window.print()" class="btn btn-sm btn-flat pull-right" style="background: red; color: white; margin-right:10px;" onclick>Cetak Hasil Diagnosa</button> 
        </div>
        </div>
    </div>

    

  <!-- Modal ADD -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Gejala</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url()?>admin/tambahgejala/add"  method="post" enctype="multipart/form-data">
                    <div class="container"> 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> ID Gejala </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="idgejala" placeholder="ID GEJALA" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Jenis Gejala </label>
                            <div class="col-sm-8">
                                <select name="kelompok_gejala_id" class="form-control " style="font-size: 12px;" required="required">
                                    <option>-Pilih-</option>
                                    <?php 
                                    $cek_query = $this->gejala->getjenis();
                                    foreach ($cek_query->result_array() as $row)
                                    { ?>
                                    <option value="<?php echo $row['idjenis'] ?>"><?php echo $row['namajenis']; ?></option>
                                    <?php } ?> 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Gejala </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="namagejala" placeholder="NAMA GEJALA" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10" style="float: right;">	
                                <button type="submit" class="btn btn-lg btn-primary" name="tambah">TAMBAH</button>
                                <button type="reset" class="btn btn-lg btn-danger" name="batal">BATAL</button>
                            </div>	
                        </div>
                    </div>
                </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
  </div>

</div>
