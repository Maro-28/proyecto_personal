<?php

class NuevoModel extends Model{


    public function __construct(){
        parent::__construct();
    }

    public function insert($sucursal){
        try{
        $query = $this->db->conect()->prepare('INSERT INTO SUCURSAL (sucursal) VALUES (:sucursal)');
        $query->execute(['sucursal' => $sucursal['sucursal']]);
        return true;
    } catch(PDOException $e){
        
        echo "Ya existe esa matrícula";
        return false;
    }
}
}
