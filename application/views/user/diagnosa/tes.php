<div id="content-wrapper">
    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Diagnosa
            </div>
            <div class="card-body">
            <form action="<?php echo base_url(). 'user/diagnosa/diagnosa' ?>" method="post">
                <center><h2 class="form-text text-danger"><i class="fa fa-stethoscope" aria-hidden="true"></i> DIAGNOSA PENYAKIT</h2></center>
                <marquee class="text-danger" style="font-size:20px;" scrollamount="14"><p><i><b>Silahkan pasien untuk mencentang berdasarkan pilihan gejala dibawah ini sesuai dengan gejala yang dirasakan pasien</i></p></b></marquee>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-md-offset-2" >
                        <?php 
                        $cek_query = $this->kelompok->get_list_data();
                        $no = 1;
                        foreach($cek_query->result() as $value){?>
                            <b style="color: purple;"><p><?php echo $no++; ?>. Kelompok Gejala <span style="font-weight: bold;" ><?php echo $value->namajenis?></span></p></b>
                                <?php
                                $listGejala = $this->modelgejala->get_by_kelompok($value->id);
                                foreach($listGejala->result() as $value2){?>
                                <input type="checkbox" name="gejala[]" value="<?php echo $value2->ids?>" > <?php echo $value2->namagejala?> <br>
                            <br>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
			<div class="col-md-12 ml-4" style="float: left; padding: 0;">
                
				<button type="submit" name="submit" class="btn main-btn" style="background-color: #FF0000;  border-radius: 0px;"><i class="fas fa-search"></i> <b>Cek Hasil</b></button>
            </div>
            </form>
		</div>
	</div>
	<?php echo form_close()?>
            </div>
        </div>
    </div>
</div>