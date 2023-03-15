<?php
//Bienestar oferta los cursos de música: bateria, piano, guitarra 
//Costo: 150000, 250000, 200000 respectivamente
//Si el estudiante es del SENA descuento de 40% pero si estudia ADSI 20% adicional- 
//si es de otro programa le da un descuento 30% - 
// Si es de otra IES 25% -
//Descuento por la edad menor a 15 años o mayor a 25 no hay descuento
//Si tiene 15 años y menos de 20 años le da un descuento 15%
//Si tiene entre 20 y 25 un descuento del 10%
//imprima la factura mostrando cada uno de los descuentos el valor del curso y 
//el valor a pagar por el estudiante o por el aprendiz no olviden imprimir el 
//nombre del estudiante
/*






Datos de entrada: edad, curso, institucion, programa
Datos de salida : valorPagar, descuento1, descuento2, valorCurso, datos del estudiante

*/
//Definir constantes
define("BATERIA",150000);
define("PIANO", 250000);
define('GUITARRA', 200000);

//Definir variables
$valorCurso = 0;

switch($_REQUEST["curso"])
{
    case "Piano": $valorCurso = PIANO;
    $curso = $_REQUEST["curso"];
    break;
    case "Guitarra": $valorCurso = GUITARRA;
    $curso = $_REQUEST["curso"];
    break;
    case "Batería": $valorCurso = BATERIA;
    $curso = $_REQUEST["curso"];
    break;

}

$descuento1 = 0;
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$sena= $_REQUEST["sena"];
$programa = $_REQUEST["adsi"];
$edad =$_REQUEST["edad"];
//$descuento2 = calcularDescuento2($edad, $valorCurso);

function calcularDescuento1($sena,$programa,$valorCurso){
if ($sena == true) {
    $descuento1 = $valorCurso * 0.60;//100000
    if ($programa== true) {
        
        $descuento1 = $descuento1 + $valorCurso * 0.20;//500000
    }
    else {
        $descuento1 =  $valorCurso * 0.10;
    }
}
else {
    $descuento1 = $valorCurso * 0.25;
}
return $descuento1;
}

function calcularDescuento2($edad, $valorCurso)
{
    $descuento2 = 0;
    if ($edad >= 15 && $edad < 20) {
        $descuento2 = $valorCurso * 0.15;
    }
    elseif ($edad>=20 && $edad < 25) {
        $descuento2 = $valorCurso * 0.10;
    }
    
return $descuento2;
}

echo "<center> FACTURA </center><br/>";
echo"<br>";
echo $nombre , " " , $apellido , "<br/>";
echo "Se matriculó al curso de " . $curso . "<br/>";
echo "Valor del curso $". $valorCurso . "<br/>";
echo "Descuento por ser estudiante :  $" . calcularDescuento1($sena, $programa, $valorCurso) ."<br/>";
echo "Descuento por edad :  $" . calcularDescuento2($edad, $valorCurso) . "<br/>";
echo "<hr>";
echo "El valor a pagar es " . $valorCurso - ( calcularDescuento1($sena, $programa, $valorCurso)+ calcularDescuento2($edad, $valorCurso));

?>