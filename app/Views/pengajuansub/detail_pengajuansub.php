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
            <h3 class="card-title">SUB <?= $detail_pengajuansub['ajuanSUBnamaWP'] ?></h3>

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
                    <input class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBnamaWP'] ?>" value="<?= $detail_pengajuansub['ajuanSUBnamaWP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NPWP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNPWP'] ?>" class="form-control" id="ajuanSUBNPWP" placeholder="<?= $detail_pengajuansub['ajuanSUBNPWP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NOP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNOP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuansub['ajuanSUBNOP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode KPP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBkodeKPP'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBkodeKPP'] ?>" disabled>
                  </div>
                </div>
            
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Pajak</label>
                    
                    <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBjenisPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBjenisPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Masa Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBmasaPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBmasaPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tahun Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtahunPajak'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBtahunPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Mata Uang</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBmataUang'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBmataUang'] ?>" disabled>
                  </div>
                </div>
               <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No. Sengketa</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNomorSengketa'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBNomorSengketa'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama PK</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBNamaPK'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBNomorSengketa'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-form-label"><u>Surat Banding</u></label>
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No Surat Banding</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBnoSuratBanding'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tgl Surat Banding</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglSuratBanding'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tgl Terima PP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBtglDiterimaPP'] ?>" class="form-control" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-12 col-form-label"><u>Surat Permintaan Surat Uraian Banding</u></label>
                  <div class="col-sm-8">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No Surat Permintaan</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBnoSuratPermintaan'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBnoSuratPermintaan'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tgl Surat <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBtglSuratPermintaan'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">IKU 1 <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBalert1'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">IKU 2 <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBalert2'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">SUB/STG</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanSUBjenisPermintaan'] ?>" class="form-control" placeholder="<?= $detail_pengajuansub['ajuanSUBjenisPermintaan'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Diterima Kanwil </label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBtglDiterima'])) ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Alert</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['status_open']?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Jangka Selesai (m)</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['jangka_waktu_selesai'] ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal UB</label>
                  <div class="col-sm-7">
                    <?php 
                    if($detail_pengajuansub['ajuanSUBtglUB']){
                      $tgl_ub = date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBtglUB']));
                    }else{ $tgl_ub = "";}
                    ?>
                    <input type="text" value="<?= $tgl_ub ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Status Akhir</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['ajuanStatusAkhir'] ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">No. Keputusan</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['KEPnoKeputusan'] ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Amar Keputusan</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuansub['KEPjenis'] ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Nilai Ketetapan</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= number_format($detail_pengajuansub['KEPAmarKeputusan'],2) ?>" class="form-control" id="ajuanNPWP"  disabled>
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
              // $session = session();
              // if($session->get('PENUserLevel')=="Level 2" OR $session->get('PENUserLevel')=="Level 3"){
              //     echo "disabled";
              // }elseif($detail_pengajuansub['ajuanStatusAkhir'] != ""){
              //     echo "disabled";
              // }
              
                
              if($detail_pengajuansub['ajuanStatusAkhir'] != ""){
                  echo "disabled";
              }
            ?>
            >
              <i class="fas fa-cog"></i> Manage
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a data-target="#mObjekBanding" data-toggle="modal" id="myObjekBanding" href="#myObjekBanding" class="dropdown-item" ajuanIDSub='<?= $detail_pengajuansub['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Objek Banding</a>

              <a data-target="#mKetetapanPajakSub" data-toggle="modal" id="myKetetapanPajakSub" href="#myKetetapanPajakSub" class="dropdown-item" ajuanIDSub='<?= $detail_pengajuansub['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Ketetapan Pajak</a>

              <a data-target="#mResponKantorWilayah" data-toggle="modal" class="dropdown-item" id="myResponKantorWilayah" href="#myResponKantorWilayah" ajuanIDSub='<?= $detail_pengajuansub['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Respon Kanwil</a>

              <a data-target="#mKetetapanUB" data-toggle="modal" class="dropdown-item" id="myKetetapanUB" href="#myKetetapanUB" ajuanIDSub='<?= $detail_pengajuansub['ajuanSUBID']?>'> <i class="fas fa-chevron-circle-right"></i> Ketetapan UB</a>

            </div>

              <!-- </div> -->
        </div>
        <!-- /.card -->
    </div>
    <!-- Manage Ketetapan Pajak-->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Objek Banding </h3>

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
                              <td><?= $detail_pengajuansub['ajuanSUBket'] ?></td>
                              <td><?= $detail_pengajuansub['ajuanSUBnoUB'] ?></td>
                              <td>
                                <?php 
                                if(isset($detail_pengajuansub['ajuanSUBtglUB']))
                                { 
                                  echo date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBtglUB']));
                                }

                                ?>
                                
                              </td>
                              <td>
                                <?php 
                                  if(isset($detail_pengajuansub['ajuanSUBtglKirimUB']))
                                  { 
                                    echo date('d/m/Y',strtotime($detail_pengajuansub['ajuanSUBtglKirimUB']));
                                  }
                                ?>
                                  
                              </td>
                              <td><?= $detail_pengajuansub['ajuanSUBNamaPK'] ?></td>
                              <td><?= $detail_pengajuansub['ajuanSUBjangkaWaktuSelesaiHari'] ?></td>
                              <td><?= $detail_pengajuansub['ajuanSUBstatusArsip'] ?></td>
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
            <h5 class="modal-title" id="exampleModalLabel">Objek Banding</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuansub/saveObjekBanding" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanIDSub" id="VajuanIDSub">
                
                <!-- Surat Banding didapat dari Ketetapan Pajak -->
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nomor Surat Banding</label>
                    <div class="col-md-7">
                      <select class="form-control" name="no_suratbanding" id="no_suratbanding" required>
                          <option value="">No Selected</option>
                          <?php foreach($list_suratbanding as $row) {?>
                          <option value="<?=$row['KPid'] ?>"> <?= $row['KPNoKetetapan'] ?></option>
                          <?php }?>
                      </select>
                       <input type="hidden" class="form-control" name="vKPNoKetetapan" id="id_KPNoKetetapan" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat Banding</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                            <input type="text" class="form-control" name="tgl_banding" id="id_tglbanding" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nilai Keputusan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nilai_keputusan" id="id_nilaikeputusan" readonly>
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
            <!-- Data link dari keputusan -->
            <!-- 
            TETAPAJjenis = KEPjenis
            TETAPAJnomorKeputusan = KEPnoKeputusan
            TETAPAJtglKeputusan = KEPtglKeputusan
            TETAPAJamarKeputusan = KEPAmarKeputusan
             -->
            <h5 class="modal-title" id="exampleModalLabel">Manage Ketetapan Pajak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuansub/saveKetetapanPajakSub" method="post">
          <div class="modal-body">
                <input type="hidden" name="ajuanIDSub" id="TapPajakajuanIDSub">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Ketetapan</label>
                    <div class="col-md-7">
                      <select class="form-control" name="jenis_ketetapan" id="id_jenisketetapan" required>
                          <option value="">No Selected</option>
                          <?php foreach($list_KPjenis as $row) {?>
                          <option value="<?=$row['KPJKid'] ?>"> <?= $row['JKnama'] ?></option>
                          <?php }?>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Nomor Keputusan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nomor_keputusan" id="id_TAPnomorkeputusan" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Keputusan</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="tgl_keputusan" id="id_TAPtglkeputusan" readonly>
                      
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Amar Keputusan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="nilai_keputusan" id="id_TAPnilaikeputusan" readonly>
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
            <h5 class="modal-title" id="exampleModalLabel">Manage Respon Kanwil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuansub/saveResponKanwil" method="post">
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
                    <input type="text" class="form-control" name="nomor_surat" placeholder="Nomor Surat" required>
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
          <form action="<?php echo base_url()?>/pengajuansub/saveKetetapanUB" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
              <input type="hidden" name="ajuanIDSub" id="UBajuanIDSub">
              <input type="hidden" name="tgl_terima" value="<?= $detail_pengajuansub['ajuanSUBtglSuratPermintaan']?>">
              <input type="hidden" name="alert1" value="<?= $detail_pengajuansub['ajuanSUBalert1'] ?>">
              <input type="hidden" name="alert2" value="<?= $detail_pengajuansub['ajuanSUBalert2'] ?>">


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
                        <select class="form-control" name="arsip" id="id_arsip" required>
                            <option value="">No Selected</option>
                            <?php foreach($list_arsip as $row) {?>
                            <option value="<?=$row['SUBArsipName'] ?>"> <?= $row['SUBArsipName'] ?></option>
                            <?php }?>
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
    // Manage Dropdown Surat Banding
    $('#no_suratbanding').change(function()
    { 
        var id=$(this).val();
        //console.log(id);
        $.ajax({
            url : "<?php echo site_url('pengajuansub/getsbfrketetapan');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
            //console.log(val(data[0].KEPAmarKeputusan));
              $('#id_KPNoKetetapan').val(data[0].KPNoKetetapan);
              $('#id_tglbanding').val(data[0].KPTgl);
              $('#id_nilaikeputusan').val(data[0]. KPNilai);        
            }
        });
        return false;
    });
    // Manage Ketetapan Pajak value from Keputusan
    $('#id_jenisketetapan').change(function()
    { 
        var id=$(this).val();
        //console.log(id);
        $.ajax({
            url : "<?php echo site_url('pengajuansub/getTAPKP');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
            //console.log(val(data[0].KEPAmarKeputusan));
             // $('#id_TAPAmarKeputusan').val(data[0].KPNoKetetapan);
              $('#id_TAPnomorkeputusan').val(data[0].KPNoKetetapan);
              $('#id_TAPtglkeputusan').val(data[0].KPTgl);
              $('#id_TAPnilaikeputusan').val(data[0]. KPNilai);        
            }
        });
        return false;
    });
} );

// Ajax ketetapan pajak


</script>
 <?= $this->endSection() ?>