
<?php
include_once("Modelo/catalogoM.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorCatalogoM{
    //Metododos
    public function inicio(){

        $catalogos=CatalogoM::consultar();
        include_once("./Vista/catalogoM/inicio.php");

    } 
    public function crear(){
       if($_POST){
        print_r($_POST);        
        $grupo=$_POST['grupo'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $cantidad=$_POST['cantidad'];
        $presentacion=$_POST['presentacion'];
        $estado=$_POST['estado'];
        
        CatalogoM::crear($grupo,$nombre,$descripcion,$cantidad,$presentacion,$estado);
       // Medicos::crearusuarios();
        header("Location:./?controlador=catalogoM&accion=inicio");
    }
        include_once("Vista/catalogoM/crear.php");
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
            
            CatalogoM::editar($id,$grupo,$nombre,$descripcion,$cantidad,$presentacion,$estado);          
            header("Location:./?controlador=catalogoM&accion=inicio");
        }
        $id_cat=$_GET['id_cat'];
       //(print_r(Medicos::buscar($id_per));        
        $catalogos=(CatalogoM::buscar($id_cat));      
    
        include_once("./Vista/catalogoM/editar.php");
        
    }

    public function borrar(){
        print_r($_GET);
        $id_cat=$_GET['id_cat'];
        CatalogoM::borrar($id_cat);
        header("Location:./?controlador=catalogoM&accion=inicio");
    }
  
}

?>