<?php


//para imprimir una piramide un ciclo for se puede ejecutar 0 1  o n veces 
/*
for ($i=1; $i <= 10; $i++) { 
   echo "<center>";
    for ($j=1; $j<= $i; $j++) {
        echo " * " ;
    }
    echo "<br/> </center>";
}

for ($i=1; $i <= 10 ; $i++) { 
    echo "Esta es la tabla del $i <br/>";
    for ($j=1; $j <=10 ; $j++) { 
       echo $i . " * " . $j . " = " . $i*$j;
       echo "<br/>";
    }
}

echo 'soy un while <br/>';
$i = 1;
while ($i <= 10) {
    echo "Esta es la tabla del $i <br/>";
    $j = 1;
    while ($j <= 10) {
        echo $i , " * " , $j , " = " , $i*$j , "<br/>";
        $j++ ;
    }
    $i++;
}*/

//invertir un número por ejemplo 1542 2451 el ciclo do while se ejecuta 1 o n veces
$numero = 100;
$digito = 0;
$div = 0;

echo "El número invertido es  ";

do{
    $digito = $numero % 10;
    $div = $numero / 10;
    $numero = $div;
    echo $digito;
}while($numero >= 1);


/*$enteros = [2, 5, 8, 9, 0, 7, 3];

$i = 0;
$suma = 0;
while ($enteros[$i] != 0) {
    
    $suma = $suma + $enteros[$i];
    $i++;
}
echo "La suma de los elementos es ". $suma;
echo "<br/>La suma se realizó hasta el elemento  " . $i-1;
echo "<br/>El elemento 0 se encuentra en la posición $i";

*/




?>