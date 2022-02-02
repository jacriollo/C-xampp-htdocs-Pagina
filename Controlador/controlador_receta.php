


<?php
include_once("Modelo/receta.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorReceta{

    public function inicio(){

       // $registrar=Registrar::consultar();
        include_once("./Vista/inicio1.php");

    } 

  
}
?>
