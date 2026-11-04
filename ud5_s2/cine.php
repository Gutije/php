<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taquilla de cine</title>
</head>
<body>
<?php
define('PRECIO_ESPECTADOR', 6.50);
define('PRECIO_FIN_SEMANA', 10.50);
define('PRECIO_BASE', 9.50);

$dia = 'martes';
$edad = 10;
$carneJoven = true;

$precioDia = match ($dia) {
    'miercoles' => PRECIO_ESPECTADOR,
    'viernes', 'sabado', 'domingo' => PRECIO_FIN_SEMANA,
    'lunes', 'martes', 'jueves' => PRECIO_BASE,
    default => null,
};

if ($precioDia === null) {
    echo "Día no válido";
} else {
    $precioFinal = $precioDia;

    if ($dia !== 'miercoles') {
        if ($edad < 12 || $edad > 64) {
            $precioFinal = $precioDia * 0.60;
        } elseif ($carneJoven && $edad >= 14 && $edad <= 30) {
            $precioFinal = $precioDia * 0.80;
        }
    }
    echo round($precioFinal, 2) . " €";
}


// 5. Porque el IF se detiene cuando encuentra el verdadero
?>
</body>
</html>
