<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index::hello');
$routes->get('/operations/index', 'Operations::index');
$routes->get('/operations/displayInfo/(:segment)/(:segment)/(:segment)/(:segment)/(:segment)', 'Operations::displayInfo/$1/$2/$3/$4/$5');
$routes->get('/operations/compute/(:num)/(:num)', 'Operations::compute/$1/$2');
