<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Frontend::index'); 
$routes->get('admin/login', 'Admin\Auth::login');        // Show login form
$routes->post('admin/login', 'Admin\Auth::login');   
$routes->get('admin/logout', 'Admin\Auth::logout'); 
$routes->get('admin/dashboard', 'Admin\Dashboard::index');

$routes->get('admin/content/add', 'Admin\Dashboard::content');
$routes->post('admin/content/store', 'Admin\Dashboard::store');
$routes->get('admin/content/list', 'Admin\Dashboard::list');

$routes->get('admin/content/edit/(:num)', 'Admin\Dashboard::edit/$1');
$routes->post('admin/content/update/(:num)', 'Admin\Dashboard::update/$1');
$routes->get('admin/content/delete/(:num)', 'Admin\Dashboard::delete/$1');





