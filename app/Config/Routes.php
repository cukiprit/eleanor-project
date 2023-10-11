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
$routes->post('/signedup', 'SignUp::signup');
$routes->get('/login', 'Login::index');
$routes->post('/loggedin', 'Login::login');
$routes->get('/logout', 'Login::logout');

// Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'authGuard']);
$routes->get('/admin/tambah_barang', 'Product::index', ['filter' => 'authGuard']);
$routes->post('/admin/tambah_barang', 'Product::create', ['filter' => 'authGuard']);
$routes->put('/admin/(:any)', 'Admin::edit/$1', ['filter' => 'authGuard']);
$routes->delete('/admin/(:any)', 'Admin::delete/$1', ['filter' => 'authGuard']);
