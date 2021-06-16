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
            <h3 class="card-title">Detail STG <?= $detail_stg['ajuanSUBnamaWP'] ?></h3>

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
                  <label class="col-sm-4 col-form-label">Nama WP</label>
                  <div class="col-sm-8">
                    <input class="form-control" placeholder="<?= $detail_stg['ajuanSUBnamaWP'] ?>" value="<?= $detail_stg['ajuanSUBnamaWP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NPWP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBNPWP'] ?>" class="form-control" id="ajuanSUBNPWP" placeholder="<?= $detail_stg['ajuanSUBNPWP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NOP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBNOP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_stg['ajuanSUBNOP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode KPP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBkodeKPP'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBkodeKPP'] ?>" disabled>
                  </div>
                </div>
            
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Pajak</label>
                    
                    <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBjenisPajak'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBjenisPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Masa Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBmasaPajak'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBmasaPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tahun Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBtahunPajak'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBtahunPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Mata Uang</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBmataUang'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBmataUang'] ?>" disabled>
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No. Sengketa</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBNomorSengketa'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBNomorSengketa'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama PK</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBNamaPK'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBNomorSengketa'] ?>" disabled>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No Surat Gugat</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBnoSuratBanding'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tgl Surat Gugat</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBtglSuratBanding'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tgl Terima PP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_stg['ajuanSUBtglDiterimaPP'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- form-group -->
                
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Surat Permintaan</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_stg['ajuanSUBnoSuratPermintaan'] ?>" class="form-control" placeholder="<?= $detail_stg['ajuanSUBnoSuratPermintaan'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tgl Surat <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_stg['ajuanSUBtglSuratPermintaan'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">IKU 1 <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_stg['ajuanSUBalert1'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">IKU 2 <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_stg['ajuanSUBalert2'])) ?>" class="form-control" disabled>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Diterima Kanwil </label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_stg['ajuanSUBtglDiterima'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Alert</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_stg['status_open']?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Jangka Selesai (m)</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_stg['jangka_waktu_selesai'] ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal UB</label>
                  <div class="col-sm-7">
                    <?php 
                    if($detail_stg['ajuanSUBtglUB']){
                      $tgl_ub = date('d/m/Y',strtotime($detail_stg['ajuanSUBtglUB']));
                    }else{ $tgl_ub = "";}
                    ?>
                    <input type="text" value="<?= $tgl_ub ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Status Akhir</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_stg['ajuanStatusAkhir'] ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- <div class="dropdown"> -->
            <?php ?>
            <button class="btn btn-primary btn-success dropdown-toggle" type="button" id="dropdownMenuButton"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            <?php
              //if close
              $session = session();
              if($session->get('PENUserLevel')=="Level 2" OR $session->get('PENUserLevel')=="Level 3"){
                  echo "disabled";
              }elseif($detail_stg['ajuanStatusAkhir'] != ""){
                  echo "disabled";
              }
                
              // if($detail_stg['ajuanStatusAkhir'] != ""){
              //     echo "disabled";
              // }
            ?>
            >
              <i class="fas fa-cog"></i> Manage
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a data-target="#mObjekBanding" data-toggle="modal" id="myObjekBanding" href="#myObjekBanding" class="dropdown-item" ajuanIDSub='<?= $detail_stg['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Objek Gugat</a>

              <a data-target="#mKetetapanPajakSub" data-toggle="modal" id="myKetetapanPajakSub" href="#myKetetapanPajakSub" class="dropdown-item" ajuanIDSub='<?= $detail_stg['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Ketetapan Pajak</a>

              <a data-target="#mResponKantorWilayah" data-toggle="modal" class="dropdown-item" id="myResponKantorWilayah" href="#myResponKantorWilayah" ajuanIDSub='<?= $detail_stg['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Respon Kantor Wilayah</a>

              <a data-target="#mKetetapanUB" data-toggle="modal" class="dropdown-item" id="myKetetapanUB" href="#myKetetapanUB" ajuanIDSub='<?= $detail_stg['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Ketetapan UB</a>

            </div>

              <!-- </div> -->
        </div>
        <!-- /.card -->
    </div>
    <!-- Manage Ketetapan Pajak-->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Objek Gugat</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTableObjekBanding">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nomor</th>
                          <th>Tanggal <i>(d/m/Y)</i></th>
                          <th>Nilai Keputusan</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 1;
                   foreach($dataobjekbanding as $row) {
                  ?>
                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row['OBJGUGATnoSurat']?></td>
                          <td><?= date('d/m/Y',strtotime($row['OBJGUGATtglSurat']))?></td>
                          <td><?= number_format($row['OBJGUGATnilaiPutusan'],2) ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
            <!-- ./table ketetapan pajak -->
          </div>
        </div>
      <!-- </div> -->
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- Ketetapan Pajak -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ketetapan Pajak (SKP/STP/SPPT)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table ketetapan pajak -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTableKetetapanPajakSub">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Jenis Ketetapan</th>
                          <th>Nomor Ketetapan</th>
                          <th>Tanggal Ketetapan <i>(d/m/Y)</i></th>
                          <th>Nilai Ketetapan</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($dataketetapanpajaksub as $row) {
                      ?>
                          <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $row['JKnama'] ?></td>
                              <td><?= $row['TETAPAJnomorKeputusan']?></td>
                              <td><?= date('d/m/Y',strtotime($row['TETAPAJtglKeputusan']))?></td>
                              <td><?= number_format($row['TETAPAJamarKeputusan'],2) ?></td>
                          </tr>
                        <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Manage Permohonan WP -->

    <!-- Manage Pengantar KPP -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Respon Kantor Wilayah</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table Pengantar KPP -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTableResponKantorWilayah">
                  <thead>
                      <tr>
                          <th>Nomor</th>
                          <th>Jenis Tujuan</th>
                          <th>Nomor Pengantar</th>
                          <th>Tanggal Pengantar <i>(d/m/Y)</i></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($dataresponkanwil as $row) {
                      ?>
                          <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $row['RESPTUnama']?></td>
                              <td><?= $row['RESPnoSurat'] ?></td>
                              <td><?= date('d/m/Y',strtotime($row['RESPtglSurat']))?></td>
                          </tr>
                        <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Manage UB -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">UB</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table Pengantar KPP -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>Keterangan</th>
                          <th>Nomor UB</th>
                          <th>Tanggal UB <i>(d/m/Y)</i></th>
                          <th>Tanggal Kirim UB <i>(d/m/Y)</i></th>
                          <th>Nama-PK</th>
                          <th>Jangka Waktu Selesai</th>
                          <th>Arsip</th>
                      </tr>
                  </thead>
                  <tbody>
                    
                          <tr>
                              <td><?= $detail_stg['ajuanSUBket'] ?></td>
                              <td><?= $detail_stg['ajuanSUBnoUB'] ?></td>
                              <td>
                                <?php 
                                if(isset($detail_stg['ajuanSUBtglUB']))
                                { 
                                  echo date('d/m/Y',strtotime($detail_stg['ajuanSUBtglUB']));
                                }

                                ?>
                                
                              </td>
                              <td>
                                <?php 
                                  if(isset($detail_stg['ajuanSUBtglKirimUB']))
                                  { 
                                    echo date('d/m/Y',strtotime($detail_stg['ajuanSUBtglKirimUB']));
                                  }
                                ?>
                                  
                              </td>
                              <td><?= $detail_stg['ajuanSUBNamaPK'] ?></td>
                              <td><?= $detail_stg['ajuanSUBjangkaWaktuSelesaiHari'] ?></td>
                              <td><?= $detail_stg['ajuanSUBstatusArsip'] ?></td>
                          </tr>
                     
                  </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Pengantar KPP -->
    <!-- Modal Objek DiGugat-->
    <div class="modal fade" id="mObjekBanding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Objek Gugat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/stg/saveObjekGugat" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanIDSub" id="VajuanIDSub">
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nomor Surat Gugat</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nomor_gugat" placeholder="Nomor Surat Gugat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat Gugat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1" id="tgl_banding" name="tgl_gugat" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nilai Keputusan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nilai_keputusan" placeholder="Nilai Keputusan" required>
                    </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Objek Banding-->
    <!-- Modal KetetapanPajakSub -->
    <div class="modal fade" id="mKetetapanPajakSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Ketetapan Pajak SKP/STP/SPPT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/stg/saveKetetapanPajakSub" method="post">
          <div class="modal-body">
                <input type="hidden" name="ajuanIDSub" id="TapPajakajuanIDSub">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Ketetapan</label>
                    <div class="col-md-7">
                      <select class="form-control" name="jenis_ketetapan" id="jenis_ketetapan" required>
                          <option value="">No Selected</option>
                          <?php foreach($list_jenisketetapan as $row) {?>
                          <option value="<?=$row['JKid'] ?>"> <?= $row['JKnama'] ?></option>
                          <?php }?>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nomor Ketetapan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nomor_ketetapan" placeholder="Nomor Ketetapan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Ketetapan</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate2" id="tgl_ketetapan" name="tgl_ketetapan" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nilai Ketetapan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nilai_ketetapan" placeholder="Nilai Ketetapan" required>
                    </div>
                </div>
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal KetetapanPajakSub-->
    <!-- Modal ResponKantorWilayah -->
    <div class="modal fade" id="mResponKantorWilayah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Respon Kantor Wilayah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/stg/saveResponKanwil" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanIDSub" id="KanwilajuanIDSub">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Tujuan</label>
                    <div class="col-md-7">
                        <select class="form-control" name="jenis_tujuanRespon" id="id_jenistujuanKanwil" required>
                                <option value="">No Selected</option>
                                <?php foreach($list_tujuanRespon as $row) {?>
                                <option value="<?=$row['RESPTUJid'] ?>"> <?= $row['RESPTUnama'] ?></option>
                                <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nomor Surat</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nomor_surat" placeholder="Nomor Pengantar" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate3" id="tgl_pengantar" name="tgl_surat" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Kirim</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate6" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate6" id="tgl_pengantar" name="tgl_kirim" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate6" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal ResponKantorWilayah-->
    <!-- Modal Ketetapan UB -->
    <div class="modal fade" id="mKetetapanUB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage UB</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/stg/saveKetetapanUB" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
              <input type="hidden" name="ajuanIDSub" id="UBajuanIDSub">
              <input type="hidden" name="tgl_terima" value="<?= $detail_stg['ajuanSUBtglSuratPermintaan']?>">
              <input type="hidden" name="alert1" value="<?= $detail_stg['ajuanSUBalert1'] ?>">
              <input type="hidden" name="alert2" value="<?= $detail_stg['ajuanSUBalert2'] ?>">


                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Keterangan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. UB</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_ub" placeholder="No. UB" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal UB</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate4" id="tgl_ub" name="tgl_ub" placeholder="MM/DD/YYYY" value="<?= date('m/d/Y', time()); ?>"required/>
                            <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Kirim UB</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate5" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate5" id="tgl_kirimub" name="tgl_kirimub" placeholder="MM/DD/YYYY" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Arsip</label>
                    <div class="col-md-7">
                    <select class="form-control" name="arsip" id="arsip" required>
                            <option value="">No Seletected</option>
                            <option value="Clear">Clear</option>
                            <option value="On Progress">On Progress</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin melakukan closing ?')"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Ketetapan UB-->
    <!--./modal Ketetapan UB-->
</section>
</div>
<script>
    $(document).ready(function() {
    $('#reservationdate1').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate2').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate3').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate4').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate5').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate6').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#myTableObjekBanding').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableKetetapanPajakSub').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableResponKantorWilayah').DataTable( {
        "scrollX": false,
        "searching": true,
    } ); 
    $('#myTableUB').DataTable( {
        "scrollX": false,
        "searching": true,
    } ); 
    $(document).on('click', '#myObjekBanding', function() {
        var vajuanIDSub = $(this).attr("ajuanIDSub");
        $('#VajuanIDSub').val(vajuanIDSub);
    });
    $(document).on('click', '#myKetetapanPajakSub', function() {
        var vajuanIDSub = $(this).attr("ajuanIDSub");
        $('#TapPajakajuanIDSub').val(vajuanIDSub);
    });
    $(document).on('click', '#myResponKantorWilayah', function() {
        var vajuanIDSub = $(this).attr("ajuanIDSub");
        $('#KanwilajuanIDSub').val(vajuanIDSub);
    });
    $(document).on('click', '#myKetetapanUB', function() {
        var vajuanIDSub = $(this).attr("ajuanIDSub");
        $('#UBajuanIDSub').val(vajuanIDSub);
    });
} );

// Ajax ketetapan pajak


</script>
 <?= $this->endSection() ?>