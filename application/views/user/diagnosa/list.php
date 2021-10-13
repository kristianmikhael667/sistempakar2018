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
                

            <!-- <center><h2 class="form-text text-danger"><i class="fa fa-stethoscope" aria-hidden="true"></i> DIAGNOSA PENYAKIT</h2></center> -->
                <h3 class="tulisan text-center mt-0 text-danger">
                    <span class="letters letters-1"><i class="fa fa-stethoscope" aria-hidden="true"></i> DIAGNOSA </span>
                    <span class="letters letters-2"><i class="fa fa-stethoscope" aria-hidden="true"></i> PENYAKIT </span>
                    <span class="letters letters-3"><i class="fa fa-stethoscope" aria-hidden="true"></i> TUMOR </span>
                    <span class="letters letters-4"><i class="fa fa-stethoscope" aria-hidden="true"></i> OTAK </span>
                </h3>
                <br><br><br><br><br><br>
                <marquee class="text-danger" style="font-size:20px;" scrollamount="14"><p><i><b>Silahkan pasien untuk mencentang berdasarkan pilihan gejala dibawah ini sesuai dengan gejala yang dirasakan pasien</i></p></b></marquee> 
                
                <hr>
            <table class="table" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Gejala</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $cek_query = $this->kelompok->get_list_data(); 
                $no = 1;
                foreach($cek_query->result() as $value){?>
                <tr>
                <?php
                    $listGejala = $this->modelgejala->get_by_kelompok($value->id);
                    foreach($listGejala->result() as $value2){?>
                <td><?php echo $no++ ?>). <input type="checkbox" name="gejala[]" value="<?php echo $value2->ids?>" > <?php echo $value2->namagejala?> </td>
                </tr>
                <?php } ?>
                <?php } ?>
            
            </tbody>
            </table>
                
                <br>
                <div class="row d-flex justify-content-center">
			<div class="col-md-12 ml-4" style="float: left; padding: 0;">
                
				<button type="submit" name="submit" class="btn main-btn btn-inline" style="background-color: #FF0000;  border-radius: 20px;"><i class="fas fa-search"></i> <b>Cek Hasil</b></button>
            </div>
            </form>
		</div>
	</div>
            </div>
        </div>
    </div>
</div>