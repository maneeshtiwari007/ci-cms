<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

$routes->get('/', 'Frontend::index');
$routes->get('/calculate-price', 'Frontend::calculatePrice');
$routes->get('about/why-choose-us', 'Frontend::whyChooseUs');
$routes->get('/prime-it/careers', 'Frontend::careers');  
$routes->get('/services/web-development', 'Frontend::webDevelopment'); 
$routes->get('/calculate/price', 'Frontend::calculatePrice'); 
$routes->get('services/complete-business/', 'Frontend::completeBusiness');  
$routes->get('/services/digital-marketing', 'Frontend::digitalMarketing');  
$routes->get('/services/business-it-support', 'Frontend::businessItSupports'); 
$routes->get('/services/cloud-storage-backup', 'Frontend::cloudStroge');
$routes->get('/services/email-support-and-services', 'Frontend::emailSupportAndServices');
$routes->get('/services/email-support-and-services', 'Frontend::emailSupportAndServices');
$routes->get('/contact-us', 'Frontend::contactUs');

$routes->post('/contact-submit', 'Frontend::submit');
$routes->post('/career/send-resume', 'Frontend::submitResume');

$routes->post('/calculate-price', 'Frontend::submitForm');

$routes->get('/blog', 'BlogController::blog');
$routes->get('/blog/details', 'BlogController::blogDetails');




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

//slider route start
$routes->get('admin/slider', 'Admin\Dashboard::sliderIndex');
$routes->get('admin/add-slider', 'Admin\Dashboard::addSlider');
$routes->post('admin/store-slider', 'Admin\Dashboard::storeSlider');
$routes->get('admin/edit-slider/(:num)', 'Admin\Dashboard::editSlider/$1');
$routes->post('admin/update-slider/(:num)', 'Admin\Dashboard::updateSlider/$1');
$routes->get('admin/delete-slider/(:num)', 'Admin\Dashboard::deleteSlider/$1');


$routes->get('admin/it-cost-inquiries', 'Admin\Dashboard::itCostList');
$routes->get('admin/it-cost-inquiries/list', 'Admin\Dashboard::getItCostData');


// Blog Route Start

$routes->post('posts/create', 'Admin\PostController::create');
$routes->get('posts/create', 'Admin\PostController::createView');
$routes->get('posts/list', 'Admin\PostController::list', ['as' => 'postList']);
$routes->get('posts/delete/(:num)', 'Admin\PostController::delete/$1', ['as' => 'postDelete']);
$routes->post('posts/update/(:segment)', 'Admin\PostController::update/$1');
$routes->get('posts/update/(:segment)', 'Admin\PostController::updateView/$1');

$routes->get('categories/list', 'Admin\Categories::list', ['as' => 'categoryList']);
$routes->get('categories/create', 'Admin\Categories::createView');
$routes->post('categories/create', 'Admin\Categories::create');
$routes->get('categories/update/(:segment)', 'Admin\Categories::updateView/$1', ['as' => 'categoryUpdateView']);
$routes->post('categories/update/(:segment)', 'Admin\Categories::update/$1');
$routes->get('categories/delete/(:num)', 'Admin\Categories::delete/$1', ['as' => 'categoryDelete']);

// blog Route End
  






