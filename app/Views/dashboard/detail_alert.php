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
        </div> <!--end card header-->
        <div class="container">
			<p>
				<button type="button" class="btn btn-secondary float-left ml-2 mt-2" onclick="goBack()">Back</button>
	            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalPengajuan"><i class="fas fa-plus-circle"></i>
	              Permohonan KBP 
	            </button>
	        </p>
	        <br><br>
	        <div class="table-responsive">
	            <table class="table table-bordered table-striped" id="myTablePengajuan">
	                <thead>
	                     <tr>
	                        <th>No</th>
	                        <th>Nama WP</th>
	                        <th>NPWP</th>
	                        <th>NOP</th>
	                        <th>Jenis Permohonan</th>
	                        <th>Jenis Pajak</th>
	                        <th>Alert</th>
	                        <th>Detail</th>
	                    </tr>
	                </thead>
	                
	                <tbody>
	                    <?php 
	                    $no = 1;
	                    foreach($detail_alert as $data) { 
	                    ?>
	                    <tr>
	                        <td><?php echo $no++ ?></td>
	                        <td><?= $data['ajuanNamaWP'] ?></td>
	                        <td><?= $data['ajuanNPWP'] ?></td>
	                        <td><?= $data['ajuanNOP'] ?></td>
	                        <td><?= $data['ajuanJenisPemohon'] ?></td>
	                        <td><?= $data['ajuanJenisPajak'] ?></td>
	                        <td><?= $data['status_open'] ?></td>
	                        <td>
	                            <div class="btn-group">
	                                <a href="<?php echo base_url('pengajuan/detail_pengajuan/'.$data['ajuanId']);?>" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i></a>
	                            </div>
	                        </td> 
	                    </tr>
	                    <?php } ?>
	                </tbody>
	            </table>
	        </div>
	    </div>	<!--end container-->
	    

    </div> <!-- end card-->
</section> <!-- end content-->
<script>
	$(document).ready(function() {
	$('#myTablePengajuan').DataTable( {
        "scrollX": false
    } );
	} );

	function goBack() {
        window.history.back();
    }

</script>
<?= $this->endSection() ?>