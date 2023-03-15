<?php
//while(condicion){acciones;} -- 0 o n veces 
//do{acciones;}while(condicion); -- 1 o n veces se evalúa la condición al final del ciclo
//for(asignacion; condicion; incremento o decremento){acciones;}
//foreach($arreglo as $copiaArreglo){acciones;}

// e^x = Sumatoria (x^i/i!) euler 2. = n veces = e = 1^0/0! + 1^1/1! + 1^2/2! + ... + 1^n/n!
// x^y = x * x * x * x * ... * x --- y el numero de veces que se multiplica la base
// n! = (n!-1)* n! --- n = - valor o n = 0 o n = 1 el factorial = 1


$n = 17; // variable global

function calcularExponente($n)
{
    $e = 0; // variable local
    //global $n;
    for ($i=0; $i <=$n ; $i++) { 
        $e = $e + calcularPotencia(1,$i)/calcularFactorial($i);//se llaman la funciones
        // esta expresión es igual a $e += calcularPotencia(1,$i)/calcularFactorial($i);
    }
    echo "El valor de <b>e</b> = <b>$e</b> ";
}

function calcularPotencia($base, $exponente)
{
 $exp = 1;
 if($exponente == 0)
  {
    return $exp;
 }
 else {
    for ($i=1; $i <= $exponente ; $i++) { 
        $exp  = $exp * $base; // esta expresión es igual a $exp*=$base;
    }
    return $exp;
 }

}

function calcularFactorial($n)
{
    $fact = 1;

    if($n == 0 || $n == 1)
    {
        return $fact;
    }
    else {
        for ($i=2; $i <= $n ; $i++) { 
            $fact = $fact * $i;
        }   
        return $fact; 
    }


}
calcularExponente($n);
?>