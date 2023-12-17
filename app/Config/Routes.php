<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


use App\Controllers\Login;

$routes->get('/login', [Login::class, 'index']);
$routes->post('/login', [Login::class, 'validateLogin']);


use App\Controllers\Cadastro;

$routes->get('/cadastro', [Cadastro::class, 'index']);
$routes->post('/cadastro', [Cadastro::class, 'validateCadastro']);
