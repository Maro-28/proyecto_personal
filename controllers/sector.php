<?php
class sector extends Controller{

    function __construct(){
       parent :: __construct();
       $this->view->render('sector/index');
    }

    function cargarSector(){
        $sector = $_POST['sector'];
        $this->model->insert(['sector' => $sector]);
    }
}