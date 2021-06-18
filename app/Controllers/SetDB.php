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
		
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_jenisketetapan', $data);
		}

		//return view('setdb/v_jenisketetapan', $data);
       
	}

	public function SetArsip()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Arsip';

		// print_r($data);
		// die();
		$data['getArsip'] = $this->confdb->getArsip()->getResult();
		
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_arsip', $data);
		}  
	}

	public function TujuanRespon()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Tujuan Respon';

		// print_r($data);
		// die();
		$data['getResponKanwil'] = $this->confdb->getResponKanwil()->getResult();
		
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_tujuanrespon', $data);
		}  
	}

	//AmarKeputusan
	public function Keputusan()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Keputusan';

		// print_r($data);
		// die();
		$data['getKeputusan'] = $this->confdb->getKeputusan()->getResult();
		
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_keputusan', $data);
		}  
	}

	public function JenisEkspedisi()
	{

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Jenis Ekspedisi';

		// print_r($data);
		// die();
		$data['getEkspedisi'] = $this->confdb->getEkspedisi()->getResult();
		
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_jenisekspedisi', $data);
		}  
	}

	public function MataUang()
	{

		$id = service('request')->getPost('id');

		$session = session();
		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Mata Uang';


		$data['MataUang'] = $this->confdb->MataUang()->getResult();
		
		if($session->get('PENUserLevel')!="Level2"){
			session()->setFlashData('warning','Anda tidak punya hak akses');
			return redirect()->to(base_url().'/dashboard');
		}else{
			 return view('setdb/v_MataUang', $data);
		}
	}
	
	public function addMataUang()
	{

		// Function save
		$data = [
			'MataUang' 				=> 	$this->request->getPost('mata_uang'),			
		];
		// print_r($data);
		// die();
		$this->confdb->saveMataUang($data);
		session()->setFlashData('success','Mata Uang Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/MataUang');
	}

	public function EditMataUang()
	{
		$id_matauang = service('request')->getPost('id');
		$data = $this->confdb->get_IdMataUang($id_matauang);
		echo json_encode($data);

	}


	public function updateMataUang()
	{
		$id = $this->request->getPost('id_matauang');

		// Function save
		$data = [
			'MataUang' 				=> 	$this->request->getPost('nama'),
		];
		// print_r($id."--");
		// die();

		$this->confdb->UpdateMataUang($data,$id);
		session()->setFlashData('success','Mata Uang Berhasil di update');
		return redirect()->to(base_url().'/SetDB/MataUang');
	}

	public function delete($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->confdb->delete_matauang($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/MataUang'));
        }
    }
	
	
	public function addArsip()
	{

		// Function save
		$data = [
			'SUBArsipName' 		=> 	$this->request->getPost('arsip'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveArsip($data);
		session()->setFlashData('success','Arsip Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/SetArsip');
	}

	//Tujuan Respon
	public function addTujuanRespon()
	{

		// Function save
		$data = [
			'RESPTUnama' 		=> 	$this->request->getPost('tujuan_respon'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveTujuanRespon($data);
		session()->setFlashData('success','Tujuan Respon Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/TujuanRespon');
	}

	//Add Keputusan
	public function addKeputusan()
	{

		// Function save
		$data = [
			'AmarKeputusan' 		=> 	$this->request->getPost('nama_keputusan'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveKeputusan($data);
		session()->setFlashData('success','Keputusan Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/Keputusan');
	}

	//add jenis ekspedisi
	public function addJE()
	{

		// Function save
		$data = [
			'JEnamaEkspedisi' 				=> 	$this->request->getPost('nama_ekspedisi'),
		];
		// print_r($data);
		// die();
		$this->confdb->saveJE($data);
		session()->setFlashData('success','Ekspedisi Berhasil di entri');
		return redirect()->to(base_url().'/SetDB/JenisEkspedisi');
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

	//ajax edit Arsip
	public function EditArsip()
	{
		$id = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdArsip($id);
		echo json_encode($data);

	}

	//ajax edit tujuan respon
	public function EditTR()
	{
		$id_TR = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdTR($id_TR);
		echo json_encode($data);

	}

	//Ajax Edit Keputusan
	public function EditKep()
	{
		$id_Kep = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdKep($id_Kep);
		echo json_encode($data);

	}

	//ajax edit ekspedisi 
	public function EditJE()
	{
		$id_JE = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->confdb->get_IdJE($id_JE);
		echo json_encode($data);

	}

	
	//Update Arsip
	public function updateArsip()
	{
		$id = $this->request->getPost('idArsip');

		// Function save
		$data = [
			'SUBArsipName' 				=> 	$this->request->getPost('arsip'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateArsip($data,$id);
		session()->setFlashData('success','Arsip Berhasil di update');
		return redirect()->to(base_url().'/SetDB/SetArsip');
	}

	//Update Tujuan Respon
	public function updateTR()
	{
		$id = $this->request->getPost('idTR');

		// Function save
		$data = [
			'RESPTUnama' 				=> 	$this->request->getPost('tujuan_respon'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateTR($data,$id);
		session()->setFlashData('success','Tujuan Respon Berhasil di update');
		return redirect()->to(base_url().'/SetDB/TujuanRespon');
	}

	//Update Keputusan
	public function updateKep()
	{
		$id = $this->request->getPost('idKep');

		// Function save
		$data = [
			'AmarKeputusan' 				=> 	$this->request->getPost('nama_keputusan'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateKep($data,$id);
		session()->setFlashData('success','Keputusan Berhasil di update');
		return redirect()->to(base_url().'/SetDB/Keputusan');
	}

	//update ekspedisi
	public function updateJE()
	{
		$id = $this->request->getPost('idJE');

		// Function save
		$data = [
			'JEnamaEkspedisi' 				=> 	$this->request->getPost('nama_ekspedisi'),
		];
		// print_r($data);
		// die();
		$this->confdb->UpdateJE($data,$id);
		session()->setFlashData('success','Ekspedisi Berhasil di update');
		return redirect()->to(base_url().'/SetDB/JenisEKspedisi');
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

	
	public function deleteArsip($id)
    {
        $action_delete = $this->confdb->delete_Arsip($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/SetArsip'));
        }
    }

	public function deleteTR($id)
    {
        $action_delete = $this->confdb->delete_TR($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/TujuanRespon'));
        }
    }
	//delete Keputusan
	public function deleteKep($id)
    {
        $action_delete = $this->confdb->delete_Kep($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/Keputusan'));
        }
    }

	//delete ekspedisi
	public function deleteJE($id)
    {
        $action_delete = $this->confdb->delete_JE($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Hapus data berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/SetDB/JenisEkspedisi'));
        }
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