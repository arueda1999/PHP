<?php
//Clase: es la clasificacion con atributos y comportamientos de un conjunto de objetos

class Persona 
{
    //atributos

    protected $nombre;
    protected $apellido;
    protected $edad;

    //comportamiento: contructores, setter getter setAtributo(valor) getAtributo() consultarInformacion()

    public function __construct($nombre, $apellido, $edad)
    {
       $this->nombre = $nombre; 
       $this->apellido = $apellido;
       $this->edad = $edad;
    }

    public function setNombre($valor)
    {
        $this->nombre = $valor;
    }

    public function setApellido($valor)
    {
        $this->apellido = $valor;
    }

    public function setEdad($valor)
    {
        $this->edad = $valor;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

}

?>

