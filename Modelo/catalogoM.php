
<?php

include("./controlador/conexion.php");
class CatalogoM{

    public $id_cat;
    public $gru_cat;
    public $nom_cat;
    public $des_cat;
    public $can_cat;
    public $pre_cat;
    public $est_cat;
    
    
    public function __construct($id_cat,$gru_cat,$nom_cat,$des_cat,$can_cat,$pre_cat,$est_cat){
        $this->id_cat=$id_cat;
        $this->gru_cat=$gru_cat;
        $this->nom_cat=$nom_cat;
        $this->des_cat=$des_cat;
        $this->can_cat=$can_cat;
        $this->pre_cat=$pre_cat;
        $this->est_cat=$est_cat;
       

    }

    public static function consultar(){        
        $listamedicamento=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM catalogo_medicina");        
        foreach($sql->fetchAll() as $catalogo) {
            $listamedicamento[]= new CatalogoM ($catalogo['id_cat'],$catalogo['gru_cat'],$catalogo['nom_cat'],$catalogo['des_cat'],$catalogo['can_cat'],$catalogo['pre_cat'],$catalogo['est_cat']); 

        }
        return $listamedicamento;
    }

    public static function crear($gru_cat,$nom_cat,$des_cat,$can_cat, $pre_cat,$est_cat){
        $conexionBD=BD::crearInstancia();       
        $sql=$conexionBD->prepare("INSERT INTO catalogo_medicina(gru_cat,nom_cat,des_cat,can_cat,pre_cat,est_cat) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($gru_cat,$nom_cat,$des_cat,$can_cat, $pre_cat,$est_cat));

    }

    public static function borrar($id_cat){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" DELETE FROM catalogo_medicina WHERE id_cat=? ");
        $sql->execute(array($id_cat));

    }

    public static function buscar($id_cat){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare(" SELECT * FROM catalogo_medicina WHERE id_cat=? ");
        $sql->execute(array($id_cat));
        $catalogo=$sql->fetch();
        return new CatalogoM($catalogo['id_cat'],$catalogo['gru_cat'],$catalogo['nom_cat'],$catalogo['des_cat'],$catalogo['can_cat'],$catalogo['pre_cat'],$catalogo['est_cat']);
    }

    public static function editar($id_cat,$gru_cat,$nom_cat,$des_cat,$can_cat, $pre_cat,$est_cat){
        //echo  $id_per;
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE catalogo_medicina SET gru_cat=?, nom_cat=?, des_cat=?, can_cat=?, pre_cat=?, est_cat=? WHERE id_cat=?");
        $sql->execute(array($gru_cat,$nom_cat,$des_cat,$can_cat, $pre_cat,$est_cat,$id_cat));
        //header("Location:./?controlador=medicos&accion=editar");
    }

}