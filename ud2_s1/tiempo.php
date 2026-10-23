<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de segundos</title>
</head>
<body>

<?php

const SEGUNDOS_DIA = 86400;
const SEGUNDOS_HORA = 3600;
const SEGUNDOS_MINUTO = 60;


$segundos_iniciales = 100000;
$segundos = $segundos_iniciales;

$dias = (int)($segundos / SEGUNDOS_DIA);
$segundos = $segundos - ($dias * SEGUNDOS_DIA);

$horas = (int)($segundos / SEGUNDOS_HORA);
$segundos = $segundos - ($horas * SEGUNDOS_HORA);

$minutos = (int)($segundos / SEGUNDOS_MINUTO);
$segundos_restantes = $segundos - ($minutos * SEGUNDOS_MINUTO);


echo "$segundos_iniciales segundos son $dias días, $horas horas, $minutos minutos y $segundos_restantes segundos.";

echo "<br>";

$segundos_iniciales = 3661;
$segundos = $segundos_iniciales;

$dias = (int)($segundos / SEGUNDOS_DIA);
$segundos = $segundos - ($dias * SEGUNDOS_DIA);

$horas = (int)($segundos / SEGUNDOS_HORA);
$segundos = $segundos - ($horas * SEGUNDOS_HORA);

$minutos = (int)($segundos / SEGUNDOS_MINUTO);
$segundos_restantes = $segundos - ($minutos * SEGUNDOS_MINUTO);

## CON ESTOS SEGUNDOS SON 3661 segundos son 0 días, 1 horas, 1 minutos y 1 segundos.


echo "$segundos_iniciales segundos son $dias días, $horas horas, $minutos minutos y $segundos_restantes segundos.\n";

echo "<br>";
$segundos_iniciales = 86399;
$segundos = $segundos_iniciales;

$dias = (int)($segundos / SEGUNDOS_DIA);
$segundos = $segundos - ($dias * SEGUNDOS_DIA);

$horas = (int)($segundos / SEGUNDOS_HORA);
$segundos = $segundos - ($horas * SEGUNDOS_HORA);

$minutos = (int)($segundos / SEGUNDOS_MINUTO);
$segundos_restantes = $segundos - ($minutos * SEGUNDOS_MINUTO);


echo "$segundos_iniciales segundos son $dias días, $horas horas, $minutos minutos y $segundos_restantes segundos.\n";


##CON ESTOS SEGUNDOS SON 86399 segundos son 0 días, 23 horas, 59 minutos y 59 segundos.

?>
</body>
</html>
