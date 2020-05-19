<?php

use Bramus\Router\Router;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router;
$router->setNamespace('App\Controller');

// $router->get('/about', function() {
//     echo "bienvenue sur la page About!";
// });

// $router->get('/contact', function () {
//     echo "Page contactez-nous.";
// });

// $router->get('/conditions', function() {
//     echo 'Voici les conditions d\'utilisation.';
// });

// // $router->get('/articles/d{id}', function($id) {
// //     echo 'Voici l\'article numéro ' . $id;
// // });

// $router->get('/product/([a-z0-9_-]+)', function($product) {
//     echo 'Voici le produit demandé : ' . htmlentities($product) ;
// });

// $router->get('/articles', 'ArticlesController@index');
// $router->get('/articles/(\d+)', 'ArticlesController@show');

$router->get('/animal', 'AnimalController@index');
$router->get('/animal/(\d+)', 'AnimalController@show');
$router->get('/animal/create', 'AnimalController@create');
$router->post('/animal', 'AnimalController@new');
$router->get('/animal/(\d+)/edit', 'AnimalController@edit');
$router->post('/animal/(\d+)/edit', 'AnimalController@update');
$router->post('/animal/(\d+)/delete', 'AnimalController@delete');

$router->get('/zoo', 'ZooController@index');
$router->get('/zoo/(\d+)', 'ZooController@show');
$router->get('/zoo/create', 'ZooController@create');
$router->post('/zoo', 'ZooController@new');
$router->get('/zoo/(\d+)/edit', 'ZooController@edit');
$router->post('/zoo/(\d+)/edit', 'ZooController@update');
$router->post('/zoo/(\d+)/delete', 'ZooController@delete');

$router->get('/animal_zoo', 'AnimalZooController@index');
$router->get('/animal_zoo/(\d+)', 'AnimalZooController@show');
$router->get('/animal_zoo/create', 'AnimalZooController@create');
$router->post('/animal_zoo', 'AnimalZooController@new');
$router->get('/animal_zoo/(\d+)/edit', 'AnimalZooController@edit');
$router->post('/animal_zoo/(\d+)/edit', 'AnimalZooController@update');
$router->post('/animal_zoo/(\d+)/delete', 'AnimalZooController@delete');


$router->run();


