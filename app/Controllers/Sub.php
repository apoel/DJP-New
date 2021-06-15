<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_sub;

class Sub extends Controller
{

	public function __construct()
	{
 
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->sub = new model_sub();
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
		$model = new model_sub();

		$data['full_name'] =  $session->get('PENNama');
		$data['avatar'] = base_url().'/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'SUB';

		//data['pengajuan'] = $this->pengajuan->getPengajuan();
		$data['sub'] = $model->getSub()->getResult();
		$data['jenispajaksub'] = $model->get_jenispajaksub();
		$data['substg'] = $model->get_substg();

		
		// $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
		//$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
		//$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);

        //print_r($data);
		return view('sub/sub',$data);
	}


	public function detail_pengajuansub($id)
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Detail Pengajuan Sub';

		$data['detail_pengajuansub'] = $this->pengajuansub->getPengajuansub($id);
		$data['dataobjekbanding'] = $this->pengajuansub->get_ObjekBanding($id);
		$data['dataketetapanpajaksub'] = $this->pengajuansub->get_KetetapanPajakSub($id);
		$data['dataresponkanwil'] = $this->pengajuansub->get_ResponKanwil($id);
		$data['jenis_gugat'] = $this->pengajuansub->getJenisGugat()->getResult();
		
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

		// print_r($data);
        return view('pengajuansub/detail_pengajuansub', $data);
	}

	// public function jenis_pajak()
	// {
	// 	$id_jenispermohonan = service('request')->getPost('id');
	// 	$data = $this->pengajuansub->get_jenisPajak($id_jenispermohonan);
	// 	echo json_encode($data);
	// }

	public function saveSub()
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
			$week = 6;
		}elseif($alert2 == "0.5"){
			$week = 2;
		}
		$vAlert1 = date('Y-m-d', strtotime($tgl_suratsub .'+'. $alert1.'month'));
		$vAlert2 = date('Y-m-d', strtotime($tgl_suratsub .'+'. $week.'weeks'));

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

		'ajuanSUBjenisPermintaan'	=>  'Sub',
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
		print_r($data);
		die();

		$this->pengajuansub->savePengajuansub($data);
		session()->setFlashData('success','Data Pemohon SUB Berhasil di entri');
		return redirect()->to(base_url().'/pengajuansub');
	}

	public function saveObjekBanding()
	{
		$id = $this->request->getPost('ajuanIDSub');
		$tgl_banding = $this->request->getPost('tgl_banding');
		$tgl_banding = date("Y-m-d", strtotime($tgl_banding));
		$data = [
			'OBJGUGATajuanSUBID'		=> $id,
			'OBJGUGATJenis'				=> $this->request->getPost('jenis_banding'),
			'OBJGUGATnoSurat'			=> $this->request->getPost('nomor_banding'),
			'OBJGUGATtglSurat'			=> $tgl_banding,
			'OBJGUGATnilaiPutusan'		=> $this->request->getPost('nilai_keputusan'),
		];

		// print_r($data);
		// die();
		$this->pengajuansub->saveObjekBanding($data);
		session()->setFlashData('success','Objek Banding berhasil di entri');
		return redirect()->to(base_url('pengajuansub/detail_pengajuansub/'.$id));

	}

	public function saveKetetapanPajakSub()
	{
		$id = $this->request->getPost('ajuanIDSub');
		$tgl_ketetapan = $this->request->getPost('tgl_ketetapan');
		$tgl_ketetapan = date("Y-m-d", strtotime($tgl_ketetapan));
		$data = [
			'TETAPAJajuanSUBID'			=> $id,
			'TETAPAJjenis'				=> $this->request->getPost('jenis_ketetapan'),
			'TETAPAJnomorKetetapan'		=> $this->request->getPost('nomor_ketetapan'),
			'TETAPAJtglKetetapan'		=> $tgl_ketetapan,
			'TETAPAJNilaiKetetapan'		=> $this->request->getPost('nilai_ketetapan'),
		];

		//print_r($data);
		//die();
		$this->pengajuansub->saveKetetapanPajakSub($data);
		session()->setFlashData('success','Ketetapan Pajak Sub berhasil di entri');
		return redirect()->to(base_url('pengajuansub/detail_pengajuansub/'.$id));
	}

	public function saveResponKanwil()
	{
		$id = $this->request->getPost('ajuanIDSub');
		$tgl_pengantar = $this->request->getPost('tgl_pengantar');
		$tgl_pengantar = date("Y-m-d", strtotime($tgl_pengantar));
		$data = [
			'RESPajuanSUBID'	=> $id,
			'RESPjenisTujuan'	=> $this->request->getPost('jenis_kanwil'),
			'RESPnoSurat'		=> $this->request->getPost('nomor_pengantar'),
			'RESPtglSurat'		=> $tgl_pengantar,
		];

		//print_r($data);
		//die();
		$this->pengajuansub->saveResponKanwil($data);
		session()->setFlashData('success','Respon Kanwil berhasil di entri');
		return redirect()->to(base_url('pengajuansub/detail_pengajuansub/'.$id));
	}

	public function saveKetetapanUB()		//update t_pengajuansub
	{
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

		// print_r($tgl1->format('d/m/Y')."-".$tgl2->format('d/m/Y'));

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
			'ajuanSUBKPB'						=> $this->request->getPost('kbp'),
			'ajuanSUBjangkaWaktuSelesaiHari' 	=> $selesai_hari->format('%R%a days'),
			'ajuanSUBstatusArsip'				=> $this->request->getPost('arsip'),
			'ajuanStatusAkhir'					=> $status_akhir,
		];

		// print_r($data);
		// die();
		
		$this->pengajuansub->updateKetetapanUB($data,$id);
		session()->setFlashData('success','Ketetapan UB berhasil di update');
		return redirect()->to(base_url('pengajuansub/detail_pengajuansub/'.$id));
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