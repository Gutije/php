<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contar de muchas formas</title>
</head>
<body>

<?php

$i = 1;

while ($i <= 20) {
  echo "$i ";
  $i++;
}

echo "<br>";

for ($i=1; $i<=20;$i++){
  echo "$i ";
}

echo "<br>";

for ($i=10; $i>=0; $i--){
  echo "$i<br>";
}

echo "<br> ¡Despegue! <br>";

for ($i=0; $i<=50; $i+=2){
  echo $i;
}

echo "<br>";

for ($i=0; $i<=50; $i++){
  if ($i % 2 != 0) {
    continue;
  }
  echo $i . "<br>";
}

$suma = 0;
for ($i=1; $i<=100; $i++){
  $suma += $i;
}
echo $suma;
?>


</body>
</html>
