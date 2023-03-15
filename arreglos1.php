<?php
$numeros = [2, 5, 3, 6, 7];
$numeros1 = [1, 0, 5, 3, 8];

//buscar un elemento en un arreglo

//$x = $_REQUEST['']

$x = 6;

$i=0;
while ($i < $numeros.length) {
    if($x==$numeros1[$i])
    {
        echo $x, " se encuentra en la posicion ", $i;
        break;
    }
    $i++;
}

if($i == 5)
{

    echo "El elemento no se encuentra en el arreglo ";
}




/*echo "utilizando foreach para recorrer el arreglo <br/>";
foreach ($numeros as $indice => $value) {
    echo $value . "<br>";
}
echo "utilizando for para recorrer el arreglo <br/>";
for ($i=0; $i < 5 ; $i++) { 
    echo $numeros[$i] . "<br>";
}










ordenarArreglo($numeros);
promedioArreglos($numeros, $numeros1, 5);
function ordenarArreglo($numeros)
{
    for ($i=0; $i < 5; $i++) { 
       for ($j=$i+1; $j < 5 ; $j++) { 
        if($numeros[$i]>= $numeros[$j])
        {
            $aux =$numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] =$aux;
        }
       }
    }
  
 imprimirArreglo($numeros);
}

function imprimirArreglo($numeros)
{
    
    for ($i=0; $i < 5 ; $i++) { 
        echo $numeros[$i] . " ";
}
}
function promedioArreglos($num1, $num2, $n)
{ //limpiar arreglo
    for ($i=0; $i < $n ; $i++) { 
       $suma[$i] = 0;
    }
    for ($i=0; $i < $n ; $i++) { 
       $suma[$i] = $suma[$i] + ($num1[$i]+$num2[$i]);
    }
imprimirArreglo($suma);
}
*/
?>