<?php

$vuelta1_primerDia= [];
$vuelta2_primerDia= [];
$promedio_primerDia= [];
//vuelta1_segundoDia[];
//vuelta1_segundoDia[];
//promedio_segundoDia[];
//vueltaIdeal[];

echo '<h1>Tomar tiempos primera vuelta primer día</h1>';
tomarTiempo($vuelta1_primerDia);
mostrarTiempo($vuelta1_primerDia);

echo '<h1>Tomar tiempos segunda vuelta primer día</h1>';
tomarTiempo($vuelta2_primerDia);
mostrarTiempo($vuelta2_primerDia);
echo '<hr border = "1">';
echo '<h3>Promedio tiempos primer día</h3>';
promedioTiempo($vuelta1_primerDia,$vuelta2_primerDia,$promedio_primerDia );
mostrarTiempo($promedio_primerDia);


function tomarTiempo($arreglo)
{
    for ($i=0; $i < 23; $i++) { 
        $arreglo[$i]= random_int(35,80);
    }
}

function mostrarTiempo($arreglo)
{
    for ($i=0; $i < 23 ; $i++) { 
        echo '<h3>'. $arreglo[$i] . '</h3> ';
    } 
      
    
}

function promedioTiempo($arreglo1, $arreglo2, $arreglo3)
{
    for ($i=0; $i < 23 ; $i++) { 
        $arreglo3[$i] = ($arreglo1[$i]+ $arreglo2[$i])/2;
    }
}

?>