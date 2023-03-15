<?php
/** Hallar el area del triangulo */
// areaT = b*h/2 ^ pow(num, pot)

$base = 25;
$altura = 10;

$areaT = $base * $altura / 2;

echo 'El area del triangulo es: ' . $areaT; 
$areaT++;
echo '<br>Aumento 1 al area: '. ($areaT+1);

// Operadores matematicos: * / % + - ++

$x = 10;
$y = 20;
$z = 30;

$result = $x + $y / $z;

echo "<br/>El resultado es " . $result;

$result = ($x + $y) / $z;

echo "<br/>El resultado es " . '<h2>'. $result.'<h2>';

?>