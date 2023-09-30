<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/auth/logout', 'Auth::logout');

$routes->get('/user', 'User::index');
$routes->get('/user/datasiswa', 'User::tambah_siswa');
$routes->post('/siswa/save', 'Siswa::save');

$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/datasiswa', 'Admin::siswa');
$routes->get('/admin/tambah/siswa', 'Admin::tambah_siswa');
$routes->post('/siswa/admin/save', 'Siswa::saveadmin');

$routes->delete('/siswa/(:num)', 'Siswa::delete/$1');
$routes->get('/siswa/edit/(:num)', 'Siswa::edit/$1'); 
$routes->post('/siswa/update/(:num)', 'Siswa::update/$1');