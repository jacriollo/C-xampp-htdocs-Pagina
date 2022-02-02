
<?php
include_once("Modelo/horarios.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorHorarios{

    public function inicio(){

        $medicos=Horario::consultar();
        include_once("./Vista/horarios/inicio.php");

    } 
    public function crear(){
        if($_POST){
         print_r($_POST);
         $h1=$_POST['h1'];
         $h2=$_POST['h2'];
         $h3=$_POST['h3'];
         $h4=$_POST['h4'];
         $h5=$_POST['h5'];
         $h6=$_POST['h6'];
        
         Horario::crear($h1,$h2,$h3,$h4,$h5,$h6);
         header("Location:./?controlador=horarios&accion=inicio");
     }
         include_once("Vista/horarios/crear.php");
     }

     public function editar(){           
        if($_POST){
            print_r($_POST);
            $h1=$_POST['h1'];
            $h2=$_POST['h2'];
            $h3=$_POST['h3'];
            $h4=$_POST['h4'];
            $h5=$_POST['h5'];
            $h6=$_POST['h6'];     
            
            Horario::editar($h1,$h2,$h3,$h4,$h5,$h6);          
            //header("Location:./?controlador=usuarios&accion=inicio");
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