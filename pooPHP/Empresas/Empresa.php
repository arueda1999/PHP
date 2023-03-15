<?php
class Empresa{
// atributos

private $nomEmpresa;
private $nit;
private Empleado $e1;
private Empleado $e2;
private Empleado $e3;


public function __construct()
{
    $this->nomEmpresa = null;
    $this->nit = 0;
    $e1 = new Empleado();
    $e2 = new Empleado();
    $e3= new Empleado();
 }

public function crearEmpresa($emp, $nit, $e1, $e2, $e3)
{
    $this->nomEmpresa = $emp;
    $this->nit = $nit;
    $this->e1 = $e1;
    $this->e2 = $e2;
    $this->e3 = $e3;
}

public function getNit()
{
    return $this->nit;
}

public function getNomEmpresa()
{
return $this->nomEmpresa;

}

public function getE1()
{
    return $this->e1;
}
public function getE2()
{
    return $this->e2;
}

public function getE3()
{
    return $this->e3;
}

}
?>