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
        <div class="container-fluid">
        <!-- Data table --><br>
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NIP</label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama WP</label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input type="text" value="" class="form-control" id="ajuanNPWP" placeholder="" disabled>
                  </div>
                </div>
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                
                <!-- /.form-group -->
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Departemen</label>
                  <div class="col-sm-8">
                    <input type="text" value="" class="form-control" id="ajuanNPWP" placeholder="" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Group Level</label>
                  <div class="col-sm-8">
                    <input type="text" value="" class="form-control" id="ajuanNPWP" placeholder="" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Status Aktiv</label>
                  <div class="col-sm-8">
                    <input type="text" value="" class="form-control" id="ajuanNPWP" placeholder="" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-secondary" onclick="history.back()"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        <!-- /.card primary-->
        </div>
      </div> <!--./container-fluid -->
    </div> <!--end card-->
 
   
    
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
    
    } );

</script>
 <?= $this->endSection() ?>