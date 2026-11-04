<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permisos de linux</title>
</head>
<body>

<?php
$permisos = 0o754;
var_dump($permisos);
/*
Aparece int(492) porque PHP representa internamente los enteros en base 10 (decimal).
*/

$cadena = '';
$cadena .= ($permisos & 0o400) ? 'r' : '-';
$cadena .= ($permisos & 0o200) ? 'w' : '-';
$cadena .= ($permisos & 0o100) ? 'x' : '-';
$cadena .= ($permisos & 0o040) ? 'r' : '-';
$cadena .= ($permisos & 0o020) ? 'w' : '-';
$cadena .= ($permisos & 0o010) ? 'x' : '-';
$cadena .= ($permisos & 0o004) ? 'r' : '-';
$cadena .= ($permisos & 0o002) ? 'w' : '-';
$cadena .= ($permisos & 0o001) ? 'x' : '-';

var_dump(($permisos & 0o002) !== 0);




/*
Si se escribe $permisos = 754; sin el prefijo 0o, PHP lo interpreta como un entero en base decimal en lugar de octal.
Al calcular las operaciones a nivel de bits (&) con máscaras octales, las comprobaciones devolverán resultados erróneos.
*/

?>
</body>
</html>
