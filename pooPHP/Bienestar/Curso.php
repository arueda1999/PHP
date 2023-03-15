<?php
require_once("Aprendiz.php");
class Curso{
//Atributos
private $nombreCurso;
private $valorCurso;
private $aprendiz1;
//Método constructor
public function __construct($nomCurso, $valorCurso, $aprendiz ){
    $this->nombreCurso = $nomCurso;
    $this->valorCurso = $valorCurso;
    $this->aprendiz1 = $aprendiz;
}

//Métodos getter and setter


//Métodos analizadores o de negocio

public function calcularDescuento1()
{
    $descuento1 = 0;
    if($this->aprendiz1->getSena())
    {
        $descuento1 =$this->valorCurso * 0.40;
        if($this->aprendiz1->getAdsi())
        {
            $descuento1 =$descuento1 + $this->valorCurso * 0.20; 
        }
        else
        {
            $descuento1 =$this->valorCurso * 0.10;
        }
    }
    else
    {
        $descuento1 =$this->valorCurso * 0.25;
    }
    return $descuento1;

}
public function calcularDescuento2($valorCurso, $aprendiz)
{
    
}

}
?>