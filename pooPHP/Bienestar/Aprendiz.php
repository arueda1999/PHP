<?php
class Aprendiz{
//Crear atributos
    private $nombre;
    private $apellido;
    private $sena;
    private $adsi;
    private $edad;
//Métodos constructores
    public function __construct($nombre,$apellido,$sena, $adsi,$edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sena = $sena;
        $this->adsi = $adsi;
        $this->edad = $edad;
    }
//Métodos setter and getter

public function setNombre($valor){
    $this->nombre = $valor;
}

public function setApellido($valor){
    $this->nombre = $valor;
}
public function getNombre(){
    return $this->nombre;
}

public function getApellido(){
    return $this->apellido;
}
public function getSena(){
    return $this->sena;
}
public function getAdsi(){
    return $this->adsi;
}
}
?>