
<?php
include_once("Modelo/registrarE.php"); 
include_once("conexion.php");
BD::crearInstancia();

class ControladorRegistrarE{

    public function inicio(){
        $registrar=Registrar::consultar();
        include_once("./Vista/registrarE/inicio.php");
    } 

    public function crear(){
        if($_POST){
            $medico=$_POST['medico'];
            $especialidad=$_POST['especialidad']; 
            $estado=$_POST['estado'];
            Registrar::crear($medico,$especialidad,$estado);
            header("Location:./?controlador=registrarE&accion=inicio");
        }
        $listaMedicos=Registrar::consultarUsuarioRol(2);        
        $listaEspecialidad=Registrar::consultarEspecialidad(1);   
        include_once("Vista/registrarE/crear.php");
     }

    public function editar(){           
        if($_POST){                 
            $medico=$_POST['medico'];
            $especialidad=$_POST['especialidad']; 
            $estado=$_POST['estado'];
            $id_usu= $_POST['id_usu'];
            $id_esp=$_POST['id_esp'];
            Registrar::editar($id_usu, $id_esp, $medico,$especialidad,$estado);        
            header("Location:./?controlador=registrarE&accion=inicio");
        }
        $id_usu=$_GET['id_usu'];     
        $id_esp=$_GET['id_esp']; 
        $especialidad=(Registrar::buscar($id_usu, $id_esp));       
        $listaMedicos=Registrar::consultarUsuarioRol(2);          
        $listaEspecialidad=Registrar::consultarEspecialidad(1);   
        include_once("./Vista/registrarE/editar.php");        
    }

    public function borrar(){
        $id_usu=$_GET['id_usu'];     
        $id_esp=$_GET['id_esp']; 
        Registrar::borrar($id_usu, $id_esp);
        header("Location:./?controlador=registrarE&accion=inicio");
    }
  
}
?>