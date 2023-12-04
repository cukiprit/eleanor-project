<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$data = uri_string();

//  Home
$routes->get('/', 'Home::index');
$routes->get('/store', 'Store::index');
$routes->get('/store/(:any)', 'Store::detail/$1');
$routes->get('/contact', 'Contact::index');

// Login
$routes->get('/signup', 'SignUp::index');
$routes->post('/signup', 'SignUp::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

// Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'authGuard']);
$routes->get('/admin/get-chart', 'Admin::chart', ['filter' => 'authGuard']);

// Super Admin Add user
$routes->get('/admin/user', 'User::index', ['filter' => ['authGuard', 'superAdminGuard']]);
$routes->post('/admin/tambah_user', 'User::create', ['filter' => ['authGuard', 'superAdminGuard']]);
$routes->get('/admin/edit_user/(:any)', 'User::edit/$1', ['filter' => ['authGuard', 'superAdminGuard']]);
$routes->post('/admin/edit_user/(:any)', 'User::edit_data/$1', ['filter' => ['authGuard', 'superAdminGuard']]);
$routes->delete('/admin/hapus_user/(:any)', 'User::delete_user/$1', ['filter' => ['authGuard', 'superAdminGuard']]);

// Admin Barang
$routes->get('/admin/tambah_barang', 'Product::index', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->post('/admin/tambah_barang', 'Product::create', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->get('/admin/edit_barang/(:any)', 'Product::edit/$1', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->post('/admin/edit_barang/(:any)', 'Product::edit_data/$1', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->delete('/admin/hapus_barang/(:any)', 'Product::delete_barang/$1', ['filter' => ['authGuard', 'adminOneGuard']]);

// Admin Barang Masuk
$routes->get('/admin/barang_masuk', 'ProductIn::index', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->post('/admin/barang_masuk', 'ProductIn::create', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->get('/admin/edit_barang_masuk/(:any)', 'ProductIn::edit/$1', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->post('/admin/edit_barang_masuk/(:any)', 'ProductIn::edit_data/$1', ['filter' => ['authGuard', 'adminOneGuard']]);
$routes->delete('/admin/hapus_barang_masuk/(:any)', 'ProductIn::delete_barang/$1', ['filter' => ['authGuard', 'adminOneGuard']]);

// Admin Barang Keluar
$routes->get('/admin/barang_keluar', 'ProductOut::index', ['filter' => ['authGuard', 'adminTwoGuard']]);
$routes->post('/admin/barang_keluar', 'ProductOut::create', ['filter' => ['authGuard', 'adminTwoGuard']]);
$routes->get('/admin/edit_barang_keluar/(:any)', 'ProductOut::edit/$1', ['filter' => ['authGuard', 'adminTwoGuard']]);
$routes->post('/admin/edit_barang_keluar/(:any)', 'ProductOut::edit_data/$1', ['filter' => ['authGuard', 'adminTwoGuard']]);
$routes->delete('/admin/hapus_barang_keluar/(:any)', 'ProductOut::delete_barang/$1', ['filter' => ['authGuard', 'adminTwoGuard']]);
