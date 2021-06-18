<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card"> <!-- Start Box -->
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

      <!-- Main Content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes Pengajuan-->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-archive"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url()."/pengajuan"?>" class="small-box-footer">Pengajuan  <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuan->total_pengajuan; ?>
                    <!-- <small>%</small> -->
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-store-slash"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_closing')?>" class="small-box-footer">Closing <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanClosing->closing; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exclamation"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_alert')?>" class="small-box-footer"> Alert <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                  <?= $getPengajuanAlert->Alert; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="far fa-calendar-times"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_late')?>" class="small-box-footer">Terlambat <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                  <?= $getPengajuanLate->Late; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row -->
        </div>

   <!--      <div class="card-header">
        Pengajuan SUB
        </div> -->
        <div class="container-fluid">
          <!-- Info boxes Pengajuan Sub STG-->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box"> 
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-archway"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url()."/pengajuansub"?>" class="small-box-footer">SUB <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanSUB->total_pengajuan; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-eye-slash"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_closingsub')?>" class="small-box-footer">Closing <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                     <?= $getPengajuanSUBClosing->closing; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bell"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_alertsub')?>" class="small-box-footer"> Alert <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanSubAlert->Alert; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-bell-slash"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_latesub')?>" class="small-box-footer">Terlambat  <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanLateSub->Late; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row Pengajuan SubStg-->

        </div> <!-- End SUB-->
        <!-- STG -->
        <div class="container-fluid">
          <!-- Info boxes Pengajuan STG-->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box"> 
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-align-justify"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url()."/stg"?>" class="small-box-footer">STG <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanSTG->total_pengajuan; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-crop"></i></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_closingstg')?>" class="small-box-footer">Closing <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                     <?= $getPengajuanSTGClosing->closing; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-exclamation-triangle"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_alertstg')?>" class="small-box-footer"> Alert <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanSTGAlert->Alert; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-backspace"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"><a href="<?php echo base_url('dashboard/detail_latestg')?>" class="small-box-footer">Terlambat  <i class="fas fa-arrow-circle-right"></i></a></span>
                  <span class="info-box-number">
                    <?= $getPengajuanLateSub->Late; ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            
          </div>
          <!-- /.row Pengajuan SubStg-->

        </div> <!-- End SUB-->
        <!-- end stg -->
      </section> <!--End mail content-->

    </div> <!-- /.box -->
</section>
<?= $this->endSection() ?>
