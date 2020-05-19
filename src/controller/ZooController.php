<?php

namespace App\Controller;

class ZooController {

    public static function index() {
        echo 'Voici la liste de tous les zoo !';
    }

    public static function show(int $id) {
        echo 'Voici le zoo : ' . $id;
    }

    public static function create() {
        echo 'Formulaire de création d\'un zoo' ;
    }

    public static function new() {
        echo 'Création d\'un nouveau zoo';
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