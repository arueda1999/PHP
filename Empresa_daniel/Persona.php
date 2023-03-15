<?php
//Clase: es la clasificacion con atributos y comportamientos de un conjunto de objetos

abstract class Persona 
{
    //atributos

    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $fechaNac;

    //comportamiento: contructores, setter getter setAtributo(valor) getAtributo() consultarInformacion()

    public function __construct($nombre, $apellido, $edad, $fechaNac)
    {
       $this->nombre = $nombre; 
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this ->fechaNac = $fechaNac;
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

    public function setfechaNac($valor){
    $this-> fechaNac = $valor;
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
    
    public function getfechaNac(){
        return $this-> fechaNac;

    }

}

?>

