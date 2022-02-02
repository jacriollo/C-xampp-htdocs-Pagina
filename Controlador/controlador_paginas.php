<?php
class ControladorPaginas{
    //Metododos
    public function inicio(){
        include_once("Vista/paginas/inicio.php");
    } 
    public function error(){
        include_once("Vista/paginas/error.php");
    } 
}

?>