
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
         $fecha=$_POST['fecha'];
         echo $horaI=$_POST['horaI'];
        echo $horaF=$_POST['horaF'];
        echo $intervalo=$_POST['intervalo'];

        // echo $horario('H:s:i', strtotime('08:30:00 + 8 hours + 30 minutes'));
         echo $horario=$horaI+$intervalo;

       // $hi = strtotime('02:30');
       // $hf = strtotime('02:00')-strtotime('midnight');
       // echo date('H:i',$hi+$hf);

         $estado=$_POST['estado'];
        
         Horario::crear($fecha,$horaI,$horaF,$intervalo,$estado);
         header("Location:./?controlador=horarios&accion=inicio");
     }
         include_once("Vista/horarios/crear1.php");
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