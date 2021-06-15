<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MDetailPengajuan;

class Detail_Pengajuan extends Controller
{

	public function __construct()
	{
		//Mendeklarasikan class PengajuanModel menggunakan $this->Pengajuan
		$this->detail_pengajuan = new MDetailPengajuan();
		//$this->detail_pengajuan = new MPengajuan();


		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Pengajuan 
        */
	}

	//read
	public function index()
	{
		$model = new MDetailPengajuan();
		#$id = $this->uri->getSegment(2);

		$data['full_name'] = 'Mangapul';
		$data['avatar'] = base_url().'/assets/dist/img/avatar.png';
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Pengajuan - Detail Pengajuan';

		$data['detail_pengajuan'] = $model->getDetailPengajuan()->getResult();
        #print_r($data);
		return view('pengajuan/detail_pengajuan',$data);
	}

	// public function getDetailPengajuan($id)
	// {
	// 	$data['ajuanId'] = $this->product->getPengajuan($id);
 //        // Mengirim data ke dalam view
 //        return view('pengajuan/detail_pengajuan', $data);
	// }

	public function savePengajuan()
	{
		
		// Function save
		$data = [
			'ajuanNamaWP' 	=> 	$this->request->getPost('nama_wp'),
			'ajuanNPWP'		=>	$this->request->getPost('npwp'),
			'ajuanNOP'		=>	$this->request->getPost('nop'),
			'ajuanKodeKPP'	=>	$this->request->getPost('kodekpp')
		];
		// $model -> savePermohonan($data);
		$this->pengajuan->savePengajuan($data);
		session()->setFlashData('success','Data Pemohon Berhasil di Entry');
		return redirect()->to(base_url().'/pengajuan');
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