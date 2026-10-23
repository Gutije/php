<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Predice y comprueba</title>
</head>
<body>
<?php
var_dump("10" + 5);
var_dump("10" . 5); # AL UNIRLE 5 A UN STRING SE CONVIERTE TODO EN STRING
var_dump((int) "7 enanitos");
var_dump((int) 9.99);
var_dump((bool) "0"); ##EN VEZ DE BOOL(0) ES FALSE
var_dump((bool) "0.0"); ##EN VEZ DE BOOL(0) ES FALSE
var_dump(0.1 + 0.2 == 0.3);
var_dump(gettype(1.0)); ##  TE DEVUELVE EL STRING DEL RESULTADO
?>

</body>
</html>
