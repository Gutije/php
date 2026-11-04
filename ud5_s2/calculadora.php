<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
  <?php
  $a = 2;
  $b = 1;

  $op = "/";


if (($op === "/" || $op === "%" || $op === "div") && $b == 0) {
  echo "Error: no se puede dividir entre 0";
}

else {
  $resultado = match ($op) {
    "+" => $a+$b,
    "-" => $a-$b,
    "*" => $a*$b,
    "/" => $a/$b,
    "%" => $a%$b,
    "**" => $a**$b,
    "div" => intdiv($a, $b),
    default => "Error: operación no válida"
  };

  echo "El resultado es $resultado";
}
echo "<br>"
echo "$a $op $b = $resultado\n";
var_dump($resultado);
?>


<!--
6. PHP Lanza una señal de error porque ese $op no esta definido en el match
-->

</body>
</html>
