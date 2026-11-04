<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gastos de envio</title>
</head>
<body>

<?php
$zona = 'peninsula';
$peso = 1.5;
$subtotal = 60;
$urgente = false;



$tarifaBase = match ($zona) {
    'peninsula' => 4.95,
    'baleares' => 7.95,
    'canarias' => 12.95,
    'internacional' => 19.95,
    default => null,
};

if ($tarifaBase === null) {
    echo "Zona no válida";
} elseif ($peso <= 0 || $peso > 10) {
    echo "Peso no admitido";
} else {
    $recargoPeso = match (true) {
        $peso <= 2 => 0.0,
        $peso <= 5 => 2.50,
        $peso <= 10 => 5.00,
    };

    $gastosEnvio = $urgente ? ($tarifaBase + $recargoPeso) * 1.50 : ($tarifaBase + $recargoPeso);

    if (($zona === 'peninsula') && $subtotal >= 50 && !$urgente) {
        $gastosEnvio = 0.0;
    }

    $total = $subtotal + $gastosEnvio;

    echo "Subtotal: " . round($subtotal, 2) . " €\n";
    echo "Gastos de envío: " . round($gastosEnvio, 2) . " €\n";
    echo "Total: " . round($total, 2) . " €\n";
}

/*
Explicación punto 6:
En el caso d (península, 3 kg, 80 €, urgente), el envío no sale gratis aunque el subtotal supere los 50 € porque la condición del envío gratuito exige tres requisitos: que la zona sea la península, que el subtotal sea mayor o igual a 50 € y que el envío NO sea urgente.
*/

?>
</body>
</html>
