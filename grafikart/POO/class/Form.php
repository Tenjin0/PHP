<?php
    namespace Grafikart;

    class Form{

        private $data;

        public function __construct($data=[]){
            if (isset($data) )
            foreach($data as $key=>$value){
                    if (!empty($value)){
                        $this->data[$key] = $value;
                    }
            }
        }

        public function input($type, $name ){
            return '<input type= ' . $type . ' name="' .   $name . '" value="' .  (isset($this->data[$name])?$this->data[$name]:"") . '">';
        }

        public function text($name){
            return $this->input('text',$name);
        }

        public function submit($name){
            return "<button name={$name}>{$name}</button>";
        }
        public function password($name){
            return $this->input("password",$name);
        }

        public function madate(){
            return (new \DateTime())->format('Y-m-d H:i:s');
        }
    }
 ?>
