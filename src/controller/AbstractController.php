<?php
namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/../../vendor/autoload.php';


abstract class AbstractController {

    public static function getTwig() {
        $loader = new FilesystemLoader(__DIR__ . '/../../views');
        $twig = new Environment($loader); 
        $twig->addGlobal('assets',  BASE_PATH . '/assets' );
        
        return $twig; 
    }

}