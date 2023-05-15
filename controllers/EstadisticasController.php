<?php

require_once '../Models/EstadisticasModel.php';

$estadisticas = new EstadisticasController;

class EstadisticasController
{
    private $estadisticas;

    public function __construct()
    {
        $this->estadisticas = new EstadisticasModel();

        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1: //Almacenar en la base de datos
                    self::store();
                    break;
                case 2: //Ver usuario
                    self::show();
                    break;
                case 3: //Actualizar el registro 
                    self::update();
                    break;
                case 4: //Actualizar el registro 
                    self::delete();
                    break;
                default:
                    self::index();
                    break;
            }
        }
    }

    public function index()
    {
        echo "holi";
        die();
        return $this->estadisticas->getAll();
    }

    public function show()
    {
        $id = $_REQUEST['id'];
        header("Location: " . constant('URL') . "Views/estadisticas/editar.php?id=" . $id);
    }

    public function store()
    {
        $datos = [
            'num_uno' => $_REQUEST['num_uno'],
            'num_dos' => $_REQUEST['num_dos'],
            'operacion' => $_REQUEST['operacion']
        ];


        $result = $this->estadisticas->store($datos);

        if ($result) {
            header("Location: " . constant('URL') . "Views/estadisticas/index.php");
            exit();
        }

        return $result;
    }

    public function update()
    {
        $datos = [
            'id'     => $_REQUEST['id'],
            'valor'  => $_REQUEST['valor'],
        ];

        $result = $this->estadisticas->update($datos);

        if ($result) {
            echo json_encode(array('success' => 1, 'valor' => $datos['valor']));
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $result = $this->estadisticas->delete($id);
        if ($result) {
            header("Location: " . constant('URL') . "Views/estadisticas/index.php");
            exit();
        }
    }
}
