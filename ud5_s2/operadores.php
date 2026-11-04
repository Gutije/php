<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de operadores </title>
</head>
<body>

<?php
$a = 17;
$b = 5
?>


<table>
  <tr>
    <th>Operación</th>
    <th>Resultado</th>
    <th>Tipo</th>
  </tr>
  <tr>
    <td>+</td>
    <td><?php echo $a + $b ?></td>
    <td><?php echo gettype($a+$b) ?></td>
  </tr>
  <tr>
    <td>-</td>
    <td><?php echo $a - $b ?></td>
    <td><?php echo gettype($a-$b) ?></td>
  </tr>
  <tr>
    <td>*</td>
    <td><?php echo $a * $b ?></td>
    <td><?php echo gettype($a*$b) ?></td>
  </tr>
  <tr>
    <td>+</td>
    <td><?php echo $a / $b ?></td>
    <td><?php echo gettype($a+$b) ?></td>
  </tr>
  <tr>
    <td>+</td>
    <td><?php echo $a % $b ?></td>
    <td><?php echo gettype($a%$b) ?></td>
  </tr>
  <tr>
    <td>**</td>
    <td><?php echo $a ** $b ?></td>
    <td><?php echo gettype($a**$b) ?></td>
  </tr>
  <tr>
    <td>intdiv</td>
    <td><?php echo intdiv($a, $b) ?></td>
    <td><?php echo gettype(intdiv($a, $b)) ?></td>
  </tr>
</table>



<?php echo $a == "17" ?>
<br>
<?php var_dump($a == "17") ?>
<br>
<?php echo $a==="17" ?>
<br>
<?php var_dump($a==="17") ?>
<br>
<?php echo $a <=> $b ?>
<br>
<?php var_dump($a <=> $b) ?>
<br>
<?php echo $b <=> $a ?>
<br>
<?php var_dump($b <=> $a) ?>

<?php $b=0 ?>

<?php echo $a == "17" ?>
<br>
<?php var_dump($a == "17") ?>
<br>
<?php echo $a==="17" ?>
<br>
<?php var_dump($a==="17") ?>
<br>
<?php echo $a <=> $b ?>
<br>
<?php var_dump($a <=> $b) ?>
<br>
<?php echo $b <=> $a ?>
<br>
<?php var_dump($b <=> $a) ?>

<!--
Operaciones que fallan al valer $b = 0 y sus errores:
- División (/): $a / $b lanza un error ya que no se puede dividir entre 0
- Módulo (%): $a % $b lanza el mismo error que con / ya que hace una division.
- Función intdiv(): intdiv($a, $b) lanza el mismo error.
-->

<?php
$a += 3;
$a *= 10;
$a /= 2;

echo "$a"

?>
</body>
</html>
