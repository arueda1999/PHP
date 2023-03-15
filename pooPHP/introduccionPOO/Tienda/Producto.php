<?php
class Producto{
private $nomProducto;
private $cant;
private $cantMinima;
private $precio;

public function __constructor()
{
    $this->nombProducto = null;
    $this->cant = 0;
    $this->cantMinima = 0;
    $this->precio = 0;
}

public function crearProducto($prod, $can, $canMin, $precio)
{
    $this->nomProducto = $prod;
    $this->cant = $can;
    $this->cantMinima = $canMin;
    $this->precio = $precio;
}

public function venderProducto($prod, $cantV)
{
    if($this->cant > $cantV)
        {
            $this->cant -= $cantV;
        }
    elseif ($this->cant == $cantV) {
        $this->cant = 0;
    }
    else{
        echo 'No hay existencias';
    }


}

public function comprarProducto($prod, $cantC)
{

        $this->cant += $cantC;

}

public function imprimirProducto()
{
    return $this->nomProducto . ' ' . $this->cant . ' ' . $this->cantMinima .' ' . $this->precio ;
}


}