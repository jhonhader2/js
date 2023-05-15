<?php

include_once dirname(__FILE__) . '../../Config/config.php';
require_once 'DataBaseModel.php';


class EstadisticasModel extends stdClass
{
    private $db;

    public $id;
    public $nombre;
    public $valor;


    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getbyId($id)
    {
    }

    public function getAll()
    {
        $items = [];

        try {

            $sql = 'SELECT * FROM estadisticas';
            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item         = new EstadisticasModel();
                $item->id     = $row['id'];
                $item->nombre = $row['nombre'];
                $item->valor  = $row['valor'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function store($datos)
    {
    }

    public function update($datos)
    {
        try {
            $sql = 'UPDATE estadisticas SET valor = :valor WHERE id = :id';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id'    => $datos['id'],
                'valor' => $datos['valor'],
            ]);

            if ($query) {

                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($id)
    {
    }
}
