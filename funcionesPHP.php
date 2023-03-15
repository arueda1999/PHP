<?php
//funcion 
/*$num1 = 10;


function calcularSuma()
{
    $num1 = 5;
    $num2 = 15;
    global $num1;
    echo "El valor de la variable local num1 " . $num1;
    return $num1 +$num2;
}

$resultado = calcularSuma();

echo "<br/>La suma es " . $resultado;

echo "<br/>El valor de la variable global num1 " . $num1;*/

//Calcular el factorial de un número factorial = (n! - 1)* n! = 1 1*2 2*3 6*4 ... (n! - 1)* n!
/* 1 2 3 4 5 6 7 8 9 = 1*1 2*1 3*2 6*4 24*5 120*6 720*7 5040 */
//$n = 10;


//calcularFactorial(1);
//e^x = sumatoria(desde 0 hasta n) de x
//pow($base, $exp); 2 ^ 5 = 2*2*2*2*2 exponente = 0 y exponente es negativo

$n = $_REQUEST["euler"];

calcularEuler($n);
function calcularEuler($n)
{
    $e = 0.0;
    $x = 1;
    for ($i=0; $i < $n ; $i++) { 
        $e = $e + calcularPotencia($x, $i)/calcularFactorial($i);
    }
echo "E elevado a $x es igual a <b> $e </b>";

}

//echo calcularPotencia(5,5);

function calcularPotencia($base, $exponente)
{
    $exp = 1;
    if($exponente == 0)
    {
        return $exp;
    } 
    else{
    for ($i=1; $i <= $exponente ; $i++) { 
        $exp = $exp * $base;
    }
    return $exp;
    }

}

function calcularFactorial($n)
{
    $fact = 1; 
    if($n == 0 || $n == 1)
    {
        return $fact;
    }

    for($i = 2 ; $i <= $n; $i++)
    {
        $fact = $fact * $i;

    }

    return $fact;
}



?>

