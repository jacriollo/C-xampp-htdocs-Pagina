<?php

include_once("../Controlador/conexion.php");
BD::crearInstancia();


$cedula =$_POST["cedula"];
$pas    =$_POST["contrasena"];



  session_start();

$conexionBD=BD::crearInstancia();
$sql=$conexionBD->query("SELECT * FROM usuario WHERE nom_usu='$cedula' AND  pas_usu= '$pas'");  
$sql=$conexionBD->query(" SELECT * FROM persona WHERE ced_per='$cedula' ");      
foreach($sql->fetchAll() as $medico) {
  
    /*if($medico['rol_usu']=="Administrador" )//1
    {
       echo "<script> window.location='../index.php' </script>";
    }else
    {
      echo "<script> alert ('Usuario no existe'); window.location='inicio.php' </script>";
    }*/

    $_SESSION["id_usu"] =$medico['id_usu'];
    $_SESSION["tip_usu"] =$medico['tip_usu'];
    $_SESSION["nom_usu"] =$medico['nom_usu'];
    $_SESSION["id_per"] =$medico['id_per'];

    $_SESSION["nom_per"] =$medico['nom_per'];
    $_SESSION["ape_per"] =$medico['ape_per'];

    if($medico['tip_usu']=="1" )//1Administrador
    {
       echo "<script> window.location='../index.php' </script>";
    }
    if($medico['tip_usu']=="2" ) //2Medicos
    {
      echo "<script> window.location='../indexmedico.php' </script>";
    }
    if($medico['tip_usu']=="3" ) //3Secretaria
    {
      echo "<script> window.location='../indexsecretaria.php' </script>";
    
    }
    if($medico['tip_usu']=="4" ) //4 Pacientes
    {
      echo "<script> window.location='../indexpaciente.php' </script>";
    
    }
    

    //$listamedicos[]= new Medicos ($medico['id_per'],$medico['ced_per'],$medico['ape_per'],$medico['nom_per'],$medico['correo_per'],$medico['tel_per'],$medico['dir_per'],$medico['ciu_rec_per'],$medico['fec_nac_per'],$medico['gen_per'],$medico['tip_usu'],$medico['est_per'],$medico['pas_per']); 

}


 /* include("../controlador/conexion.php");
   
 echo "hola";
   $cedula =$_POST["cedula"];
   $pas    =$_POST["contrasena"];
    
   //login
   if (isset($_POST["ingresar"])) {  
 
    $query=mysqli_query($conn,"SELECT * FROM usuario WHERE ced_per='$cedula' AND  pas_per= '$pas'");
    $nr = mysqli_num_rows($query); 
    if($nr==1)
    {
     echo "<script> window.location='../index.php' </script>";
    }else
    {
    echo "<script> alert ('Usuario no existe'); window.location='ingreso.php' </script>";
  }
}*/



?>
