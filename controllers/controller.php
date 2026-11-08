<?php
class PaginaController{

    public function enlacesPaginaController(){
        if(isset($_GET['accion'])){
            $enlacesController = $_GET['accion'];
        }
        else{
            $enlacesController = "login";
        }
        $respuesta = enlacesPagina::enlacePaginaModel($enlacesController);
        include $respuesta;
    }

    public function getTemplate(){
        include "views/template.php";
    }
}
?>
