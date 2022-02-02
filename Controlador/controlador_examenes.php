

<?php
include_once("Modelo/examenes.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorExamenes{

    public function inicio(){

       // $registrar=Registrar::consultar();
        include_once("./Vista/examenes/inicio.php");

    } 

  
}
?>