<?php
// iniciamos sesion
session_start();
$num=$_GET['num'];
////  asignamos un valor a una sesion
$_SESSION[numero]=$_SESSION[numero]+$num;
////  visualizamos  una sesion
echo "El valor de la session numero es ".$_SESSION[numero];
?>
 
<form name="form1" action="sesion.php" method="get">
<input name="num" type="hidden" value="1">
<input type="submit" value="1">
</form>
<form name="form2" action="sesion.php" method="get">
<input name="num" type="hidden" value="2">
<input type="submit" value="2">
</form>
<form name="form3" action="sesion.php" method="get">
<input name="num" type="hidden" value="3">
<input type="submit" value="3">
</form>