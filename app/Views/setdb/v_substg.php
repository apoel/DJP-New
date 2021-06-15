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
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalSubSTG"
            <?php 
            $session = session();
            if($session->get('PENUserLevel')==2 OR $session->get('PENUserLevel')==3){
                echo "disabled";
            }
            ?>
            ><i class="fas fa-plus-circle"></i>
              SUB STG
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTablePengajuan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>SUB STG Nama</th>
                        <th>Alert1 Month</th>
                        <th>Alert2 Month</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($SUbSTG as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->SUBSTGnama ?></td>
                        <td><?= $data->SUBSTGalert1 ?></td>
                        <td><?= $data->SUBSTGalert2 ?></td>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditSUBSTG" id="id_substg" vid="<?= $data->SUBSTGid?>"> <i class="fas fa-pencil-alt"></i></a>&nbsp;

                                <a href="<?php echo base_url('SetDB/delete/'.$data->SUBSTGid); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $data->SUBSTGnama ?>')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal Edit departemen-->
    <div class="modal fade bd-example-modal-sm" id="ModalEditSUBSTG" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit SUB STG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/updateSubSTG" method="post">
                <!-- Add -->
                <input type="hidden" name="id_substg" id="idsubstg">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nama</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="nama" placeholder="Nama" id="vname"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Alert1</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="alert1" placeholder="Alert in Month" id="valert1"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Alert2</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="alert2" placeholder="Alert in Month" id="valert2"></div>
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
    <div class="modal fade" id="ModalSubSTG" tabindex="-1" role="dialog" aria-labelledby="Modal SubSTG" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah SUB STG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/SetDB/addsubstg" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="nama" placeholder="SUB/STG" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alert1</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="alert1" placeholder="Alert in month" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alert2</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="alert2" placeholder="Alert in month" required></div>
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
    $(document).on('click', '#id_substg', function() {
        //$('#jenis_pemohon').val(vjenis_pemohon)
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('SetDB/Editsubstg');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                for(i=0; i<data.length; i++){
                    $('#idsubstg').val(data[i].SUBSTGid );
                    $('#vname').val(data[i].SUBSTGnama);
                    $('#valert1').val(data[i].SUBSTGalert1);
                    $('#valert2').val(data[i].SUBSTGalert2);
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