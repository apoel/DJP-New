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
             SUB 
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
                    foreach($pengajuansub as $data) { 
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
                                <a href="<?php echo base_url('pengajuansub/detail_pengajuansub/'.$data->ajuanSUBID);?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></a>
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
                <h5 class="modal-title" id="exampleModalScrollableTitle">Pengajuan Surat Uraian Banding</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form action="<?php echo base_url()?>/pengajuansub/savePengajuansub" method="post">
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6"> <!--Column 1-->
                       
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="no_suratsub" placeholder="No.Surat Permintaan SUB" required></div>
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
                       
                        <!-- <input type="text" name="type" value="SUB"> -->
                        <?php
                        foreach($AlertSub as $row){
                        ?>
                            <input type="hidden" name="vAlert1" value="<?= $row['SUBSTGalert1']?>">
                            <input type="hidden" name="vAlert2" value="<?= $row['SUBSTGalert2'] ?>">
                        <?php
                        }
                        ?>
                        

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Diterima Kanwil</label>
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
                            <label class="col-sm-3 col-form-label">No Surat Banding</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="no_suratbanding" placeholder="No. Surat Banding" required></div>
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
                            <label class="col-sm-3 col-form-label">No Keputusan</label>
                            <div class="col-md-8">
                                <select class="form-control" name="no_suratkeputusan" id="no_suratkeputusan" required>
                                    <option value="">No Selected</option>
                                    <?php foreach($list_suratkeputusan as $row) {?>
                                    <option value="<?=$row['KEPid'] ?>"> <?= $row['KEPnoKeputusan'] ?></option>
                                    <?php }?>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Keputusan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="amarkeputusan" id="id_jeniskeputusan" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Amar Keputusan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nilaikeputusan" id="id_amarkeputusan" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama WP</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama_wp" id="id_namawp" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NPWP</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="npwp" id="id_npwp" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NOP</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="nop" id="id_nop" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode KPP</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="kode_kpp" id="id_kodekpp" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Pajak</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="jenispajak" id="id_jenispajak" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Masa Pajak</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="masa_pajak" id="id_masapajak" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tahun Pajak</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="tahun_pajak" id="id_tahunpajak" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mata Uang</label>
                            <div class="col-md-8"><input type="text" class="form-control" name="mata_uang" id="id_matauang" readonly></div>
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
    // $(document).on('click', '#sub-stg', function() {
    //         var vAlert1 = $(this).find('option:selected').attr("l_substg");
    //         $('#vAlert1').val(vAlert1);   //id dari input type hidden
    // });
    // $(document).on('click', '#sub-stg', function() {
    //         var vAlert2 = $(this).find('option:selected').attr("l_substg2");
    //         $('#vAlert2').val(vAlert2);   //id dari input type hidden
    // });
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
    // Manage Dropdown Surat Keputusan
    $('#no_suratkeputusan').change(function()
    { 
        var id=$(this).val();
        //console.log(id);
        $.ajax({
            url : "<?php echo site_url('pengajuansub/getwpfromkeputusan');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                //console.log(data);
                // for(i=0; i< data.length; i++){
                //     $('#id_amarkeputusan').val(data[i].AmarKeputusan);
                //     $('#id_nilaikeputusan').val(data[i].KEPAmarKeputusan);
                //     $('#id_namawp').val(data[i].ajuanNamaWP)
                // }
            //console.log(val(data[0].KEPAmarKeputusan));
              $('#id_jeniskeputusan').val(data[0].ajuanJenisPemohon);
              $('#id_amarkeputusan').val(data[0]. KEPAmarKeputusan);
              $('#id_namawp').val(data[0].ajuanNamaWP);
              $('#id_npwp').val(data[0].ajuanNPWP);

              $('#id_nop').val(data[0].ajuanNOP);
              $('#id_kodekpp').val(data[0].ajuanKodeKPP);
              $('#id_jenispajak').val(data[0].ajuanJenisPajak);
              $('#id_masapajak').val(data[0].ajuanMasaPajak);
              $('#id_tahunpajak').val(data[0].ajuanTahunPajak);
              $('#id_matauang ').val(data[0].ajuanMataUang);
              
            }
        });
        return false;
    });
    

    } );

    function goBack() {
        window.history.back();
    }
</script>
 <?= $this->endSection() ?>