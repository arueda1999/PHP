<?php
 /*
 El hipermercado “EL QUE MÁS BARATO VENDE” desea implementar un sistema para reforzar la fidelidad de sus clientes por medio de la acumulación de puntos y entrega de premios dependiendo de las compras realizadas por ellos.

Los puntos que se le otorgan a un cliente por una compra dependen de la cantidad de puntos acumulados hasta el momento, el monto de la compra y la cantidad de tiempo que ha sido fiel un cliente.

•	Por defecto un cliente obtiene 1 punto por cada compra de $1000 (0 <=valorCompra>=1000) 1800 500 texto

•	Existen bonificaciones en cuanto a puntos:

o	Un cliente que lleve inscrito entre 1 y 6 meses y tenga entre 40 y 150 puntos (incluidos) acumula 1 punto por cada $1000
o	Teniendo en cuenta el mismo lapso de tiempo, si un  cliente acumula un número de puntos mayor a 150 obtiene 2 puntos por cada $1000.
o	Un cliente que lleve inscrito más de 6 meses  y acumulados mas de 350 puntos obtiene 4 puntos por cada $1000

•	Además de los puntos acumulados, los cuales pueden ser redimidos para obtener premios, el Hipermercado otorga descuentos en las compras de sus clientes, de acuerdo con las siguientes condiciones:
o	Si un cliente ha acumulado un número mayor o igual a 500 puntos se le hace un descuento en sus compras del 5%, si son mas de 1000 puntos el descuento es del 10%

Usted debe hacer un programa que, dado el costo de una compra y las características del cliente, indique cuál es el valor que debe pagar el cliente, luego de aplicar los descuentos respectivos, el número de puntos que acumula por la compra y el total de puntos acumulado.
 */
 
 
 $a = 5;
 $b = 8;
 $c =1;
 $raiz =sqrt(pow($b,2)- 4*$a*$c);
 $x1 = (-$b + $raiz)/ 2*$a;
 $x2 = (-$b - $raiz)/ 2*$a;

 echo '<h1>el valor de x1 es  ', $x1, '</h1>';

 echo 'el valor de x2 es ', $x2;
 
?>