
<?php
include("./controlador/conexion.php");
class Registrar{
    
    public $ced_per;
    public $ape_per;
    public $nom_per;   
    public $tip_usu;
    public $id_usu; 

    public function __construct($ced_per,$ape_per,$nom_per,$tip_usu,$id_usu){
        $this->ced_per=$ced_per;
        $this->ape_per=$ape_per;
        $this->nom_per=$nom_per;       
        $this->tip_usu=$tip_usu;     
        $this->pas_per=$id_usu;
    }

    public static function consultar(){        
        $listaregistrar=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT ced_per, ape_per, nom_per, U.tip_usu,U.id_usu FROM persona P, usuario U WHERE P.id_per= U.id_per and U.tip_usu='2'");        
        foreach($sql->fetchAll() as $registrar) {
           $listaregistrar[]= new Registrar ($registrar['ced_per'],$registrar['ape_per'],$registrar['nom_per'],$registrar['tip_usu'],$registrar['id_usu']); 
        
        }
        return $listaregistrar;
    }

    public static function buscar($id_usu){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT ced_per, ape_per, nom_per, U.tip_usu,U.id_usu FROM persona P, usuario U WHERE P.id_per= U.id_per and U.tip_usu='2'");
        $sql->execute(array($id_usu));
        $registrar=$sql->fetch();
        return new Registrar($registrar['ced_per'],$registrar['ape_per'],$registrar['nom_per'],$registrar['tip_usu'],$registrar['id_usu']);
    }

   /* public static function consultar(){        
        $listaregistrar=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM persona");        
        foreach($sql->fetchAll() as $registrar) {
            $listaregistrar[]= new Registrar ($registrar['id_per'],$registrar['ced_per'],$registrar['ape_per'],$registrar['nom_per'],$registrar['correo_per'],$registrar['tel_per'],$registrar['dir_per'],$registrar['ciu_rec_per'],$registrar['fec_nac_per'],$registrar['gen_per'],$registrar['tip_usu'],$registrar['est_per'],$registrar['pas_per']); 

        }
        return $listaregistrar;
    }*/

 



    public static function editar($id_per, $cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas){
        //echo  $id_per;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE persona SET ced_per=?, ape_per=?, nom_per=?, correo_per=?, tel_per=?, dir_per=?, ciu_rec_per=?, fec_nac_per=?, gen_per=?, tip_usu=?, est_per=?, pas_per=? WHERE id_per=? ");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas,$id_per));
        //header("Location:./?controlador=medicos&accion=editar");
    }
}

?>