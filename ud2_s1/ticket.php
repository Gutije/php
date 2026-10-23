<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket de compra</title>
</head>
<body>

<?php

const IVA = 0.21;
define ("MONEDA", "€");

$producto = "Arroz";
$precio_sin_IVA = 1.9;
$unidades = "3";

$base = $precio_sin_IVA * $unidades;
$cuota = $precio_sin_IVA * IVA;
$total = $base + $cuota
?>

<h1>TICKET</h1>

<table>
  <tr>
    <th>Producto</th>
    <th>Unidades</th>
    <th>Precio base</th>
    <th>IVA</th>
    <th>TOTAL</th>
  </tr>

  <tr>
    <td><?= $producto ?></td>
    <td><?= $unidades ?></td>
    <td><?= round($base, 2) . MONEDA ?></td>
    <td><?= round($cuota, 2) . MONEDA ?></td>
    <td><?= round($total, 2) . MONEDA ?></td>
  </tr>
</table>


<?php
var_dump($base)


##Si, ya que las cuentas no dan justas porque hay decimales

## Con "3" funciona igual ya que lo cambia a INT automaticamente pero el "tres" lo reconoce como string y no funciona bien

?>


</body>
</html>
