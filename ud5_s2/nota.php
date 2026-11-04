<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calificaciones</title>
</head>
<body>

<?php
$nota = 15;

if ($nota<0 || $nota > 10) {
  echo "Nota no valida";
}
else {
  if ($nota<5) {
    echo "Insuficiente";
  }
  elseif ($nota<6) {
    echo "Suficiente";
  }
  elseif ($nota <7) {
    echo "Bien";
  }
  elseif ($nota <9) {
    echo "Notable";
  }
  else {
    echo "Sobresaliente";
  }
};


echo "<br>";

$resultado = match (true) {
   $nota <0 =>"Nota no valida",
   $nota >10 =>"Nota no valida",
   $nota <5 =>"Insuficiente" ,
   $nota <6 =>"Suficiente",
   $nota <7 =>"Bien",
   $nota <9 =>"Notable",
   default =>"Sobresaliente",
};



echo ($nota < 0 || $nota > 10) ? "Nota no válida" : (($nota >= 5) ? "Aprobado" : "Suspenso");
?>


</body>
</html>
