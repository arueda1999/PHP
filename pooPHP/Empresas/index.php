<?php
require_once("Empleado.php");
require_once("Empresa.php"); 

    $e1 = new Empleado();
    $e1->crearEmpleado(1025, "Juan","Rodriguez", 1500000);
    $e2 = new Empleado();
    $e2 -> crearEmpleado(1026, "Juana","Lopez", 1800000);
    $e3 = new Empleado();
    $e3-> crearEmpleado(1027, "Juanita","Sanchez", 2500000);
    $empresa = new Empresa();
    $empresa->crearEmpresa("XYZ SAS", 890999999, $e1, $e2, $e3);
    
    echo '<h3>El nombre de la empresa es: '. $empresa->getNomEmpresa(). '</h3>';
    echo '<h3>El NIT de la empresa es: '. $empresa->getNit(). '</h3>';
    echo '<h3>El nombre del empleado es : '. $empresa->getE1()->getNomEmpleado(). '</h3>';
    echo '<h3>Su auxilio de transporte es $: '. $empresa->getE1()->calcularAuxilioT(30). '</h3>';
?>
