<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>entorno</title>
</head>
<style>
</style>

<body>
  <table>
    <tr>
      <th><?= "CONSTANTE" ?></th>
      <th><?= "VALOR" ?></th>
    </tr>
    <tr>
      <td><?= 'PHP_VERSION' ?></td>
      <td><?= PHP_VERSION ?></td>
    </tr>
    <tr>
      <td><?= 'PHP_OS_FAMILY' ?></td>
      <td><?= PHP_OS_FAMILY ?></td>
    </tr>
    <tr>
      <td><?= 'PHP_INT_SIZE' ?></td>
      <td><?= PHP_INT_SIZE ?></td>
    </tr>
    <tr>
      <td><?= 'PHP_INT_MAX' ?></td>
      <td><?= PHP_INT_MAX ?></td>
    </tr>
    <tr>
      <td><?= 'PHP_INT_MIN' ?></td>
      <td><?= PHP_INT_MIN ?></td>
    </tr>
    <tr>
      <td><?= 'M_PI' ?></td>
      <td><?= M_PI ?></td>
    </tr>
    <tr>
      <td><?= 'BITS DE UN ENTERO' ?></td>
      <td><?= PHP_INT_SIZE ?></td>
    </tr>
    <tr>
      <td><?= 'RESULTADO' ?></td>
      <td><?= var_dump(PHP_INT_MAX + 1) ?></td>
    </tr>
  </table>

<?php

echo M_PI;

echo "<br>";

var_dump(M_PI);

##NO MUESTRA EL MISMO RESULTADO DE DECIMALES

?>


<!--
a) Porque tiene decimales por lo tanto tiene que ser un float
b) Tengo la version 8.3.35 y si se pueden escribir octales con ese prefijo
-->

</body>
</html>
