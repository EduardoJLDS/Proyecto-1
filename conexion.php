<?php 

    require ("confing.php"); //conexion con la base de datos 

    class Conexion{

        protected $conex;

        public function Conexion(){

            $this->conex=new mysqli(db_host, db_usuer, db_pass, db_name);

            if($this->conex->connect_errno){
                echo "fallo al conectar" . $this->conex->connect_error;
                return;
            }
;

        }
    }
    


?>