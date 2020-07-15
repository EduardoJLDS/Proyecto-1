<!doctype html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link rel="StyleSheet" href="style.css" type="text/css"> 

</head>

<body>



<?php

    require "conexion.php";

    class eliminar extends Conexion{

        public function eliminar(){
            parent::__construct();
        }

        public function elimiproduc($cod){//query a la base de datos para eliminar un producto basado en el codigo obtenido

            $resul=$this->conex->query('DELETE FROM articulos WHERE CODIGO ="' .$cod .'"');

            return $resul;
        }
    
    }


    $codigo =$_POST['codigo'];
    $eliminar=new eliminar();

    $eliminar->elimiproduc($codigo);//verificacion de la query 
     
        if($eliminar){


             echo"Registro eliminado";

        }else{

             echo "error";
        }


?>
