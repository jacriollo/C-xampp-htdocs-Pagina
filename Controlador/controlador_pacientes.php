
<?php
include_once("Modelo/pacientes.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorPacientes{

    public function inicio(){

        $usuarios=Pacientes::consultar();
        include_once("./Vista/usuarios/inicio.php");

    } 
    public function crear(){
        if($_POST){
         print_r($_POST);
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
         Pacientes::crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);
         //header("Location:./?controlador=usuarios&accion=inicio");
     }
         include_once("Vista/pacientes/crear.php");
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

    public function borrar(){
        print_r($_GET);
        $id_per=$_GET['id_per'];
        Usuarios::borrar($id_per);
        header("Location:./?controlador=usuarios&accion=inicio");
    }
}

?>