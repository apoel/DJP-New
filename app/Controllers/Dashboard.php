<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_dashboard;

class Dashboard extends BaseController {

	public function __construct()
	{

		$this->dashboard = new model_dashboard();
	} 
    public function index() 
    {
        $session = session();

        //print_r($session->get('PENNIP'))."-====";

    	$dashboard = new model_dashboard();

        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-home',
            'title'     => 'Dashboard'
        ];

        //Dashboard Pengajuan
        $data['getPengajuan'] = $dashboard->getTotalPengajuan();
        $data['getPengajuanClosing'] = $dashboard->getPengajuanClosing();
        $data['getPengajuanAlert'] = $dashboard->getPengajuanAlert();
        $data['getPengajuanLate'] = $dashboard->getPengajuanLate();

        //Dashboard Pengajuan SUB/STG
        $data['getPengajuanSTG'] = $dashboard->getTotalPengajuanSTG();
        $data['getPengajuanSTGClosing'] = $dashboard->getPengajuanSTGClosing();
        $data['getPengajuanSubAlert'] = $dashboard->getPengajuanSubAlert();
        $data['getPengajuanLateSub'] = $dashboard->getPengajuanLateSub();
        
        //detail dashboard
        //$data['detail_closing'] = $dashboard->detail_closing();

        return view('dashboard',$data);
    }

    //Pengajuan
    public function detail_closing() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan Status Closing';

        $data['pengajuan_closing'] = $this->dashboard->getDashboardPengajuanClosing();
       
        //print_r($data);
        return view('dashboard/pengajuan_closing', $data);

    }

    //Pengajuan
    public function detail_alert() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan Status Alert';

        $data['detail_alert'] = $this->dashboard->getDashboardPengajuanAlert();
       
        //print_r($data);
        return view('dashboard/detail_alert', $data);
    }

    //Pengajuan
    public function detail_late() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan Status Terlambat';

        $data['detail_late'] = $this->dashboard->getDashboardPengajuanLate();
       
        //print_r($data);
        return view('dashboard/detail_late', $data);
    }

    //Pengajuan SUB STG
    public function detail_closingsub() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan SUB/STG Status Closing';

        $data['pengajuan_closingsub'] = $this->dashboard->getDashboardPengajuanClosingsub();
       
        //print_r($data);
        return view('dashboard/pengajuan_closingsub', $data);

    }

    //Pengajuan SUB STG
    public function detail_alertsub() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan SUB/STG Status Alert';

        $data['detail_alertsub'] = $this->dashboard->getDashboardPengajuanAlertSub();
       
        //print_r($data);
        return view('dashboard/detail_alertsub', $data);
    }

    public function detail_latesub() 
    {
        $data['full_name'] = 'Mangapul';
        $data['avatar'] = base_url().'/assets/dist/img/avatar.png';
        $data['icon'] = 'ion ion-ios-toggle';
        $data['title'] = 'Pengajuan SUB/STG Status Terlambat';

        $data['detail_latesub'] = $this->dashboard->getDashboardPengajuanLateSub();
       
        //print_r($data);
        return view('dashboard/detail_latesub', $data);
    }

}