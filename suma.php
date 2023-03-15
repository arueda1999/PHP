<?php
/*para recepcionar las variables que vienen del formulario 
//en una variable global - $_GET["name"], $_POST['name'], $_REQUEST["name"]

$num1 = $_REQUEST["num1"];
$num2 = $_REQUEST["num2"];

echo "<center>La suma de $num1 + $num2 es: ". $num1+$num2 . "</center>";*/

$n = $_GET['fact'];

echo "El factorial de $n es " . calcularFactorial($n);

function calcularFactorial($t)
{
    $factorial = 1;
    if($t==0 || $t == 1)
    {
        return $factorial;
    }
    else {
        for ($i=2; $i <= $t ; $i++) { 
           $factorial = $factorial * $i;
        }
        return $factorial;
    }

}


?>