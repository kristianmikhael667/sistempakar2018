<section class="page-section about-heading">
    <div class="container">
    <?php
            $id = $this->input->get('id');
            $cek_query = $this->berita->cek_akun($id);

            foreach ($cek_query->result_array() as $row)
            {
              ?>
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" style="width: 100%; height: 380px" src="<?php echo base_url().'assets/images/'.$row['foto'];?>" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"><?php echo $row['judulberita'];?></span>
                <span class="section-heading-lower"><?php echo $row['subjudul'];?></span>
              </h2>
              <p><?php echo $row['isiberita'];?></p>
            </div>
          </div>
        </div>
      </div>
            <?php } ?>
    </div>
  </section>