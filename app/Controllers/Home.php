<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        $data = [
            'full_name' => 'Admin',
            'avatar'    => base_url().'/assets/dist/img/avatar.png',
            'icon'      => 'ion ion-home',
            'title'     => 'Home'
        ];
        return view('home',$data);
    }

}