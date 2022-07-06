
<?php

include("./controlador/conexion.php");
class Usuarios{

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
        $listausuarios=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM persona");        
        foreach($sql->fetchAll() as $usuarios) {
            $listausuarios[]= new Usuarios ($usuarios['id_per'],$usuarios['ced_per'],$usuarios['ape_per'],$usuarios['nom_per'],$usuarios['correo_per'],$usuarios['tel_per'],$usuarios['dir_per'],$usuarios['ciu_rec_per'],$usuarios['fec_nac_per'],$usuarios['gen_per'],$usuarios['tip_usu'],$usuarios['est_per'],$usuarios['pas_per']); 

        }
        return $listausuarios;
    }

    public static function crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas_per){
        $md5pass= md5($pas_per);
        $conexionBD=BD::crearInstancia();
        
        $sql=$conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$md5pass));
        $id = $conexionBD->lastInsertId();
        if($id > 0){
            
            Usuarios::crearusuarios($id, $cedula, $pas_per, $tipusu, $estper);
           }
    }

    public static function crearusuarios($id_per, $cedula, $pas_per, $tipusu, $estper) {
        $md5pass= md5($pas_per);
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT INTO usuario(id_per, nom_usu, pas_usu, tip_usu, est_usu) VALUES (?,?,?,?,?)");
        $sql->execute(array($id_per, $cedula, $md5pass, $tipusu, $estper));
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
       // echo  $genero;
       $md5pass= md5($pas);
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE persona SET ced_per=?, ape_per=?, nom_per=?, correo_per=?, tel_per=?, dir_per=?, ciu_rec_per=?, fec_nac_per=?, gen_per=?, tip_usu=?, est_per=?, pas_per=? WHERE id_per=? ");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$md5pass,$id_per));
       //echo $id = $conexionBD->lastInsertId();
       // if($id > 0){            
            Usuarios::modificarusuarios($id_per, $cedula, $pas, $tipusu, $estper);
       // }
        
    }
    public static function modificarusuarios($id_per, $cedula, $pas_per, $tipusu, $estper) {
        $md5pass= md5($pas_per);
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE usuario SET nom_usu=?, pas_usu=?, tip_usu=?, est_usu=? WHERE id_per=? ");
        $sql->execute(array($cedula, $md5pass, $tipusu, $estper,$id_per));
    }
    public static function validarUsuario($cedula){
        $conexionBD=BD::crearInstancia();
        $consultapersona=$conexionBD->query("SELECT * FROM persona  WHERE ced_per='$cedula'"); 
        $datos = $consultapersona->fetchAll();
        return $datos; 
    }  

}
?>