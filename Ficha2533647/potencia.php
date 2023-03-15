<?php

function potencia($base, $x)
{
    $pot = 1;

    if($x == 0)
    {
        return $pot;
    }
    elseif ($x < 0) {
        for($i = 1; $i <= $x; $i++)
        {
            $pot = $pot * 1/$base;
        }
        return $pot;
    }
    else
    {
        for($i = 1; $i <= $x; $i++)
        {
            $pot = $pot*$base;
        }
        return $pot;

    }
}

$exponente = potencia(4, -2);

echo '4 elevado a -2 es '. $exponente;

?>