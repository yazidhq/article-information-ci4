<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// user
$routes->get('/', 'User::user_home');

// admin
$routes->get('/admin', 'Admin::admin_home', ['filter' => 'admin']);
$routes->get('/admin/mading', 'Admin::mading', ['filter' => 'admin']);
$routes->get('/admin/tambah_artikel', 'Admin::tambah_artikel', ['filter' => 'admin']);
$routes->get('/admin/proses_tambah', 'Admin::proses_tambah', ['filter' => 'admin']);
$routes->get('/admin/detail_artikel', 'Admin::detail_artikel', ['filter' => 'admin']);
$routes->get('/admin/detail_artikel/(:any)', 'Admin::detail_artikel/$1', ['filter' => 'admin']);
$routes->get('/admin/hapus_artikel', 'Admin::hapus_artikel', ['filter' => 'admin']);
$routes->get('/admin/tampil_laporan', 'Admin::tampil_laporan', ['filter' => 'admin']);
$routes->get('/admin/tampil_komentar', 'Admin::tampil_komentar', ['filter' => 'admin']);
$routes->get('/admin/tampil_komentar/(:any)', 'Admin::tampil_komentar/$1', ['filter' => 'admin']);
$routes->get('/admin/hapus_komentar', 'Admin::hapus_komentar', ['filter' => 'admin']);
$routes->get('/admin/logout', 'Admin::logout', ['filter' => 'admin']);



// Admin
$routes->get('/Admin', 'Admin::admin_home', ['filter' => 'admin']);
$routes->get('/Admin/mading', 'Admin::mading', ['filter' => 'admin']);
$routes->get('/Admin/tambah_artikel', 'Admin::tambah_artikel', ['filter' => 'admin']);
$routes->get('/Admin/proses_tambah', 'Admin::proses_tambah', ['filter' => 'admin']);
$routes->get('/Admin/detail_artikel', 'Admin::detail_artikel', ['filter' => 'admin']);
$routes->get('/Admin/detail_artikel/(:any)', 'Admin::detail_artikel/$1', ['filter' => 'admin']);
$routes->get('/Admin/hapus_artikel', 'Admin::hapus_artikel', ['filter' => 'admin']);
$routes->get('/Admin/tampil_laporan', 'Admin::tampil_laporan', ['filter' => 'admin']);
$routes->get('/Admin/tampil_komentar', 'Admin::tampil_komentar', ['filter' => 'admin']);
$routes->get('/Admin/tampil_komentar/(:any)', 'Admin::tampil_komentar/$1', ['filter' => 'admin']);
$routes->get('/Admin/hapus_komentar', 'Admin::hapus_komentar', ['filter' => 'admin']);
$routes->get('/Admin/logout', 'Admin::logout', ['filter' => 'admin']);


/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
