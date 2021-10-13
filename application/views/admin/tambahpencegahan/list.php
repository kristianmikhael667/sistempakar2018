<div id="content-wrapper">

      <div class="container-fluid">

      
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pencegahan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#add" name=""><i class="fas fa-plus fa-sm"></i> Tambah Data Pencegahan </button>
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>ID Pencegahan</th>
                    <th>Pencegahan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek_query=$this->pencegahan->list(); 
                  $no = 1;
                  foreach ($cek_query->result_array() as $row)
                  {       
                    //SELECT COUNT(nama_kolom) FROM nama_table
                ?>
                  <tr class="text-center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode'] ; ?></td>
                    <td><?php echo $row['namapencegahan'] ; ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/tambahpencegahan/edit?id=') . $row['id']; ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-edit"></i> Edit </a><br>
                      <a href="<?php echo base_url('admin/tambahpencegahan/delete?id=') .$row['id']; ?>" class="btn btn-sm btn-danger mb-2"><i class="fa fa-trash"></i> Hapus </a>
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

  <!-- Modal ADD -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pencegahan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url()?>admin/tambahpencegahan/add"  method="post" enctype="multipart/form-data">
                    <div class="container"> 
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Kode Pencegahan </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode" placeholder="Kode PENCEGAHAN" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Pencegahan </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="namapencegahan" placeholder="PENCEGAHAN" required>
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