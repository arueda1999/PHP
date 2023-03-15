<?php
require_once('Persona.php');
require_once('Empleado.php');

$nombre = $_POST['empleado'];
$apellido= $_POST['apellido'];
$fechaNac = $_POST['fechaNac'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];
$dias = $_POST['dias'];


$empleado = new Empleado($nombre, $apellido, $edad, $salario, $cargo);

var_dump($empleado);

$empleado -> calcularSalario($dias);
$empleado -> modificarSalario(0.05);

?>