<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

        if( $enlacesModel == "inicio"  ||
            $enlacesModel == "producto" ||
            $enlacesModel == "empresa" ||
            $enlacesModel == "contactenos"){

            $module = "views/modules/".$enlacesModel.".php";
        
        }

        return $module;

    }
}
?>