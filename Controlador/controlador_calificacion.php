

<?php
include_once("Modelo/calificacion.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorCalificacion{
    //Metododos
    public function inicio(){

        $medicos=Medicos::consultar();
        include_once("./Vista/medicos/inicio.php");

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
        $tipusu=$_POST['tipusu'];
        $estper=$_POST['estper'];
        $pas=$_POST['pas'];
        Medicos::crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);
       // Medicos::crearusuarios();
        header("Location:./?controlador=medicos&accion=inicio");
    }
        include_once("Vista/medicos/crear.php");
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
            $tipusu=$_POST['tipusu'];
            $estper=$_POST['estper'];
            $pas=$_POST['pas'];
            Medicos::editar($id_per,$cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha,$genero,$tipusu,$estper,$pas);          
            header("Location:./?controlador=medicos&accion=inicio");
        }
        $id_per=$_GET['id_per'];
       //(print_r(Medicos::buscar($id_per));        
        $medico=(Medicos::buscar($id_per));
        //if($_POST){
          //  print_r($_POST);
        //}
        
        //$ced_per=$_GET['ced_per'];
    
        include_once("./Vista/medicos/editar.php");

        
    }

    public function borrar(){
        print_r($_GET);
        $id_per=$_GET['id_per'];
        Medicos::borrar($id_per);
        header("Location:./?controlador=medicos&accion=inicio");
    }
  
}

?>