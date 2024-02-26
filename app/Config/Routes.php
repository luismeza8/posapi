<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/saludar', 'Home::saludar');
$routes->get('/saludar2/(:alpha)/(:num)', 'Home::saludar2/$1/$2');
$routes->get('/calculadora/(:num)/(:num)/s', 'Calculadora::sumar/$1/$2');
$routes->get('/calculadora/(:num)/(:num)/r', 'Calculadora::restar/$1/$2');
$routes->get('/calculadora/(:num)/(:num)/m', 'Calculadora::multiplicar/$1/$2');
$routes->get('/calculadora/(:num)/(:num)/d', 'Calculadora::dividir/$1/$2');

$routes->get('/producto/(:num)', 'Producto::index/$1');
$routes->get('/producto', 'Producto::index/$1');

$routes->get("/producto/create", "Producto::create"); // formulario del producto
$routes->post("/producto/store", "Producto::store"); // se crea el producto
//$routes->post("/producto/store", "Producto::store"); // se crea el producto

$routes->get("/producto/(:num)/edit","Producto::edit/$1");

$routes->get("/dashboard", "Home::dashboard");
