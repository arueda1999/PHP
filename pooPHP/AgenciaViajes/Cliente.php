<?php
require_once("Vuelo.php");
class Cliente
{
    private $nombreCliente;
    private $apellidoCliente;
    private $email;
    private $vuelo;

public function __construct($nombre, $apellido, $email, $vuelo)
{
    $this->nombreCliente = $nombre;
    $this->apellidoCliente = $apellido;
    $this->email = $email;
    $this->vuelo = $vuelo;
}

public function setNombreCliente($valor)
{
    $this->nombreCliente = $valor;
}

public function setApellidoCliente($valor)
{
    $this->apellidoCliente = $valor;
}

public function setEmail($valor)
{
    $this->email = $valor;
}

public function getNombreCliente()
{
    return $this->nombreCliente ;
}

public function getApellidoCliente()
{
    return $this->apellidoCliente ;
}

public function getEmail()
{
    return $this->email;
}

public function setVuelo($vuelo)
{
    $this->vuelo = $vuelo;
}

public function getVuelo()
{
    return $this->vuelo;
}


}


?>
