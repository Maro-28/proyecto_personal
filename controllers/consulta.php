<?php
class consulta extends Controller{

    function __construct(){
       parent :: __construct();
       $this->view->render('consulta/index');
    }

    
}