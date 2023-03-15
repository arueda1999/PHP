<?php
class Empleado{
//declarar atributos
private $nombre;
private $apellido;
private $sueldo;

//metodo constructor 
public function __construct()
{
    $this->nombre = null;
    $this->apellido = null;
    $this->sueldo = 0;
}
//metodos getter and setter
public function setNombre($valor){
$this->nombre = $valor;
}

public function getNombre(){

    return $this->nombre;
}
public function setApellido($valor){
    $this->apellido = $valor;
    }
    
public function getApellido(){
    
        return $this->apellido;
}

public function setSueldo($valor){
        $this->sueldo = $valor;
}
        
public function getSueldo(){
        
            return $this->sueldo;
        }  
        
public function crearEmpleado($nom, $ape, $sue)  
{
    $this->nombre = $nom;
    $this->apellido = $ape;
    $this->sueldo = $sue;

}      


}