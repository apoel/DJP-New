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
        <p>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalPengajuan"
            <?php 
            $session = session();
            if($session->get('PENUserLevel')=="Level 2" OR $session->get('PENUserLevel')=="Level 3"){
                echo "disabled";
            }
            ?>
            ><i class="fas fa-plus-circle"></i>
              STG 
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table display" id="myTable">
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
                    foreach($stg as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->ajuanSUBnamaWP ?></td>
                        <td><?= $data->ajuanSUBNPWP ?></td>
                        <td><?= $data->ajuanSUBNOP ?></td>
                        <td><?= $data->ajuanSUBjenisPermintaan ?></td>
                        <td><?= $data->ajuanSUBjenisPajak ?></td>
                        <td><?= $data->status_open ?></td>
                        <td><?= $data->ajuanStatusAkhir ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('stg/detail_stg/'.$data->ajuanSUBID);?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></a>
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
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Surat Gugat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form action="<?php echo base_url()?>/stg/saveStg" method="post">
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6"> <!--Column 1-->
                        <div class="form-group row">
                        <!-- <label class="col-sm-12 col-form-label">Surat Uraian Banding</label> -->
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="no_suratsub" placeholder="No.STG" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="tgl_suratsub" name="tgl_suratsub" value="<?= date('m/d/Y', time()); ?>" required/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- <input type="text" name="type" value="STG"> -->
                        <?php
                        foreach($AlertSTG as $row){
                        ?>
                            <input type="hidden" name="vAlert1" value="<?= $row['SUBSTGalert1']?>">
                            <input type="hidden" name="vAlert2" value="<?= $row['SUBSTGalert2'] ?>">
                        <?php
                        }
                        ?>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tgl Diterima Kanwil</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1" id="tgl_terimakanwil" name="tgl_terimakanwil" value="<?= date('m/d/Y', time()); ?>" required/>
                                    <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Sengketa</label>
                             <div class="col-md-8"><input type="text" class="form-control" name="no_suratsengketa" placeholder="Nomor Sengketa" required></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Surat Gugat</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="no_suratbanding" placeholder="No. Surat Gugat" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tgl Surat Banding</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate2" id="tgl_suratbanding" name="tgl_suratbanding" value="<?= date('m/d/Y', time()); ?>" required/>
                                    <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tgl Diterima PP</label>
                            <div class="col-md-8">
                                <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate3" id="tgl_terimapp" name="tgl_terimapp" value="<?= date('m/d/Y', time()); ?>" required/>
                                    <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form-group kiri -->
                      </div> <!--end div kolum kiri-->
                      <!-- /.col -->
                      <div class="col-md-6"> <!--Kolom kanan-->
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Data WP</label>
                        </div>
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
                            <div class="col-md-8"><input type="text" class="form-control" name="nop" placeholder="NOP" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode KPP</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="kode_kpp" placeholder="Kode KPP" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Pajak</label>
                            <div class="col-md-8">
                               <select class="form-control" name="jenispajak" required>
                                    <option value="">No Selected</option>
                                    <?php foreach($jenispajakstg as $row) {?>
                                    <option value="<?=$row['NamajenisPajak'] ?>"> <?= $row['NamajenisPajak'] ?></option>
                                    <?php }?>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masa Pajak</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="masa_pajak" placeholder="Masa Pajak"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Pajak</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="tahun_pajak" placeholder="Ex: 2005" required></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mata Uang</label>
                            <div class="col-md-8">
                                <select class="form-control" name="mata_uang" id="mata_uang" required>
                                    <option value="">No Seletected</option>
                                    <option value="IDR">IDR</option>
                                    <option value="SGD">SGD</option>
                                    <option value="USD">USD</option>
                                    <option value="RM">RM</option>
                                </select>
                            </div>
                        </div>
                        
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                    </div>
                </div><!--./end modal body-->
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
    $('#reservationdate1').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate2').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate3').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#myTable').DataTable( {
        "scrollX": false
    } );
    //JQuery substg
    $(document).on('click', '#sub-stg', function() {
            var vAlert1 = $(this).find('option:selected').attr("l_substg");
            $('#vAlert1').val(vAlert1);   //id dari input type hidden
    });
    $(document).on('click', '#sub-stg', function() {
            var vAlert2 = $(this).find('option:selected').attr("l_substg2");
            $('#vAlert2').val(vAlert2);   //id dari input type hidden
    });
    //JQuery Jenis Pajak
    $(document).on('click', '#jenis_pajak', function() {
            var vjenis_pajak = $(this).find('option:selected').attr("l_jenispajak");
             console.log(vjenis_pajak);
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