<?php
//Matriz de 4 * 4 de enteros sumar sus diagonales

$matriz = [[15,12,9,3],[6, 8, 9, 25],[10, 5, 7, 20],[25,30,13,17]];
$sumaDiag = 0;
$sumaDiag1 = 0;
$sumaFilas = [0,0,0,0];
$sumaColumnas = [0,0,0,0];
for ($i=0; $i < 4 ; $i++) { 
    for ($j=0; $j < 4 ; $j++) { 
        if ($i == $j) {
            $sumaDiag = $sumaDiag + $matriz[$i][$j];
        }
    }
}
echo "La suma de la diagonal principal es ". $sumaDiag . "<br>";

for ($i=0; $i < 4 ; $i++) { 
    for ($j=0; $j < 4 ; $j++) { 
       $sumaFilas[$j]= $sumaFilas[$j]+ $matriz[$i][$j];
       $sumaColumnas[$i]=$sumaColumnas[$i]+$matriz[$i][$j];
       
    }
 echo $sumaColumnas[$i], ' ';

 echo $sumaFilas[$i], ' ';
}

//var_dump($sumaFilas);

//var_dump($sumaColumnas);



?>

