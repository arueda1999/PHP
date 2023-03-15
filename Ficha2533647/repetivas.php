<?php

//Repetir una o varias instruccciones el número de veces necesarias.
//para contador: controla el número de veces que se ejecuta for($i = 1; $i<10; $i++) 
// $i = $i - 1;

echo '<h4><center> BIENVENIDOS A LAS INSTRUCCIONES REPETITIVAS </h4><br><br></center>';
/*
for ($i = 15; $i >= 1; $i--) // se cumple hasta el valor definido 0 1 o n conoce el numero de veces que se ejecuta el ciclo
{
    echo $i. ' ^ 2 = '. $i*$i . '<br>';
}

echo 'El valor de i es '.$i . ' ya no cumplo la condicion y me salgo';

//while  

$i = -15;
while($i < 0)
{
    echo $i. ' ^ 2 = '. $i*$i . '<br>';
    
    $i++;

}
//mostrar 3587 de forma invertida, es decir, 7853
$num = 1;
$digito = 0;

do{
    $digito = $num % 10;
    echo $digito;
    $num = $num / 10;

}while($num > 1);

echo ' cumplo la condicion y me salgo del do while';
*/
//Imprimir los tablas de multiplicar entre 1 y 10;
/*
for($i = 1 ; $i <= 10; $i++)
{
    for($j = 1; $j <= 10; $j++)
    {
        echo $i. ' * ' . $j . ' = '.$i*$j. '<br>';
    }
echo '<hr>';
    
}*/

//Los numeros primos, que se dividen entre 1 y si mismos 3 5 7 11 13 
//mostrar lo números primos entre 1 y 10000
$n1 = 1; 
$n2 = 10000;

for ($i = $n1; $i <= $n2; $i++)
{
    $nDiv = 0;
    for ($n = 1; $n <= $i; $n++)
    {
    if($i%$n == 0) 
        {
            $nDiv = $nDiv + 1;
        }
    }
    if($nDiv == 2 or $i == 1)
    {
    echo '<br>';
    echo $i;
    }
}