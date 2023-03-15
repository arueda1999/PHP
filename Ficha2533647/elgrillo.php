<?php
//un grillo quiere alcanzar la cima de una montaña, 
//para lograrlo salta una distancia específicada pero desafortunadamente resbala otra distancia, 
//solo que esta distancia debe ser menor que la que avanza. ¿Cuántos saltos deb e dar el grillo para alcanzar la cima?
// El alto de la montaña lo da cada uno.
//No olviden realizar un ciclo.


$h = 500;
$saltos = 0;

while($h >= 0)
{
    
    $avanza = readline('El grillo avanza '); 
    $resbala = readline('El grillo resbala ');
    if($avanza > $resbala)
     {
        $saltos++; 
        $h = $h - ($avanza - $resbala);
     }
    

}

echo 'El grillo alcanzó la cima en '. $saltos . ' saltos';


