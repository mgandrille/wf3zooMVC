<?php

// require __DIR__ . '/../src/models/Animal.php';
// require __DIR__ . '/../src/models/Zoo.php';
// require __DIR__ . '/../src/models/AnimalZoo.php';

spl_autoload_register(function ($class) {
    include __DIR__ . '/../src/models/' . $class . '.php';
    include __DIR__ . '/../src/controllers/' . $class . '.php';
});