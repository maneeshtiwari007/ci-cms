<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Frontend::index');
$routes->get('/calculate-price', 'Frontend::calculatePrice');
$routes->get('/why-choose-us', 'Frontend::whyChooseUs');
$routes->get('/careers', 'Frontend::careers');  
$routes->get('/web-development', 'Frontend::webDevelopment'); 
$routes->get('/calculate/price', 'Frontend::calculatePrice'); 
$routes->get('/complete-business', 'Frontend::completeBusiness'); 

$routes->get('admin', 'Admin\Auth::login'); 
$routes->get('admin/login', 'Admin\Auth::login'); 
       // Show login form
$routes->post('admin/login', 'Admin\Auth::login');   
$routes->get('admin/logout', 'Admin\Auth::logout'); 
$routes->get('admin/add', 'Admin\Auth::addAdmin');
$routes->post('admin/add', 'Admin\Auth::saveAdmin');

$routes->get('admin/dashboard', 'Admin\Dashboard::index');

$routes->get('admin/content/add', 'Admin\Dashboard::content');
$routes->post('admin/content/store', 'Admin\Dashboard::store');
$routes->get('admin/content/list', 'Admin\Dashboard::list');

$routes->get('admin/content/edit/(:num)', 'Admin\Dashboard::edit/$1');
$routes->post('admin/content/update/(:num)', 'Admin\Dashboard::update/$1');
$routes->get('admin/content/delete/(:num)', 'Admin\Dashboard::delete/$1');





