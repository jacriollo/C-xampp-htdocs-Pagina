
<?php

include("./controlador/conexion.php");
date_default_timezone_set("America/Guayaquil");
class Especialidad{

    public $id_esp;
    public $nom_esp;
    public $des_esp;
    public $fec_reg_esp;
    public $fec_mod_esp;
    public $id_usu_reg_esp;
    public $id_usu_mod_esp;
    public $est_esp;
    
    public function __construct($id_esp,$nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$id_usu_reg_esp,$id_usu_mod_esp,$est_esp){
        $this->id_esp=$id_esp;
        $this->nom_esp=$nom_esp;
        $this->des_esp=$des_esp;
        $this->fec_reg_esp=$fec_reg_esp;
        $this->fec_mod_esp=$fec_mod_esp;
        $this->ced_usu_reg_esp=$id_usu_reg_esp;
        $this->ced_usu_mod_esp=$id_usu_mod_esp;
        $this->est_esp=$est_esp;

    }

    public static function consultar(){        
        $listaespecialidad=[];
        $conexionBD=BD::crearInstancia();
//        $sql=$conexionBD->query("SELECT * FROM especialidad");        
        $sql=$conexionBD->query("SELECT e.*, concat(p.ape_per, ' ', p.nom_per) AS usuReg, concat(pr.ape_per, ' ', pr.nom_per) AS usuMod"
            ." FROM especialidad e "
            ." INNER JOIN usuario u ON u.id_usu = e.id_usu_reg_esp"
            ." INNER JOIN persona p ON p.id_per = u.id_per"
            ." LEFT JOIN usuario ur ON ur.id_usu = e.id_usu_mod_esp"
            ." LEFT JOIN persona pr ON pr.id_per = ur.id_per" );
        foreach($sql->fetchAll() as $especialidad) {
              $listaespecialidad[]= new Especialidad ($especialidad['id_esp'],$especialidad['nom_esp'],$especialidad['des_esp'],$especialidad['fec_reg_esp'],$especialidad['fec_mod_esp'],$especialidad['usuReg'],$especialidad['usuMod'],$especialidad['est_esp']); 
//$listaespecialidad[]= new Especialidad ($especialidad['id_esp'],$especialidad['nom_esp'],$especialidad['des_esp'],$especialidad['fec_reg_esp'],$especialidad['fec_mod_esp'],$especialidad['id_usu_reg_esp'],$especialidad['id_usu_mod_esp'],$especialidad['est_esp']); 

        }
        return $listaespecialidad;
    }

//    public static function crear($nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$id_usu_reg_esp,$id_usu_mod_esp,$est_esp){
    public static function crear($nom_esp,$des_esp,$est_esp){
        echo " idper". $_SESSION["id_per"];
        $conexionBD=BD::crearInstancia();       
         $sql=$conexionBD->prepare("INSERT INTO especialidad(nom_esp, des_esp, id_usu_reg_esp, est_esp) VALUES (?,?,?,?)");
        $sql->execute(array($nom_esp,$des_esp,$_SESSION["id_usu"],$est_esp));
       /* $sql=$conexionBD->prepare("INSERT INTO especialidad(nom_esp, des_esp, fec_reg_esp, fec_mod_esp, id_usu_reg_esp, id_usu_mod_esp, est_esp) VALUES (?,?,?,?,?,?,?)");
        $sql->execute(array($nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$id_usu_reg_esp,$id_usu_mod_esp,$est_esp));*/

    }

    public static function borrar($id_esp){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" DELETE FROM especialidad WHERE id_esp=? ");
        $sql->execute(array($id_esp));

    }

    public static function buscar($id_esp){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" SELECT * FROM especialidad WHERE id_esp=? ");
        $sql->execute(array($id_esp));
        $especialidad=$sql->fetch();
        return new Especialidad($especialidad['id_esp'],$especialidad['nom_esp'],$especialidad['des_esp'],$especialidad['fec_reg_esp'],$especialidad['fec_mod_esp'],$especialidad['id_usu_reg_esp'],$especialidad['id_usu_mod_esp'],$especialidad['est_esp']);
    }

    public static function editar($id_esp,$nom_esp,$des_esp,$est_esp){
        $fechaAct=  date("Y-m-d H:i:s");
        $conexionBD=BD::crearInstancia();
         $sql=$conexionBD->prepare("UPDATE especialidad SET nom_esp=?, des_esp=?, fec_mod_esp=?, id_usu_mod_esp=?, est_esp=? WHERE id_esp=?");
        $sql->execute(array($nom_esp,$des_esp,$fechaAct,$_SESSION["id_usu"],$est_esp,$id_esp));
       /* $sql=$conexionBD->prepare("UPDATE especialidad SET nom_esp=?, des_esp=?, fec_reg_esp=?, fec_mod_esp=?, id_usu_reg_esp=?, id_usu_mod_esp=?, est_esp=? WHERE id_esp=?");
        $sql->execute(array($nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$id_usu_reg_esp,$id_usu_mod_esp,$est_esp,$id_esp));*/
        //header("Location:./?controlador=medicos&accion=editar");
    }

}