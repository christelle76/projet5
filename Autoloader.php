<?php

require_once 'Modele/modele.php';

class Autoloader {

    static function register($i) {
        echo($i);
        if ($i == 0) {
            spl_autoload_register(array(__CLASS__, 'autoload'));
        } else if ($i == 1) {
            spl_autoload_register(array(__CLASS__, 'autoloadController'));     
        } 
    }

    static function autoloadModele($className){
        
        require 'Modele/' . $className . '.php';
    }

    static function autoloadController($className){
        require 'Controller/' . $className . '.php';
    }
}