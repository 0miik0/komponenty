<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::getTypyKomponent');
$routes->get('vypisKomponent/(:any)','Main::getKomponenty/$1');
$routes->get('infoKomponenty/(:num)', 'Main::getInfo/$1');
$routes->get('UpravitStrankovani', 'Main::getUpravitStrankovani');
$routes->get('/pridejKategorii', 'Kontroler::addCategory');
$routes->post('/pridejKategorii', 'Kontroler::createCategory');