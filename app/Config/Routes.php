<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Home
$routes->get('/', 'Home::index');
$routes->get('/store', 'Store::index');
$routes->get('/store/(:any)', 'Store::detail/$1');

// Login
$routes->get('/signup', 'SignUp::index');
$routes->post('/signup', 'SignUp::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

// Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'authGuard']);
$routes->get('/admin/tambah_barang', 'Product::index', ['filter' => 'authGuard']);
$routes->post('/admin/tambah_barang', 'Product::create', ['filter' => 'authGuard']);
$routes->get('/admin/edit_barang/(:any)', 'Product::edit/$1', ['filter' => 'authGuard']);
$routes->post('/admin/edit_barang/(:any)', 'Product::edit_data/$1', ['filter' => 'authGuard']);
$routes->get('/admin/hapus_barang/(:any)', 'Product::delete_barang/$1', ['filter' => 'authGuard']);
