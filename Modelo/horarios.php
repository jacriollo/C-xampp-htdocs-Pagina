

<?php

include("./controlador/conexion.php");
class Horario{

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

    
        
    /* public $ced_per;
    public $ape_per;
    public $nom_per;   
    public $tip_usu;
    public $id_usu;
    
   
    public $id_hora;
    public $id_medico;
    public $hora_inicio;
    public $hora_fin;
    public $horario;
    public $fecha_hora;
    public $estado;
    
   

    public function __construct($ced_per,$ape_per,$nom_per,$tip_usu,$id_usu){
       
        $this->ced_per=$ced_per;
        $this->ape_per=$ape_per;
        $this->nom_per=$nom_per;       
        $this->tip_usu=$tip_usu;  
        $this->id_usu=$id_usu;
   */
        //$this->pas_per=$id_usu;  ,$id_hora,$id_medico,$hora_inicio,$hora_fin,$horario,$fecha_hora,$estado


        /*
        $this->id_hora=$id_hora;
        $this->id_medico=$id_medico;
        $this->hora_inicio=$hora_inicio;
        $this->hora_fin=$hora_fin;
        $this->horario=$horario;
        $this->fecha_hora=$fecha_hora;
        $this->estado=$estado;
        */
        
    }

    public static function consultar(){        
        $listamedicos=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT  me.id_usu, me.id_esp, me.est_med_esp AS est, concat(p.ape_per, ' ', p.nom_per) AS med, e.nom_esp 
        FROM medico_especialidad me 
        INNER JOIN especialidad e ON e.id_esp = me.id_esp
        INNER JOIN usuario u ON u.id_usu = me.id_usu
        INNER JOIN persona p ON p.id_per =  u.id_per");        
        foreach($sql->fetchAll() as $medicos) {
           $listamedicos[]= new Horario ($medicos['id_usu'],$medicos['id_esp'],$medicos['est'],$medicos['med'],$medicos['nom_esp'] );
          // $listaregistrar[]= new Registrar ($registrar['id_usu'],$registrar['id_esp'],$registrar['est'] ); 
        
        }
        return $listamedicos;
    }
    /*
    public static function consultar(){ 
        //echo $_SESSION["pas_per"];       
        $listamedicos=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT ced_per, ape_per, nom_per, U.tip_usu,U.id_usu FROM persona P, usuario U WHERE P.id_per= U.id_per and U.tip_usu='2'" );        
        foreach($sql->fetchAll() as $medicos) {
            $listamedicos[]= new Horario ($medicos['ced_per'],$medicos['ape_per'],$medicos['nom_per'],$medicos['tip_usu'],$medicos['id_usu']); 

        }
        return $listamedicos;
    }
    */
    public static function crear($id_usu,$horaI,$horaF,$intervalo,$horario,$fecha,$estado){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO horas_medico(id_medico, hora_inicio, hora_fin, intervalo, horario, fecha_hora, estado) VALUES (?,?,?,?,?,?,?)");
 
        $sql->execute(array($id_usu,$horaI,$horaF,$intervalo,$horario,$fecha,$estado));
        $id = $conexionBD->lastInsertId();
       // if($id > 0){
            
        //    Usuarios::crearusuarios($id, $cedula, $pas_per, $tipusu, $estper);
        //}
    }



    /*    
    public static function crear($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas_per){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO persona(ced_per, ape_per, nom_per, correo_per, tel_per, dir_per, ciu_rec_per, fec_nac_per, gen_per, tip_usu, est_per, pas_per) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($cedula,$apellido,$nombre,$correo,$telefono,$direccion,$ciudad,$fecha_nacimiento,$genero,$tipusu,$estper,$pas_per));
        $id = $conexionBD->lastInsertId();
        if($id > 0){
            
            Usuarios::crearusuarios($id, $cedula, $pas_per, $tipusu, $estper);
           }
    }
    */
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