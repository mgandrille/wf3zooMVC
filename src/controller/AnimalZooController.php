<?php
namespace App\Controller;

class AnimalZooController extends AbstractController {

    public static function index() {
        echo 'Voici la liste de toutes les correspondnaces Animal / Zoo !';
    }

    public static function show(int $id) {
        echo 'Voici la relation Animal / Zoo numéro : ' . $id;
    }

    public static function create() {
        echo 'Formulaire de création d\'une relation Animal / Zoo' ;
    }

    public static function new() {
        echo 'création d\'une nouvelle relation Animal / Zoo';
    }

    public static function edit(int $id) {
        echo 'formulaire d\'édition de la relation Animal / Zoo numéro ' . $id;
    }

    public static function update() {
        echo 'Edition d\'une relation Animal / Zoo';
    }

    public static function delete($id) {
        echo 'Suppression de la relation Animal / Zoo ' . $id;
    }

}