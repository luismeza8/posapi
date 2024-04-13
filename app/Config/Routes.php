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

$routes->get("/producto/(:num)/edit","Producto::edit/$1");
$routes->get("/producto/(:num)/delete","Producto::delete/$1");

$routes->get("/dashboard", "Home::dashboard");

// Categoria
$routes->get('/categoria/', "Categoria::index");
$routes->get('/categoria/create', "Categoria::create");
$routes->post('/categoria/store', "Categoria::store");
$routes->get('/categoria/(:num)/edit', "Categoria::edit/$1");
$routes->post('/categoria/(:num)/edit', "Categoria::update/$1");
$routes->get('/categoria/(:num)/delete', "Categoria::delete/$1");


$routes->get("v1/producto", "ProductoAPI::index");
$routes->get("v1/producto/(:num)", "ProductoAPI::show/$1");
$routes->post("v1/producto/create", "ProductoAPI::store");
$routes->post("v1/producto/(:num)/edit", "ProductoAPI::update/$1");
$routes->post("v1/producto/(:num)/delete", "ProductoAPI::delete/$1");
