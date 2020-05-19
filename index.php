<?php

use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/config.php';

$router = new Router;

$router->get('/about', function() {
    echo "bienvenue sur la page About!";
});

$router->get('/contact', function () {
    echo "Page contactez-nous.";
});

$router->get('/conditions', function() {
    echo 'Voici les conditions d\'utilisation.';
});

$router->get('/articles/d{id}', function($id) {
    echo 'Voici l\'article numéro ' . $id;
});

$router->get('/product/([a-z0-9_-]+)', function($product) {
    echo 'Voici le produit demandé : ' . htmlentities($product) ;
});

$router->run();

// $simba = new Animal;
// $simba->setId(1);
// $simba->setSpecies('Lion');
// $simba->setCountry('Afrique');

// var_dump($simba);

// $zooDeLaPlaine = new Zoo;
// $zooDeLaPlaine->setId(1);
// $zooDeLaPlaine->setName('Zoo de La Plaine');
// $zooDeLaPlaine->setCity('La Plaine');

// var_dump($zooDeLaPlaine);

// $firstAnimal = new AnimalZoo;
// $firstAnimal->setId(1);
// $firstAnimal->setAnimalId(1);
// $firstAnimal->setZooId(1);

// var_dump($firstAnimal);

