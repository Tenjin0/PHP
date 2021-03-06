<?php
    namespace app;
    use \PDO ;

    class Database{

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;

        private $pdo;

        public function __construct($db_name, $db_user= 'root', $db_pass= 'yoda' , $db_host='localhost'){
            $this->db_name =$db_name;
            $this->db_user =$db_user;
            $this->db_pass =$db_pass;
            $this->db_host =$db_host;
        }

        public function getPDO(){
            if (null === $this->pdo){
                $this->pdo = new PDO('mysql:dbname='. $this->db_name . ';host='. $this->db_host, $this->db_user ,$this->db_pass );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $this->pdo;
        }

        public function query($sql){

            $statement = $this->getPDO()->query($sql);
            $datas = $statement->fetchAll(PDO::FETCH_OBJ);
            return $datas;
        }
    }

 ?>
