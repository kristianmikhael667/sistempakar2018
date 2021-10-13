<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php echo base_url() ?>assets/img/dokter.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            
 
            <span class="section-heading-upper">bbbbbbbbbbbbbbbbbbbbbbb</span>
            <span class="section-heading-lower" style="font-size: 18px;">bbbbbbbbbbbbbbbbbbbbb</span>
          </h2>
          <p class="mb-3" style="text-align: justify;">bbbbbbbbbbbbbbbb</p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Kunjungi Berita Selengkapnya</a>
          </div>
            
        </div>
      </div>
    </div>
  </section>

<section class="page-section cta">
<div class="container">
    <h1>Data <strong>Mahasiswa</strong></h1>
 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <!--Fetch data dari database-->
            <?php foreach ($data->result() as $row) :?>
                <tr>
                    <td><?php echo $row->judulberita; ?></td>
                    <td><?php echo $row->subjudul; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
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