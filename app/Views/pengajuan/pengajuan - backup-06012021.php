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
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalPengajuan"><i class="fas fa-plus-circle"></i>
              Permohonan KBP 
            </button>
        </p>
        <br><br>
        <div class="table-responsive">
            <table class="table display" id="myTable" border="1">
                <thead>
                     <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama WP</th>
                        <th rowspan="2">NPWP</th>
                        <th rowspan="2">NOP</th>
                        <th rowspan="2">Kode KPP</th>
                        <th rowspan="2">Jenis Permohonan</th>
                        <th rowspan="2">Unit Memproses</th>
                        <th rowspan="2">Jenis Pajak</th>
                        <th rowspan="2">Masa Pajak</th>
                        <th rowspan="2">Tahun Pajak</th>
                        <th rowspan="2">Mata Uang</th>
                        <th colspan="4"><center>Ketetapan Pajak</center></th>
                        <th rowspan="2">Dasar Pemoresan</th>
                        <th colspan="4"><center>Permohonan WP</center></th>
                        <th rowspan="2">Tanggal Terima</th>
                        <th rowspan="2">Tgl Jatuh Tempo IKU</th>
                        <th rowspan="2">Tgl JT IKU (-1 bulan)</th>
                        <th colspan="3"><center>Pengantar Surat</center></th>
                        <th colspan="2"><center>Surat Tugas</center></th>
                        <th colspan="2"><center>Formal/Matrik</center></th>
                        <th colspan="2"><center>Pencabutan Permohonan Oleh WP</center></th>
                        <th colspan="2"><center>Permintaan ke KPP</center></th>
                        <th colspan="3"><center>Tgl Pengiriman Surat Penjelasan WP</center></th><!--Tgl Pengiriman Surat Permintaan Penjelasan/Pembuktian Ke WP-->
                        <th colspan="2"><center>BA Tidak Memberikan Penjelasan</center></th><!--Berita Acara Tidak Memberikan Penjelasan/Pembuktian/-->
                        <th colspan="4"><center>Pembahasan Dengan Pemeriksa</center></th>
                        <th colspan="4"><center>Pembahasan Dengan Wajib Pajak</center></th>
                        <th colspan="3"><center>SPUH</center></th>
                        <th colspan="2"><center>Pembahasan Akhir</center></th>
                        <th colspan="2"><center>Laporan Penelitian</center></th>
                        <th colspan="6"><center>Keputusan Keberatan/Non Keberatan</center></th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Nama Seksi KBP</th>
                        <th rowspan="2">Nama  Penelaah Keberatan</th>
                        <th rowspan="2">Jangka Waktu Selesai (Hari)</th>
                        <th rowspan="2">Jangka Waktu Selesai (Bulan)</th>
                        <th rowspan="2">Status</th>

                        <th rowspan="2">Action</th>
                        <th rowspan="2">Manage</th>
                    </tr>
                    <tr>
                        <th>Jenis Ketetapan</th>
                        <th>No Ketetapan</th>
                        <th>Tgl Ketetapan</th>
                        <th>Nilai Ketetapan</th>
                        <th>No Surat WP</th>
                        <th>Tgl Surat WP</th>
                        <th>No LPAD</th>
                        <th>Tgl LPAD</th>
                        <th>No Pengantar Surat</th>
                        <th>Tgl Surat Pengantar</th>
                        <th>Tgl Diterima Kanwil</th>
                        <th>No ST</th>
                        <th>Tanggal ST</th>
                        <th>Formal (Ya/Tidak)</th>
                        <th>Tgl Matrik</th>
                        <th>No Pencabutan</th>
                        <th>Tgl Pencabutan</th>
                        <th>No Surat Ke KPP</th>
                        <th>Tgl Ke KPP</th>
                        <th>Ke-1</th>
                        <th>Ke-2</th>
                        <th>Tambahan</th>
                        <th>Nomor BA</th>
                        <th>Tanggal BA</th>
                        <th>Nomor Surat Pemanggilan</th>
                        <th>Tanggal Surat Pemanggilan</th>
                        <th>Nomor BA Pembahasan</th>
                        <th>Tanggal BA Pembahasan</th>
                        <th>Nomor Surat Pemanggilan</th>
                        <th>Tanggal Surat Pemanggilan</th>
                        <th>Nomor BA Pembahasan</th>
                        <th>Tanggal BA Pembahasan</th>
                        <th>Nomor SPUH</th>
                        <th>Tgl SPUH</th>
                        <th>Tgl Kirim SPUH</th>
                        <th>Nomor BA Pembahasan Akhir</th>
                        <th>Tanggal BA Pembahasan Akhir</th>
                        <th>Nomor Laporan</th>
                        <th>Tanggal Laporan</th>
                        <th>No. Keputusan</th>
                        <th>Tgl Keputusan</th>
                        <th>Tgl Kirim SK</th>
                        <th>Jangka Waktu Pengiriman (hari)</th>
                        <th>Amar Keputusan </th>
                        <th>Nilai Akhir Menurut Keputusan </th>
                    </tr>
                    
                </thead>
                
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($pengajuan as $data) { 
                        ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data->ajuanNamaWP ?></td>
                        <td><?= $data->ajuanNPWP ?></td>
                        <td><?= $data->ajuanNOP ?></td>
                        <td><?= $data->ajuanKodeKPP ?></td>
                        <td><?= $data->JenisPemohon ?></td>
                        <td><?= $data->ajuanPIC ?></td>
                        <td><?= $data->NamajenisPajak ?></td>
                        <td><?= $data->ajuanMasaPajak ?></td>
                        <td><?= $data->ajuanTahunPajak ?></td>
                        <td><?= $data->ajuanMataUang ?></td>
                        <td><?= $data->JKnama ?></td>
                        <td><?= $data->KPNoKetetapan ?></td>
                        <td><?= $data->KPTgl ?></td>
                        <td><?= $data->KPNilai ?></td>
                        <td><?= $data->ajuanKeterangan ?></td>
                        <td><?= $data->ajuanNamaSeksiKBP ?></td>
                        <td><?= $data->ajuanPenelaah ?></td>
                        <td><?= $data->ajuanClearedHari ?></td>
                        <td><?= $data->ajuanStatusAkhir ?></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>4</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>4</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>5</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                       
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('product/edit/'.$data->ajuanNamaWP); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> &nbsp;
                                <a href="<?php echo base_url('product/delete/'.$data->ajuanNamaWP); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Pengajuan <?= $data->ajuanNamaWP ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                        <td>
                            <!-- Manage -->
                                <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Manage
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <!-- <?php //echo $data['ajuanId']; ?> -->

                                        <a data-target="#KetetapanPajak" data-toggle="modal" id="myKetetapanPajak" href="#myKetetapanPajak" class="dropdown-item" ajuanID='<?= $data->ajuanId ?>'>Ketetapan Pajak</a>

                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Permohonan WP</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Pengantar KPP</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Surat Tugas</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Laporan Penelitian</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Pencabutan WP</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Permintaan Surat KPP</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Laporan Penelitian</a>
                                        <a data-target="#myModal" data-toggle="modal" class="dropdown-item" id="MainNavHelp" href="#myModal">Surat Pembuktian WP</a>
                                    </div>
                                </div>
                            <!-- end menaage -->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal add pengajuan -->
    <!-- Button trigger modal -->
 
    <!-- Modal Add Pengajuan KBP-->   
     <div class="modal fade" id="ModalPengajuan" tabindex="-1" role="dialog" aria-labelledby="Modal Pengajuan" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Permohonan KBP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form action="<?php echo base_url()?>/pengajuan/savePengajuan" method="post">
                <!-- Add -->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama WP</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="nama_wp" placeholder="Nama WP"></div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NPWP</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="npwp" placeholder="NPWP"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NOP</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="nop" placeholder="NOP"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode KPP</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="kode_kpp" placeholder="Kode KPP"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Permohonan</label>
                    <div class="col-md-9">
                        <select class="form-control" name="jenis_permohonan" id="jenis_permohonan" required>
                            <option value="">No Seletected</option>
                            <?php foreach($jenis_permohonan as $row) {?>
                            <option value=<?=$row->idJenisPemohon ?>> <?= $row->JenisPemohon ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Pajak</label>
                    <div class="col-md-9">
                        <select class="form-control" name="jenis_pajak" id="jenis_pajak" required>
                            <option value="">No Seletected</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Unit Memproses</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="unit_proses" placeholder="Unit Memproses"></div>
                </div>
               <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Masa Pajak</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="masa_pajak" placeholder="Masa Pajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun Pajak</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="tahun_pajak" placeholder="Tahun Pajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mata Uang</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="mata_uang" placeholder="IDR/SGD"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Terima</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="tanggal_terima" placeholder="Tanggal Terima"></div>
             <!--    <div class="form-group">
                    <label>Jenis Permohonan</label>
                    <select name="jenis_permohonan" class="form-control">
                        <option value="">-Select-</option>    
                    </select>
                </div> -->

                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save </button>
                  </div>
                </div>
            </div>
        </div>
    <!-- end Modal Pengajuan -->
    </div>
    </form>
    <!-- /.box -->
<!-- Modal Ketetapan Pajak -->
        <!-- Button trigger modal -->
   
        <div class="modal fade" id="KetetapanPajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ketetapan Pajak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url()?>/pengajuan/savePengajuan" method="post">
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
                    <div class="col-md-9"><input type="text" class="form-control" name="no_kp" placeholder="No Ketetapan Pajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="tgl_kp" placeholder="Tanggal Ketetapan Pajak"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-md-9"><input type="text" class="form-control" name="nilai_kp" placeholder="Nilai Ketetapan Pajak"></div>
                </div>
                <!-- End Ketetapan Pajak body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    <!-- End MKetetapan Pajak -->

</section>
<script>
     $(document).ready(function() {
    $('#myTable').DataTable( {
        "scrollX": true
    } );
} );

// Ajax ketetapan pajak
$(document).on('click', '#myKetetapanPajak', function() {
    var vajuanID = $(this).attr("ajuanID");
    console.log(vajuanID);
    $('#VajuanID').val(vajuanID);
});

</script>
 <?= $this->endSection() ?>