<?php
class Persona{
//Atributos
private $nombreEmpleado;
private $apellidoEmpleado;
private $tipoDocumento;
private $numeroDocumento;
private $fechaNacimiento;

public function __construct($nomEmp, $apeEmpl, $tipDoc, $numDoc, $fechaNac)
{
    $this->nombreEmpleado = $nomEmpl;
    $this->apellidoEmpleado = $apeEmpl;
    $this->tipoDocumento = $tipDoc;
    $this->numeroDocumento = $numDoc;
    $this->fechaNacimiento = $fechaNac;
}




}
?> 