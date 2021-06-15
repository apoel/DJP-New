<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_setdb;

class SetDB extends Controller
{
	public function __construct()
	{
		$this->confdb = new model_setdb();

	}

	public function index()
	{
		$session = session();
		$model = new model_setdb();

		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Jenis Permohonan';

		$data['listpermohonan'] = $this->confdb->getListPermohonan()->getResult();
        //print_r($data);

		return view('setdb/v_jenispermohonan', $data);

  //       if($session->get('PENUserLevel')!="Level 2"){
		// 	session()->setFlashData('warning','Anda tidak punya hak akses');
		// 	return redirect()->to(base_url().'/dashboard');
		// }else{
		// 	 return view('setdb/v_jenispermohonan', $data);
		// }

		//return view('setdb/v_jenispermohonan', $data);
	}

	// public function JenisPermohonans()
	// {
	// 	$session = session();
	// 	$data['full_name'] = $session->get('PENNama');
	// 	$data['icon'] = 'ion ion-home';
	// 	$data['title'] = 'Manage Jenis Permohonan';

		
	// 	print_r($data);
	// 	die();
	// 	$data['listpermohonan'] = $this	->confdb->getListPermohonan()->getResult();
		
		

 //       return view('setdb/v_jenispermohonan', $data);
	// }

	public function JenisPajak()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Jenis Pajak';

		//print_r($data);
		// die();
		

		$data['listpajak'] = $this->confdb->getListPajak()->getResult();
		$data['jenis_permohonan'] = $this->confdb->get_jenisPermohonan()->getResult();
		
	
		// if($session->get('PENUserLevel')!="Level 2"){
		// 	session()->setFlashData('warning','Anda tidak punya hak akses');
		// 	return redirect()->to(base_url().'/dashboard');
		// }else{
		// 	 return view('setdb/v_jenispajak', $data);
		// }

        return view('setdb/v_jenispajak', $data);
	}

	public function JenisKetepan()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Jenis Ketetapan';

		// print_r($data);
		// die();
		$data['getJK'] = $this->confdb->getJK()->getResult();
		
		
		if($session->get('PENUserLevel')!="Level 2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_jenisketetapan', $data);
		}

		//return view('setdb/v_jenisketetapan', $data);
       
	}

	public function SubSTGPajak()
	{

		$id = service('request')->getPost('id');

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage SUB STG Pajak';


		$data['SUbSTG'] = $this->confdb->SubSTG()->getResult();
		
		if($session->get('PENUserLevel')!="Level 2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_substg', $data);
		}

        //return view('setdb/v_substg', $data);
	}
	
	public function addsubstg()
	{

		// Function save
		$data = [
			'SUBSTGnama' 				=> 	$this->request->getPost('nama'),
			'SUBSTGalert1'				=>	$this->request->getPost('alert1'),
			'SUBSTGalert2'				=>	$this->request->getPost('alert2'),

			
		];
		// print_r($data);
		// die();
		$this->confdb->saveSubSTG($data);
		session()->setFlashData('success','SubSTG Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/SubSTGPajak');
	}

	public function Editsubstg()
	{
		$id_substg = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdSubSTG($id_substg);
		echo json_encode($data);

	}


	public function updateSubSTG()
	{
		$id = $this->request->getPost('id_substg');

		// Function save
		$data = [
			'SUBSTGnama' 				=> 	$this->request->getPost('nama'),
			'SUBSTGalert1'				=>	$this->request->getPost('alert1'),
			'SUBSTGalert2'				=>	$this->request->getPost('alert2'),

		];
		// print_r($data);
		// die();
		$this->confdb->UpdateSubSTG($data,$id);
		session()->setFlashData('success','SubSTG Berhasil di update');
		return redirect()->to(base_url().'/SetDB/SubSTGPajak');
	}

	public function delete($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->confdb->delete_substg($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/SubSTGPajak'));
        }
    }
	
	//JK
	public function addJK()
	{

		// Function save
		$data = [
			'JKnama' 				=> 	$this->request->getPost('jk'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveJK($data);
		session()->setFlashData('success','Jenis Ketetapan Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/JenisKetepan');
	}

	public function EditJK()
	{
		$id_JK = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdJK($id_JK);
		echo json_encode($data);

	}

	public function updateJK()
	{
		$id = $this->request->getPost('idJK');

		// Function save
		$data = [
			'JKnama' 				=> 	$this->request->getPost('jk'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateJK($data,$id);
		session()->setFlashData('success','Jenis Ketetapan Berhasil di update');
		return redirect()->to(base_url().'/SetDB/JenisKetepan');
	}

	public function deleteJK($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->confdb->delete_JK($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/JenisKetepan'));
        }
    }

    //Jenis Permohonan
    public function addJP()
	{

		// Function save
		$data = [
			'JenisPemohon' 				=> 	$this->request->getPost('jp'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveJP($data);
		session()->setFlashData('success','Jenis Permohonan Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/JenisPermohonan');
	}

	public function EditJP()
	{
		$id_JP = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdJP($id_JP);
		echo json_encode($data);

	}

	public function updateJP()
	{
		$id = $this->request->getPost('idJP');

		// Function save
		$data = [
			'JenisPemohon' 				=> 	$this->request->getPost('jp'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateJP($data,$id);
		session()->setFlashData('success','Jenis Permohonan Berhasil di update');
		return redirect()->to(base_url().'/SetDB/JenisPermohonan');
	}

	public function deleteJP($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->confdb->delete_JP($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/JenisPermohonan'));
        }
    }

    //Jenis Pajaks
    public function addJenisPajak()
	{

		// Function save
		$data = [
			'idJenisPemohon'			=>  $this->request->getPost('jenis_permohonan'),
			'NamajenisPajak' 			=> 	$this->request->getPost('jenis_pajak'),
			'alert1JangkaMaksimal'		=> 	$this->request->getPost('alert1'),
			'alert2IKU'					=> 	$this->request->getPost('alert2'),
			'alert3MitigasiResiko'		=> 	$this->request->getPost('alert3'),
			'keterangan'				=> 	$this->request->getPost('keterangan'),
		];

		

		// print_r($data);
		// die();
		$this->confdb->saveJenisPajak($data);
		session()->setFlashData('success','Jenis Pajak Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/JenisPajak');
	}

	public function EditJenisPajak()
	{
		$id_JenisPajak = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdJenisPajak($id_JenisPajak); 
		echo json_encode($data);

	}

	public function updateJenisPajak()
	{
		$id = $this->request->getPost('idJenisPajak');

		// Function save
		$data = [
			'idJenisPemohon'				=>  $this->request->getPost('JenisPermohonan'),
			'NamajenisPajak' 				=> 	$this->request->getPost('jenis_pajak'),
			'alert1JangkaMaksimal'			=> 	$this->request->getPost('alert1'),
			'alert2IKU'						=> 	$this->request->getPost('alert2'),
			'alert3MitigasiResiko'			=> 	$this->request->getPost('alert3'),
			'keterangan'					=> 	$this->request->getPost('keterangan'),
		];
		// print_r($data);
		// die();
		$this->confdb->updateJenisPajak($data,$id);
		session()->setFlashData('success','Jenis Pajak Berhasil di update');
		return redirect()->to(base_url().'/SetDB/JenisPajak');
	}

	public function deleteJenisPajak($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->confdb->delete_JenisPajak($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/JenisPajak'));
        }
    }
	
}

?>