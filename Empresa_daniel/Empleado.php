<?php

class Empleado extends Persona{

    
    private $sueldo;
    private $cargo;

public function __construct($nombre,$apellido,$edad,$fechaNac,$sueldo, $cargo )
{
    parent:: __construct($nombre,$apellido,$edad,$fechaNac);
    $this->sueldo = $sueldo;
    $this->cargo = $cargo;
}
public function Empleado()
{
    
    $this->sueldo = $sueldo;
    $this->cargo = $cargo;

}
public function setSueldo($valor)
{
    $this->sueldo = $valor;
}

public function setCargo($valor)
{
    $this->cargo = $valor;
}

public function getSalario()
{
    return $this->salario ;
}

public function getCargo()
{
    return $this->cargo ;
}
public function calcularSalario($dias){
$sal=0;
$sal = $this->sueldo *$dias/ 30;

echo "<br><br>salario: $sal";
}

public function modificarSalario($porcentaje){
    $this->sueldo = $this->sueldo + $this->sueldo * $porcentaje;
}

}   
