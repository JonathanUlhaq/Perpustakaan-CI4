<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/user', 'User::index');
$routes->get('/forms', 'User::form');
$routes->get('/cart', 'User::cart');
$routes->get('/peminjaman', 'User::peminjaman');

$routes->get('/tabel', 'Dashboard::table');
$routes->get('/tambah', 'Dashboard::tambah');
$routes->get('/riwayat', 'Dashboard::riwayat');
$routes->get('/anggota', 'Dashboard::anggota');
$routes->get('/genre', 'Genre::index');
$routes->get('/edit/(:any)', 'Dashboard::edit/$1');
$routes->get('/detail/(:any)', 'Dashboard::detail/$1');
$routes->get('/detailRiw/(:any)', 'Dashboard::detailRiw/$1');
$routes->get('/delete/(:any)', 'Dashboard::delete/$1');


$routes->get('/egenre/(:any)', 'Genre::edit/$1');
$routes->get('/edelete/(:any)', 'Genre::deletes/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
