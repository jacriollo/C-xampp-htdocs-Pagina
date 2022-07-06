
<?php
include("./controlador/conexion.php");
class Registrar{
    public $nom_esp;
    public $med;   
    public $est_esp;
    public $id_usu; 
    public $id_esp;

    public function __construct($id_usu, $id_esp,$est_esp,$med,$nom_esp){
        $this->id_usu=$id_usu;
        $this->id_esp=$id_esp;
        $this->med=$med;       
        $this->nom_esp=$nom_esp;     
        $this->est_esp=$est_esp;
    }
     /*public static function consultar(){        
        $listaregistrar=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT  me.id_usu, me.id_esp, me.est_med_esp AS est, concat(p.ape_per, ' ', p.nom_per) AS med, e.nom_esp 
        FROM medico_especialidad me 
        INNER JOIN especialidad e ON e.id_esp = me.id_esp
        INNER JOIN usuario u ON u.id_usu = me.id_usu
        INNER JOIN persona p ON p.id_per =  u.id_per");        
        foreach($sql->fetchAll() as $registrar) {
           $listaregistrar[]= new Registrar ($registrar['id_usu'],$registrar['id_esp'],$registrar['est'],$registrar['med'],$registrar['nom_esp'] ); 
        
        }
        return $listaregistrar;
    }*/

   public static function consultar(){        
        $listaregistrar=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT  me.id_usu, me.id_esp, me.est_med_esp AS est, concat(p.ape_per, ' ', p.nom_per) AS med, e.nom_esp 
        FROM medico_especialidad me 
        INNER JOIN especialidad e ON e.id_esp = me.id_esp
        INNER JOIN usuario u ON u.id_usu = me.id_usu
        INNER JOIN persona p ON p.id_per =  u.id_per");        
        foreach($sql->fetchAll() as $registrar) {
           $listaregistrar[]= new Registrar ($registrar['id_usu'],$registrar['id_esp'],$registrar['est'],$registrar['med'],$registrar['nom_esp'] );
          // $listaregistrar[]= new Registrar ($registrar['id_usu'],$registrar['id_esp'],$registrar['est'] ); 
        
        }
        return $listaregistrar;
    }

    public static function crear($id_usu,$id_esp,$estado){       
        $conexionBD=BD::crearInstancia();       
        $sql=$conexionBD->prepare("INSERT INTO medico_especialidad(id_usu, id_esp, est_med_esp) VALUES (?,?,?)");
        $sql->execute(array($id_usu, $id_esp, $estado));
    }
   
    /* public static function editar($id_usu, $id_esp, $estado){       
        echo $id_usu;
        echo $id_esp;
        echo $estado;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE medico_especialidad SET id_usu=?, id_esp=?, est_med_esp=? WHERE id_usu=? AND  id_esp=?");
        $sql->execute(array($id_esp,$id_usu,$estado));
    }*/
    
   public static function editar($id_usu, $id_esp,$estado){
    echo $id_usu;
    echo $id_esp;
    echo $estado;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE medico_especialidad SET id_esp=?, est_med_esp=? WHERE id_usu=? ");        
        $sql->execute(array($id_usu, $id_esp,$estado));
    }

    /* 
    public static function editar($id_esp,$nom_esp,$des_esp,$est_esp){
        $fechaAct=  date("Y-m-d H:i:s");
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE especialidad SET nom_esp=?, des_esp=?, fec_mod_esp=?, id_usu_mod_esp=?, est_esp=? WHERE id_esp=?");
        $sql->execute(array($nom_esp,$des_esp,$fechaAct,$_SESSION["id_per"],$est_esp,$id_esp));  */
       /* $sql=$conexionBD->prepare("UPDATE especialidad SET nom_esp=?, des_esp=?, fec_reg_esp=?, fec_mod_esp=?, id_usu_reg_esp=?, id_usu_mod_esp=?, est_esp=? WHERE id_esp=?");
        $sql->execute(array($nom_esp,$des_esp,$fec_reg_esp,$fec_mod_esp,$id_usu_reg_esp,$id_usu_mod_esp,$est_esp,$id_esp));*/
        //header("Location:./?controlador=medicos&accion=editar");
   // }
    


    public static function buscar($id_usu, $id_esp){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT id_usu, id_esp, est_med_esp AS est FROM medico_especialidad WHERE id_usu =? AND id_esp=?");
        $sql->execute(array($id_usu, $id_esp));
        $registrar=$sql->fetch();
        return new Registrar($registrar['id_usu'],$registrar['id_esp'],$registrar['est'], null, null);
    }  
    /*
    public static function buscar($id_usu, $id_esp){
      
        //echo $_SESSION["id_usu"];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT id_usu, id_esp, est_med_esp AS est FROM medico_especialidad WHERE id_usu =? AND id_esp=?");
        $sql->execute(array($id_usu, $id_esp));
        $registrar=$sql->fetch();      
        return new Registrar($registrar['id_usu'],$registrar['id_esp'],$registrar['est'], null, null);
        
    } */

    public static function borrar($id_usu, $id_esp){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" DELETE FROM medico_especialidad WHERE id_usu=? AND  id_esp=? ");
        $sql->execute(array($id_usu, $id_esp));

    }

    public static function consultarUsuarioRol($tipo){             
        $listaregistrar=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT u.id_usu, u.id_per, concat(p.ape_per, ' ', p.nom_per) AS med  FROM complexivo.usuario u INNER JOIN complexivo.persona p ON p.id_per =  u.id_per WHERE u.tip_usu = ? AND u.est_usu =? AND u.est_usu =? ;");                
        $sql->execute(array($tipo, 1, 1));      
        foreach($sql->fetchAll() as $registrar) {
           $listaregistrar[]=  array ('id_usu' => $registrar['id_usu'], 'med' => $registrar['med']); 
        
        }
        return $listaregistrar;
    } 

    public static function consultarEspecialidad($estado){                       
          $listaespecialidad=[];
         $conexionBD=BD::crearInstancia();
          $sql=$conexionBD->prepare("SELECT * FROM especialidad WHERE est_esp=? ");
          $sql->execute(array($estado));      
          foreach($sql->fetchAll() as $especialidad) {         ;
              $listaespecialidad[]= array ('id_esp' => $especialidad['id_esp'], 'nom_esp' =>  $especialidad['nom_esp']); 
          }
          return $listaespecialidad;
      }

}

?>