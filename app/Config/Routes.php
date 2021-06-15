<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'Login::index');
$routes->get('/home', 'Home::index',['filter' => 'auth']);
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);

$routes->get('/pengajuan', 'Pengajuan::index',['filter' => 'auth']);
$routes->get('/pengajuansub', 'PengajuanSub::index',['filter' => 'auth']);
$routes->get('/pengajuan/detail_pengajuan/', 'Pengajuan::detail_pengajuan',['filter' => 'auth']);
$routes->get('/pengajuansub/detail_pengajuansub/', 'PengajuanSub::detail_pengajuansub',['filter' => 'auth']);

$routes->get('/SetDB/JenisPermohonan', 'SetDB::index',['filter' => 'auth']);
$routes->get('/SetDB/JenisPajak', 'SetDB::JenisPajak',['filter' => 'auth']);
$routes->get('/SetDB/JenisKetepan', 'SetDB::JenisKetepan',['filter' => 'auth']);
$routes->get('/SetDB/SubSTGPajak', 'SetDB::SubSTGPajak',['filter' => 'auth']);

$routes->get('/users/viewUsers', 'addUser::index',['filter' => 'auth']);
$routes->get('/users/viewDepartemen', 'addUser::viewDepartemen',['filter' => 'auth']);


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

