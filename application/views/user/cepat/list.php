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
                Data Penyakit
            </div>
            <div class="card-body">
                <form action="<?php echo base_url() . 'user/diagnosa/diagnosa' ?>" method="post">

                    <h3 class="tulisan text-center mt-0 text-danger">
                        <span class="letters letters-1"><i class="fa fa-stethoscope" aria-hidden="true"></i> DIAGNOSA </span>
                        <span class="letters letters-2"><i class="fa fa-stethoscope" aria-hidden="true"></i> PENYAKIT </span>
                        <span class="letters letters-3"><i class="fa fa-stethoscope" aria-hidden="true"></i> TUMOR </span>
                        <span class="letters letters-4"><i class="fa fa-stethoscope" aria-hidden="true"></i> OTAK </span>
                    </h3>
                    <br><br><br><br><br><br>
                    <marquee class="text-danger" style="font-size:20px;" scrollamount="14">
                        <p><i><b>Silahkan pasien untuk mencentang berdasarkan pilihan gejala dibawah ini sesuai dengan gejala yang dirasakan pasien</i></p></b>
                    </marquee>

                    <hr>
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penyakit</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            $cek_query = $this->kanker->list();
                            $no = 1;
                            foreach ($cek_query->result_array() as $value) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><a href="<?php echo base_url() . 'user/cepat/obati' ?>"><?php echo $value['namapenyakit']; ?></a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                    <br>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 ml-4" style="float: left; padding: 0;">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>