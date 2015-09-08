<?php

    namespace Grafikart;

    class Personnage {

        private $name;
        private $life=100;
        private $atk = 10;
        private $def = 5;

        public function __construct($name=null){
            $this->name = $name;
        }

        public function regenerer($life = null){
            if($life != null && $life >= 0){
                if($this->life + $life >= 100){
                    $this->life = 100;
                } else {
                    $this->life += $life;
                }
            } else {
                $this->life = 100;
            }
        }

        public function estMort(){
            return ($this ->life <= 0);
        }

        public function attaque($personnage){
            $modifier = $this->atk - $personnage->getDef();
            $personnage->setLife( $personnage->getLife() - $modifier );
        }

        public function getlife(){
            return $this->life;
        }

        public function setLife($life){
            $this->life = $life;
        }

        public function getAtk(){
            return $this->atk;
        }
        public function getDef(){
            return $this->def;
        }
    }
 ?>
