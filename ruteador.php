<?php

//echo $controlador;
//echo $accion;
require_once("Controlador/controlador_".$controlador.".php");
$objControlador="Controlador".ucfirst($controlador);
$controlador=new $objControlador();
$controlador->$accion();
?>



