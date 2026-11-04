<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Años bisiestos</title>
</head>
<body>
<?php
$anio = 2028;

if ($anio % 4 === 0) {
  if ($anio % 100 === 0) {
    if ($anio % 400 === 0) {
      echo "El año $anio es bisiesto";
    }
    else {
      echo "El año $anio no es bisiesto";
    }
  }
  else {
    echo "El año $anio es bisiesto";
  }
}

else {
  echo "El año $anio no es bisiesto";
}

$esBisiesto = ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);


echo "<br>";
echo $esBisiesto ? "El año $anio es bisiesto" : "El año $anio no es bisiesto"

?>

</body>
</html>
