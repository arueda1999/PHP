<?php
require_once("Empleado.php");//import 

$empleado1 = new Empleado();// instancia el objeto

var_dump($empleado1);

$empleado1->crearEmpleado("Daniel Fernando", "Perez Romero", 3000000);

var_dump($empleado1);

echo 'Modificar sueldo <br>';

$empleado1->setSueldo(4500000);

echo '<br><br>El nuevo sueldo de '. $empleado1->getNombre() . ' ' .$empleado1->getApellido(). ' es $'. $empleado1->getSueldo(); 

