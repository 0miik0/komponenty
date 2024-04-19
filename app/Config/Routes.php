<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::getTypyKomponent');
$routes->get('vypisKomponent/(:num)','Main::getKomponenty/$1');
$routes->get('infoKomponenty/(:num)', 'Main::getInfo/$1');