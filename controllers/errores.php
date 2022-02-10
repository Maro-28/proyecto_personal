<?php
class Errores{

    function __construct(){
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $this->view->render('errores/index');
        //echo "<p>Error al cargar recurso</p>";
    }
}

?>