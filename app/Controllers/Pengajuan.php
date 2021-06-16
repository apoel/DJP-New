<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MPengajuan;

class Pengajuan extends Controller
{

	public function __construct()
	{
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->pengajuan = new MPengajuan();
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


		$model = new MPengajuan();
		 // $data = [
   //          'full_name' => 'Admin',
   //          'avatar'    => base_url().'/assets/dist/img/avatar.png',
   //          'icon'      => 'ion ion-home',
   //          'title'     => 'Pengajuan',
   //          'pengajuan' => $this->pengajuan->getPengajuan(),
   //          'jenis_kp'	=> $this->pengajuan->get_jenisketetapanpajak()
   //      ];
   		$PENid = $session->get('PENid');
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Pengajuan';

		if($session->get('PENUserLevel') == "Level1-Admin"){
			$data['pengajuan'] = $model->getPengajuan()->getResult();
		}else{
			$data['pengajuan'] = $model->getPengajuanAssign($PENid)->getResult();
		}
		
		// $data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
		$data['jenis_permohonan'] = $model->get_jenisPermohonan()->getResult();
		//$data['jenis_pajak'] = $model->get_jenisPajak($jenis_permohonan);
		//$data['jenis_pajak'] = $model->get_jenisPajak()->getResult();

        //print_r($data);
		return view('pengajuan/pengajuan',$data);
	}


	public function detail_pengajuan($id)
	{

		$session = session();

		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Detail Pengajuan';

		$data['detail_pengajuan'] = $this->pengajuan->getPengajuan($id);
		$data['jenis_kp'] = $this->pengajuan->get_jenisketetapanpajak()->getResult();
		$data['nama_ekspedisi'] = $this->pengajuan->get_jenisekspedisi()->getResult();
		$data['amar_keputusan'] = $this->pengajuan->get_amarkeputusan()->getResult();
		$data['mketetapanpajak'] = $this->pengajuan->get_KetetapanPajak($id);
		//$data['NoformalKetetapanPajak'] = $this->pengajuan->NoformalKetetapanPajak($id);


		$data['mpermohonanwp'] = $this->pengajuan->get_PermohonanWP($id);
		$data['mpengantarkpp'] = $this->pengajuan->get_PengantarKPP($id);
		$data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		$data['mformal'] = $this->pengajuan->get_FormalMatrix($id);
		$data['mpencabutanpermohonan'] = $this->pengajuan->get_PencabutanWP($id);
		$data['mpermintaansuratkpp'] = $this->pengajuan->get_PermintaanSuratKPP($id);
		$data['mpembuktianwp'] = $this->pengajuan->get_PembuktianWP($id);
		$data['no_suratpanggilan'] = $this->pengajuan->get_nosuratpanggilan($id);
		
		$data['list_spuh'] = $this->pengajuan->get_listspuh($id);
		$data['mspuhba'] = $this->pengajuan->get_SPUHBA($id);
		$data['mlaporanpenelitian'] = $this->pengajuan->get_LaporanPenelitian($id);
		$data['mKeputusan'] = $this->pengajuan->get_Keputusan($id);
		$data['nilaiketetapanpajak'] = $this->pengajuan->get_NilaiKetetapanPajak($id);
		$data['AssignPeneliti'] = $this->pengajuan->get_AssignPeneliti($id);

		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);
		// $data['msurattugas'] = $this->pengajuan->get_SuratTugas($id);

		//print_r($data);
        return view('pengajuan/detail_pengajuan', $data);
	}

	public function jenis_pajak()
	{
		$id_jenispermohonan = service('request')->getPost('id');
		$data = $this->pengajuan->get_jenisPajak($id_jenispermohonan);
		echo json_encode($data);
	}

	public function no_suratpanggilan()
	{
		$id_suratpanggilan = service('request')->getPost('id');
		//print_r($id_suratpanggilan);
		$data = $this->pengajuan->get_SuratPanggilan($id_suratpanggilan);
		echo json_encode($data);
	}

	public function getListNoSPUH()
	{
		$id_nospuh = service('request')->getPost('id');
		//print_r($id_suratpanggilan);
		$data = $this->pengajuan->get_ListNoSPUH($id_nospuh);
		echo json_encode($data);
	}

	public function savePengajuan()
	{
		$session = session();

		$dateTglTerima = $this->request->getPost('dateTglTerima');
		$v_alert3 = $this->request->getPost('alert3');
		$v_alert2 = $this->request->getPost('alert2');
		$v_alert1 = $this->request->getPost('alert1');

		$vTglTerima =date("Y-m-d", strtotime($dateTglTerima));
		$vAlert3 = date('Y-m-d', strtotime('-1 days', strtotime($vTglTerima .'+'. $v_alert3.'month')));
		$vAlert2 = date('Y-m-d', strtotime('-1 days', strtotime($vTglTerima .'+'. $v_alert2.'month')));
		$vAlert1 = date('Y-m-d', strtotime('-1 days', strtotime($vTglTerima .'+'. $v_alert1.'month')));

		// Function save
		$data = [
			'ajuanNamaWP' 			=> 	$this->request->getPost('nama_wp'),
			'ajuanNPWP'				=>	$this->request->getPost('npwp'),
			'ajuanNOP'				=>	$this->request->getPost('nop'),
			'ajuanKodeKPP'			=>	$this->request->getPost('kode_kpp'),
			'ajuanJenisPemohonId'	=>  $this->request->getPost('id_jenispemohon'),
			'ajuanJenisPemohon'		=>  $this->request->getPost('jenis_pemohon'),
			'ajuanJnsPajakId'		=>  $this->request->getPost('id_jenispajak'),
			'ajuanJenisPajak'		=>	$this->request->getPost('jenis_pajak'), 
			'ajuanPIC'				=>	"Kanwil",
			'ajuanMasaPajak'		=>	$this->request->getPost('masa_pajak'), 
			'ajuanTahunPajak'		=>	$this->request->getPost('tahun_pajak'),
			'ajuanDasarPemrosesan'	=>	$this->request->getPost('dasar_pengajuan'),
			'ajuanMataUang'			=>	$this->request->getPost('mata_uang'),
			'ajuanTglTerima'		=>	$vTglTerima,
			'ajuanAlert3'			=>	$vAlert1, 
			'ajuanAlert2'			=>	$vAlert2,
			'ajuanAlert1'			=>	$vAlert3,
			'ajuanPenelaah'			=>  $session->get('PENNama'),
			'ajuanNamaSeksiKBP'		=>  $session->get('PENDept'),
		];
		// print_r($data);
		// die();
		$this->pengajuan->savePengajuan($data);
		session()->setFlashData('success','Data Pemohon Berhasil di entri');
		return redirect()->to(base_url().'/pengajuan');
	}

	public function saveKetetapanPajak()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_kp = $this->request->getPost('tgl_kp');
		$tgl_kp = date("Y-m-d", strtotime($tgl_kp));
		$data = [
			'KPajuanId'				=> $this->request->getPost('ajuanID'),
			'KPJKid'				=> $this->request->getPost('jenis_kp'),
			'KPNoKetetapan'			=> $this->request->getPost('no_kp'),
			'KPTgl'					=> $tgl_kp,
			'KPNilai'				=> $this->request->getPost('nilai_kp'),
		];

		//print_r($data);
		//die();

		//cek if exist KetetapanPajak
		$rowKP = $this->pengajuan->checkKetetapanPajak($id);
		//print_r($rowKP);

		if($rowKP > 0){
			session()->setFlashData('warning','Nilai Ketetapan Pajak sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->saveKetetapanPajak($data);
			session()->setFlashData('success','Ketetapan Pajak berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}
		

		
	}

	public function savePermohonanWP()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_suratWP = $this->request->getPost('tgl_suratwp');
		$tgl_suratWP = date("Y-m-d", strtotime($tgl_suratWP));
		$tglLPAD = $this->request->getPost('tgl_lpad');
		$tglLPAD = date("Y-m-d", strtotime($tglLPAD));
		
		$data = [
			'PWPajuanId'				=> $this->request->getPost('ajuanID'),
			'PWPnoSurat'				=> $this->request->getPost('no_suratwp'),
			'PWPtglSurat'				=> $tgl_suratWP,
			'PWPnoLPAD'					=> $this->request->getPost('no_lpad'),
			'PWPtglLPAD'				=> $tglLPAD,
		];

		// print_r($data);
		// die();

		//cek if exist PermohonanWP
		$rowPermohonanWP = $this->pengajuan->checkPermohonanWP($id);
		//print_r($rowPermohonanWP);

		if($rowPermohonanWP > 0){
			session()->setFlashData('warning','Surat Permohonan WP sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->savePermohonanWP($data);
			session()->setFlashData('success','Surat Permohonan WP berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}
		
	}

	public function savePengantarKPP()
	{
		$id = $this->request->getPost('ajuanID');
		$tgl_suratKPP = $this->request->getPost('tgl_suratkpp');
		$tgl_suratKPP = date("Y-m-d", strtotime($tgl_suratKPP));
		$tglTerimaKanwil = $this->request->getPost('tgl_terima_kanwil');
		$tglTerimaKanwil = date("Y-m-d", strtotime($tglTerimaKanwil));
		
		$data = [
			'PKPPajuanId'				=> $this->request->getPost('ajuanID'),
			'PKPPnoSurat '				=> $this->request->getPost('no_suratkpp'),
			'PKPPtglSurat'				=> $tgl_suratKPP,
			'PKPPtglDiterima'			=> $tglTerimaKanwil,
		];

		// print_r($data);
		// die();

		//cek if exist PengantarKPP
		$rowPengantarKPP = $this->pengajuan->checkPengantarKPP($id);
		//print_r($rowPengantarKPP);

		if($rowPengantarKPP > 0){
			session()->setFlashData('warning','Pengantar KPP sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->savePengantarKPP($data);
			session()->setFlashData('success','Pengantar KPP berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}
		
	}

	public function saveSuratTugas()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_SuratTugas = $this->request->getPost('tgl_surattugas');
		$Tgl_SuratTugas = date("Y-m-d", strtotime($Tgl_SuratTugas));
		
		$data = [
			'STajuanId'				=> $this->request->getPost('ajuanID'),
			'STnoSurat'				=> $this->request->getPost('no_surattugas'),
			'STtglSurat'			=> $Tgl_SuratTugas,
			'STPenelaah'			=> $this->request->getPost('Lpeneliti'),

		];

		// print_r($data);
		// die();

		//Cek exist SuratTugas
		$rowSuratTugas = $this->pengajuan->checkSuratTugas($id);

		if($rowSuratTugas > 0){
			session()->setFlashData('warning','Surat Tugas sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->saveSuratTugas($data);
			session()->setFlashData('success','Surat Tugas berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}
		
	}

	public function saveFormalMatrik()
	{
		$id = $this->request->getPost('ajuanID');
		$status_matrik = $this->request->getPost('status_matrik');
		$tgl_matrik = $this->request->getPost('tgl_matrik');
		$tgl_matrik = date("Y-m-d", strtotime($tgl_matrik));


		$Tgl_Keputusan = $this->request->getPost('tgl_keputusan1');
		$Tgl_Keputusan = date("Y-m-d", strtotime($Tgl_Keputusan));
		$Tgl_KirimSK = $this->request->getPost('tgl_kirimSK1');
		$Tgl_KirimSK = date("Y-m-d", strtotime($Tgl_KirimSK));
		$tgl1 = new \DateTime($Tgl_Keputusan);
		$tgl2 = new \DateTime($Tgl_KirimSK);
		$selisih = date_diff($tgl1,$tgl2);

		$vAlert1 = $this->request->getPost('alert1');
		$vAlert2 = $this->request->getPost('alert2');
		$vAlert3 = $this->request->getPost('alert3');
		
		
		if($status_matrik == "TIDAK"){
			$tgl_matrik = "";

			$data = [
				'KEPajuanId'				=> $this->request->getPost('ajuanID'),
				'KEPnoKeputusan'			=> $this->request->getPost('no_keputusan1'),
				'KEPtglKeputusan'			=> $Tgl_Keputusan,
				'KEPtglKirimSK'				=> $Tgl_KirimSK,
				'KEPjangkaKirim'			=> $selisih->d,
				'KEPjenis'					=> 1,
				'KEPAmarKeputusan'			=> $this->request->getPost('NilaiAkhirKeputusan1'),
			];

			if($Tgl_Keputusan < $vAlert3){
				$status_akhir = "Tepat Waktu";	// < alert3
			}else{
				$status_akhir = "Lewat Waktu";	// < alert2
			}

			$data1 = [
				'ajuanStatusAkhir'		=> $status_akhir,
			];

			$rowKeputusan = $this->pengajuan->checkKeputusan($id);
			if($rowKeputusan > 0){
				session()->setFlashData('warning','Keputusan sudah ada !');
				return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}else{
				$this->pengajuan->saveKeputusan($data);
				$this->pengajuan->closingpengajuan($data1,$id);
				session()->setFlashData('success','Keputusan berhasil di entri');
				//return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}


			// $this->pengajuan->saveKeputusan($data);
			// $this->pengajuan->closingpengajuan($data1,$id);

		}
		
			//for status formal matix YA	
			$data_matrik = [
				'FMajuanId'				=> $this->request->getPost('ajuanID'),
				'FMisFormal'			=> $status_matrik,
				'FMtglMatrik'			=> $tgl_matrik,

			];

			$rowFormal = $this->pengajuan->checkFormalMatrix($id);
			if($rowFormal > 0){
				session()->setFlashData('warning','Formal Matrix sudah ada !');
				return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}else{
				$this->pengajuan->saveFormalMatrik($data_matrik);
				session()->setFlashData('success','Formal/Matrix berhasil di entri');
				return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}
		
			//$this->pengajuan->saveFormalMatrik($data_matrik);
			//session()->setFlashData('success','Formal/Matrik berhasil di entri');
			//return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	public function savePencabutanPermohonan()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Pencabutan = $this->request->getPost('tgl_pencabutan');
		$Tgl_Pencabutan = date("Y-m-d", strtotime($Tgl_Pencabutan));

		$Tgl_KirimSK = $this->request->getPost('tgl_kirimSK');
		$Tgl_KirimSK = date("Y-m-d", strtotime($Tgl_KirimSK));
		
		//$Tgl_Keputusan = $this->request->getPost('tgl_keputusan1');
		//$Tgl_Keputusan = date("Y-m-d", strtotime($Tgl_Keputusan));
		//$Tgl_KirimSK = $this->request->getPost('tgl_kirimSK1');
		//$Tgl_KirimSK = date("Y-m-d", strtotime($Tgl_KirimSK));
		$tgl1 = new \DateTime($Tgl_Pencabutan);
		$tgl2 = new \DateTime($Tgl_KirimSK);
		$selisih = date_diff($tgl1,$tgl2);


		// $vAlert1 = $this->request->getPost('alert1');
		// $vAlert2 = $this->request->getPost('alert2');
		// $vAlert3 = $this->request->getPost('alert3');

		$data = [
			'QuitWPajuanID'			=> $this->request->getPost('ajuanID'),
			'QuitWPnoSurat'			=> $this->request->getPost('no_pencabutan'),
			'QuitWPtglSurat'		=> $Tgl_Pencabutan,

		];

		// if($Tgl_Pencabutan < $vAlert1){
		// 	$status_akhir = "Sesuai IKU";	// < alert1
		// }elseif($Tgl_Pencabutan < $vAlert2){
		// 	$status_akhir = "Sesuai IKU2";	// < alert2
		// }elseif($Tgl_Pencabutan < $vAlert3){
		// 	$status_akhir = "Tepat Waktu";	// < alert3
		// }else{
		// 	$status_akhir = "Tidak Tepat Waktu";	// < alert2
		// }

		$data1 = [
			'ajuanStatusAkhir'		=> "Pencabutan Permohonan",
		];

		$data2 = [
				'KEPajuanId'				=> $this->request->getPost('ajuanID'),
				'KEPnoKeputusan'			=> $this->request->getPost('no_pencabutan'),
				'KEPtglKeputusan'			=> $Tgl_Pencabutan,
				'KEPtglKirimSK'				=> $Tgl_KirimSK,
				'KEPjangkaKirim'			=> $selisih->d,
				'KEPjenis'					=> '5',
				'KEPAmarKeputusan'			=> $this->request->getPost('NilaiAkhirKeputusan1'),
		];

		// print_r($data);
		// print_r($data1);
		// print_r($data2);
		// die();

		$rowPencabutanPermohonan = $this->pengajuan->checkPencabutanPermohonan($id);
		$rowKeputusan = $this->pengajuan->checkKeputusan($id);
		//print_r($rowKP);

		if($rowPencabutanPermohonan > 0){
			session()->setFlashData('warning','Pencabutan Permohonan hanya sekali !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			//cek keputusan
			if($rowKeputusan > 0){
				session()->setFlashData('warning','Keputusan sudah ada, tidak bisa melakukan Pencabutan WP !');
				return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}else{
				$this->pengajuan->savePencabutanPermohonan($data);
				$this->pengajuan->saveKeputusan($data2);
				$this->pengajuan->closingpengajuan($data1,$id);			//closing

				session()->setFlashData('success','Pencabutan Permohonan berhasil dilakukan');
				return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
			}
			
		}

		
	}

	public function savePermintaanSuratKPP()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_KPP = $this->request->getPost('tgl_kpp');
		$Tgl_KPP = date("Y-m-d", strtotime($Tgl_KPP));
		
		$data = [
			'PSKPPajuanId'			=> $this->request->getPost('ajuanID'),
			'PSKPPNoSurat'			=> $this->request->getPost('no_suratkpp'),
			'PSKPPtglSurat'			=> $Tgl_KPP,

		];

		// print_r($data);
		// die();
		$this->pengajuan->savePermintaanSuratKPP($data);
		session()->setFlashData('success','Permintaan Surat ke KPP berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}


	public function savePembuktianWP()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Surat = $this->request->getPost('tgl_surat');
		$Tgl_Surat = date("Y-m-d", strtotime($Tgl_Surat));
	
		$data = [
			'SPWPajuanId'			=> $this->request->getPost('ajuanID'),
			'SPWPnoSurat'			=> $this->request->getPost('no_surat'),
			'SPWPtglSurat '			=> $Tgl_Surat,
			'SPWPtujuan'			=> $this->request->getPost('tujuan_surat'),
			// 'SPWPStatus'			=> $this->request->getPost('ket_panggilan'),
		];

		// print_r($data);
		// die();
		$this->pengajuan->savePembuktianWP($data);
		session()->setFlashData('success','Surat Panggilan berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	public function UpdatePembuktianWP()	//for respon surat panggilan
	{
		$id = $this->request->getPost('ajuanID');
		$no_suratpanggilan = $this->request->getPost('no_suratpanggilan');
		$tglSuratRespon = $this->request->getPost('tgl_suratrespon');
		$tglSuratRespon = date("Y-m-d", strtotime($tglSuratRespon));
		$tglBeritaAcara = $this->request->getPost('tgl_beritaacara');
		$tglBeritaAcara = date("Y-m-d", strtotime($tglBeritaAcara));
		
	
		$data = [
			'SPWPajuanId'			=> $this->request->getPost('ajuanID'),
			'SPWPStatus'			=> 1,

			//isRespon
			'SPWPisRespon'			=> $this->request->getPost('isRespon'),
			'SPWPnoSuratRespon'		=> $this->request->getPost('no_suratrespon'),
			'SPWPtglSuratRespon'	=> $tglSuratRespon,
			'SPWPketeranganRespon' => $this->request->getPost('keterangan_respon'),

			//isDatang
			'SPWPisDatang'			=> $this->request->getPost('isDatang'),
			'SPWPnoBeritaAcara'		=> $this->request->getPost('no_beritaacara'),
			'SPWPtglBeritaAcara'	=> $tglBeritaAcara,
		];

		// print_r($data);
		// die();

		$this->pengajuan->UpdatePembuktianWP($data,$id,$no_suratpanggilan);
		session()->setFlashData('success','Respon Surat berhasil di update');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	public function UpdateSPUH()
	{
		$id = $this->request->getPost('ajuanID');
		$no_spuh = $this->request->getPost('no_spuh');
		$tgl_ba = $this->request->getPost('tgl_ba');
		$tgl_ba = date("Y-m-d", strtotime($tgl_ba));
		$tglSuratRespon = $this->request->getPost('tgl_suratrespon');
		$tglSuratRespon = date("Y-m-d", strtotime($tglSuratRespon));
	
		$data = [
			'SPUHajuanId'			=> $this->request->getPost('ajuanID'),
			'SPUHnoSurat '			=> $this->request->getPost('no_spuh'),

			//isRespon
			'SPWPisRespon'			=> $this->request->getPost('isRespon'),
			'SPWPnoSuratRespon'		=> $this->request->getPost('no_suratrespon'),
			'SPWPtglSuratRespon'	=> $tglSuratRespon,
			'SPWPketeranganRespon' => $this->request->getPost('keterangan_respon'),

			'SPUHisHadir'			=> $this->request->getPost('isDatang'),
			'SPUHnoBAbahasAkhir'	=> $this->request->getPost('no_ba'),
			'SPUHtglBAbahasAkhir'	=> $tgl_ba,
			'SPUHstatusKirim'		=> 1,


		];

		// print_r($data);
		// die();
		$this->pengajuan->UpdateSPUH($data,$id,$no_spuh);
		session()->setFlashData('success','Respon SPUH berhasil di update');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	public function saveSPUH()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_SPUH = $this->request->getPost('tgl_spuh');
		$Tgl_SPUH = date("Y-m-d", strtotime($Tgl_SPUH));

		$TglKirimSPUH = $this->request->getPost('tgl_kirim_spuh');
		$TglKirimSPUH = date("Y-m-d", strtotime($TglKirimSPUH));

		$SPUHtglBAbahasAkhir = $this->request->getPost('tgl_resi_spuh');
		$SPUHtglBAbahasAkhir = date("Y-m-d", strtotime($SPUHtglBAbahasAkhir));

		$data = [
			'SPUHajuanId'			=> $this->request->getPost('ajuanID'),
			'SPUHnoSurat'			=> $this->request->getPost('no_spuh'),
			'SUPtglSurat'			=> $Tgl_SPUH,
			'SPUHstatusKirim'		=> $this->request->getPost('isKirim'),
			'SPUHtglKirim'			=> $TglKirimSPUH,
			'SPUHekpedisi'			=> $this->request->getPost('nama_ekspedisi'),
			'SPUHnoResi'			=> $this->request->getPost('noResi'),
			//'SPUHisHadir'			=> $this->request->getPost('isHadir'),
			//'SPUHnoBAbahasAkhir'	=> $this->request->getPost('no_akhir'),
			//'SPUHtglBAbahasAkhir'	=> $SPUHtglBAbahasAkhir,
		];

		// print_r($data);
		// die();
		$this->pengajuan->saveSPUH($data);
		session()->setFlashData('success','SPUH berhasil di entri');
		return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}
	

	public function saveLaporanPenelitian()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Laporan = $this->request->getPost('tgl_laporan');
		$Tgl_Laporan = date("Y-m-d", strtotime($Tgl_Laporan));
		
		$data = [
			'LPajuanId'				=> $this->request->getPost('ajuanID'),
			'LPnoLaporan'			=> $this->request->getPost('no_laporan'),
			'LPtglLaporan'			=> $Tgl_Laporan,

		];

		// print_r($data);
		// die();
		$rowLP = $this->pengajuan->checkLapPenelitian($id);
		if($rowLP > 0){
			session()->setFlashData('warning','Laporan Penelitian sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->saveLaporanPenelitian($data);
			session()->setFlashData('success','Laporan Penelitian berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}

	}

	
	public function saveKeputusan()
	{
		$id = $this->request->getPost('ajuanID');
		$Tgl_Keputusan = $this->request->getPost('tgl_keputusan');
		$Tgl_Keputusan = date("Y-m-d", strtotime($Tgl_Keputusan));
		$Tgl_KirimSK = $this->request->getPost('tgl_kirimSK');
		$Tgl_KirimSK = date("Y-m-d", strtotime($Tgl_KirimSK));
		//$waktu_pengiriman = date_diff($Tgl_Keputusan,$Tgl_KirimSK);
		$tgl1 = new \DateTime($Tgl_Keputusan);
		$tgl2 = new \DateTime($Tgl_KirimSK);
		$selisih = date_diff($tgl1,$tgl2);
		
		$vAlert1 = $this->request->getPost('alert1');
		$vAlert2 = $this->request->getPost('alert2');
		$vAlert3 = $this->request->getPost('alert3');

		$data = [
			'KEPajuanId'				=> $this->request->getPost('ajuanID'),
			'KEPnoKeputusan'			=> $this->request->getPost('no_keputusan'),
			'KEPtglKeputusan'			=> $Tgl_Keputusan,
			'KEPtglKirimSK'				=> $Tgl_KirimSK,
			'KEPjangkaKirim'			=> $selisih->d,
			'KEPjenis'					=> $this->request->getPost('amar_keputusan'),
			'KEPAmarKeputusan'			=> $this->request->getPost('NilaiAkhirKeputusan'),
		];

		if($Tgl_Keputusan < $vAlert3){
			$status_akhir = "Tepat Waktu";	// < alert3
		}else{
			$status_akhir = "Lewat Waktu";	// < alert2
		}

		$data1 = [
			'ajuanStatusAkhir'		=> $status_akhir,
		];

		// print_r($data); echo "<br>";
		// print_r($data1);
		// die();

		$rowKeputusan = $this->pengajuan->checkKeputusan($id);
		if($rowKeputusan > 0){
			session()->setFlashData('warning','Keputusan sudah ada !');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}else{
			$this->pengajuan->saveKeputusan($data);
			$this->pengajuan->closingpengajuan($data1,$id);
			session()->setFlashData('success','Keputusan berhasil di entri');
			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
		}

		// $this->pengajuan->saveKeputusan($data);
		// $this->pengajuan->closingpengajuan($data1,$id);		//closing
		// session()->setFlashData('success','Keputusan berhasil di entri');
		// return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
	}

	//closing dilakukan jika dilakukan pencabutan ATAU keputusan sudah di entri
// 	public function closepengajuan()
// 	{

// 		$id = $this->request->uri->getSegment(3);
// 		$vPencabutan = $this->pengajuan->checkPencabutan($id);
// 		$vKeputusan = $this->pengajuan->checkKeputusan($id);

// 		if(($vPencabutan == 0) && ($vKeputusan == 0)) 
// 		{	
// 			session()->setFlashData('warning','Closing gagal ! Silahkan melakukan Pencabutan atau Keputusan !');
// 			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
// 		}else{

// 			$data['ajuanStatusAkhir'] = 'TEPAT WAKTU';

// 			// print_r($data);
// 			// die();

// 			$this->pengajuan->closepengajuan($data,$id);
// 			session()->setFlashData('success','Closing berhasil');
// 			return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
// 		}
// // die();		
// 		// $this->pengajuan->closepengajuan($data);
// 		// session()->setFlashData('success','Closing berhasil');
// 		// return redirect()->to(base_url('pengajuan/detail_pengajuan/'.$id));
// 	}

	public function update()
	{
		// Function update
	}

	public function delete()
	{
		// function delete
	}
}