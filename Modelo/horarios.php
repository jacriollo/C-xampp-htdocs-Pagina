

<?php

include("./controlador/conexion.php");
class Horario{

   
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
        $listamedicos=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT ced_per, ape_per, nom_per, U.tip_usu,U.id_usu FROM persona P, usuario U WHERE P.id_per= U.id_per and U.tip_usu='2'" );        
        foreach($sql->fetchAll() as $medicos) {
            $listamedicos[]= new Horario ($medicos['ced_per'],$medicos['ape_per'],$medicos['nom_per'],$medicos['tip_usu'],$medicos['id_usu']); 

        }
        return $listamedicos;
    }

    public static function crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas_per));
        $id = $conexionBD->lastInsertId();
        if($id > 0){
            
            Usuarios::crearusuarios($id, $cedula, $pas_per, $tipusu, $estper);
           }
    }

    public static function crearusuarios($id_per, $cedula, $pas_per, $tipusu, $estper) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO usuario(id_per, nom_usu, pas_usu, tip_usu, est_usu) VALUES (?,?,?,?,?)");
        $sql->execute(array($id_per, $cedula, $pas_per, $tipusu, $estper));
    }

    public static function borrar($id_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" DELETE FROM persona WHERE id_per=? ");
        $sql->execute(array($id_per));

    }

    public static function buscar($id_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" SELECT * FROM persona WHERE id_per=? ");
        $sql->execute(array($id_per));
        $usuarios=$sql->fetch();
        return new Usuarios($usuarios['id_per'],$usuarios['ced_per'],$usuarios['ape_per'],$usuarios['nom_per'],$usuarios['correo_per'],$usuarios['tel_per'],$usuarios['dir_per'],$usuarios['ciu_rec_per'],$usuarios['fec_nac_per'],$usuarios['gen_per'],$usuarios['tip_usu'],$usuarios['est_per'],$usuarios['pas_per']);
    }

    public static function editar($id_per, $cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas){
        //echo  $id_per;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE persona SET ced_per=?, ape_per=?, nom_per=?, correo_per=?, tel_per=?, dir_per=?, ciu_rec_per=?, fec_nac_per=?, gen_per=?, tip_usu=?, est_per=?, pas_per=? WHERE id_per=? ");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas,$id_per));
       //echo $id = $conexionBD->lastInsertId();
       // if($id > 0){            
            Usuarios::modificarusuarios($id_per, $cedula, $pas, $tipusu, $estper);
       // }
        
    }
    public static function modificarusuarios($id_per, $cedula, $pas_per, $tipusu, $estper) {
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE usuario SET id_usu=?, nom_usu=?, pas_usu=?, tip_usu=?, est_usu=? WHERE id_per=? ");
        $sql->execute(array($cedula, $pas_per, $tipusu, $estper,$id_per));
    }

}
?>