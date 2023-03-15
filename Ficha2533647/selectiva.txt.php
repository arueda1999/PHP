<?php

//expresiones lógicas: operadores de relación - > < == === <= >= <> !=

// Expresion: es el comjunto de operandos y operados para obtner un resultado
/*
$x = 15;
$y = 3;

$result = $x >= $y; // 1 es verdadero 0 es falso

echo $x . ' es '. $result . ' '.$y . '<br>';

//operadores lógicos: && || ! and or not 

echo $x + $y = 10  ;

echo '<br>';

if ($x >= $y) {
    echo 'Es mayor <br>';
}
//sentencia de selección simple 
if ($x == $y) {
    
    echo 'Es mayor <br>';
}
//sentencia de selección compuesta
if ($x == $y) {
    echo 'Es mayor <br>';
} else {
    echo 'Es menor<br>';
}

//sentencia de selección en cascada

$z = 31;

if($z % 2 == 0)
{    echo $z.' es multiplo de 2 <br>';
}elseif ($z % 3 == 0) {
    echo $z.' es multiplo de 3 <br>';
}elseif ($z % 5 == 0) {
    echo $z.' es multiplo de 5 <br>';
}else {
    echo $z.'  no multiplo de 2 de 3 o de 5 <br>';
}*/

//Validar una fecha dd/mm/aa aa entre 1900 y 2023; mm 1 y 12; dd 30 y 31 --- febrero que 28 o 29 días
//validar el año bisiesto

$aa = 1981;
$mm = 04;
$dd = 31;

if($aa >= 1900 && $aa <= 2023)
{
    if($mm >= 1 && $mm <= 12)
    {
        switch ($mm) {
            case 4: case 6: case 9: case 11:
                if($dd >= 1 && $dd <= 30 )
                {echo 'La fecha es válida ';}
                else
                {echo 'La fecha NO es válida ';}
                break;
            case 2:
                if($aa % 4 == 0)
                {
                    if($dd >= 1 && $dd <= 29)
                    {
                        echo 'La fecha es válida ';
                    }
                    else
                    {
                        echo 'La fecha NO es válida ';
                    }
                }
                else
                if($dd >= 1 && $dd <= 28)
                {
                    echo 'La fecha es válida ';
                }
                else
                {
                    echo 'La fecha NO es válida ';
                }
                break;
            default:
            if($dd >= 1 && $dd <= 31)
            {
                echo 'La fecha es válida ';
            }
            else
            {
                echo 'La fecha NO es válida ';
            }
                break;
        }
    }
    else
    {
    echo 'El mes NO es válido ';
    }
  
}
else
    {
    echo 'El año NO es válido ';
    }




