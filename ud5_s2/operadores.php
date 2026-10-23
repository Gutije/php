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
    <th>Operación testicular</th>
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


<?php
echo '$a == "17" <br>';
var_dump($a == "17");
"<br>";
echo '$a==="17"<br>';
var_dump($a==="17");
echo '$a <=> $b <br>';
var_dump($a <=> $b);
echo '$b <=> $a <br>';
var_dump($b <=> $a);
?>


</body>
</html>
