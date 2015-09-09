<?php
    namespace App;

    class Autoloader {

        public static function register(){
            spl_autoload_register(array(__CLASS__,'autoload'));
        }

        public static function autoload($class_name){
            if (strpos($class_name, __NAMESPACE__ . "\\") === 0){
                $class_name = str_replace(__NAMESPACE__."\\", "", $class_name);
                require '../app/'. $class_name . '.php';

            }
        }
    }
 ?>
