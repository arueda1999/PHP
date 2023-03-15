<?php
// int, float, bool, string ...

function  suma( int $dato1,  int $dato2) : int | float
{
    return $dato1 + $dato2;
} 

$resultado = suma(2.5, 4);

echo $resultado;

?>