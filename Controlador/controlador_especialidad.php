<?php
include_once("Modelo/especialidad.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorEspecialidad{

    public function inicio(){

        $especialidad=Especialidad::consultar();
        include_once("./Vista/especialidad/inicio.php");

    } 

    public function crear(){
        if($_POST){
            //print_r($_POST);
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
        /*   $f_reg=$_POST['f_reg'];
            $f_mod=$_POST['f_mod'];
            $usu_r=$_POST['usu_r'];
            $usu_m=$_POST['usu_m'];*/
            $estado=$_POST['estado'];


            $existe_especialidad = Especialidad::validarEspecialidad($nombre);
            if(count($existe_especialidad) > 0){
                $mensaje  = "Ya existe una especialidad con este nombre";
                include_once("Vista/especialidad/crear.php");
                
            }else{
                Especialidad::crear($nombre,$descripcion,$estado);
    //          Especialidad::crear($nombre,$descripcion,$f_reg,$f_mod,$usu_r,$usu_m,$estado);
                header("Location:./?controlador=especialidad&accion=inicio");
            }
        }else{
                $mensaje  = "";
                include_once("Vista/especialidad/crear.php");
               // include_once("Vista/usuarios/crear.php");
        }
       // }
    }
     public function editar(){    

       
        if($_POST){ 
            $id_esp=$_POST['id_esp'];       
            $nom_esp=$_POST['nombre'];           
            $des_esp=$_POST['descripcion'];
          /*  $fec_reg_esp=$_POST['f_reg'];
            $fec_mod_esp=$_POST['f_mod'];
            $ced_usu_reg_esp=$_POST['usu_r'];
            $ced_usu_mod_esp=$_POST['usu_m'];*/
            $est_esp=$_POST['estado'];            
         //   Especialidad::editar($id_esp,$nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$ced_usu_reg_esp,$ced_usu_mod_esp,$est_esp);          
            Especialidad::editar($id_esp,$nom_esp,$des_esp,$est_esp);          
            header("Location:./?controlador=especialidad&accion=inicio");
        }
        $id_esp=$_GET['id_esp'];
       //(print_r(Medicos::buscar($id_per));        
        $especialidad=(Especialidad::buscar($id_esp));
       
        //if($_POST){
           // print_r($_POST);
       // }
        
        //$ced_per=$_GET['ced_per'];
        include_once("./Vista/especialidad/editar.php");

        
    }

    public function borrar(){
        print_r($_GET);
        $id_esp=$_GET['id_esp'];
        Especialidad::borrar($id_esp);
        header("Location:./?controlador=especialidad&accion=inicio");
    }


}