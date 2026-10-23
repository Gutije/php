<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factura de la luz</title>
</head>
<body>

<?php

const PRECIO_KWH = 0.1385;
const PRECIO_POTENCIA_DIA = 0.0937;
const IMPUESTO_ELECTRICO = 0.0511;
const IVA = 0.21;

define ("MONEDA", "€");


$potencia = 4.6;
$dias = 30;
$consumo = "275";

echo "Consumo antes del casting: ";
var_dump($consumo);

$consumo = intval($consumo);


echo "Consumo despues del casting: ";
var_dump($consumo);


$termino_potencia = $potencia * $dias * PRECIO_POTENCIA_DIA;

$termino_energia = $consumo * PRECIO_KWH;

$impuesto_electrico = ($termino_energia + $termino_potencia) * IMPUESTO_ELECTRICO;

$base_imponible = $termino_potencia + $termino_energia + $impuesto_electrico;

$IVA = $base_imponible * IVA;

$total = $base_imponible + $IVA;

?>


<table>
  <tr>
    <th>Potencia</th>
    <th>Dias</th>
    <th>Consumo</th>
    <th>Termino de potencia</th>
    <th>Termino de energia</th>
    <th>Impuesto electrico</th>
    <th>Base imponible</th>
    <th>IVA</th>
    <th>Total</th>
  </tr>

  <tr>
    <td><?= round($potencia, 2) ?></td>
    <td><?= round($dias, 2) ?></td>
    <td><?= round($consumo, 2) ?></td>
    <td><?= round($termino_potencia, 2) ?></td>
    <td><?= round($termino_energia, 2) ?></td>
    <td><?= round($impuesto_electrico, 2) . MONEDA ?></td>
    <td><?= round($base_imponible, 2) . MONEDA ?></td>
    <td><?= round($IVA, 2) . MONEDA ?></td>
    <td><?= round($total, 2) . MONEDA ?></td>
  </tr>

</table>


</body>
</html>
