
<?php

    require "conexion.php";
  

    class registro extends Conexion{

        public function registro(){
            parent::__construct();
        }

        public function getproduc($cod, $sec, $nom,$tie, $pre, $can){

            $resul=$this->conex->query("INSERT INTO articulos (CODIGO, SECCION, NOMBRE, TIENDA, PRECIO, CANTIDAD) VALUES ('$cod' , ' $sec', '$nom', '$tie', '$pre', '$can')");

            return $resul;
        }
    
    }
    $codigo=$_POST['codigo'];
    $seccion=$_POST['seccion'];
    $nombre=$_POST['nombre'];
    $tienda=$_POST['tienda'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

     $register=new registro ();

    $register->getproduc($codigo, $seccion, $nombre, $tienda, $precio, $cantidad);


                echo $codigo . " <br>";
                echo $seccion . " <br>";
                echo $nombre . " <br>";
                echo $tienda . " <br>";
                echo $precio . " <br>";
                echo $cantidad . " <br>";

?>




