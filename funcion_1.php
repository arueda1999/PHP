<?php
//pasar argumentos  las funciones: argumentos fijos, argumentos variables

function calificaciones($nombre, $calificacion = 5)
{

    echo "La calificación de $nombre es $calificacion";

}

calificaciones("Amparo", 3);

//¿Qué pasa si no conocemos el número de argumentos que se deben pasar a la función?

?>