<?php
class Empleado{
//Constantes
define("AT","117000");
define("SML","1000000");
//atributos
    private $identificacion;
    private $nomEmpleado;
    private $apeEmpleado;
    private $sueldo; 
    private $eps;
 //metodo constructor

    public function __construct()
    {
        $this->identificacion = 0;
        $this->apeEmpleado = null;
        $this->nomEmpleado = null;
        $this->sueldo = 0; 
        
    }

    public function crearEmpleado($id, $nom, $ape, $sue)
    {
        $this->identificacion = $id;
        $this->apeEmpleado = $ape;
        $this->nomEmpleado = $nom;
        $this->sueldo = $sue;    }

    public function setNomEmpleado($valor)
    {
        $this->nomEmpleado = $valor;
    }

    public function setApeEmpleado($valor)
    {
        $this->apeEmpleado = $valor;
    }

    public function setIdentificacion($valor)
    {
        $this->identificacion = $valor;
    }

    public function setSueldo($valor)
    {
        $this->sueldo = $valor;
    }

    public function getNomEmpleado()
    {
        return $this->nomEmpleado; 
    }

    public function getapeEmpleado()
    {
        return $this->apeEmpleado; 
    }

    public function getIdentificacion()
    {
        return $this->identificacion; 
    }

    public function getSueldo()
    {
        return $this->sueldo; 
    }
//analizadores - la resolución del problema
    public function calcularSalario($valor)
    {
        $salario = 0;

        return $salario = $this->sueldo*$valor/30;

    }

public function calcularAuxilioT($valor)
{
    $auxilioTransporte = 0;
    if($this->sueldo <= 2*$this->SML)
    {
        $auxilioTransporte = $this->AT*$valor/30;    
    }
    
 return $auxilioTransporte;
}
    


}

?>