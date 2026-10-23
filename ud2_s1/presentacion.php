<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
$nombre = "Jesus";
$edad = 18;
$ciudad = "Fuengirola";
$mascota = "Perro";

echo "<p>Me llamo $nombre tengo $edad años y vivo en $ciudad</p>"; //Con comillas dobles

echo '<p>Me llamo '.$nombre.' tengo '.$edad.' años y vivo en '.$ciudad. '</p>'; //Con comillas simples

$frase = "Me llamo $nombre";
$frase .= " tengo $edad";
$frase .= " años y vivo en $ciudad";

echo "$frase";

?>

</body>
</html>


