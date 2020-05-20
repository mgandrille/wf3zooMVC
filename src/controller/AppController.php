<?php
namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';


class AppController extends AbstractController {

    public static function index() {
        // echo 'Voici la liste de tous les animaux !';
        echo self::getTwig()->render('app/index.html');
    }
}