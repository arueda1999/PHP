<?php
require_once("Persona.php");
require_once("Empleado.php");
//$Persona p1 = new Persona();
$p1 = new Persona("Pedro", "Perez", 18);
$p2 = new Persona("Juan Pablo", "Suárez", 22);
$p3 = new Persona("Maira Alejandra", "Nunez", 20);
//var_dump($p1);

/*
$p1->setNombre("Amparo");
$p1->setApellido("Rueda Jaimes");
$p1->setEdad(25);*/

$p1->setNombre("Pepito");
var_dump($p1);


/*

echo $p1->getNombre() . "<br>";
echo $p1->getApellido() . "<br>";
echo $p1->getEdad() . "<br>";
echo "<hr>";

echo $p2->getNombre() . "<br>";
echo $p2->getApellido() . "<br>";
echo $p2->getEdad() . "<br>";
echo "<hr>";

$p2->setNombre("Pablito");

echo $p2->getNombre() . "<br>";
echo $p2->getApellido() . "<br>";
echo $p2->getEdad() . "<br>";
echo "<hr>";
*/



?>
