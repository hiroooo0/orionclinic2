<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('processLogin', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::processRegister');

$routes->group('patient', ['filter' => 'auth'], static function($routes) {
    $routes->get('/', 'Patient::index');
    $routes->get('consultation', 'Patient::consultation');
    $routes->get('prescription', 'Patient::prescription');
    $routes->get('history', 'Patient::history');
    $routes->get('profile', 'Patient::profile');
});

$routes->group('doctor', static function($routes) {
    $routes->get('/', 'Doctor::index');
    $routes->get('consultation', 'Doctor::consultation');
    $routes->get('patients', 'Doctor::patients');
    $routes->get('profile', 'Doctor::profile');
    $routes->get('chat', 'Doctor::chat');
});
