<?php
namespace App\Controller;

use App\Model\Zoo;

class ZooController extends AbstractController {

    public static function index() {
        // echo 'Voici la liste de tous les zoo !';
        $zoos = Zoo::findAll();
        // var_dump($zoos);
        echo self::getTwig()->render('zoo/index.html', [
            'zoos' => $zoos,
        ]);
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
        Zoo::createZoo();
        self::index();
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