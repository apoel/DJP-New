<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Notification;
use App\Models\model_login;


class Login extends Controller
{
	protected $helpers = ['form','date'];
	protected $session = null;
	protected $request = null;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		//$this->notif = new Notification();
		$this->auth = new model_login;

	}

	public function index()
	{

		$model = new model_login();

		if (!isset($_SESSION['user_logged_in'])) {
            global $dataIndex;
			$dataIndex['title'] = "Login # DJP";
			$this->session->removeTempdata('message');
			return view('login', $dataIndex);
		}

		return view('login', $dataIndex);

	}

	public function login()
	{

		$session = session();
		$model = new model_login();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //echo $username."-".$password;
        // $mypassword = password_hash($password, PASSWORD_DEFAULT);
        // echo $mypassword;

        $data = $model->where('PENNIP', $username)->first();


        if($data){  //cek account ada/tidak
            if($data['PENisAktif']==1){
                    $pass = $data['PENPassword'];
                    $verify_pass = password_verify($password, $pass);
                    //echo $verify_pass."--";
                    if($verify_pass){
                        $ses_data = [
                            'PENid'         => $data['PENid'],
                            'PENNIP'        => $data['PENNIP'],
                            'PENNama'       => $data['PENNama'],
                            'PENDept'       => $data['PENDept'],
                            'PENUserLevel'  => $data['PENUserLevel'], 
                            'logged_in'     => TRUE
                        ];
                        $session->set($ses_data);
                        return redirect()->to(base_url().'/dashboard');
                    }else{
                        session()->setFlashData('warning','Username Password Salah');
                        return redirect()->to(base_url().'/login');
                    }
            }elseif($data['PENisAktif']==0){
                session()->setFlashData('warning','Account anda tidak aktif');
                return redirect()->to(base_url().'/login');
            }
        }else{
            session()->setFlashData('warning','Account tidak ditemukan');
            return redirect()->to(base_url().'/login');
        }


	}


	public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashData('info','Account tidak ditemukan');
        return redirect()->to(base_url().'/login');
    }


}

