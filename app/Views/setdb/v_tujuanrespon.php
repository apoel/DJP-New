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
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalAddTR"><i class="fas fa-plus-circle"></i>
               Tujuan Respon
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTablePengajuan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($getResponKanwil as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->RESPTUnama ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditTujuanRespon" id="id_TR" vid="<?= $data->RESPTUJid ?>"> <i class="fas fa-pencil-alt"></i></a>&nbsp;

                                <a href="<?php echo base_url('SetDB/deleteTR/'.$data->RESPTUJid); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $data->RESPTUnama ?>')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal Edit departemen-->
    <div class="modal fade bd-example-modal-sm" id="ModalEditTujuanRespon" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tujuan Respon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/updateTR" method="post">
                <!-- Add -->
                 <input type="hidden" name="idTR" id="idTR">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nama</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="tujuan_respon" id="vname"></div>
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
    <div class="modal fade" id="ModalAddTR" tabindex="-1" role="dialog" aria-labelledby="Modal Amar Keputusan" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tujuan Respon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/addTujuanRespon" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tujuan Respon</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="tujuan_respon"></div>
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
    $(document).on('click', '#id_TR', function() {
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('SetDB/EditTR');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                for(i=0; i<data.length; i++){
                    $('#idTR').val(data[i].RESPTUJid);
                    $('#vname').val(data[i].RESPTUnama);
                }
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