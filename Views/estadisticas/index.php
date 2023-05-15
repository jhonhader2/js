<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <link rel="icon" type="image/png" href="../../futbol.png" />
  <title>Document</title>
</head>
<?php

include_once '../../Models/EstadisticasModel.php';

$data = new EstadisticasModel();
$registros = $data->getAll();

?>

<body>
  <div class="container">
    <h1>Estadísticas</h1>
    <div class="row">
      <?php
      if ($registros) {
        foreach ($registros as $registro) { ?>
          <div class="col-5">
            <div class="row my-3">
              <div class="col-12 text-center">
                <input class="text-center form-control form-control-sm" type="number" id="estadistica-<?= $registro->id ?>" name="estadistica-<?= $registro->id ?>" value="<?= $registro->valor ?>" min="0" disabled />
              </div>
              <div class="col-3 text-center">
                <button class="btn btn-sm btn-danger" onclick="operacion(<?= $registro->id ?> ,'restar')">-</button>
              </div>
              <div class="col-6 text-center">
                <label for="pases_asertados" class="form-label"><?= $registro->nombre ?></label>
              </div>
              <div class="col-3 text-center">
                <button class="btn btn-sm btn-success" onclick="operacion(<?= $registro->id ?>,'sumar')">+</button>
              </div>
            </div>
          </div>
      <?php }
      }
      ?>
    </div>
  </div>
  <hr />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>