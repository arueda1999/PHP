<?php
require_once('Persona.php');
require_once('Empleado.php');

$nombre = $_POST['empleado'];
$apellido= $_POST['apellido'];
$edad = $_POST['edad'];
$salario = $_POST['salario'];
$cargo = $_POST['cargo'];

$empleado = new Empleado($salario, $cargo);
$empleado->setNombre($nombre);
$empleado->setApellido($apellido);
$empleado->setEdad($edad);

var_dump($empleado);

echo "<hr>";

echo "<br>El salario es $". $empleado->calcularSalario(30);
$empleado->modificarSueldo(0.05);
echo "<br>El nuevo sueldo es ". $empleado->getSueldo();





?>