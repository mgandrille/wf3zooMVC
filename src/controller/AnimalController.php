<?php
namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/../../vendor/autoload.php';


class AnimalController {

    public $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../../views');
        $twig = new Environment($loader); 
        
        $this->twig = $twig;
    }

    public static function index() {
        // echo 'Voici la liste de tous les animaux !';
        echo $this->twig->render('animal/index.html');
    }

    public static function show(int $id) {
        // echo 'Voici l\'animal : ' . $id;
        echo $this->twig->render('animal/show.html', [
            'animalId' => $id,
        ]);

    }

    public static function create() {
        echo 'Formulaire de création' ;
    }

    public static function new() {
        echo 'création d\'un nouvel animal';
    }

    public static function edit(int $id) {
        echo 'formulaire d\'édition de l\'animal ' . $id;
    }

    public static function update() {
        echo 'Edition d\'un animal';
    }

    public static function delete($id) {
        echo 'Suppression de l\'animal ' . $id;
    }

}