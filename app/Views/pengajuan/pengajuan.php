<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="<?= $icon; ?>"></i>&nbsp;&nbsp;<?= ucwords($title); ?></h3>
            <div class="card-tools">
                <a href="<?php echo base_url($request->uri->getSegment(1));?>" type="button" class="btn btn-tool"><i class="fas fa-sync"></i></a>
            </div>
        </div>
     
    <div class="container">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
             
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
             
        <?php } ?>
 
        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>
             
        <?php } ?>
    </div>
    <div class="container">
            <?php
            $session = session();
            if($session->get('PENUserLevel')=="Level1-Admin"){
            ?>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalPengajuan"><i class="fas fa-plus-circle"></i>
              Permohonan KBP
            </button>
            <?php
            }
            ?>
            
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTablePengajuan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama WP</th>
                        <th>NPWP</th>
                        <th>NOP</th>
                        <th>Jenis Permohonan</th>
                        <th>Jenis Pajak</th>
                        <th>Alert</th>
                        <th>Status Akhir</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($pengajuan as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->ajuanNamaWP ?></td>
                        <td><?= $data->ajuanNPWP ?></td>
                        <td><?= $data->ajuanNOP ?></td>
                        <td><?= $data->ajuanJenisPemohon ?></td>
                        <td><?= $data->ajuanJenisPajak ?></td>
                        <td><?= $data->status_open ?></td>
                        <td><?= $data->ajuanStatusAkhir ?></td>

                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('pengajuan/detail_pengajuan/'.$data->ajuanId);?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal add pengajuan -->
    <!-- Button trigger modal -->
 
    <!-- Modal Add Pengajuan KBP-->   
     <div class="modal fade" id="ModalPengajuan" tabindex="-1" role="dialog" aria-labelledby="Modal Pengajuan" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Permohonan KBP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/pengajuan/savePengajuan" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama WP</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="nama_wp" placeholder="Nama WP" required></div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NPWP</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="npwp" placeholder="NPWP" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NOP</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="nop" placeholder="NOP"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kode KPP</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="kode_kpp" placeholder="Kode KPP" required></div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-3 col-form-label">Jenis Permohonan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="id_jenispemohon" id="jenis_permohonan" required>
                            <option value="">No Selected</option>
                            <?php foreach($jenis_permohonan as $row) {?>
                            <option value="<?=$row->idJenisPemohon ?>" l_jenispemohon="<?= $row->JenisPemohon ?>"> <?= $row->JenisPemohon ?></option>
                            <?php }?>
                        </select>  
                    </div>
                </div>
                <input type="hidden" name="jenis_pemohon" value="" id="jenis_pemohon">
                <input type="hidden" name="jenis_pajak" value="" id="v_jenis_pajak">
                <input type="hidden" name="alert3" value="" id="valert3">
                <input type="hidden" name="alert2" value="" id="valert2">
                <input type="hidden" name="alert1" value="" id="valert1">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Pajak</label>
                    <div class="col-md-8">
                       <select class="form-control" name="id_jenispajak" id="jenis_pajak" required>
                            <option value="">No Selected</option>
                            
                        </select> 
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Unit Memproses</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="ajuanPIC" placeholder="Ex: Kanwil" required></div>
                </div> -->
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Masa Pajak</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="masa_pajak" placeholder="Masa Pajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tahun Pajak</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="tahun_pajak" placeholder="Ex: 2020" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mata Uang</label>
                    <div class="col-md-8">
                        <select class="form-control" name="mata_uang" id="mata_uang" required>
                            <option value="">No Selected</option>
                            <option value="IDR">IDR</option>
                            <option value="SGD">SGD</option>
                            <option value="USD">USD</option>
                            <option value="RM">RM</option>
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Dasar Pemrosesan</label>
                    <div class="col-md-8">
                    <select class="form-control" name="dasar_pengajuan" id="dasar_pengajuan" required>
                            <option value="KEBERATAN">KEBERATAN</option>
                            <option value="NON-KEBERATAN">NON-KEBERATAN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Terima</label>
                    <div class="col-md-8">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="dateTglTerima" placeholder="MM/DD/YYYY" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                  </div>
            </div>
            </form>
            </div>
        </div>
    <!-- end Modal Pengajuan -->
    </div>
    
    <!-- /.box -->

</section>
<script>
    $(document).ready(function() {
    $('#reservationdate').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#myTablePengajuan').DataTable( {
        "scrollX": false
    } );
    
    $('#jenis_permohonan').change(function()
    { 
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url('pengajuan/jenis_pajak');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                
                var html = '';
                var i;
                html += '<option value="">No Selected</option>';

                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].jnsPajakId+' l_jenispajak="'+data[i].NamajenisPajak+'" l_alert3='+data[i].alert3MitigasiResiko+' l_alert2='+data[i].alert2IKU+' l_alert1='+data[i].alert1JangkaMaksimal+'>'+data[i].NamajenisPajak+'</option>';
                }
                $('#jenis_pajak').html(html);

            }
        });
        return false;
    });

    //JQuery Jenis Permohonan
    $(document).on('click', '#jenis_permohonan', function() {
            var vjenis_pemohon = $(this).find('option:selected').attr("l_jenispemohon");
            $('#jenis_pemohon').val(vjenis_pemohon);   //id dari input type hidden
    });
    //JQuery Jenis Pajak
    $(document).on('click', '#jenis_pajak', function() {
            var vjenis_pajak = $(this).find('option:selected').attr("l_jenispajak");
            // console.log(vjenis_pajak);
            $('#v_jenis_pajak').val(vjenis_pajak);   //id dari input type hidden
    });
    $(document).on('click', '#jenis_pajak', function() {
            var v_alert3 = $(this).find('option:selected').attr("l_alert3");
            // console.log(v_alert3);
            $('#valert3').val(v_alert3);   //id dari input type hidden
    });
    $(document).on('click', '#jenis_pajak', function() {
            var v_alert2 = $(this).find('option:selected').attr("l_alert2");
            // console.log(v_alert2);
            $('#valert2').val(v_alert2);   //id dari input type hidden
    });
    $(document).on('click', '#jenis_pajak', function() {
            var v_alert1 = $(this).find('option:selected').attr("l_alert1");
            // console.log(v_alert1);
            $('#valert1').val(v_alert1);   //id dari input type hidden
    });
    } );

    function goBack() {
        window.history.back();
    }

</script>
 <?= $this->endSection() ?>