<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/loginPage', 'Users::loginPage');
$routes->get('/moodBoardPage', 'Users::moodBoardPage');
$routes->get('/roadMapPage', 'Users::roadMapPage');
