
<?php

include("./controlador/conexion.php");
date_default_timezone_set("America/Guayaquil");
class Citas{

    public $id_cit;
    public $id_esp;
    public $id_pac;
    public $id_med;
    public $fec_cit;
    public $hor_cit;
    public $obs;
    public $diag_cit;
    public $rec_cit;
    public $pac;    
    public $med;    
    public $esp;    
    public function __construct($id_cit,$id_esp,$id_pac,$id_med,$fec_cit,$hor_cit,$est_cit,$obs,$diag_cit,$rec_cit,$pac,$med,$esp){
        $this->id_cit=$id_cit;
        $this->id_esp=$id_esp;
        $this->id_pac=$id_pac;
        $this->id_med=$id_med;
        $this->fec_cit=$fec_cit;
        $this->hor_cit=$hor_cit;
        $this->obs=$obs;
        $this->diag_cit=$diag_cit;
        $this->rec_cit=$rec_cit;
        $this->pac=$pac;
        $this->med=$med;
        $this->esp=$esp;
    }

    public static function consultar(){             
        //$listaespecialidad=[];
        $listacita=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT c.id_cit, c.id_esp, c.id_per, c.id_med, c.fec_cit, c.hor_cit, c.est_cit, c.obs_exa_cit AS obs, c.diag_cit, c.rec_cit,"
            ." concat(p.ape_per, ' ' , p.nom_per) AS pac, concat(pm.ape_per, ' ' , pm.nom_per) AS med, e.nom_esp AS esp"
            ." FROM citas c"
            ." INNER JOIN usuario up ON up.id_usu = c.id_per"
            ." INNER JOIN usuario um ON um.id_usu = c.id_med"
            ." INNER JOIN persona p ON p.id_per = up.id_per"
            ." INNER JOIN persona pm ON pm.id_per = um.id_per"
            ." INNER JOIN especialidad e ON e.id_esp = c.id_esp" );    
        foreach($sql->fetchAll() as $cita) {
              $listacita[]= new Citas ($cita['id_cit'],$cita['id_esp'],$cita['id_pac'],$cita['id_med'],$cita['fec_cit'],$cita['hor_cit'],$cita['est_cit'],$cita['obs'],$cita['diag_cit'],$cita['rec_cit'],$cita['pac'],$cita['med'],$cita['esp']); 
        } 
        return $listacita;
    }



    /*public static function consultar(){             
        $listaespecialidad=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT c.id_cit, c.id_esp, c.id_pac, c.id_med, c.fec_cit, c.hor_cit, c.est_cit, c.obs_exa_cit AS obs, c.diag_cit, c.rec_cit,"
            ." concat(p.ape_per, ' ' , p.nom_per) AS pac, concat(pm.ape_per, ' ' , pm.nom_per) AS med, e.nom_esp AS esp"
            ." FROM citas c"
            ." INNER JOIN usuario up ON up.id_usu = c.id_pac"
            ." INNER JOIN usuario um ON um.id_usu = c.id_med"
            ." INNER JOIN persona p ON p.id_per = up.id_per"
            ." INNER JOIN persona pm ON pm.id_per = um.id_per"
            ." INNER JOIN especialidad e ON e.id_esp = c.id_esp" );    
        foreach($sql->fetchAll() as $cita) {
              $listacita[]= new Citas ($cita['id_cit'],$cita['id_esp'],$cita['id_pac'],$cita['id_med'],$cita['fec_cit'],$cita['hor_cit'],$cita['est_cit'],$cita['obs'],$cita['diag_cit'],$cita['rec_cit'],$cita['pac'],$cita['med'],$cita['esp']); 
        } 
        return $listacita;
    }*/



    public static function consultarEspecialidad($estado){  
        $listaespecialidad=[];
       $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM especialidad WHERE est_esp=? ");
        $sql->execute(array($estado));      
        foreach($sql->fetchAll() as $especialidad) {         ;
            $listaespecialidad[]= array('id_esp' => $especialidad['id_esp'], 'nom_esp' =>  $especialidad['nom_esp']); 
        }              
        return $listaespecialidad;
    }

    public static function consultarMedicoEspecialidad($idEsp){ 
            $listaMedicoEsp=[];
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->prepare("SELECT me.id_usu, concat(p.ape_per, ' ', p.nom_per) AS med 
            FROM medico_especialidad me 
            INNER JOIN especialidad e ON e.id_esp = me.id_esp
            INNER JOIN usuario u ON u.id_usu = me.id_usu
            INNER JOIN persona p ON p.id_per =  u.id_per 
            WHERE e.id_esp=?");
        $sql->execute(array($idEsp));                
            foreach($sql->fetchAll() as $registrar) {
               $listaMedicoEsp[]= array('id_usu' => $registrar['id_usu'], 'med' => $registrar['med']); 
            
            }
            return $listaMedicoEsp;
    }

    public static function consultarHorasMedicoEspecialidad( $idMed,$fecha){  
        $listaHoraMedico= ['09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','15:00','15:30','16:00','16:30','17:00','17:30'];               
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT hor_cit, est_cit FROM complexivo.citas WHERE id_med=? AND fec_cit=?");
        $sql->execute(array( $idMed,$fecha ));                
        foreach($sql->fetchAll() as $registrar) {
            $f= $registrar['hor_cit'];
            $val = array_search( $f, $listaHoraMedico );
            if($val){ 
                unset($listaHoraMedico[$val]);
            }       
        }
        return $listaHoraMedico;
    }     
    
    public static function consultarPacientes($tipoUsu){         
            $listaMedicoEsp=[];
            $conexionBD=BD::crearInstancia();
            $sql=$conexionBD->prepare("SELECT u.id_usu, concat(p.ape_per, ' ' , p.nom_per) AS pac
            FROM complexivo.usuario u 
            INNER JOIN complexivo.persona p ON p.id_per= u.id_per 
            WHERE u.tip_usu =?");
        $sql->execute(array($tipoUsu));                
            foreach($sql->fetchAll() as $registrar) {
               $listaMedicoEsp[]= array('id_usu' => $registrar['id_usu'], 'pac' => $registrar['pac']); 
            
            }
            return $listaMedicoEsp;
    }

    

}