<?php
    namespace Grafikart;

    class Autoloader {

        static function autoload($class_name){
            $class_name = str_replace(__NAMESPACE__.'\\','',$class_name);
            var_dump($class_name);
            require 'class/'.$class_name.'.php';
        }
        static function register(){
            // __CLASS__ : donne le nom de la class dans laquelle la est fonction est appelée
            spl_autoload_register(array(__CLASS__,'autoload'));
        }
    }

?>
