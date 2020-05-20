<?php
namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';


class AnimalController extends AbstractController {

    public static function index() {
        // echo 'Voici la liste de tous les animaux !';
        echo self::getTwig()->render('animal/index.html');
    }

    public static function show(int $id) {
        // echo 'Voici l\'animal : ' . $id;
        echo self::getTwig()->render('animal/show.html', [
            'animalId' => $id,
        ]);

    }

    public static function create() {
        // echo 'Formulaire de création' ;
        echo self::getTwig()->render('animal/create.html');
    }

    public static function new() {
        echo 'Animal créé';
        var_dump($_POST);
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