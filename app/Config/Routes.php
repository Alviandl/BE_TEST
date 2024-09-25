<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->group('author', function ($routes) {
    $routes->get('/', 'Author::index');
    $routes->get('(:num)', 'Author::show/$1');
    $routes->post('/', 'Author::create');
    $routes->put('(:num)', 'Author::update/$1');
    $routes->delete('(:num)', 'Author::delete/$1');
    $routes->get('(:num)/book', 'Author::book/$1');
});

$routes->group('book', function ($routes) {
    $routes->get('/', 'Book::index');
    $routes->get('(:num)', 'Book::show/$1');
    $routes->post('/', 'Book::create');
    $routes->put('(:num)', 'Book::update/$1');
    $routes->delete('(:num)', 'Book::delete/$1');
});