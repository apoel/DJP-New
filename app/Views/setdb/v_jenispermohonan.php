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
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalAddJP" disabled>
            <i class="fas fa-plus-circle"></i>
              Jenis Permohonan
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTableJenisPermohonan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Jenis Permohonan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($listpermohonan as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->JenisPemohon ?></td>
  
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid="<?= $data->idJenisPemohon ?>"> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                <a href="<?php echo base_url('SetDB/deleteJP/'.$data->idJenisPemohon); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $data->JenisPemohon ?>')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal Edit departemen-->
    <div class="modal fade bd-example-modal-sm" id="ModalEditJP" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Jenis Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/updateJP" method="post">
                <!-- Add -->
                <input type="hidden" name="idJP" id="idJP">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Permohonan</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="jp" id="vname"></div>
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
    <div class="modal fade" id="ModalAddJP" tabindex="-1" role="dialog" aria-labelledby="Modal Permohonan" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Jenis Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/addJP" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Permohonan</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="jp" placeholder="Jenis Permohonan" required></div>
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
    $('#myTableJenisPermohonan').DataTable( {
        "scrollX": false
    } );
    
    } );
    $(document).on('click', '#id_jp', function() {
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('SetDB/EditJP');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                for(i=0; i<data.length; i++){
                    $('#idJP').val(data[i].idJenisPemohon  );
                    $('#vname').val(data[i].JenisPemohon);
                }
            }
        });
        return false;
    });

    function goBack() {
        window.history.back();
    }

</script>
 <?= $this->endSection() ?>