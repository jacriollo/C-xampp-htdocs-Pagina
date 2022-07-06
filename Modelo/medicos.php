<?php

include("./controlador/conexion.php");
class Medicos{

    public $id_per;
    public $ced_per;
    public $ape_per;
    public $nom_per;
    public $correo_per;
    public $tel_per;
    public $dir_per;
    public $ciu_rec_per;
    public $fec_nac_per;
    public $gen_per;
    public $tip_usu;
    public $est_per;
    public $pas_per;

    public function __construct($id_per,$ced_per,$ape_per,$nom_per,$correo_per,$tel_per,$dir_per,$ciu_rec_per,$fec_nac_per,$gen_per,$tip_usu,$est_per,$pas_per){
        $this->id_per=$id_per;
        $this->ced_per=$ced_per;
        $this->ape_per=$ape_per;
        $this->nom_per=$nom_per;
        $this->correo_per=$correo_per;
        $this->tel_per=$tel_per;
        $this->dir_per=$dir_per;
        $this->ciu_rec_per=$ciu_rec_per;
        $this->fec_nac_per=$fec_nac_per;
        $this->gen_per=$gen_per;
        $this->tip_usu=$tip_usu;
        $this->est_per=$est_per;
        $this->pas_per=$pas_per;
    }

    public static function consultar(){     
        $per= $_SESSION['id_per'];      
        $listamedicos=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM persona  WHERE id_per=$per");        
        foreach($sql->fetchAll() as $medico) {
            $listamedicos[]= new Medicos ($medico['id_per'],$medico['ced_per'],$medico['ape_per'],$medico['nom_per'],$medico['correo_per'],$medico['tel_per'],$medico['dir_per'],$medico['ciu_rec_per'],$medico['fec_nac_per'],$medico['gen_per'],$medico['tip_usu'],$medico['est_per'],$medico['pas_per']); 

        }
        return $listamedicos;
    }

    /*
    public static function consultar(){        
        $listamedicos=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM persona");        
        foreach($sql->fetchAll() as $medico) {
            $listamedicos[]= new Medicos ($medico['id_per'],$medico['ced_per'],$medico['ape_per'],$medico['nom_per'],$medico['correo_per'],$medico['tel_per'],$medico['dir_per'],$medico['ciu_rec_per'],$medico['fec_nac_per'],$medico['gen_per'],$medico['tip_usu'],$medico['est_per'],$medico['pas_per']); 

        }
        return $listamedicos;
    }
    */
    public static function crear($cedula, $apellido, $nombre, $correo, $telefono, $direccion, $ciudad, $fecha_nacimiento, $genero, $tipusu, $estper, $pas) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula, $apellido, $nombre, $correo, $telefono, $direccion, $ciudad, $fecha_nacimiento, $genero, $tipusu, $estper, $pas));
        $id = $conexionBD->lastInsertId();
       if($id > 0){
            
        Medicos::crearusuarios($id, $cedula, $pas, $tipusu, $estper);
       }
    }

    public static function crearusuarios($id_per, $cedula, $pas, $tipusu, $estper) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO usuario(id_per, nom_usu, pas_per, tip_usu, est_usu) VALUES (?,?,?,?,?)");
        $sql->execute(array($id_per, $cedula, $pas, $tipusu, $estper));
    }






    /* public static function crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas));
        if($sql->affected_row >0){
           crearusuarios($sql->insert_id,$cedula,$pas,$tipusu,$estper);       
           
        }
    }

    public static function crearusuarios($id_per,$cedula,$pas,$tipusu,$estper){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO usuario(id_per,ced_per, pas_per, rol_usu, est_usu) VALUES (?,?,?,?,?)");
        $sql->execute(array($id_per,$cedula,$pas,$tipusu,$estper));
        
    }*/


    public static function borrar($id_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" DELETE FROM persona WHERE id_per=? ");
        $sql->execute(array($id_per));

    }

    public static function buscar($id_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" SELECT * FROM persona WHERE id_per=? ");
        $sql->execute(array($id_per));
        $medico=$sql->fetch();
        return new Medicos($medico['id_per'],$medico['ced_per'],$medico['ape_per'],$medico['nom_per'],$medico['correo_per'],$medico['tel_per'],$medico['dir_per'],$medico['ciu_rec_per'],$medico['fec_nac_per'],$medico['gen_per'],$medico['tip_usu'],$medico['est_per'],$medico['pas_per']);
    }

    public static function editar($id_per, $cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas){
        //echo  $id_per;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE persona SET ced_per=?, ape_per=?, nom_per=?, correo_per=?, tel_per=?, dir_per=?, ciu_rec_per=?, fec_nac_per=?, gen_per=?, tip_usu=?, est_per=?, pas_per=? WHERE id_per=? ");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas,$id_per));
        //header("Location:./?controlador=medicos&accion=editar");
       // Pacientes::modificarusuarios($id_per, $cedula, $pas, $tipusu, $estper);
    }

    /*
    public static function editar($id_per, $cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas){
        // echo  $pas;
         $conexionBD=BD::crearInstancia();
         $sql=$conexionBD->prepare("UPDATE persona SET ced_per=?, ape_per=?, nom_per=?, correo_per=?, tel_per=?, dir_per=?, ciu_rec_per=?, fec_nac_per=?, gen_per=?, tip_usu=?, est_per=?, pas_per=? WHERE id_per=? ");
         $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas,$id_per));
        //echo $id = $conexionBD->lastInsertId();
        // if($id > 0){            
         Pacientes::modificarusuarios($id_per, $cedula, $pas, $tipusu, $estper);
        // }*/
         
}
?>