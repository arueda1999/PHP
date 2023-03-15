<?php
 //recuperar datos
 require_once("Curso.php");
 require_once("Aprendiz.php");

$estadoAdsi = false;
$estadoSena = false;
$valorCurso = 0;

if (isset($_POST['estadoADSI'])) {
    $estadoAdsi = true;
}

if (isset($_POST['estadoSena'])) {
    $estadoSena = true;
}


$a1 = new Aprendiz($_POST['aprendiz'], $_POST['ape'], $estadoAdsi, $estadoSena, $_POST['edad']);


switch ($_POST['curso']) {
    case 'Piano':
        $valorCurso = 250000;
        break;
    case 'Bateria':
        $valorCurso = 150000;
        break;
    case 'Guitarra':
        $valorCurso = 100000;
        break;
    default:    
}

$curso = new Curso($_POST['curso'],$valorCurso,$a1);

echo "El descuento por  : " . $curso->calcularDescuento1();
//Factura de matricula 

?>