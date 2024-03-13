<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('registro', 'Home::registro');
$routes->get('registro', 'Home::registro');
$routes->post('guardar', 'Home::registrar_usuario');
$routes->get('login', 'Home::log');
$routes->post('login', 'Home::log');
$routes->post('inicio', 'Home::start');
$routes->get('soporte', 'Home::contact');
$routes->post('enviar', 'Home::soporte');
$routes->get('tienda', 'Home::shop');
$routes->get('detalles', 'Home::detail');
$routes->get('carrito', 'home::cart');
$routes->get('pago', 'Home::payment');
$routes->get('salir', 'Home::salir');
$routes->get('nuevo-producto', 'Home::agregar');
$routes->post('nuevo-producto', 'Home::agregar');
$routes->get('nueva-venta', 'Home::select');
$routes->post('nueva-venta', 'Home::tipo');
$routes->get('tienda-electric', 'Home::electric');
$routes->get('tienda-hogar', 'Home::shome');
$routes->get('tienda-ropa', 'Home::sropa');
$routes->get('tienda-aseo', 'Home::saseo');
//$routes->get('buy', 'home::buy');
$routes->get('buy/(:num)', 'home::buy/$1');
$routes->get('remove/(:num)', 'home::remove/$1');
$routes->post('update/', 'home::update/');

$routes->get('details/(:num)', 'home::details/$1');

$routes->get('pay', 'Home::pay');
$routes->post('pay', 'Home::pay');
