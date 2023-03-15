<?php
 /*cadena de caracteres = String 
    $variable = "cadena";
    se define un arreglo 
    todos los elementos son del mismo tipo
    un arreglo unidimensional tiene una cantidad de elementos
    un arreglo comparte la misma dirección el elmento que se encuentra en la posicion 0 tiene la dirección del elemento
    siempre la primera posición es 0
 */

// $vocales = 'áeioú';// arreglo de caracteres
 //$cadena = "Buenos días aprendices";
 //echo "El  arreglo vocales tiene  " . strlen($vocales) . " bits<br/>";
 //echo "El tamaño del arreglo vocales es " . mb_strlen($vocales);

 //echo "La posicion e es " . strpos($vocales, 'e');

 //echo "La palabra aprendices se encuentra dentro de cadena " . str_contains($cadena, 'estudiantes') ? 'se encuentra' : 'NO se encuentra';

// if(condicion ){acciones por verdad;}else{acciones por falso} = ? verdad : falso;

/*Leer una cadena de caracteres y determinan la cantidad de vocales, 
consonantes, espacios, dígitos que se encuentran en ella*/

// strcomp($cadena1, $cadena2) compara dos cadenas; strcasecmp($cadena1, $cadena2) compara dos cadenas exactamente iguales
//sub_str($cadena, $posicionInicial, $posicionHastaDonde)  extrae una porcion de la cadena
//str_replace($cadena, 'cadena o texto a reemplazar', 'texto que reemplaza) reemplaza un texto por otro  

$frase = "El camino de la vida es laaaargo ";
$vocales = 0;
$consonantes = 0;
$digitos = 0;
$espacios = 0;

for ($i = 0; $i <=mb_strlen($frase); $i++) { 

    if($frase[$i] == 'a' || $frase[$i]=='A'|| $frase[$i]=='e' ||$frase[$i]=='E'||$frase[$i]=='i' ||$frase[$i]=='I'||$frase[$i]=='o' ||$frase[$i]=='O'|| $frase[$i]=='u' ||$frase[$i]=='U' )
    {
        $vocales++;
    }
    elseif($frase[$i]>='a' && $frase[$i]=='z'||$frase[$i]>='A' && $frase[$i]=='Z') {
        $consonantes++;
    }
    elseif ($frase[$i]>='0' && $frase[$i]=='9') {
        $digitos++;
    }
    elseif ($frase[$i]==' ') {
        $espacios++;
    }
    else {
        echo "Es un caracter cualquiera";
    }
}
echo "El número de vocales encontradas en $frase fueron ". $vocales . "<br/> ";
echo "El número de consonantes encontradas en $frase fueron ". $consonantes . "<br/> ";
echo "El número de digitos encontradas en $frase fueron ". $digitos . "<br/> ";
echo "El número de espacios encontradas en $frase fueron ". $espacios . "<br/> ";


?>