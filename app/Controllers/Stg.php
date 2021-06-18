<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_stg;

class Stg extends Controller
{

	public function __construct()
	{
 
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->stg = new model_stg();
		//$this->detail_pengajuan = new MPengajuan();


		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Pengajuan 
        */
	}

	//read
	public function index()
	{
		$session = session();
		$model = new model_stg();

		$data['full_name'] =  $session->get('PENNama');
		$data['avatar'] = base_url().'/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'STG';

		//data['pengajuan'] = $this->pengajuan->getPengajuan();
		$data['stg'] = $model->getStg()->getResult();
		$data['jenispajakstg'] = $model->get_jenispajakstg();
		//$data['substg'] = $model->get_substg();
		$data['AlertSTG'] = $model->getAlertSUBSTG("STG");
		$data['list_matauang'] = $model->get_MataUang();

		
		// $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
		//$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
		//$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

        //print_r($data);
		return view('stg/stg',$data);
	}


	public function detail_stg($id)
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Detail STG';

		$data['detail_stg'] = $this->stg->getStg($id);
		$data['dataobjekbanding'] = $this->stg->get_ObjekBanding($id);
		$data['dataketetapanpajaksub'] = $this->stg->get_KetetapanPajakSub($id);
		$data['dataresponkanwil'] = $this->stg->get_ResponKanwil($id);
		$data['jenis_gugat'] = $this->stg->getJenisGugat()->getResult();
		$data['list_jenisketetapan'] = $this->stg->getJenisKetetapan();
		$data['list_tujuanRespon'] = $this->stg->getTujuanResponKanwil();
		
		//$data['mpermohonanwp'] = $this->pengajuan->get_PermohonanWP($id);
		// $data['mpengantarkpp'] = $this->pengajuan->get_PengantarKPP($id);
		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		// $data['mpencabutanpermohonan'] = $this->pengajuan->get_PencabutanWP($id);
		// $data['mpermintaansuratkpp'] = $this->pengajuan->get_PermintaanSuratKPP($id);
		// $data['mpembuktianwp'] = $this->pengajuan->get_PembuktianWP($id);
		// $data['mspuhba'] = $this->pengajuan->get_SPUHBA($id);
		// $data['mlaporanpenelitian'] = $this->pengajuan->get_LaporanPenelitian($id);
		// $data['mKeputusan'] = $this->pengajuan->get_Keputusan($id);


		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);

		//print_r($data);
        return view('stg/detail_stg', $data);
	}

	// public function jenis_pajak()
	// {
	// 	$id_jenispermohonan = service('request')->getPost('id');
	// 	$data = $this->stg->get_jenisPajak($id_jenispermohonan);
	// 	echo json_encode($data);
	// }

	public function saveStg()
	{
		$session = session();

		$tgl_suratsub = $this->request->getPost('tgl_suratsub');
		$tgl_suratsub =date("Y-m-d", strtotime($tgl_suratsub));

		$tgl_terimakanwil = $this->request->getPost('tgl_terimakanwil');
		$tgl_terimakanwil = date("Y-m-d", strtotime($tgl_terimakanwil));

		$alert1 = $this->request->getPost('vAlert1');
		$alert2 = $this->request->getPost('vAlert2');



		//print_r($alert1."--".$alert2);
		//convertion to weeks for 1.5 month and 0.5 month
		if($alert2 == "1.5"){
			$weeks = 6;
		}elseif($alert2 == "0.5"){
			$weeks = 2;
		}
		$vAlert1 = date('Y-m-d', strtotime($tgl_suratsub .'+'. $alert1.'month - 1 day'));
		$vAlert2 = date('Y-m-d', strtotime($tgl_suratsub .'+'. $weeks.'weeks - 1 day'));

		$tgl_suratbanding = $this->request->getPost('tgl_suratbanding');
		$tgl_suratbanding = date("Y-m-d", strtotime($tgl_suratbanding));

		$tgl_terimapp = $this->request->getPost('tgl_terimapp');
		$tgl_terimapp = date("Y-m-d", strtotime($tgl_terimapp));

	
		// Function save
		$data = [
		'ajuanSUBnoSuratPermintaan'	=>	$this->request->getPost('no_suratsub'),
		'ajuanSUBtglSuratPermintaan'=> 	$tgl_suratsub,
		'ajuanSUBalert1'			=> 	$vAlert2,
		'ajuanSUBalert2'			=> 	$vAlert1,

		'ajuanSUBjenisPermintaan'	=>  'STG',
		'ajuanSUBtglDiterima'		=>  $tgl_terimakanwil,
		'ajuanSUBNomorSengketa'		=>  $this->request->getPost('no_suratsengketa'),
		'ajuanSUBnoSuratBanding'	=>  $this->request->getPost('no_suratbanding'),
		'ajuanSUBtglSuratBanding'	=>  $tgl_suratbanding,
		'ajuanSUBtglDiterimaPP'		=>  $tgl_terimapp,

		'ajuanSUBnamaWP' 			=> 	$this->request->getPost('nama_wp'),
		'ajuanSUBNPWP'				=>	$this->request->getPost('npwp'),
		'ajuanSUBNOP'				=>	$this->request->getPost('nop'),
		'ajuanSUBkodeKPP'			=>	$this->request->getPost('kode_kpp'),
		'ajuanSUBjenisPajak'		=>	$this->request->getPost('jenispajak'), 
		'ajuanSUBmasaPajak'			=>	$this->request->getPost('masa_pajak'), 
		'ajuanSUBtahunPajak'		=>	$this->request->getPost('tahun_pajak'),
		'ajuanSUBmataUang'			=>	$this->request->getPost('mata_uang'),
		'ajuanSUBNamaPK'			=>  $session->get('PENNama'),
		];

		// print_r($data);
		// die();

		$this->stg->savePengajuansub($data);
		session()->setFlashData('success','Data Pemohon STG Berhasil di entri');
		return redirect()->to(base_url().'/stg');
	}

	public function saveObjekGugat()
	{
		$id = $this->request->getPost('ajuanIDSub');
		$tgl_gugat = $this->request->getPost('tgl_gugat');
		$tgl_gugat = date("Y-m-d", strtotime($tgl_gugat));

		$data = [
			'OBJGUGATajuanSUBID'		=> $id,
			'OBJGUGATJenis'				=> 'Gugat',
			'OBJGUGATnoSurat'			=> $this->request->getPost('nomor_gugat'),
			'OBJGUGATtglSurat'			=> $tgl_gugat,
			'OBJGUGATnilaiPutusan'		=> $this->request->getPost('nilai_keputusan'),
		];

		// print_r($data);
		// die();

		$this->stg->saveObjekGugat($data);
		session()->setFlashData('success','Objek Gugat berhasil di entri');
		return redirect()->to(base_url('stg/detail_stg/'.$id));

	}

	public function saveKetetapanPajakSub()
	{
		$id = $this->request->getPost('ajuanIDSub');
		$tgl_ketetapan = $this->request->getPost('tgl_ketetapan');
		$tgl_ketetapan = date("Y-m-d", strtotime($tgl_ketetapan));
		$data = [
			'TETAPAJajuanSUBID'			=> $id,
			'TETAPAJjenis'				=> $this->request->getPost('jenis_ketetapan'),
			'TETAPAJnomorKeputusan'		=> $this->request->getPost('nomor_ketetapan'),
			'TETAPAJtglKeputusan'		=> $tgl_ketetapan,
			'TETAPAJamarKeputusan'		=> $this->request->getPost('nilai_ketetapan'),
		];

		// print_r($data);
		// die();

		$this->stg->saveKetetapanPajakSub($data);
		session()->setFlashData('success','Ketetapan Pajak STG berhasil di entri');
		return redirect()->to(base_url('stg/detail_stg/'.$id));
	}

	public function saveResponKanwil()
	{
		$id = $this->request->getPost('ajuanIDSub');

		$tgl_surat = $this->request->getPost('tgl_surat');
		$tgl_surat = date("Y-m-d", strtotime($tgl_surat));

		$tgl_kirim = $this->request->getPost('tgl_kirim');
		$tgl_kirim = date("Y-m-d", strtotime($tgl_kirim));

		$data = [
			'RESPajuanSUBID'	=> $id,
			'RESPjenisTujuan'	=> $this->request->getPost('jenis_tujuanRespon'),
			'RESPnoSurat'		=> $this->request->getPost('nomor_surat'),
			'RESPtglSurat'		=> $tgl_surat,
			'RESPtglKirim'		=> $tgl_kirim,
		];

		// print_r($data);
		// die();

		$this->stg->saveResponKanwil($data);
		session()->setFlashData('success','Respon Kanwil berhasil di entri');
		return redirect()->to(base_url('stg/detail_stg/'.$id));
	}

	public function saveKetetapanUB()		//update t_pengajuansub
	{
		$session = session();
		$data['full_name'] =  $session->get('PENNama');

		$id = $this->request->getPost('ajuanIDSub');

		$tgl_terima = $this->request->getPost('tgl_terima');
		$tgl_terima = date("Y-m-d", strtotime($tgl_terima));

		$tgl_ub = $this->request->getPost('tgl_ub');
		$tgl_ub = date("Y-m-d", strtotime($tgl_ub));
		$tgl_kirimub = $this->request->getPost('tgl_kirimub');
		$tgl_kirimub = date("Y-m-d", strtotime($tgl_kirimub));
		
		$tgl1 = date_create($tgl_terima);
		$tgl2 = date_create($tgl_ub);
		$selesai_hari = date_diff($tgl1,$tgl2);

		print_r($tgl1->format('d/m/Y')."-".$tgl2->format('d/m/Y'));

		$vAlert1 = $this->request->getPost('alert1');
		$vAlert2 = $this->request->getPost('alert2');

		if($tgl_ub < $vAlert2){
			$status_akhir = "Tepat Waktu";
		}else{
			$status_akhir = "Lewat Waktu";
		}
		$data = [
			'ajuanSUBID'						=> $id,
			'ajuanSUBket'						=> $this->request->getPost('keterangan'),
			'ajuanSUBnoUB'						=> $this->request->getPost('no_ub'),
			'ajuanSUBtglUB'						=> $tgl_ub,
			'ajuanSUBtglKirimUB'				=> $tgl_kirimub,
			'ajuanSUBNamaPK'					=> $data['full_name'],
			'ajuanSUBjangkaWaktuSelesaiHari' 	=> $selesai_hari->format('%R%a days'),
			'ajuanSUBstatusArsip'				=> $this->request->getPost('arsip'),
			'ajuanStatusAkhir'					=> $status_akhir,
		];

		// print_r($data);
		// die();
		
		//Cek if exist Respon Kanwil
		$rowDataKanwil = $this->stg->checkDataKanwil($id);
		if($rowDataKanwil > 0){	//able save after have responkanwil

			$this->stg->updateKetetapanUB($data,$id);
			session()->setFlashData('success','Ketetapan UB berhasil di update');
			return redirect()->to(base_url('stg/detail_stg/'.$id));
		}else{
			session()->setFlashData('warning','Mohon update Respon Kanwil terlebih dahulu');
			return redirect()->to(base_url('stg/detail_stg/'.$id));
		}

		
	}

	
	public function update()
	{
		// Function update
	}

	public function delete()
	{
		// function delete
	}
}