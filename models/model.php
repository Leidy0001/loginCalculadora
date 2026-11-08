<?php
class enlacesPagina{
    static function enlacePaginaModel($enlacesModel){
        if($enlacesModel=="login" ||
           $enlacesModel=="calculadora" ||
           $enlacesModel=="resultado")
        {
            $modulo="views/".$enlacesModel.".php";
        }
        else{
            $modulo="views/login.php";
        }
        return $modulo;
    }
}
?>
