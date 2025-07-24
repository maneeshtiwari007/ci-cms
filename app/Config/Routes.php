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

