<?php       

//e^x = x^0/0! + x^1/1! + x^2/2! + x^3/3! + ... + x^n/n! = sumatoria de x^i/i!
// tres funciones: 
//1. exponenciacion
//2. factorial
//3. e^x

function calcularEx($n)
{  $e = 0;
   $x = 2; 

  for ($i=0; $i < $n ; $i++) { 
      $e = $e + calcularExponente($x, $i)/calcularFactorial($i);
   }

  echo "El valor de <b>e</b> a la $x es <b>$e ";

}


function calcularExponente($base, $exponente)
{  
   
   $exp = 1;
   if($exponente == 0)
   {
      return $exp;
   }
   else{
      for ($i=1; $i <= $exponente; $i++) { 
         $exp*=$base;
      }
      return $exp;
   }
   
}

function calcularFactorial($f)
{
  
   $fact = 1;
   if($f == 1 || $f == 0)
   {
      return $fact;
   }
   else {
      for ($i=2; $i <= $f ; $i++) { 
         $fact *= $i;
      }
      return $fact;
   }
}

calcularEx(17);
  
?>