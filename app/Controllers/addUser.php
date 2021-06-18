<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_manageuser;

class addUser extends Controller
{
	public function __construct()
	{
		$this->user = new model_manageuser();	
	}

	public function index()
	{

		$session = session();

		$model = new model_manageuser();

		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage User';

		$data['listuser'] = $model->getListUser()->getResult();
		$data['listdepartemen'] = $model->getListDepartmen()->getResult();

		$data['tingkat_level'] = $model->get_tingkatLevel()->getResult();


		// if($session->get('PENUserLevel')!="Level 2"){
		// 	session()->setFlashData('warning','Anda tidak punya hak akses');
		// 	return redirect()->to(base_url().'/dashboard');
		// }else{
		// 	 return view('users/v_users',$data);
		// }

        //print_r($data);
		return view('users/v_users',$data);
	}
	
	public function viewDepartemen() {
		$session = session();
		$data['full_name'] = $session->get('PENama');
		$data['icon'] = 'ion ion-home';
		$data['title'] = 'Manage Jenis Pajak';
		
		$data['listdepartemen'] = $this->user->getListDepartmen()->getResult();

		// if($session->get('PENUserLevel')!="Level 2"){
		// 	session()->setFlashData('warning','Anda tidak punya hak akses');
		// 	return redirect()->to(base_url().'/dashboard');
		// }else{
		// 	 return view('users/v_departemen',$data);
		// }
		return view('users/v_departemen',$data);
	}

	public function saveUser()
	{
		$password = $this->request->getPost('password');
		$password = password_hash($password, PASSWORD_DEFAULT);

		// Function save
		$data = [
			'PENNIP' 				=> 	$this->request->getPost('nip'),
			'PENNama'				=>	$this->request->getPost('nama'),
			'PENDept'				=>	$this->request->getPost('departemen'),
			'PENPassword'			=>	$password,
			'PENUserLevelId'		=> 	$this->request->getPost('id_grouplevel'),
			'PENUserLevel'			=>  $this->request->getPost('group_level'),
			
		];
		// print_r($data);
		// die();
		
		$this->user->saveUser($data);
		session()->setFlashData('success','Data user Berhasil di entri');
		return redirect()->to(base_url().'/addUser');
	}

	public function EditUser()
	{
		$id_User = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->user->get_IdUser($id_User);
		echo json_encode($data);

	}

	public function updateUser()
	{
		$id = $this->request->getPost('IdUser');

		// Function save
		$data = [
			'PENNIP' 				=> 	$this->request->getPost('nip'),
			'PENNama'				=> 	$this->request->getPost('nama'),
			'PENDept'				=> 	$this->request->getPost('departemen'),
			'PENUserLevelId'		=> 	$this->request->getPost('id_grouplevel'),
			'PENUserLevel'			=> 	$this->request->getPost('group_level'),
			'PENisAktif'			=> 	$this->request->getPost('isActive'),
		];
		// print_r($data);
		// die();
		$this->user->UpdateUser($data,$id);
		session()->setFlashData('success','User Berhasil di update');
		return redirect()->to(base_url().'/addUser');
	}

	//Reset Password
	public function GetIDUser()
	{
		$id_User = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->user->GetIDUser($id_User);
		echo json_encode($data);

	}

	
	public function ResetPassword()
	{
		$IdUser = service('request')->getPost('IdUser');
		#print_r($id_substg);

		$password1 = $this->request->getPost('password1');
		$password2 = $this->request->getPost('password2');



		if($password1 != $password2){
			session()->setFlashData('warning','Gagal!, Password1 dan Password2 tidak sama');
			return redirect()->to(base_url().'/addUser');
		}else{
			$password = password_hash($password1, PASSWORD_DEFAULT);

			$data = [
				'PENPassword'			=>	$password,	
			];

			$data = $this->user->ResetPassword($data, $IdUser);
			session()->setFlashData('success','Password sudah diupdate');
			return redirect()->to(base_url().'/addUser');
		}

	}



	public function deleteUser($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->user->delete_User($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted user berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/addUser'));
        }
    }

    //for view departemen
	public function view_departemen()
	{

		$session = session();

		$data['full_name'] = $session->get('PENNama');
		$data['icon'] = 'ion ion-ios-toggle';
		$data['title'] = 'Detail Departemen';

	
		$data['listdepartemen'] = $this->user->getListDepartmen()->getResult();
		//print_r($data);
        return view('users/v_departemen', $data);
	}


	public function AddDepartemen()
	{
	
		// Function save
		$data = [
			'nama'				=>	$this->request->getPost('departemen'),	
		];
		// print_r($data);
		// die();
		$this->user->saveDept($data);
		session()->setFlashData('success','Data Departemen Berhasil di entri');
		return redirect()->to(base_url().'/addUser/view_departemen');
	}

	public function EditDept()
	{
		$idDept = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->user->get_IdDept($idDept);
		echo json_encode($data);

	}

	public function UpdateDepartemen()
	{
		$id = $this->request->getPost('idDept');

		// Function save
		$data = [
			'nama' 				=> 	$this->request->getPost('departemen'),
		];
		// print_r($data);
		// die();
		$this->user->UpdateDept($data,$id);
		session()->setFlashData('success','Departemen Berhasil di update');
		return redirect()->to(base_url().'/addUser/view_departemen');
	}

	public function deleteDept($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $action_delete = $this->user->delete_Dept($id);

        // Jika berhasil melakukan hapus
        if($action_delete)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted Departemen berhasil');
            // Redirect ke halaman product
            return redirect()->to(base_url('/addUser/view_departemen'));
        }
    }

    public function GetDept()
	{
		//$idDept = service('request')->getPost('id');
		#print_r($id_substg);

		$data = $this->user->getDept();
		//$data['listdepartemen'] = $this->user->getListDepartmen()->getResult();
		echo json_encode($data);

	}
	
}

?>