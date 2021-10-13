<section class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:60px 120px;" id="printTable" >
<!-- <div class="content" style="padding:10px 40px;"> -->
    <h2>Hasil Analisis</h2>
    <div class="box box-warning">
        <div class="box-header with-border">
            <h6 class="box-title">Gejala yang dipilih</h6>
        </div><!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="tbl-list" class="table table-bordered">
                <tr>
                    <th width="50px" style="background: #67CDFF; color: white">No</th>
                    <th style="background: #67CDFF; color: white">Gejala</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listGejala->result() as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kode." - ".$value->namagejala?></td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->
    <div class="box box-success">
        <div class="box-header with-border">
            <h6 class="box-title">Hasil Diagnosa</h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tbl-list" class="table table-bordered">
                <tr>
                    <th width="50px" style="background: #67CDFF; color: white">No</th>
                    <th style="background: #67CDFF; color: white">Penyakit</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listPenyakit->result() as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kode." - ".$value->namapenyakit?></td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->

    <div class="box box-success">
        <div class="box-header with-border">
            <h6 class="box-title">Kesimpulan</h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <?php 
            foreach($listPenyakit->result() as $value){ ?>
                <p>
                    Berdasarkan gejalanya, Pasien di prediksi mengidap penyakit <b><?php echo $value->namapenyakit;?><br/>
                    <?php echo $value->spesialis;?>. <p style="font-style: bold; color: red; font-size: 13px;">*Hasil diagnosa ini masih membutuhkan pemeriksaan lebih lanjut yaitu dengan penanganan : </p>
                    <p style="font-style: bold; color: blue; font-size: 13px;"><?php echo $value->penanganan;?><br>
                </p>
            <?php  } ?>
 
        </div><!--box body-->
        <div class="box-footer clearfix">
            <a class="btn btn-sm btn-flat pull-right" style="background: #67CDFF; color: white;" href="<?php echo site_url()?>/welcome/diagnosa">Deteksi Ulang</a>
            <button class="btn btn-sm btn-flat pull-right" style="background: #67CDFF; color: white; margin-right:10px;" onclick>Cetak</button> 
           
        </div>
    </div><!--box-->
</div>
</section>
 
<script type="text/javascript">
    function printData()
    {
        var
        divToPrint=document.getElementById('printTable');
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    })
</script>