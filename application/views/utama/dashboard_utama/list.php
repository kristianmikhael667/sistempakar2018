<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo base_url() ?>assets/img/dokter.jpg" alt="">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">


          <span class="section-heading-upper">Tips Hidup Sehat</span>
          <span class="section-heading-lower" style="font-size: 18px;">Kanker Bisa Diatasi</span>
        </h2>
        <p class="mb-3" style="text-align: justify;">Pola hidup sehat dengan mengikuti olahraga sehat selama 30 menit kurang lebih, menjaga ideal tubuh agar tidak obesitas yang membuat metabolisme tubuh menyerang, dan yang harus dihindari yaitu berhenti merokok dan konsumsi alkohol</p>
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="#">Kunjungi Berita Selengkapnya</a>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="page-section cta">
  <div class="container">
    <center><span class="site-heading-lower text-dark" style="font-size: 35px;"><b><i class="fas fa-syringe"></i> Data COVID-19 di Indonesia</b></span></center> <br><br>
    <?php
    foreach ($datalist as $data) : ?>
      <div class="row">
        <div class="col-md-4">
          <div class="bg-warning box text-white" style="border-radius: 25px;">
            <div class="row">
              <div class="col-md-6 ml-4 mb-4 mt-4">
                <h5><i class="fas fa-plus"></i> Positif</h5>
                <h2> <?php echo $data['positif'] ?> </h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-danger box text-white" style="border-radius: 25px;">
            <div class="row">
              <div class="col-md-6 ml-4 mb-4 mt-4">
                <h5><i class="fas fa-skull-crossbones"></i> Meninggal</h5>
                <h2> <?php echo $data['meninggal'] ?> </h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-success box text-white" style="border-radius: 25px;">
            <div class="row">
              <div class="col-md-6 ml-4 mb-4 mt-4">
                <h5><i class="fas fa-first-aid"></i> Sembuh</h5>
                <h2> <?php echo $data['sembuh'] ?> </h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
        </div>

      </div>

    <?php endforeach ?>

</section>

<section class="page-section cta">
  <div id="content-wrapper">
    <div class="container-fluid">
      <div class="card-body">
        <center><span class="site-heading-lower text-primary" style="font-size: 35px;"><b><i class="far fa-newspaper"></i> BERITA SEPUTAR DUNIA KANKER</b></span></center> <br>
        <table class="table" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cek_query = $this->berita->list();
            $no = 1;
            foreach ($cek_query->result_array() as $row) {
              //SELECT COUNT(nama_kolom) FROM nama_table
            ?>
              <tr>
                <td><img style="width: 100px; height: 90px" src="<?php echo base_url() . 'assets/images/' . $row['foto']; ?>">
                <td><a href="<?php echo base_url('welcome/lihat?id=') . $row['id']; ?>"><b style="font-size: 16px; color: #00FFFF"><u><?php echo $row['judulberita']; ?></b></u></a><br><i class="fa fa-calendar" aria-hidden="true"></i>
                  <?php echo date("d/F/Y", strtotime($row['tanggal'])) ?> ~
                  <?php echo date("H:i:s", strtotime($row['waktu'])) ?> <br>
                  <i><b><?php echo $row['subjudul']; ?></i></b><br>
                  <p style="text-align: justify;"><?php echo $row['sekilas']; ?></p> <br>
                </td>
              </tr>

            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
</section>


<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper"><i class="fa fa-comments" aria-hidden="true"></i>
              FROM DOCTER</span>
            <span class="section-heading-lower">FOR YOU</span>
          </h2>
          <p class="mb-0">Dihimbau untuk berhenti merokok karena merokok dapat merusak organ tubuh khususnya pada bagian paru-paru, mari kami para ikatan dokter mengajak anda untuk beraktivitas fisik selama 30 menit setiap hari dan jangan lupa untuk mengimbangin kalori serta istirahat yang cukup.</p>
        </div>
      </div>
    </div>
  </div>
</section>