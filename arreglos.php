<?php
//arreglos
$notas = array();
$notas = [1, 3, 5, 3, 5,4];
$suma = 0;
//echo $notas[3];

for ($i=0; $i < 6 ; $i++) { 
    $suma = $suma + $notas[$i];
}
echo "La suma de las notas es " . $suma . "<br/>";
$prom = $suma/$i;
echo "La cantidad de notas a promediar son $i <br/>";
echo "El promedio de las notas es ". "$prom <br/>";

$datosPersonales = ['nombre' => 'Amparo', 'direccion' => 'Calle 11', 'telefono' => 3144830378];
foreach ($datosPersonales as $indice => $datos) {
    echo $datos . "<br/>";
}
echo "<hr>";

?>