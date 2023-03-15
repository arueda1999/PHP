<?php
require_once "Model/Persona.php";
class Empleado extends Persona{

    private $cargo;
    private $sueldo;
    private $fechaIngreso;


    public function __construct($nomEmp, $apeEmpl, $tipDoc, $numDoc, $fechaNac, $cargo, $sueldo, $fechaI)
    {
        parent:: __construct($nomEmp, $apeEmpl, $tipDoc, $numDoc, $fechaNac);
        $this->cargo = $cargo;
        $this->sueldo = $sueldo;
        $this->fechaIngreso= $fechaI;
        
    }

    

}

?>