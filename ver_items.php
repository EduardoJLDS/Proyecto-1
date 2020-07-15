<?php

    require "conexion.php";
  

    class busqueda extends Conexion{

        public function busqueda(){
            parent::__construct();
        }

        public function busproduc(){

            $resul=$this->conex->query('SELECT * FROM articulos');

            $producto=$resul->fetch_all(MYSQLI_ASSOC);

            return $resul;
        }
    
    }

    $producto=new busqueda ();

    $array_proc=$producto->busproduc();

    foreach($array_proc as $elemento){

        echo"<table><tr><td>";
        echo $elemento['CODIGO'] . "</td><td>";
        echo $elemento['SECCION'] . "</td><td>";
        echo $elemento['NOMBRE'] . "</td><td>";
        echo $elemento['TIENDA'] . "</td><td>";
        echo $elemento['PRECIO'] . "</td><td>";
        echo $elemento['CANTIDAD'] . "</td><td></tr></table>";
        echo "<br>";
        



    }

?>