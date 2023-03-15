<?php
class Vuelo{

    private $origen;
    private $destino;
    private $hora;
    private $minuto;
   

public function __construct($origen, $destino, $hora, $minuto)
{
    $this->origen = $origen;
    $this->destino = $destino;
    $this->hora = $hora;
    $this->minuto = $minuto;
   
}

public function  crearVuelos($origen, $destino, $hora, $minuto)
{
    $this->origen = $origen;
    $this->destino = $destino;
    $this->hora = $hora;
    $this->minuto = $minuto;
    
}

public function buscarVuelo($vuelo, $origen, $destino, $horaI, $horaF) : int
{
    $indice = 0;
    foreach ($vuelo as $key => $value) {
        if(strcmp($vuelo['origen'], $origen) && strcmp($vuelo['destino'],$destino)  && ($vuelo['hora']>=$horaI && $vuelo['hora']<=$horaF))
        {
            $indice = $key;
            break;
        }

        }
        return $indice;
}


    
}

