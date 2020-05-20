<?php
namespace App\Controller;

class ZooController extends AbstractController {

    public static function index() {
        // echo 'Voici la liste de tous les zoo !';
        echo self::getTwig()->render('zoo/index.html');
    }

    public static function show(int $id) {
        // echo 'Voici le zoo : ' . $id;
        echo self::getTwig()->render('zoo/show.html', [
            'zooId' => $id,
        ]);
    }

    public static function create() {
        // echo 'Formulaire de création' ;
        echo self::getTwig()->render('zoo/create.html');
    }

    public static function new() {
        echo 'Création d\'un nouveau zoo';
        var_dump($_POST);
    }

    public static function edit(int $id) {
        echo 'Formulaire d\'édition du zoo ' . $id;
    }

    public static function update() {
        echo 'Edition d\'un zoo';
    }

    public static function delete($id) {
        echo 'Suppression du zoo ' . $id;
    }

}