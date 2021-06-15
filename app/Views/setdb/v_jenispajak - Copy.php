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
            <button type="button" class="btn btn-secondary float-left ml-2 mt-2" onclick="goBack()">Back</button>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalAddJenisPajak"
            <?php 
            $session = session();
            if($session->get('PENUserLevel')==2 OR $session->get('PENUserLevel')==3){
                echo "disabled";
            }
            ?>
            ><i class="fas fa-plus-circle"></i>
              Jenis Pajak
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTablePengajuan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Jenis Permohonan</th>
                        <th>Jenis Pajak</th>
                        <th>Ketentuan UU</th>
                        <th>IKU</th>
                        <th>Mitigasi Resiko</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($listpajak as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->JenisPemohon ?></td>
                        <td><?= $data->NamajenisPajak ?></td>
                        <td><?= $data->alert1JangkaMaksimal ?></td>
                        <td><?= $data->alert2IKU ?></td>
                        <td><?= $data->alert3MitigasiResiko ?></td>
                        <td><?= $data->keterangan ?></td>
                        <td>
                            <div class="btn-group">

                                 <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJenisPajak" id="id_jenispajak" vid="<?= $data->jnsPajakId ?>"> <i class="fas fa-pencil-alt"></i></a>&nbsp;

                                <a href="<?php echo base_url('SetDB/deleteJenisPajak/'.$data->jnsPajakId); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $data->NamajenisPajak?>')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal Edit departemen-->
    <div class="modal fade bd-example-modal-sm" id="ModalEditJenisPajak" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Jenis Pajak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/updateJenisPajak" method="post">
                <!-- Add -->
                <input type="hidden" name="idJenisPajak" id="idJenisPajak">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Permohonan</label>
                    <div class="col-md-7">
                    
                        <select class="form-control" name="JenisPermohonan" id="id_jenispermohonan">
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Pajak</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="jenis_pajak" id="JenisPajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Ketentuan UU</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="alert1" id="alert1"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">IKU</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="alert2" id="alert2"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Mitigasi Resiko</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="alert3" id="alert3"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Keterangan</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="keterangan" id="keterangan"></div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                  </div>
               </form>
            </div>
        </div>
      </div>
    </div>
    <!-- end modal edit departemen -->
    <!-- Modal add User -->
    <div class="modal fade" id="ModalAddJenisPajak" tabindex="-1" role="dialog" aria-labelledby="Modal Jenis Pajak" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Jenis Pajak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/addJenisPajak" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Pajak</label>
                    <div class="col-md-8">
                        <select class="form-control" name="jenis_permohonan" required>
                            <option value="">No Seletected</option>
                            <?php foreach($jenis_permohonan as $row) {?>
                            <option value="<?=$row->idJenisPemohon ?>"> <?= $row->JenisPemohon ?></option>
                            <?php }?>
                        </select> 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Jenis Permohonan</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="jenis_pajak" placeholder="Jenis Pajak" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Ketentuan UU</label>
                    <div class="col-sm-7">
                        <?php $v3 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert3'])); ?>
                        <input type="text" value="<?= $v3 ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">IKU</label>
                    <div class="col-sm-7">
                        <?php $v2 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert2'])); ?>
                        <input type="text" value="<?= $v2 ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mitigasi Resiko</label>
                    <div class="col-sm-7">
                    <?php $v1 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert1'])); ?>
                    <input type="text" value="<?= $v1 ?>" class="form-control" disabled>
                  </div>
                </div>
               <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required></div>
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
    $(document).on('click', '#id_jenispajak', function() {
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('SetDB/EditJenisPajak');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                var html = '';
                var i;

                html += '<option value="1">Keberatan</option>';
                html += '<option value="2">Non Keberatan</option>';

                for(i=0; i<data.length; i++){
                    
                    html += '<option selected value='+data[i].idJenisPemohon+'>'+data[i].JenisPemohon+'</option>';
                    // $('#id_jenispermohonan').val('<option value='+data[i].idJenisPemohon+'>'+data[i].JenisPemohon+'</option>');
                    
                    $('#idJenisPajak').val(data[i].jnsPajakId);
                    $('#JenisPajak').val(data[i].NamajenisPajak);
                    $('#alert1').val(data[i].alert1JangkaMaksimal);
                    $('#alert2').val(data[i].alert2IKU);
                    $('#alert3').val(data[i].alert3MitigasiResiko);
                    $('#keterangan').val(data[i].keterangan);
                }
                $('#id_jenispermohonan').html(html);
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