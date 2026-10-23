<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El detective de tipos</title>
</head>
<body>

<?php
$v1 = "42";
$v2 = "3.14";
$v3 = "1e3";
$v4 = "0";
$v5 = "";
$v6 = " 7";
$v7 = "0x1A";
$v8 = "12abc";
?>

<table>
  <tr>
    <th>Valor</th>
    <th>is_numeric</th>
    <th>(int)</th>
    <th>(float)</th>
    <th>(bool)</th>
  </tr>


  <tr>
    <td><?= $v1 ?></td>
    <td><?php var_dump(is_numeric($v1)); ?></td>
    <td><?= (int)$v1 ?></td>
    <td><?= (float)$v1 ?></td>
    <td><?php var_dump(boolval($v1))?></td>
  </tr>


  <tr>
    <td><?= $v2 ?></td>
    <td><?php var_dump(is_numeric($v2)); ?></td>
    <td><?= (int)$v2 ?></td>
    <td><?= (float)$v2 ?></td>
    <td><?php var_dump(boolval($v2))?></td>
  </tr>

  <tr>
    <td><?= $v3 ?></td>
    <td><?php var_dump(is_numeric($v3)); ?></td>
    <td><?= (int)$v3 ?></td>
    <td><?= (float)$v3 ?></td>
    <td><?php var_dump(boolval($v3))?></td>
  </tr>

  <tr>
    <td><?= $v4 ?></td>
    <td><?php var_dump(is_numeric($v4)); ?></td>
    <td><?= (int)$v4 ?></td>
    <td><?= (float)$v4 ?></td>
    <td><?php var_dump(boolval($v4))?></td>
  </tr>

  <tr>
    <td><?= $v5 ?></td>
    <td><?php var_dump(is_numeric($v5)); ?></td>
    <td><?= (int)$v5 ?></td>
    <td><?= (float)$v5 ?></td>
    <td><?php var_dump(boolval($v5))?></td>
  </tr>

  <tr>
    <td><?= $v6 ?></td>
    <td><?php var_dump(is_numeric($v6)); ?></td>
    <td><?= (int)$v6 ?></td>
    <td><?= (float)$v6 ?></td>
    <td><?php var_dump(boolval($v6))?></td>
  </tr>

  <tr>
    <td><?= $v7 ?></td>
    <td><?php var_dump(is_numeric($v7)); ?></td>
    <td><?= (int)$v7 ?></td>
    <td><?= (float)$v7 ?></td>
    <td><?php var_dump(boolval($v7))?></td>
  </tr>

  <tr>
    <td><?= $v8 ?></td>
    <td><?php var_dump(is_numeric($v8)); ?></td>
    <td><?= (int)$v8 ?></td>
    <td><?= (float)$v8 ?></td>
    <td><?php var_dump(boolval($v8))?></td>
  </tr>


</table>

<!--
a) Acepta numeros enteros y decimales
b) Porque ie3 es una ponencia y 0x1A no es numerico
c) Los que no son numericos y es peligroso porque nos pone 0
d) Que se vea en blanco

-->

</body>



</html>
