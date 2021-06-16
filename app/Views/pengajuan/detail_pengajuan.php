f<?php $request = \Config\Services::request(); ?>
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
            <h3 class="card-title">Detail Pengajuan <?= $detail_pengajuan['ajuanNamaWP'] ?></h3>

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
                    <input class="form-control" placeholder="<?= $detail_pengajuan['ajuanNamaWP'] ?>" value="<?= $detail_pengajuan['ajuanNamaWP']?>" disabled 
                    > 
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NPWP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanNPWP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanNPWP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NOP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanNOP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanNOP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode KPP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanKodeKPP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanKodeKPP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Permohonan</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanJenisPemohon'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanJenisPemohon'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanJenisPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanJenisPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Masa Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanMasaPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanMasaPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tahun Pajak</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanTahunPajak'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanTahunPajak'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Mata Uang</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanMataUang'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanMataUang'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dasar Pemrosesan</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanDasarPemrosesan'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanDasarPemrosesan'] ?>" disabled>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Penelaah</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanPenelaah'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanKodeKPP'] ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Seksi KBP</label>
                  <div class="col-sm-8">
                    <input type="text" value="<?= $detail_pengajuan['ajuanNamaSeksiKBP'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanKodeKPP'] ?>" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                
                <!-- /.form-group -->
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Unit Yang Memproses</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuan['ajuanPIC'] ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanPIC'] ?>" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Terima <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <?php $vReceived = date("d/m/Y",strtotime($detail_pengajuan['ajuanTglTerima'])); ?>
                    <input type="text" value="<?= $vReceived ?>" class="form-control" id="ajuanNPWP" placeholder="<?= $detail_pengajuan['ajuanTglTerima'] ?>" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Ketentuan UU <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <?php $v3 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert3'])); ?>
                    <input type="text" value="<?= $v3 ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">IKU <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <?php $v2 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert2'])); ?>
                    <input type="text" value="<?= $v2 ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <!-- /.form-group -->
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Mitigasi Resiko <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <?php $v1 = date("d/m/Y",strtotime($detail_pengajuan['ajuanAlert1'])); ?>
                    <input type="text" value="<?= $v1 ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>
                <!-- /.form-group -->
                
                <!-- form-group -->
                
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Alert</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuan['status_open'] ?>" class="form-control" id="ajuanNPWP"  disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Tanggal Keputusan <i>(d/m/Y)</i></label>
                  <div class="col-sm-7">
                    <?php
                      if (isset($detail_pengajuan['KEPtglKeputusan'])){
                         $v3 = date("d/m/Y",strtotime($detail_pengajuan['KEPtglKeputusan']));
                      }else{ 
                        $v3 = "-";
                      }  
                    ?>
                    <input type="text" value="<?= $v3 ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>

                <!-- /.form-group -->
                <!-- form-group -->
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Jangka Waktu Selesai (m)</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuan['jangka_waktu_selesai'] ?>" class="form-control" id="ajuanNPWP" disabled>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Status Akhir</label>
                  <div class="col-sm-7">
                    <input type="text" value="<?= $detail_pengajuan['ajuanStatusAkhir'] ?>" class="form-control" id="ajuanNPWP"  disabled>
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
            
            <!-- <div class="btn-group">
              <a href="#" class="btn btn-primary btn"><i class="far fa-paper-plane"></i> Manage</a>
            </div> -->
              <!-- <div class="dropdown"> -->
                <button class="btn btn-primary btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                <?php 
                
                // $session = session();
                // if($session->get('PENUserLevel')=="Level 2" OR $session->get('PENUserLevel')=="Level 3"){
                //     echo "disabled";
                // }elseif($detail_pengajuan['ajuanStatusAkhir'] != ""){
                //     echo "disabled";
                // }
                //disable if close
                // if($detail_pengajuan['ajuanStatusAkhir'] != ""){
                //     echo "disabled";
                // }


                ?>
                >
                <i class="fas fa-cog"></i> Manage
                </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <?php 
                        $session = session();
                        if($session->get('PENUserLevel')=="Level1-Admin"){ ?>
                          <!-- For Level1-Admin -->
                          <a data-target="#KetetapanPajak" data-toggle="modal" id="myKetetapanPajak" href="#myKetetapanPajak" class="dropdown-item" ajuanID="<?= $detail_pengajuan['ajuanId']?>"> <i class="fas fa-chevron-circle-right"></i> Ketetapan Pajak</a>

                          <a data-target="#mPermohonanWP" data-toggle="modal" class="dropdown-item" id="myPermohonanWP" href="#myPermohonanWP" ajuanID="<?= $detail_pengajuan['ajuanId']?>"> <i class="fas fa-chevron-circle-right"></i> Surat Permohonan WP</a>
  
                          <a data-target="#mPengantarKPP" data-toggle="modal" class="dropdown-item" id="myPengantarKPP" href="#myPengantarKPP" ajuanID="<?= $detail_pengajuan['ajuanId']?>"> <i class="fas fa-chevron-circle-right"></i> Pengantar KPP</a>
  
                          <a data-target="#mSuratTugas" data-toggle="modal" class="dropdown-item" id="mySuratTugas" href="#mySuratTugas" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Surat Tugas</a>
                        <?php } elseif($session->get('PENUserLevel')=="Level1-Peneliti") { ?>

                          <!-- For level1-Peneliti -->
                            <a data-target="#mFormal" data-toggle="modal" class="dropdown-item" id="myFormal" href="#myFormal" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Formal/Matrik</a>

                            <a data-target="#mPermintaanSuratKPP" data-toggle="modal" class="dropdown-item" id="myPermintaanSuratKPP" href="#myPermintaanSuratKPP" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Permintaan Surat KPP</a>

                            <a data-target="#mSuratPanggilan" data-toggle="modal" class="dropdown-item" id="mySuratPanggilan" href="#mySuratPanggilan" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Surat Panggilan</a>

                            <a data-target="#mResponSurat" data-toggle="modal" class="dropdown-item" id="myResponSurat" href="#myResponSurat" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Respon Surat</a>

                            <a data-target="#mSPUH" data-toggle="modal" class="dropdown-item" id="mySPUH" href="#mySPUH" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> SPUH</a>

                            <a data-target="#mRSPUH" data-toggle="modal" class="dropdown-item" id="myRSPUH" href="#myRSPUH" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Respon SPUH</a>
      
                            <a data-target="#mPencabutanPermohonan" data-toggle="modal" class="dropdown-item" id="myPencabutanPermohonan" href="#myPencabutanPermohonan" ajuanID="<?= $detail_pengajuan['ajuanId']?>"> <i class="fas fa-chevron-circle-right"></i> Pencabutan WP</a>
                            
                            <a data-target="#mLaporanPenelitian" data-toggle="modal" class="dropdown-item" id="myLaporanPenelitian" href="#myLaporanPenelitian" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Laporan Penelitian</a>

                            <!-- nilaiAkhirKepId="<?// $row['KPNilai'];?>" -->
                            <a data-target="#mKeputusan" data-toggle="modal" class="dropdown-item" id="myKeputusan" href="#myKeputusan" ajuanID="<?= $detail_pengajuan['ajuanId']?>"><i class="fas fa-chevron-circle-right"></i> Kuputusan Keberatan / Non Keberatan</a>
                        <?php } else {?>
                            <a style="width: 15px;border-radius:10px;padding:5px" disabled>Anda tidak diperbolehkan untuk melakukan update!</a>
                        <?php } ?>
                  </div>

              <!-- </div> -->
        </div>
        <!-- /.card -->
    </div>
    <!-- Manage Ketetapan Pajak-->
        <?php
        $session = session();
        if($session->get('PENUserLevel')=="Level1-Admin" OR $session->get('PENUserLevel')=="Editor"){
        ?> 
        <!-- Manage Ketetapan Pajak-->
          <div class="card card-default">
            <div class="card-header"> 
              <h3 class="card-title">Ketetapan Pajak</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- table ketetapan pajak -->
              <div class="table-responsive">
                <table class="table  table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Ketetapan</th>
                            <th>No Ketetapan</th>
                            <th>Tanggal Ketetapan <i>(d/m/Y)</i></th>
                            <th>Nilai Ketetapan</th>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <th>Action</th>
                            <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $no = 1;
                     foreach($mketetapanpajak as $row) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['JKnama'] ?></td>
                            <td><?= $row['KPNoKetetapan']?></td>
                            <td><?= date('d/m/Y',strtotime($row['KPTgl']))?></td>
                            <td><?= number_format($row['KPNilai'],2) ?></td>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <td>
                                <div class="btn-group">

                                    <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                    <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                                </div>
                            </td>
                            <?php
                            }
                            ?>

                        </tr>
                      <?php } ?>

                    </tbody>
                </table>
              </div>
              <!-- ./table ketetapan pajak -->
            </div>
          </div>
        <!-- end Ketetapan Pajak -->
        <?php
        }
        ?>
        
      <!-- </div> -->
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- Manage Permohonan WP -->
        <?php
        $session = session();
        if($session->get('PENUserLevel')=="Level1-Admin" OR $session->get('PENUserLevel')=="Editor"){
        ?> 
          <!-- Permohonan WP -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Surat Permohonan WP</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table  table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat WP</th>
                            <th>Tanggal Surat WP <i>(d/m/Y)</i></th>
                            <th>No LPAD</th>
                            <th>Tanggal LPAD</th>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <th>Action</th>
                            <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    
                    <tbody>
                      <?php
                      $no = 1;
                      foreach($mpermohonanwp as $row) {
                      ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['PWPnoSurat'] ?></td>
                            <td><?= date('d/m/Y',strtotime($row['PWPtglSurat']))?></td>
                            <td><?= $row['PWPnoLPAD']?></td>
                            <td><?= date('d/m/Y',strtotime($row['PWPtglLPAD'])) ?></td>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <td>
                                <div class="btn-group">

                                    <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                    <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                                </div>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- End Permohonan WP -->
        <?php
        }
        ?>
        
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Manage Permohonan WP -->

    <!-- Manage Pengantar KPP -->
      <?php
      $session = session();
      if($session->get('PENUserLevel')=="Level1-Admin" OR $session->get('PENUserLevel')=="Editor"){
      ?>
        <!-- Pengantar KPP -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Pengantar KPP</h3>

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
                          <th>No</th>
                          <th>No Surat Pengantar</th>
                          <th>Tanggal Surat Pengantar <i>(d/m/Y)</i></th>
                          <th>Tanggal Diterima Kanwil <i>(d/m/Y)</i></th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th>Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($mpengantarkpp as $row) {
                    ?>
                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row['PKPPnoSurat'] ?></td>
                          <td><?= date('d/m/Y',strtotime($row['PKPPtglSurat']))?></td>
                          <td><?= date('d/m/Y',strtotime($row['PKPPtglDiterima']))?></td>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <td>
                              <div class="btn-group">

                                  <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                  <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                              </div>
                          </td>
                          <?php
                          }
                          ?>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>       
        <!--  -->
      <?php
      }
      ?> 
        
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Pengantar KPP -->
    <!-- Surat Tugas -->
      <?php
      $session = session();
      if($session->get('PENUserLevel')=="Level1-Admin" OR $session->get('PENUserLevel')=="Editor"){
      ?>
        <!-- Surat Tugas -->
        <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Surat Tugas</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table Surat Tugas -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTableSuratTugas">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>No Surat Tugas</th>
                          <th>Tanggal Surat Tugas <i>(d/m/Y)</i></th>
                          <th>Assign Peneliti</th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th>Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($msurattugas as $row) {
                    ?>
                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row['STnoSurat'] ?></td>
                          <td><?= date('d/m/Y',strtotime($row['STtglSurat']))?></td>
                          <td><?= $row['PENNama'] ?></td>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <td>
                              <div class="btn-group">

                                  <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                  <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                              </div>
                          </td>
                          <?php
                          }
                          ?>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Surat Tugas -->
      <?php
      }
      ?>
        
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Surat Tugas -->
    <!-- Formal/Matrik -->
      <?php
      $session = session();
      if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
      ?>
      <!-- Formal Matrix -->
        <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Formal/Matrik</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table  table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Formal/Matrik</th>
                          <th>Tanggal Matrik <i>(d/m/Y)</i></th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th>Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($mformal as $row) {
                    ?>
                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row['FMisFormal'] ?></td>
                          <td>
                            <?php 
                            if($row['FMisFormal'] == "YA"){
                              echo date('d/m/Y',strtotime($row['FMtglMatrik']));
                            }
                            ?> 
                          </td>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <td>
                              <div class="btn-group">

                                  <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                  <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                              </div>
                          </td>
                          <?php
                          }
                          ?>
                      </tr>
                    <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- End Formal Metrix -->
      <?php
      }
      ?>

        
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Formal/Matrik -->
    

    <!-- Permintaan Surat KPP -->
      <?php
      $session = session();
      if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
      ?>
      <!-- Permintaan Surat KPP -->
        <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Permintaan Surat KPP</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table Permintaan Surat KPP -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTablePermintaanSuratKPP">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>No Surat Ke KPP</th>
                          <th>Tanggal Surat Ke KPP</th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th>Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($mpermintaansuratkpp as $row) {
                      ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['PSKPPNoSurat'] ?></td>
                            <td><?= $row['PSKPPtglSurat']?></td>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <td>
                                <div class="btn-group">

                                    <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                    <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                                </div>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- End Permintaan Surat KPP -->
      <?php
      }
      ?>

    <!-- ./Permintaan Surat KPP -->

    <!-- Pembuktian ke WP -->
    <?php
    $session = session();
    if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
    ?>
      <!-- Surat Pembuktian ke WP -->
      <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Surat Pembuktian ke WP (Surat Panggilan - Respon Surat)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTablePembuktianWP">
                  <thead>
                      <tr>
                          <th rowspan="2">No</th>
                          <th colspan="3"><center>Surat Panggilan</th>
                          <th colspan="4"><center>Respon Surat</th>
                          <th colspan="3"><center>Status Hadir</th>
                      </tr>
                      <tr>
                          <th>No Surat</th>
                          <th>Tanggal Surat <i>(d/m/Y)</i></th>
                          <th>Tujuan</th>
                


                          <th>Status Respon</th>
                          <th>No Surat Respon</th>
                          <th>Tgl Surat Respon</th>
                          <th>Ket. Surat Respon</th>

                          <th>Status Hadir</th>
                          <th>No Berita Acara</th>
                          <th>Tanggal Berita Acara <i>(d/m/Y)</i></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($mpembuktianwp as $row) {
                      ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['SPWPnoSurat'] ?></td>
                            <td><?= date('d/m/Y',strtotime($row['SPWPtglSurat']))?></td>
                            <td><?= $row['SPWPtujuan']?></td>
                   

                            <td><?= $row['SPWPisRespon']?></td>
                            <td><?= $row['SPWPnoSuratRespon']?></td>
                            <td><?= $row['SPWPtglSuratRespon']?></td>
                            <td><?= $row['SPWPketeranganRespon']?></td>

                            <td><?= $row['SPWPisDatang']?></td>
                            <td><?= $row['SPWPnoBeritaAcara']?></td>
                            <td>
                              <?php 
                              if($row['SPWPtglBeritaAcara'] != "0000-00-00"){
                                echo date('d/m/Y',strtotime($row['SPWPtglBeritaAcara']));
                              }
                              ?> 
                            </td>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- End Surat Pembuktian ke WP -->
    <?php
    }
    ?>
        
          <!-- /.card-body -->
        <!-- /.card -->
    <!-- ./Pembuktian ke WP -->
    <!-- SPUH -->
    <?php
    $session = session();
    if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
    ?>
      <!-- SPUH -->
      <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Surat Pemberitahuan Untuk Hadir (SPUH)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- table spuh -->
            <div class="table-responsive">
              <table class="table  table-bordered table-striped" id="myTableSPUH">
                  <thead>
                      <tr>
                          <th rowspan="2">No</th>
                          <th colspan="5"><center>Surat Pemberitahuan Untuk Hadir (SPUH)</th>

                          <th colspan="4"><center>Respon Surat</th>

                          <th colspan="3"><center>Pembahasan Akhir(BA)</th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th rowspan="2">Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                      <tr>
                          <th>Nomor SPUH</th>
                          <th>Tanggal SPUH <i>(d/m/Y)</i></th>
                          <th>Tanggal Kirim SPUH <i>(d/m/Y)</i></th>
                          <th>Ekspedisi</th>
                          <th>No.Resi</th>

                          <th>Status Respon</th>
                          <th>No Surat Respon</th>
                          <th>Tgl Surat Respon</th>
                          <th>Ket. Surat Respon</th>

                          <th>Status Hadir</th>
                          <th>Nomor BA</th>
                          <th>Tanggal BA</th>
                          
                      </tr>
                  </thead>
                  
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($mspuhba as $row) {
                      ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['SPUHnoSurat'] ?></td>
                            <td><?= date('d/m/Y', strtotime($row['SUPtglSurat']))?></td>
                            <td><?= date('d/m/Y',strtotime($row['SPUHtglKirim'])) ?></td>
                            <td><?= $row['SPUHekpedisi'] ?></td>
                            <td><?= $row['SPUHnoResi'] ?></td>

                            <td><?= $row['SPWPisRespon']?></td>
                            <td><?= $row['SPWPnoSuratRespon']?></td>
                            <td><?= $row['SPWPtglSuratRespon']?></td>
                            <td><?= $row['SPWPketeranganRespon']?></td>

                            <td><?= $row['SPUHisHadir']?></td>
                            <td><?= $row['SPUHnoBAbahasAkhir']?></td>
                            <td>
                              <?php
                              if( $row['SPUHtglBAbahasAkhir'] != "0000-00-00"){
                                echo $row['SPUHtglBAbahasAkhir'];
                              }
                              ?>
                            </td>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <td>
                                <div class="btn-group">

                                    <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                    <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                                </div>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- End SPUH -->
    <?php
    }
    ?>
    <!-- Laporan Penelitian -->
    <?php
    $session = session();
    if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
    ?>
    <!-- Laporan Penelitian -->
      <div class="card card-header">
          <div class="card-header">
            <h3 class="card-title">Laporan Penelitian</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table  table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nomor Laporan </th>
                          <th>Tanggal Laporan </th>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <th>Action</th>
                          <?php
                          }
                          ?>
                      </tr>
                  </thead>
                  
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($mlaporanpenelitian as $row) {
                      ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['LPnoLaporan'] ?></td>
                            <td><?= $row['LPtglLaporan']?></td>
                            <?php
                            if($session->get('PENUserLevel')=="Editor"){
                            ?>
                            <td>
                                <div class="btn-group">

                                    <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                    <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                                </div>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
    <!-- End Laporan Penelitian -->
    <?php
    }
    ?>

    <!-- Pencabutan Permohonan -->
    <?php
    $session = session();
    if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
    ?>
    <!-- Pencabutan Permohonan Oleh WP -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Pencabutan Permohonan Oleh WP</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- table Pencabutan Permohonan -->
          <div class="table-responsive">
            <table class="table  table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pencabutan</th>
                        <th>Tanggal Pencabutan <i>(d/m/Y)</i></th>
                        <?php
                        if($session->get('PENUserLevel')=="Editor"){
                        ?>
                        <th>Action</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                
                <tbody>
                  <?php
                  $no = 1;
                  foreach($mpencabutanpermohonan as $row) {
                  ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['QuitWPnoSurat'] ?></td>
                        <td><?= date('d/m/Y', strtotime($row['QuitWPtglSurat']))?></td>
                        <?php
                        if($session->get('PENUserLevel')=="Editor"){
                        ?>
                        <td>
                            <div class="btn-group">

                                <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                            </div>
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    <!-- End Pencabutan Permohonan Oleh WP -->
    <?php
    }
    ?>
        

    <!-- Keputusan Keberatan -->
    <?php
    $session = session();
    if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
    ?>
    <!-- Keputusan Keberatan / Non Keberatan -->
      <div class="card card-header">
        <div class="card-header">
          <h3 class="card-title">Keputusan Keberatan / Non Keberatan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table  table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Keputusan</th>
                        <th>Tanggal Keputusan</th>
                        <th>Tanggal Kirim SK</th>
                        <th>Jangka Waktu Pengiriman (hari)</th>
                        <th>Jenis Keputusan </th>
                        <th>Amar Keputusan </th>
                        <?php
                        if($session->get('PENUserLevel')=="Editor"){
                        ?>
                        <th>Action</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $no = 1;
                    foreach($mKeputusan as $row) {
                    ?>
                      <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $row['KEPnoKeputusan'] ?></td>
                          <td><?= $row['KEPtglKeputusan']?></td>
                          <td><?= $row['KEPtglKirimSK']?></td>
                          <td><?= $row['KEPjangkaKirim']?></td>
                          <td><?= $row['AmarKeputusan']?></td>
                          <td><?= number_format($row['KEPAmarKeputusan'],2)?></td>
                          <?php
                          if($session->get('PENUserLevel')=="Editor"){
                          ?>
                          <td>
                              <div class="btn-group">

                                  <a href="" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#ModalEditJP" id="id_jp" vid=""> <i class="fas fa-pencil-alt"></i></a>&nbsp;


                                  <a href="<?php echo base_url('SetDB/deleteJP/'); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus')" title="Delete Account"><i class="fas fa-backspace"></i></a>
                              </div>
                          </td>
                          <?php

                          } 
                          ?>
                      </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    <!-- End Keputusan Keberatan / Non Keberatan -->
    <?php
    }
    ?>

    <!-- ./Keputusan Keberatan -->
    <!-- Modal ketetapan pajak-->
    <div class="modal fade" id="KetetapanPajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ketetapan Pajak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveKetetapanPajak" method="post">
          <div class="modal-body">
                <!-- Ketetapan Pajak -->
                <input type="hidden" name="ajuanID" id="VajuanID">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-md-9">
                        <select class="form-control" name="jenis_kp" id="jenis_kp" required>
                            <option value="">No Seletected</option>
                            <?php foreach($jenis_kp as $row) {?>
                            <option value=<?=$row->JKid ?>> <?= $row->JKnama ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <!-- $pengajuan as $key => $data -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="no_kp" placeholder="No Ketetapan Pajak" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-md-9">
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"  name="tgl_kp" placeholder="MM/DD/YYYY" required/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="nilai_kp" placeholder="Nilai Ketetapan Pajak" required></div>
                </div>
                <!-- End Ketetapan Pajak body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal ketetapan pajak-->

    <!-- Modal Permohonan WP-->
    <div class="modal fade" id="mPermohonanWP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Surat Permohonan WP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/savePermohonanWP" method="post">
          <div class="modal-body">
                <!-- Permohonan WP -->
                <input type="hidden" name="ajuanID" id="PWPajuanID">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">No Surat WP</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="no_suratwp" placeholder="No Surat WP" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Surat WP</label>
                    <div class="col-md-8">
                      <div class="input-group date" id="reservationdate19" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate19" id="tgl_suratwp" name="tgl_suratwp" placeholder="MM/DD/YYYY" required/>
                            <div class="input-group-append" data-target="#reservationdate19" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">No LPAD</label>
                    <div class="col-md-8"><input type="text" class="form-control" name="no_lpad" placeholder="No LPAD" required></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal LPAD</label>
                    <div class="col-md-8">
                      <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate2" id="tgl_lpad" name="tgl_lpad" placeholder="MM/DD/YYYY" required/>
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- End Ketetapan Pajak body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal permohonan WP-->
    <!-- Modal PengantarKPP-->
    <div class="modal fade" id="mPengantarKPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Pengantar KPP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/savePengantarKPP" method="post">
          <div class="modal-body">
                
                <input type="hidden" name="ajuanID" id="PKPPajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Surat Pengantar KPP</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratkpp" placeholder="No Surat KPP" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat KPP</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate3" id="tgl_suratkpp" name="tgl_suratkpp" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Terima Kanwil</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate4" id="tgl_terima_kanwil" name="tgl_terima_kanwil" value="<?= date('d/m/Y'); ?>" required/>
                        <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                           <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End Ketetapan Pajak body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Pengantar KPP-->
    <!-- Modal Surat Tugas-->
    <div class="modal fade" id="mSuratTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Surat Tugas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveSuratTugas" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="STajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Surat Tugas</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_surattugas" placeholder="No. Surat Tugas" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat Tugas</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate5" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate5" id="tgl_surattugas" name="tgl_surattugas" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Assign peneliti = PenelaahRef/User-->
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Assign Peneliti</label>
                    <div class="col-md-7">
                        <select class="form-control" name="Lpeneliti" id="Lpeneliti" required>
                            <option value="">No Seletected</option>
                            <?php 
                            foreach($AssignPeneliti as $row) { ?>
                            <option value="<?= $row['PENid'] ?>"> <?= $row['PENNama'] ?></option>
                            <?php } ?>
                        </select>
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
    </div><!--./modal Surat Tugas-->
    <!-- Modal Formal/Matrik-->
    <div class="modal fade" id="mFormal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Formal/Matrik</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveFormalMatrik" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="FajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Formal</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_matrik" value="YA" id="go_to_keputusan_ya">
                        <label class="form-check-label">YA</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="status_matrik" value="TIDAK" id="go_to_keputusan">
                        <label class="form-check-label">TIDAK</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" id="label_tgl_matrik">Tanggal Matrik</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate10" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate10" id="tgl_matrik" name="tgl_matrik" />
                            <div class="input-group-append" data-target="#reservationdate10" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h5 class="modal-title" id="manage_keputusan_title">Manage Keputusan Keberatan / Non Keberatan</h5>
                <hr id="hr_manage_keputusan">

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" id="label_no_keputusan1">No Surat</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_keputusan1" id="no_keputusan1" placeholder="No. Keputusan">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" id="label_tgl_keputusan1">Tanggal Surat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate12_1" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate12_1" name="tgl_keputusan1" value="<?= date('m/d/Y', time()); ?>" id="tgl_keputusan1"/>
                            <div class="input-group-append" data-target="#reservationdate12_1" data-toggle="datetimepicker">
                                <div class="input-group-text" id="div_tgl1"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" id="label_tgl_kirimSK1">Tanggal Kirim Surat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate13_1" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate13_1" name="tgl_kirimSK1" id="tgl_kirimSK1" value="<?= date('m/d/Y', time()); ?>"/>
                            <div class="input-group-append" data-target="#reservationdate13_1" data-toggle="datetimepicker">
                                <div class="input-group-text" id="div_tgl2"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                foreach($mketetapanpajak as $row){
                  $vNilai=$row['KPNilai'];
                }
                if(!isset($vNilai)){$vNilai = 0;}
                ?>

                <input type="hidden" name="NilaiAkhirKeputusan1" value="<?= $vNilai ?>">
                
                

                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>
    </div><!--./modal Formal/Matrik-->
    <!-- Modal Pencabutan Permohonan-->
    <div class="modal fade" id="mPencabutanPermohonan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Pencabutan WP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/savePencabutanPermohonan" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="PPajuanID">
                <input type="hidden" name="alert1" value="<?= $detail_pengajuan['ajuanAlert1'] ?>">
                <input type="hidden" name="alert2" value="<?= $detail_pengajuan['ajuanAlert2'] ?>">
                <input type="hidden" name="alert3" value="<?= $detail_pengajuan['ajuanAlert3'] ?>">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Pencabutan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_pencabutan" placeholder="No. Pencabutan" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Pencabutan</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate6" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate6" id="tgl_pencabutan" name="tgl_pencabutan" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate6" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" id="label_tgl_kirimSK1">Tanggal Kirim Surat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate21" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate21" name="tgl_kirimSK" id="tgl_kirimSK1" value="<?= date('m/d/Y', time()); ?>"/>
                            <div class="input-group-append" data-target="#reservationdate21" data-toggle="datetimepicker">
                                <div class="input-group-text" id="div_tgl2"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                foreach($mketetapanpajak as $row){
                  $vNilai=$row['KPNilai'];
                }
                ?>
                <input type="hidden" name="NilaiAkhirKeputusan1" value="<?= $vNilai ?>">
                
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin mencabut permohonan (closing) ?')"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Pencabutan Permohonan-->
    <!-- Modal Permintaan Surat KPP-->
    <div class="modal fade" id="mPermintaanSuratKPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Permintaan Ke KPP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/savePermintaanSuratKPP" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="PSKPPajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Surat ke KPP</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratkpp" placeholder="No. Surat ke KPP" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal ke KPP</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate7" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate7" id="tgl_kpp" name="tgl_kpp" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate7" data-toggle="datetimepicker">
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

    </div><!--./modal Permintaan Surat ke KPP-->
    <!-- Modal SuratPanggilan-->
    <div class="modal fade" id="mSuratPanggilan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Surat Panggilan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/savePembuktianWP" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="SuratPanggilanajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. Surat</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_surat" placeholder="No. Surat" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate14" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate14" id="tgl_surat" name="tgl_surat" required/>
                            <div class="input-group-append" data-target="#reservationdate14" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tujuan</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="tujuan_surat" value="WP">
                        <label class="form-check-label">WP</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="tujuan_surat" value="KPP">
                        <label class="form-check-label">KPP</label>
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

    </div><!--./modal SuratPanggilan-->

    <!-- Modal Pembuktian ke WP-->
    <div class="modal fade" id="mResponSurat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Respon Surat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/UpdatePembuktianWP" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                
                <input type="hidden" name="ajuanID" id="ResponSuratajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. Surat Panggilan</label>
                    <div class="col-md-7">
                        <select class="form-control" name="no_suratpanggilan" id="no_suratpanggilan" required>
                            <option value="">No Seletected</option>
                            <?php foreach($no_suratpanggilan as $row) {?>
                            <option value="<?= $row['SPWPnoSurat']?>" > <?= $row['SPWPnoSurat'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="tgl_surat" id="id_suratpanggilan" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tujuan</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="tujuan_surat" id="id_tujuansurat" disabled>
                    </div>
                </div>
                <hr>
                <!-- Data respon surat -->
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Respon</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isRespon" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isRespon" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Surat Respon</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratrespon" placeholder="No. Surat Respon" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat Respon</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate16" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate16" id="tgl_suratrespon" name="tgl_suratrespon" required/>
                            <div class="input-group-append" data-target="#reservationdate16" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Keterangan Respon</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="keterangan_respon" placeholder="Keterangan" required>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Hadir</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isDatang" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isDatang" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. Berita Acara</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_beritaacara" placeholder="No BA" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Berita Acara</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate18" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate18" id="tgl_beritaacara" name="tgl_beritaacara" required/>
                            <div class="input-group-append" data-target="#reservationdate18" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Hadir</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isDatang" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isDatang" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. Berita Acara</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_beritaacara" placeholder="No. Berita Acara" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal. Berita Acara</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate15" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate15" id="tgl_beritaacara" name="tgl_beritaacara" required/>
                            <div class="input-group-append" data-target="#reservationdate15" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div>  -->
                <!-- End Surat Tugas body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Pembuktian ke WP-->
    <!-- Modal SPUH-->
    <div class="modal fade" id="mSPUH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Surat Pemberitahuan Untuk Hadir (SPUH)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveSPUH" method="post">
          <div class="modal-body">
                <!-- SPUH -->
                <input type="hidden" name="ajuanID" id="SPUHajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No SPUH</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_spuh" placeholder="No. SPUH" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal SPUH</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate8" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate8" id="tgl_spuh" name="tgl_spuh" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate8" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Kirim</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isKirim" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isKirim" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Kirim SPUH</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate9" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate9" id="tgl_kirim_spuh" name="tgl_kirim_spuh" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate9" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Ekspedisi</label>
                    <div class="col-md-7">
                        <select class="form-control" name="nama_ekspedisi" id="nama_ekspedisi" required>
                            <option value="">No Selected</option>
                            <?php foreach($nama_ekspedisi as $row) { ?>
                            <option value="<?= $row->JEnamaEkspedisi ?>"> <?= $row->JEnamaEkspedisi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. Resi</label>
                    <div class="col-md-7">
                        <input class=form-control name="noResi"></input>
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

    </div><!--./modal SPUH-->
    <!-- Modal Respon SPUH-->
    <div class="modal fade" id="mRSPUH" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Respon SPUH-BA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/UpdateSPUH" method="post">
          <div class="modal-body">
                <!-- SPUH -->
                <input type="hidden" name="ajuanID" id="RSPUHajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No. SPUH</label>
                    <div class="col-md-7">
                    <select class="form-control" name="no_spuh" id="id_nospuh" required>
                            <option value="">No Seletected</option>
                             <?php foreach($list_spuh as $row) {?>
                            <option value="<?= $row['SPUHnoSurat']?>" > <?= $row['SPUHnoSurat'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal SPUH</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="tgl_spuh" id="id_tglspuh" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Kirim SPUH</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" name="tgl_kirim" id="id_tglkirimspuh" disabled>
                    </div>
                </div>
                <hr>
                <!-- Data respon surat -->
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Respon</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isRespon" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isRespon" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Surat Respon</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_suratrespon" placeholder="No. Surat Respon" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Surat Respon</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate20" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate20" id="tgl_suratrespon" name="tgl_suratrespon" required/>
                            <div class="input-group-append" data-target="#reservationdate20" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                      </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Keterangan Respon</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="keterangan_respon" placeholder="Keterangan" required>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Status Hadir</label>
                    <div class="col-md-7">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="isDatang" value="Ya">
                        <label class="form-check-label">Ya</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="isDatang" value="Tidak">
                        <label class="form-check-label">Tidak</label>
                      </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No BA</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_ba" placeholder="No. BA" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal BA</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate21" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate21" id="tgl_spuh" name="tgl_ba" value="<?= date('m/d/Y'); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate21" data-toggle="datetimepicker">
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

    </div><!--./modal Respon SPUH-->
    <!-- Modal Laporan Penelitian-->
    <div class="modal fade" id="mLaporanPenelitian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Laporan Penelitian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveLaporanPenelitian" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="LapPajuanID">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Laporan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_laporan" placeholder="No. Laporan" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Laporan</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate11" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate11" id="tgl_laporan" name="tgl_laporan" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate11" data-toggle="datetimepicker">
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

    </div><!--./modal Laporan Penelitian-->
    <!-- Modal Keputusan-->
    <div class="modal fade" id="mKeputusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Keputusan Keberatan / Non Keberatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url()?>/pengajuan/saveKeputusan" method="post">
          <div class="modal-body">
                <!-- Surat Tugas -->
                <input type="hidden" name="ajuanID" id="KePajuanID">
                <input type="hidden" name="alert1" value="<?= $detail_pengajuan['ajuanAlert1'] ?>">
                <input type="hidden" name="alert2" value="<?= $detail_pengajuan['ajuanAlert2'] ?>">
                <input type="hidden" name="alert3" value="<?= $detail_pengajuan['ajuanAlert3'] ?>">

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">No Keputusan</label>
                    <div class="col-md-7">
                    <input type="text" class="form-control" name="no_keputusan" placeholder="No. Keputusan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Keputusan</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate12" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate12" id="tgl_keputusan" name="tgl_keputusan" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate12" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Tanggal Kirim SK</label>
                    <div class="col-md-7">
                      <div class="input-group date" id="reservationdate13" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate13" id="tgl_kirimSK" name="tgl_kirimSK" value="<?= date('m/d/Y', time()); ?>" required/>
                            <div class="input-group-append" data-target="#reservationdate13" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Jenis Keputusan</label>
                    <div class="col-md-7">
                    <select class="form-control" name="amar_keputusan" id="amar_keputusan" required>
                            <option value="">No Seletected</option>
                            <?php foreach($amar_keputusan as $row) { ?>
                            <option value="<?= $row->IdAmar  ?>"> <?= $row->AmarKeputusan ?></option>
                            <?php } ?>
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Amar Keputusan</label>
                    <div class="col-md-7">
                    
                    <input type="text" class="form-control" name="NilaiAkhirKeputusan">
                      <!-- <input type="hidden" name="NilaiAkhirKeputusan" value="<?// $nilai_ketetapan; ?>"> -->
                    </div>
                </div>
                <!-- End Keputusan -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button> 
                  <button type="submit" class="btn btn-primary"  onclick="return confirm('Apakah anda yakin melakukan closing ?')"><i class="fas fa-save"></i> Save </button>
                </div>
          </div>   
          </form>
        </div>

      </div>

    </div><!--./modal Keputusan-->
</section>
</div>
<script>
    $(document).ready(function() {

    $('#label_new_field').hide();
    $('#label_no_keputusan1').hide();
    $('#label_tgl_keputusan1').hide();
    $('#label_tgl_kirimSK1').hide();
    $('#label_amar_keputusan1').hide();
    $('#label_NilaiAkhirKeputusan1').hide();

    $('#new_field1').hide();
    $('#no_keputusan1').hide();
    $('#tgl_keputusan1').hide();
    $('#tgl_kirimSK1').hide();
    $('#amar_keputusan1').hide();
    $('#NilaiAkhirKeputusan1').hide();

    $('#div_tgl1').hide();
    $('#div_tgl2').hide();
    $('#hr_manage_keputusan').hide();
    $('#manage_keputusan_title').hide();



    $('#go_to_keputusan').change(function() {

      var result = $('input[name="status_matrik"]:checked').val();

      if (result=='TIDAK') {
          $('#label_new_field').show();
          $('#label_no_keputusan1').show();
          $('#label_tgl_keputusan1').show();
          $('#label_tgl_kirimSK1').show();
          $('#label_amar_keputusan1').show();
          $('#label_NilaiAkhirKeputusan1').show();
          $('#new_field1').show();
          $('#no_keputusan1').show();
          $('#tgl_keputusan1').show();
          $('#tgl_kirimSK1').show();
          $('#amar_keputusan1').show();
          $('#NilaiAkhirKeputusan1').show();
          $('#div_tgl1').show();
          $('#div_tgl2').show();
          $('#hr_manage_keputusan').show();
          $('#manage_keputusan_title').show();    
          $('#label_tgl_matrik').hide();    
          $('#tgl_matrik').hide();    
          $('#reservationdate10').hide();    
      }else{
          $('#label_new_field').hide();
          $('#label_no_keputusan1').hide();
          $('#label_tgl_keputusan1').hide();
          $('#label_tgl_kirimSK1').hide();
          $('#label_amar_keputusan1').hide();
          $('#label_NilaiAkhirKeputusan1').hide();
          

          $('#new_field1').hide();
           $('#no_keputusan1').hide();
          $('#tgl_keputusan1').hide();
          $('#tgl_kirimSK1').hide();
          $('#amar_keputusan1').hide();
          $('#NilaiAkhirKeputusan1').hide();
          $('#div_tgl1').hide();
          $('#div_tgl2').hide();
          $('#hr_manage_keputusan').hide();
          $('#manage_keputusan_title').hide();
          $('#label_tgl_matrik').show();    
          $('#tgl_matrik').show();
          $('#reservationdate10').show();    

      }

    });

    $('#go_to_keputusan_ya').change(function() {

      var result = $('input[name="status_matrik"]:checked').val();

      if (result=='TIDAK') {
          $('#label_new_field').show();
          $('#label_no_keputusan1').show();
          $('#label_tgl_keputusan1').show();
          $('#label_tgl_kirimSK1').show();
          $('#label_amar_keputusan1').show();
          $('#label_NilaiAkhirKeputusan1').show();


          $('#new_field1').show();
          $('#no_keputusan1').show();
          $('#tgl_keputusan1').show();
          $('#tgl_kirimSK1').show();
          $('#amar_keputusan1').show();
          $('#NilaiAkhirKeputusan1').show();
          $('#div_tgl1').show();
          $('#div_tgl2').show();
          $('#hr_manage_keputusan').show();
          $('#manage_keputusan_title').show();
          $('#label_tgl_matrik').hide();    
          $('#tgl_matrik').hide();
          $('#reservationdate10').hide();    

      }else{
          $('#label_new_field').hide();
          $('#label_no_keputusan1').hide();
          $('#label_tgl_keputusan1').hide();
          $('#label_tgl_kirimSK1').hide();
          $('#label_amar_keputusan1').hide();
          $('#label_NilaiAkhirKeputusan1').hide();
          

          $('#new_field1').hide();
           $('#no_keputusan1').hide();
          $('#tgl_keputusan1').hide();
          $('#tgl_kirimSK1').hide();
          $('#amar_keputusan1').hide();
          $('#NilaiAkhirKeputusan1').hide();
          $('#div_tgl1').hide();
          $('#div_tgl2').hide();
          $('#hr_manage_keputusan').hide();
          $('#manage_keputusan_title').hide();
          $('#label_tgl_matrik').show();    
          $('#tgl_matrik').show(); 
          $('#reservationdate10').show();    

      }

    });


    $('#reservationdate12_1').datetimepicker({
        format: 'MM/DD/YYYY'
    });$('#reservationdate13_1').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate').datetimepicker({
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
    $('#reservationdate7').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate8').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate9').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate10').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate11').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate12').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate13').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate14').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate15').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate16').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate17').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate18').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate19').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate20').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate21').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#reservationdate21').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('#myTableKetetapanPajak').DataTable( {
        "scrollX": false,
        "searching": false,
    } );
    $('#myTablePermohonanWP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePengantarKPP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableSuratTugas').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableFormal').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePencabutanPermohonan').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePermintaanSuratKPP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTablePembuktianWP').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableSPUH').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableLapPenelitian').DataTable( {
        "scrollX": false,
        "searching": true,
    } );
    $('#myTableKepKeberatan').DataTable( {
        "scrollX": false,
        "searching": true,
    } );

    // Ajax ketetapan pajak 
    $(document).on('click', '#myKetetapanPajak', function() {
        var vajuanID = $(this).attr("ajuanID");
        $('#VajuanID').val(vajuanID);
    });

    //ajak permohonan wp
    $(document).on('click', '#myPermohonanWP', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#PWPajuanID').val(vajuanID);
    });

    //PengantarKPP
    $(document).on('click', '#myPengantarKPP', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#PKPPajuanID').val(vajuanID);
    });

    //ajak surat tugas
    $(document).on('click', '#mySuratTugas', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#STajuanID').val(vajuanID);
    });


    $(document).on('click', '#myFormal', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#FajuanID').val(vajuanID);
    });

    //ajak Pencabutan Permohonan
    $(document).on('click', '#myPencabutanPermohonan', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#PPajuanID').val(vajuanID);
    });

    //ajak SuratPanggilan
    $(document).on('click', '#mySuratPanggilan', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#SuratPanggilanajuanID').val(vajuanID);
    });

    //ajak Pembuktian ke WP
    $(document).on('click', '#myResponSurat', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#ResponSuratajuanID').val(vajuanID);
    });

    //ajak Permintaan Surat KPP
    $(document).on('click', '#myPermintaanSuratKPP', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#PSKPPajuanID').val(vajuanID);
    });

    //ajak SPUH - BA
    $(document).on('click', '#mySPUH', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#SPUHajuanID').val(vajuanID);
    });

    //Respon SPUH
    $(document).on('click', '#myRSPUH', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#RSPUHajuanID').val(vajuanID);
    });

    //ajak Laporan Penelitian
    $(document).on('click', '#myLaporanPenelitian', function() {
        var vajuanID = $(this).attr("ajuanID");
         console.log(vajuanID);
        $('#LapPajuanID').val(vajuanID);
    });
    //ajak KeputusanAjuanID
    $(document).on('click', '#myKeputusan', function() {
        var vajuanID = $(this).attr("ajuanID");
         //console.log(vajuanID);
        $('#KePajuanID').val(vajuanID);
    });

    //ajak Keputusan Keberatan / Non Keberatan
    $(document).on('click', '#myKeputusan', function() {
        var nilaiAkhirKep = $(this).attr("nilaiAkhirKepId");
        //  console.log(vajuanID);
        $('#nilaiketetapan').val(nilaiAkhirKep);
    });

    // Manage Dropdown Respon Surat
    $('#no_suratpanggilan').change(function()
    { 
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url('pengajuan/no_suratpanggilan');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
              $('#id_suratpanggilan').val(data[0].SPWPtglSurat);
              $('#id_tujuansurat').val(data[0]. SPWPtujuan);
            }
        });
        return false;
    });

    
    $('#id_nospuh').change(function()
    { 
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url('pengajuan/getListNoSPUH');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
              $('#id_tglspuh').val(data[0].SUPtglSurat);
              $('#id_tglkirimspuh').val(data[0]. SPUHtglKirim);
            }
        });
        return false;
    });

    // Tidak Dipakai
    $(document).on('click', '#nilaiketetapan', function() {
        var id=$(this).attr('ajuanID');
        $.ajax({
            url : "<?php echo site_url('pengajuan/nilaiketetapanpajak');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){   
                var html = '';
                var i;
                html += '<input type="text" class="form-control" value='+data[i]+KPid+' placeholder='+data[i]+KPNilai+' disabled>';
                // for(i=0; i<data.length; i++){
                //     // $('#id_jenispermohonan').val('<option value='+data[i].idJenisPemohon+'>'+data[i].JenisPemohon+'</option>');
                // }
            }
        });
        return false;
    });
    } );



</script>
 <?= $this->endSection() ?>