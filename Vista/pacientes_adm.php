<?php

include_once("../Controlador/conexion.php");
BD::crearInstancia();

    $cedula=$_POST['cedula'];
    $apellido=$_POST['apellido'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $fecha=$_POST['fecha'];
    $genero=$_POST['genero']; 
    //$tipusu=='2';      
    $estper=$_POST['estper']; 
    $pas=$_POST['cedula'];

    //public static function crear($cedula, $apellido, $nombre, $correo, $telefono, $direccion, $ciudad, $fecha, $genero, "2", $estper, $pas) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
       // $sql = $conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula, $apellido, $nombre, $correo, $telefono, $direccion, $ciudad, $fecha, $genero, "4", $estper, $pas));
        $id = $conexionBD->lastInsertId();
       if($id > 0){            
      // Medicos::crearusuarios($id, $cedula, $pas, $tipusu, $estper);
      $conexionBD = BD::crearInstancia();
      $sql = $conexionBD->prepare("INSERT INTO usuario(id_per, nom_usu, pas_usu, tip_usu, est_usu) VALUES (?,?,?,?,?)");
      $sql->execute(array($id, $cedula, $pas, "4", $estper));
       }
    
   /* public static function crearusuarios($id_per, $cedula, $pas, $tipusu, $estper) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO usuario(id_per, nom_usu, pas_per, tip_usu, est_usu) VALUES (?,?,?,?,?)");
        $sql->execute(array($id_per, $cedula, $pas, $tipusu, $estper));
    }*/
//$conexionBD = BD::crearInstancia();
//$sql = $conexionBD->query("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES ('$cedula','$apellido','$nombre','$correo','$telefono','$direccion','$ciudad','$fecha','$genero','2','$estper','$pas')");
//$sql->execute(array($cedula, $apellido, $nombre, $correo, $telefono, $direccion, $ciudad, $fecha, $genero, "2", $estper, $pas));

    //foreach($sql->fetchAll() as $medico) {
  //  echo "<script> window.location='../index.php' </script>";

//}
?>