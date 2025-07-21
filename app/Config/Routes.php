<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Frontend::index'); // Frontend Home Page
$routes->match(['get', 'post'], 'admin/login', 'Admin\Auth::login'); // Admin Login
$routes->get('admin/logout', 'Admin\Auth::logout'); // Admin Logout
$routes->get('admin/dashboard', 'Admin\Dashboard::index', ['filter' => 'adminauth']); // Admin Dashboard (protected)

