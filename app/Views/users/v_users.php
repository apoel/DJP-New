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
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalAddUser"><i class="fas fa-plus-circle"></i>
              Tambah User
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTablePengajuan">
                <thead>
                     <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Departemen</th>
                        <th>Group Level</th>
                        <th>Status Aktif</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($listuser as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->PENNIP ?></td>
                        <td><?= $data->PENNama ?></td>
                        <td><?= $data->PENDept ?></td>
                        <td><?= $data->PENUserLevel ?></td>
                        <td>
                            <div class="btn-group">
                             <?php
                                if($data->PENisAktif == "1"){ 
                                ?> 
                                <p class="btn btn-primary btn-sm float-right"> <i class="fas fa-toggle-on"></i> </p>    
                                <?php
                                }else{ 
                                ?>
                                    <p class="btn btn-secondary btn-sm float-right"> <i class="fas fa-toggle-off"></i> </p>
                                <?php
                                } 
                             ?>
                            </div>    
    
                        </td>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditUser" id="id_User" vid="<?= $data->PENid ?>" title="Edit User"> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                <a href="" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#ModalResetPassword" id="ResetPassword" vid="<?= $data->PENid ?>" title="Reset Password"> <i class="fas fa-key"></i></a>&nbsp;


                                <a href="<?php echo base_url('addUser/deleteUser/'.$data->PENid); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user <?= $data->PENNama?>')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Modal Edit User-->
    <div class="modal fade bd-example-modal-sm" id="ModalEditUser" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url()?>/addUser/updateUser" method="post">
                <!-- Add -->
                <input type="hidden" name="IdUser" id="IdUser">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">NIP</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="nip" placeholder="NIP" id="NIP" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nama</label>
                    <div class="col-md-7"><input type="text" class="form-control" name="nama" placeholder="Nama" id="Nama" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Departemen</label>
                    <div class="col-md-7">
                        <!-- <input type="text" class="form-control" name="Dept" placeholder="Dept" id="Dept" required> -->
                        <select class="form-control" name="departemen" id="Dept" required>
                            <?php foreach($listdepartemen as $row) {?>
                            <option value="<?=$row->nama ?>"> <?= $row->nama ?></option>
                            <?php }?>
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Group Level</label>
                    <div class="col-md-7">
                         <select class="form-control" name="id_grouplevel" id="edit_tingkat_level" required>
                         <?php foreach($tingkat_level as $row) {?>
                            <option value="<?=$row->PENUserLevelId ?>" l_edittingkatlevel="<?= $row->PENUserLevelNama ?>"> <?= $row->PENUserLevelNama ?></option>
                            <?php }?>
                        </select>    
                    </div>
                </div>
                <input type="hidden" name="group_level" value="" id="edit_group_level">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Active</label>
                    <div class="col-md-7">
                        <div class="form-check">
                            <!-- <input type="text" class="form-control" name="nama" placeholder="Nama" id="isAktif" required> -->
                        <input class="status" type="radio" name="isActive" value="1" id="isActive" >
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="status" type="radio" name="isActive" value="0">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
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
    <!-- end modal edit user -->
    <!--Modal Reset Password-->
    <div class="modal fade bd-example-modal-sm" id="ModalResetPassword" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

              <form action="<?php echo base_url()?>/addUser/ResetPassword" method="post">
                <input type="hidden" name="IdUser" id="IdUser">

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Password</label>
                    <div class="col-md-7"><input type="password" class="form-control" name="password1" placeholder="Password1" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Re-type Password</label>
                    <div class="col-md-7"><input type="password" class="form-control" name="password2" placeholder="Password2" required></div>
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
    <!-- end modal password -->
    <!-- Modal add User -->
    <div class="modal fade" id="ModalAddUser" tabindex="-1" role="dialog" aria-labelledby="Modal Pengajuan" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/addUser/saveUser" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="nip" placeholder="NIP" required></div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="nama" placeholder="Nama" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="Password" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Departemen</label>
                    <div class="col-md-8">
                        <select class="form-control" name="departemen" required>
                            <option value="">No Seletected</option>
                            <?php foreach($listdepartemen as $row) {?>
                            <option value="<?=$row->nama ?>"> <?= $row->nama ?></option>
                            <?php }?>
                        </select>  
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Group Level</label>
                    <div class="col-md-8">
                    <select class="form-control" name="id_grouplevel" id="tingkat_level" required>
                            <option value="">No Selected</option>
                            <?php foreach($tingkat_level as $row) {?>
                            <option value="<?=$row->PENUserLevelId ?>" l_tingkatlevel="<?= $row->PENUserLevelNama ?>"> <?= $row->PENUserLevelNama ?></option>
                            <?php }?>
                        </select>    
                    </div>
                </div>
                <input type="hidden" name="group_level" value="" id="group_level">
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
    $(document).on('click', '#id_User', function() {
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('addUser/EditUser');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){ 
            var html = '';
            var i;

                for(i=0; i<data.length; i++){
                    $('#IdUser').val(data[i].PENid);
                    $('#NIP').val(data[i].PENNIP);
                    $('#Nama').val(data[i].PENNama);
                    $('#Dept').val(data[i].PENDept);
                    $('#tingkatlevel').val(data[i].PENUserLevelId);
                    $('#tingkatlevel').val(data[i].PENUserLevel);  //PENUserLevel
                    $('input[type=radio][name="isActive"][value='+data[i].PENisAktif+']').prop('checked', true);

                    
                }
            }
        });
        return false;
    });
    $(document).on('click', '#ResetPassword', function() {
        var id=$(this).attr('vid');
        $.ajax({
            url : "<?php echo site_url('addUser/GetIDUser');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                for(i=0; i<data.length; i++){
                    $('#IdUser').val(data[i].PENid);
                }
            }
        });
        return false;
    });    

    //JQuery Add Dropdown Level Group
    $(document).on('click', '#tingkat_level', function() {
            var vtingkat_level = $(this).find('option:selected').attr("l_tingkatlevel");
            $('#group_level').val(vtingkat_level);  
            // console.log(vtingkat_level);
            //id dari input type hidden
    });
    return false;

    //JQuery Edit Dropdown Level Group
    $(document).on('click', '#edit_tingkat_level', function() {
            var vtingkat_level = $(this).find('option:selected').attr("l_edittingkatlevel");
            $('#edit_group_level').val(vtingkat_level);  
            console.log(vtingkat_level);
            //id dari input type hidden
    });
    return false;
    } );


</script>
 <?= $this->endSection() ?>