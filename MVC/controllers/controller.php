<?php

class MvcController{

    #LLAMADA A LA PLANTILLA

    public function plantilla(){

        #Include() se utiliza para invocar el archivo que tiene el html.
        include "views/template.php";
    }

     #INTERACCION DEL USUARIO
    
     public function enlacesPaginasController(){

        $enlacesController = $_GET["action"];

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}

?>