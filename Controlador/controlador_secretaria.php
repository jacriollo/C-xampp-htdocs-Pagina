
<?php
include_once("Modelo/secretaria.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorSecretaria{

    public function inicio(){

        $secretaria=Secretaria::consultar();
        include_once("./Vista/secretaria/inicio.php");

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
         Secretaria::crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);
         header("Location: indexsecretaria.php?controlador=secretaria&accion=inicio");
         //header("Location:./?controlador=secretaria&accion=inicio");
     }
         include_once("Vista/secretaria/crear.php");
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
            Secretaria::editar($id_per,$cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);          
            header("Location: indexsecretaria.php?controlador=secretaria&accion=inicio");
           // http://localhost/Pagina//indexsecretaria.php?controlador=secretaria&accion=inicio
            //header("Location:./?controlador=secretaria&accion=inicio");
            
        }
        $id_per=$_GET['id_per'];
       //(print_r(Medicos::buscar($id_per));        
        $secretaria=(Secretaria::buscar($id_per));
       
        include_once("./Vista/secretaria/editar.php");

        
    }
    public function borrar(){
        print_r($_GET);
        $id_per=$_GET['id_per'];
        Secretaria::borrar($id_per);
        header("Location: indexsecretaria.php?controlador=secretaria&accion=inicio");
        //header("Location:./?controlador=secretaria&accion=inicio");
    }

    /* public function editar1(){           
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
            Secretaria::editar($id_per,$cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);          
           // header("Location:./?controlador=usuarios&accion=inicio");
        }
        $id_per=$_GET['id_per'];
       //(print_r(Medicos::buscar($id_per));        
        $usuarios=(Secretaria::buscar($id_per));
       
        include_once("./Vista/secretaria/editar1.php");

        
    }

    */
}

?>