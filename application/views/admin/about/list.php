<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Pesan dari Pasien</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->pesan->list(); 
                  $no = 1;
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama'] ; ?></td>
                    <td><?php echo $row['waktu'] ; ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/about/lihat?id=') . $row['id']; ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-eye"></i> Lihat Pesan </a><br>
                      <a href="<?php echo base_url('admin/about/delete?id=') .$row['id']; ?>" class="btn btn-sm btn-danger mb-2"><i class="fa fa-trash"></i> Hapus </a>
                    </td>
                  </tr>

                  <?php } ?>
              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

 
    </div>
  </div>

</div>