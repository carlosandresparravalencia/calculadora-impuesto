<?php

include_once './Validar.php';
$validar = new Validar();
if ($_POST) {
  $base = (float)$_POST['valor-base'];
  $porcentaje = (float)$_POST['porcentaje-impuesto'];
  $cantidad = (float)$_POST['cantidad-impuesto'];
  $total = (float)$_POST['valor-total'];
  echo '<h2>Calculadora de impuesto</h2>';
  echo $validar->validarDatos($base, $porcentaje, $total, $cantidad);
  echo '<br/><br/>';
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora de impuesto</title>
  </head>
  <body>
    <form action="" method="POST">
      <div>
        <label for="valor-base">Valor base: </label>
        <input type="number" name="valor-base" id="valor-base" step="0.01" value="<?=round($validar->darCalculadora()->darValorBase(),2)?>"/>
      </div>
      <br />
      <div>
        <label for="porcentaje-impuesto">Impuesto :</label>
        <input type="number" name="porcentaje-impuesto" id="porcentaje-impuesto" step="0.01" value="<?=round($validar->darCalculadora()->darPorcentajeImpuesto(),2)?>"/>
        <label for="porcentaje-impuesto">%</label>
      </div>
      <br />
      <div>
        <label for="cantidad-impuesto">Cantidad impuesto: </label>
        <input type="number" name="cantidad-impuesto" id="cantidad-impuesto" step="0.01" value="<?=round($validar->darCalculadora()->darCantidadImpuesto(),2)?>"/>
      </div>
      <br />
      <div>
        <label for="valor-total">valor total: </label>
        <input type="number" name="valor-total" id="valor-total" step="0.01" value="<?=round($validar->darCalculadora()->darValorTotal(),2)?>" />
      </div>
      <br />
      <input type="submit" value="Calcular" />
    </form>
  </body>
</html>
