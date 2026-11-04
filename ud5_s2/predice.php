<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Predice y comprueba </title>
</head>
<body>
  <?php
echo "1: ";
var_dump("abc" == 0);

echo "2: ";
var_dump(null == false);

echo "3: ";
var_dump("1" == "01");

echo "4: ";
var_dump(7 / 2);

echo "5: ";
var_dump(-7 % 2);

echo "6: ";
$r = true and false;
var_dump($r);

echo "7: ";
var_dump("0" ?: "vacío");

echo "8: ";
var_dump("0" ?? "vacío");
?>
</body>
</html>
