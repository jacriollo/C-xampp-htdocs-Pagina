

<?php
include_once("Modelo/citasP.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorCitasP{
    //Metododos
    public function inicioP(){

        $catalogos=Citas::consultar();
        include_once("./Vista/pacientes/inicioP.php");

    } 
    public function crearP(){
        $idEsp =0;
        $idMed=0;
       if($_POST){
        print_r($_POST);        
        $grupo=$_POST['grupo'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $cantidad=$_POST['cantidad'];
        $presentacion=$_POST['presentacion'];
        $estado=$_POST['estado'];
        
        Citas::crearP($grupo,$nombre,$descripcion,$cantidad,$presentacion,$estado);
       // Medicos::crearusuarios();
       // header("Location:./?controlador=CitasP&accion=inicioP");
        header("Location:?controlador=CitasP&accion=inicioP");
    }
        $listaEspecialidad=Citas::consultarEspecialidad(1);   
        $listaPacientes=Citas::consultarPacientes(4);
        
    if($_GET){
        if($_GET['idEsp'] >0){
            $idEsp =$_GET['idEsp'];            
            $idMed =$_GET['idMed'];   
            $fecha =$_GET['fec'];  
            $listaMedicos=Citas::consultarMedicoEspecialidad($idEsp);  
        } 
        
        if($fecha != ""){            
            $listaHoras=Citas::consultarHorasMedicoEspecialidad( $idMed,$fecha );  
        }  
    }
        include_once("Vista/pacientes/crearP.php");
    } 

      

    public function obtenerMedicos(){      
       // return "a";
       // echo "ingresa oM"  .$_POST['provincia'];
    //return  Citas::consultarEspecialidad(1);
     //    $listaEspecialidad= Citas::consultarEspecialidad(1);
     //    print_r( $listaEspecialidad);
     //   return $listaEspecialidad;   
       
       // include_once("Vista/Citas/crear.php");
       echo Citas::consultarEspecialidad(1);
    // $listaEs=Citas::consultarEspecialidad(1);   
         //include_once("Vista/Citas/crear.php");
        // header('Content-type: application/json; charset=utf-8');
        //echo json_encode($listaEspecialidad);
         return $listaEs;
     } 

    public function editar(){        
        if($_POST){     
            $id=$_POST['id'];           
            $grupo=$_POST['grupo'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $cantidad=$_POST['cantidad'];
            $presentacion=$_POST['presentacion'];
            $estado=$_POST['estado'];
            
            Citas::editar($id,$grupo,$nombre,$descripcion,$cantidad,$presentacion,$estado);          
            header("Location:./?controlador=CitasP&accion=inicioP");
        }
        $id_cat=$_GET['id_cat'];
       //(print_r(Medicos::buscar($id_per));        
        $catalogos=(Citas::buscar($id_cat));
        //if($_POST){
          //  print_r($_POST);
        //}
        
        //$ced_per=$_GET['ced_per'];
    
        include_once("./Vista/pacientes/editar.php");

        
    }

    public function borrar(){
        print_r($_GET);
        $id_cat=$_GET['id_cat'];
        Citas::borrar($id_cat);
        header("Location:./?controlador=citasP&accion=inicioP");
    }
  
}

?>