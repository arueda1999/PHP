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
            $pot *= $base;
        }
        return $pot;

    }
}

function factorial ($n)
{
    $fact =1;

    if($n <= 0)
    {
        return $fact;
    }
    else{
        for($i = 1; $i <= $n; $i++)
        {
            $fact *=  $i;

        }
        return $fact;
    }

}

function euler()
{
    $exp = 0;
    $n = 17;

    for($i = 0; $i <= $n; $i++)
    {
        $exp += potencia(1, $i) / factorial($i);
    }
    return $exp;

}

echo euler();


