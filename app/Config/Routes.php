<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::register');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');


$routes->group('kategori', static function ($routes) {
    $routes->get('', 'Kategori::index');
    $routes->get('create', 'Kategori::create');
    $routes->post('kategori/store', 'Kategori::store');
    $routes->get('edit/(:num)', 'Kategori::edit/$1');
    $routes->post('update/(:num)', 'Kategori::update/$1');
    $routes->get('delete/(:num)', 'Kategori::delete/$1');
});
$routes->group('modul', static function ($routes) {
    $routes->get('', 'Mpraktikum::index');
    $routes->get('create', 'Mpraktikum::create');
    $routes->post('modul/store', 'Mpraktikum::store');
    $routes->get('edit/(:num)', 'Mpraktikum::edit/$1');
    $routes->post('update/(:num)', 'Mpraktikum::update/$1');
    $routes->get('delete/(:num)', 'Mpraktikum::delete/$1');
});
$routes->group('stok', static function ($routes) {
    $routes->get('', 'Stokmodul::index');
    $routes->get('create', 'Stokmodul::create');
    $routes->post('stok/store', 'Stokmodul::store');
    $routes->get('edit/(:num)', 'Stokmodul::edit/$1');
    $routes->post('update/(:num)', 'Stokmodul::update/$1');
    $routes->get('delete/(:num)', 'Stokmodul::delete/$1');
});
$routes->group('detailtransaksi', static function ($routes) {
    $routes->get('', 'Detailtransaksi::index');
    $routes->get('create', 'Detailtransaksi::create');
    $routes->post('detailtransaksi/store', 'Detailtransaksi::store');
    $routes->get('edit/(:num)', 'Detailtransaksi::edit/$1');
    $routes->post('update/(:num)', 'Detailtransaksi::update/$1');
    $routes->get('delete/(:num)', 'Detailtransaksi::delete/$1');
});
$routes->group('transaksi', static function ($routes) {
    $routes->get('', 'Transaksi::index');
    $routes->get('create', 'Transaksi::create');
    $routes->post('transaksi/store', 'Transaksi::store');
    $routes->get('edit/(:num)', 'Transaksi::edit/$1');
    $routes->post('update/(:num)', 'Transaksi::update/$1');
    $routes->get('delete/(:num)', 'Transaksi::delete/$1');
});
$routes->group('mahasiswa', static function ($routes) {
    $routes->get('', 'Mahasiswa::index');
    $routes->get('create', 'Mahasiswa::create');
    $routes->post('store', 'Mahasiswa::store');
    $routes->get('edit/(:num)', 'Mahasiswa::edit/$1');
    $routes->post('update/(:num)', 'Mahasiswa::update/$1');
    $routes->get('delete/(:num)', 'Mahasiswa::delete/$1');
});
$routes->group('prodi', static function ($routes) {
    $routes->get('', 'Programstudi::index');
    $routes->get('create', 'Programstudi::create');
    $routes->post('prodi/store', 'Programstudi::store');
    $routes->get('edit/(:num)', 'Programstudi::edit/$1');
    $routes->post('update/(:num)', 'Programstudi::update/$1');
    $routes->get('delete/(:num)', 'Programstudi::delete/$1');
});
$routes->group('user', static function ($routes) {
    $routes->get('', 'User::index');
    $routes->get('create', 'User::create');
    $routes->post('user/store', 'User::store');
    $routes->get('edit/(:num)', 'User::edit/$1');
    $routes->post('update/(:num)', 'User::update/$1');
    $routes->get('delete/(:num)', 'User::delete/$1');
});

// app/Config/Routes.php

$routes->group('auth', function ($routes) {
    // Route for showing the registration page (GET request)
    // Route for storing registration data (POST request)
    $routes->post('storeRegister', 'Auth::storeRegister');

    // Route for showing the login page (GET request)
    // Route for handling login authentication (POST request)
    $routes->post('authenticate', 'Auth::authenticate');

    // Route for logging out (POST request)
    $routes->post('logout', 'Auth::logout');
});
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
