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

        $data['getPengajuanSUB'] = $dashboard->getTotalPengajuanSUB();
        $data['getPengajuanSUBClosing'] = $dashboard->getPengajuanSUBClosing();
        $data['getPengajuanSubAlert'] = $dashboard->getPengajuanSubAlert();
        $data['getPengajuanLateSub'] = $dashboard->getPengajuanLateSub();

        //Dashboard Pengajuan STG
        $data['getPengajuanSTG'] = $dashboard->getTotalPengajuanSTG();
        $data['getPengajuanSTGClosing'] = $dashboard->getPengajuanSTGClosing();
        $data['getPengajuanSTGAlert'] = $dashboard->getPengajuanSTGAlert();
        $data['getPengajuanLateSTG'] = $dashboard->getPengajuanLateSTG();
        
        //detail dashboard
        //$data['detail_closing'] = $dashboard->detail_closing();

        return view('dashboard',$data);
    }

    //Pengajuan
    public function detail_closing() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'Pengajuan Status Closing'
        ];

        

        $data['pengajuan_closing'] = $this->dashboard->getDashboardPengajuanClosing();
       
        //print_r($data);
        return view('dashboard/pengajuan_closing', $data);

    }

    //Pengajuan
    public function detail_alert() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'Pengajuan Status Alert'
        ];

        $data['detail_alert'] = $this->dashboard->getDashboardPengajuanAlert();
       
        //print_r($data);
        return view('dashboard/detail_alert', $data);
    }

    //Pengajuan
    public function detail_late() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'Pengajuan Status Terlambat'
        ];

        $data['detail_late'] = $this->dashboard->getDashboardPengajuanLate();
       
        //print_r($data);
        return view('dashboard/detail_late', $data);
    }

    //Pengajuan SUB
    public function detail_closingsub() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'SUB Closing'
        ];

        $data['pengajuan_closingsub'] = $this->dashboard->getDashboardPengajuanClosingsub();
       
        //print_r($data);
        return view('dashboard/pengajuan_closingsub', $data);

    }

    
    public function detail_closingstg() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'STG Closing'
        ];

        $data['pengajuan_closingstg'] = $this->dashboard->getDashboardPengajuanClosingstg();
       
        //print_r($data);
        return view('dashboard/pengajuan_closingstg', $data);

    }
    //Alert Sub
    public function detail_alertsub() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'SUB Alert'
        ];

        $data['detail_alertsub'] = $this->dashboard->getDashboardPengajuanAlertSub();
       
        //print_r($data);
        return view('dashboard/detail_alertsub', $data);
    }

    //Alert STG
    public function detail_alertstg() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'STG Alert'
        ];

        $data['detail_alertstg'] = $this->dashboard->getDashboardPengajuanAlertStg();
       
        //print_r($data);
        return view('dashboard/detail_alertstg', $data);
    }

    //late sub
    public function detail_latesub() 
    {

        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'SUB Terlambat'
        ];

        $data['detail_latesub'] = $this->dashboard->getDashboardPengajuanLateSub();
       
        //print_r($data);
        return view('dashboard/detail_latesub', $data);
    }

    public function detail_latestg() 
    {
        $session = session();
        $data = [
            'full_name' => $session->get('PENNama'),
            'icon'      => 'ion ion-ios-toggle',
            'title'     => 'STG Terlambat'
        ];

        $data['detail_latestg'] = $this->dashboard->getDashboardPengajuanLateStg();
       
        //print_r($data);
        return view('dashboard/detail_latestg', $data);
    }

}