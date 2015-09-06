<?php

class Personnage{

  private $name;
  private $vie = 100;
  private $atk;
  private $def;

  public function __construct($nom=null){
    $this->name = $nom;
  }
  public function crier(){
    echo "Je m'appelle ".$this->name;
  }
  public function estMort(){
    return ($this->atk <= 0);
  }
}
 ?>
