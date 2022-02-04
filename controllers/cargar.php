<?php
class cargar extends Controller{

    function __construct(){
       parent :: __construct();
       $this->view->render('cargar/index');
    }

}