<?php

class cargarModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    // Fucion para insertar Sucursal
    public function insert($sucursal)
    {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO SUCURSAL (sucursal) VALUES (:sucursal)');
            $query->execute(['sucursal' => $sucursal['sucursal']]);
            return true;
        } catch (PDOException $e) {

            echo "Sucursal ya ingresada";
            return false;
        }
    }

    // Fucion para insertar Sector
    public function insertSector($sector)
    {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO SECTOR (sector) VALUES (:sector)');
            $query->execute(['sector' => $sector['sector']]);
            return true;
        } catch (PDOException $e) {

            echo "Sucursal ya ingresada";
            return false;
        }
    }
}
