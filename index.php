<?php

require __DIR__ . '/config/config.php';

$simba = new Animal;
$simba->setId(1);
$simba->setSpecies('Lion');
$simba->setCountry('Afrique');

var_dump($simba);

$zooDeLaPlaine = new Zoo;
$zooDeLaPlaine->setId(1);
$zooDeLaPlaine->setName('Zoo de La Plaine');
$zooDeLaPlaine->setCity('La Plaine');

var_dump($zooDeLaPlaine);

$firstAnimal = new AnimalZoo;
$firstAnimal->setId(1);
$firstAnimal->setAnimalId(1);
$firstAnimal->setZooId(1);

var_dump($firstAnimal);