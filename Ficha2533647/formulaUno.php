<?php
const PILOTOS = 23;
//define("PILOTOS", 23);
$vuelta1_1 = array();
$vuelta2_1 = array();
$vuelta1_2 = array();
$vuelta2_2 = array();
$vueltaIdeal = array();
$promedio_dia1 = array();
$promedio_dia2 = array();
$polePosition = 0;
$piloto = 0;

function registrarTiempo() {
    for($i= 0; $i < PILOTOS; $i++ )
    {
       $arreglo[$i] =    rand(500, 600)/10;
    }
    imprimirTiempos($arreglo);
 return $arreglo;   
}

function imprimirTiempos($arreglo)
{

    foreach($arreglo as $a  )
    {
       echo $a .' | ';
    }

}

function promedioTiempo($arreglo1, $arreglo2)
{
    for($i = 0; $i < PILOTOS; $i++ )
    {
        $arreglo3[$i] = ($arreglo1[$i] +$arreglo2[$i])/2;
    }
    imprimirTiempos($arreglo3);
    return $arreglo3;
}

function vueltaIdeal($promedio_dia1, $promedio_dia2, $vuelta1_1, $vuelta2_1, $vuelta1_2, $vuelta2_2 )
{
    
    for($i=0; $i < PILOTOS; $i++)
    {
        if($promedio_dia1[$i] < $promedio_dia2[$i])
        {
            if($vuelta1_1[$i] < $vuelta2_1[$i])
            {
                $vueltaIdeal[$i] = $vuelta1_1[$i];
                echo 'El mejor tiempo obtenido por el piloto '. $i+1 . ' fue en la primera vuelta del primer dia <br>';
            }
            else
            {
                $vueltaIdeal[$i] = $vuelta2_1[$i];
                echo 'El mejor tiempo obtenido por el piloto '. $i+1 . ' fue en la segunda vuelta  del primer día<br>';
            }
        }
        else
        {
            if($vuelta1_2[$i] < $vuelta2_2[$i])
            {
                $vueltaIdeal[$i] = $vuelta1_2[$i];
                echo 'El mejor tiempo obtenido por el piloto '. $i+1 . ' fue en la primera vuelta del segundo dia <br>';
            }
            else
            {
                $vueltaIdeal[$i] = $vuelta2_2[$i];
                echo 'El mejor tiempo obtenido por el piloto '. $i+1 . ' fue en la segunda vuelta del segundo dia <br>';
            }
        }
}
/*
function polePosition()
{
    $pole = 

}*/
echo '<br><br>';
imprimirTiempos($vueltaIdeal);
return $vueltaIdeal;
}
//Llamar arreglos
echo '<h5>TIEMPOS PRIMERA VUELTA PRIMER DIA</h5>'; 
$vuelta1_1 = registrarTiempo();

echo '<h5>TIEMPOS SEGUNDA VUELTA PRIMER DIA</h5>'; 
$vuelta2_1 = registrarTiempo();

echo '<h5>TIEMPOS PRIMERA VUELTA SEGUNDO DIA</h5>'; 
$vuelta1_2 = registrarTiempo();

echo '<h5>TIEMPOS SEGUNDA VUELTA SEGUNDO DIA</h5>'; 
$vuelta2_2 = registrarTiempo();

echo '<h5>PROMEDIO DE TIEMPOS PRIMER DIA</h5>'; 
$promedio_dia1 = promedioTiempo($vuelta1_1, $vuelta2_1 ) ;

echo '<h5>PROMEDIO DE TIEMPOS SEGUNDO DIA</h5>'; 
$promedio_dia2 = promedioTiempo($vuelta1_2, $vuelta2_2 );

echo '<br><br>HALLANDO LA VUELTA IDEAL <br><br>';
echo '<h5>VUELTA IDEAL</h5>';
$vueltaIdeal = vueltaIdeal($promedio_dia1, $promedio_dia2, $vuelta1_1, $vuelta2_1, $vuelta1_2, $vuelta2_2);






