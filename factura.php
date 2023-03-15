<?php
define('GUITARRA', '200000');
define('PIANO', '250000');
define('BATERIA', '100000');

//Recibe las variables de entrada

$nombre = $_REQUEST['nombre']; //$_GET $_POST
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];
$sena =$_REQUEST['sena'];
$adsi =$_REQUEST['adsi'];

//Definir variables

$valorCurso = 0;
$descuento1 = 0;
$descuento2 = 0;
$valorpagar = 0;

switch($curso =$_REQUEST['curso']){
    case 'Guitarra': $valorCurso = GUITARRA;
    break;
    case 'Piano': $valorCurso = PIANO;
    break;
    case 'Bateria': $valorCurso = BATERIA;
    break; 
}

$descuento1 = calcularDescuento1($valorCurso, $sena, $adsi);
$descuento2 = calcularDescuento2($valorCurso, $edad);

echo '<center><h2>FACTURA CURSO </h2></center>';
echo '<h3>' . $nombre . ' ' . $apellido . '</h3>' ;
echo 'Curso                  : <b>' . $curso . '<br/></b>';
echo 'El valo del curso      : $' . $valorCurso . '<br/>';
echo 'Descuento por estudiar : $' . $descuento1 . '<br/>';
echo 'Descuento por edad     : $' . $descuento2 . '<br/>';
echo '<hr>';
echo '<h3>Valor a pagar      : $' . $valorCurso - ($descuento1 + $descuento2) . '</h3>';

function calcularDescuento1($valorCurso, $sena, $adsi)
{
    if (strcmp($sena, 'Si')) {
        echo "Estudia en el sena $sena y el valor del curso es $valorCurso<br><br>";
        $descuento1 = $valorCurso * 0.40;
        if (strcmp($adsi,'Si')) {
            echo "Estudia en el adsi $sena <br>"; 
            $descuento1 = $descuento1 + $valorCurso *0.20;
        }
        else {
            $descuento1 = $descuento1 + $valorCurso * 0.10;
        }
    }
    else {
       $descuento1 = $valorCurso * 0.25;
    }

    return $descuento1;
}

function calcularDescuento2($valorCurso, $edad)
{
    if($edad >= 15 && $edad < 20)
    {
        $descuento2 = $valorCurso * 0.15;
    }
    elseif ($edad >= 20 && $edad < 25) {
        $descuento2 = $valorCurso * 0.10;
    }
    else {
        $descuento2 = 0;
    }

    return $descuento2;

}

?>