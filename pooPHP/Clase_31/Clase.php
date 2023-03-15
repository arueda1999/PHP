<?php
class Clase  
{
    //Atributos
    private $atributo1;
    private $atributo2;
    public $atributo3, $atributo4;

    //Comportamiento: métodos constructores, setter getter, 

    public function __construct()
    {
        $this->atributo1 = null;
        $this->atributo2 = null;
        $this->atributo3 = null;
        $this->atributo4 = null;

    }
public function setAtributo1($valor)
{
    $this->atributo1 = $valor;
}

public function getAtributo1()
{
    return $this->atributo1;
}
public function setAtributo2($valor)
{
    $this->atributo2 = $valor;
}

public function getAtributo2()
{
    return $this->atributo2;
}


}
