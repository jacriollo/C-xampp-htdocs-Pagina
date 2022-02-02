<?php

class BD{
private static $instancia=NULL;

public static function crearInstancia(){
    if(!isset( self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$instancia=new PDO('mysql:host=localhost;dbname=complexivo','root','', $opcionesPDO);
           
        }
        return self::$instancia;
    }
} 



  /*  $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="complexivo";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("No hay conexion:".mysqli_connect_error());
    }
    */
?>