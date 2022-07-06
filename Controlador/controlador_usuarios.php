<?php
include_once("Modelo/usuarios.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorUsuarios{

    public function inicio(){

        $usuarios=Usuarios::consultar();
        include_once("./Vista/usuarios/inicio.php");

    } 

    public function crear(){
        if($_POST){
         //print_r($_POST);
         $cedula=$_POST['cedula'];
         $apellido=$_POST['apellido'];
         $nombre=$_POST['nombre'];
         $correo=$_POST['correo'];
         $telefono=$_POST['telefono'];
         $direccion=$_POST['direccion'];
         $ciudad=$_POST['ciudad'];
         $fecha=$_POST['fecha'];
         $genero=$_POST['genero'];
         $tipusu=$_POST['rol'];
         $estper=$_POST['estado'];
         $pas=$_POST['cedula'];

         
         $existe_usuario = Usuarios::validarUsuario($cedula);
         if(count($existe_usuario) > 0){
            $mensaje  = "Ya existe un usuario con este número de cédula";
            include_once("Vista/usuarios/crear.php");      
         }else{
            Usuarios::crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas); 
            header("Location:./?controlador=usuarios&accion=inicio");
         }      
       

        }else{
            $mensaje  = "";
            include_once("Vista/usuarios/crear.php");
        }     
         
      





      /* $existe_usuario = Usuarios::validarUsuario($cedula);
       if(count($existe_usuario) > 0){
          $mensaje  = "Ya existe un usuario con este número de cédula";
          include_once("Vista/usuarios/crear.php");      
       }else{
          Usuarios::crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas); 
          header("Location:./?controlador=usuarios&accion=inicio");
       }  
      }else{
          $mensaje  = "";
          include_once("Vista/usuarios/crear.php");
      }*/



        
    }

     public function editar(){           
        if($_POST){     
            $id_per=$_POST['id_per'];           
            $cedula=$_POST['cedula'];
            $apellido=$_POST['apellido'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $telefono=$_POST['telefono'];
            $direccion=$_POST['direccion'];
            $ciudad=$_POST['ciudad'];
            $fecha=$_POST['fecha'];
            $genero=$_POST['genero'];
            $tipusu=$_POST['rol'];
            $estper=$_POST['estado'];
            $pas=$_POST['cedula'];
            Usuarios::editar($id_per,$cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);          
            header("Location:./?controlador=usuarios&accion=inicio");
        }
        $id_per=$_GET['id_per'];
       //(print_r(Medicos::buscar($id_per));        
        $usuarios=(Usuarios::buscar($id_per));
       
        include_once("./Vista/usuarios/editar.php");

        
    }

    public function editar1(){           
        if($_POST){     
            $id_per=$_POST['id_per'];           
            $cedula=$_POST['cedula'];
            $apellido=$_POST['apellido'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $telefono=$_POST['telefono'];
            $direccion=$_POST['direccion'];
            $ciudad=$_POST['ciudad'];
            $fecha=$_POST['fecha'];
            $genero=$_POST['genero'];
            $tipusu=$_POST['rol'];
            $estper=$_POST['estado'];
            $pas=$_POST['pas'];
            Usuarios::editar($id_per,$cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);          
            header("Location:indexmedico.php");
        }
        $id_per=$_GET['id_per'];
       //(print_r(Medicos::buscar($id_per));        
        $usuarios=(Usuarios::buscar($id_per));
       
        include_once("./Vista/usuarios/editar1.php");

        
    }

    public function borrar(){
        print_r($_GET);
        $id_per=$_GET['id_per'];
        Usuarios::borrar($id_per);
        header("Location:./?controlador=usuarios&accion=inicio");
    }
}

?>