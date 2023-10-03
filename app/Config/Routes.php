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
$routes->post('/admin/tambah_barang', 'Product::index', ['filter' => 'authGuard']);
$routes->put('/admin/(:any)', 'Admin::edit/$1', ['filter' => 'authGuard']);
$routes->delete('/admin/(:any)', 'Admin::delete/$1', ['filter' => 'authGuard']);
