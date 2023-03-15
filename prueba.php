<?php       


function calcularFactorial($n)
{
   $fact = 1;
   for($i = 1; $i <= $n; $i++)
   {
      $fact = $fact * $i;
   }

  // echo "El factorial de 7 es  $fact <br/>";
   return $fact;
}

$factorial = calcularFactorial(7);

echo "El valor de la variable  es  $factorial ";



?>