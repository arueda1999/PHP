<?php
require_once('Persona.php');
class Empleado extends Persona{

    private $sueldo;
    private $cargo;
    private $fechaIngreso;

public function __construct( $nombre, $apellido, $edad, $sueldo, $cargo, $fechaIngreso )
{
    parent::__construct($nombre, $apellido, $edad);
    $this->sueldo = $sueldo;
    $this->cargo = $cargo;
    $this->fechaIngreso = date('Y-m-d',strtotime($fecha ));
}

public function setSueldo($valor)
{
    $this->sueldo = $valor;
}

public function setCargo($valor)
{
    $this->cargo = $valor;
}

public function getSueldo()
{
    return $this->sueldo ;
}

public function getCargo()
{
    return $this->cargo ;
}

public function calcularSalario($dias)
{   
    $salario = 0;
    $salario = $this->sueldo * $dias/30;
    return $salario;
}

public function modificarSueldo($porcentaje){

    $this->sueldo = $this->sueldo + $this->sueldo * $porcentaje;

}

public function asignarSueldo($cargo)
{
    switch ($cargo) {
        case 'Gerente': $this->sueldo =3500000;
            break;
        case 'Almacenista': $this->sueldo =2500000;
            break;    
        case 'Facturador': $this->sueldo =1500000;
            break;
        case 'Empleado': $this->sueldo =1000000;
            break;
        default:
           echo 'Error';
            break;
    }
}

}
