
<?php
include_once("Modelo/registrarE.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorRegistrarE{

    public function inicio(){

        $registrar=Registrar::consultar();
        include_once("./Vista/registrarE/inicio.php");

    } 

    public function editar(){    

       
        if($_POST){    
            $id=$_POST['id_usu'];   
            $cedula=$_POST['cedula'];           
            $apellido=$_POST['apellido'];
            $nombre=$_POST['nombre'];
            $esp=$_POST['esp'];           
            $estado=$_POST['estado'];
            
            Registrar::editar($id,$cedula,$apellido,$nombre,$esp,$estado);          
            header("Location:./?controlador=registrarE&accion=inicio");
        }
        $id_usu=$_GET['id_usu'];
       //(print_r(Medicos::buscar($id_per));        
        $registrar=(Registrar::buscar($id_usu));
        //if($_POST){
          //  print_r($_POST);
        //}
        
        //$ced_per=$_GET['ced_per'];
    
        include_once("./Vista/registrarE/crear.php");

        
    }

    /*public function inicio(){

        $especialidad=Especialidad::consultar();
        include_once("./Vista/especialidad/inicio.php");

    } */
  
}
?>