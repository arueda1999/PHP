<?php
require_once("Producto.php");

/*class Tienda{

    private $nombreTienda;
    private $caja;
    
    public function __constructor(){
        $this->nombreTienda = null;
        $this->caja = 0;
        $this->producto  = new Producto();
      
    }

   


   

    
}*/
private $caja;
$p1 = new Producto();
$p2 = new Producto();
$p3 = new Producto();


//var_dump($p1);

$p1 -> crearProducto("Lapices de colores", 100, 20, 1200);
$p2 -> crearProducto("Cuaderno de 100 hojas cuadriculado", 150, 20, 5000); 
$p3 -> crearProducto("sacapuntas", 50, 10, 800);

/*echo '<br> Producto con valores';
var_dump($p1);*/

$p1 -> comprarProducto("Lapices", 200);
$p2 -> comprarProducto("Cuaderno de 100 hojas cuadriculado", 200);
$p3 -> comprarProducto("sacapuntas", 200);

echo $p1 -> imprimirProducto() . '<br>';

$p1 -> VenderProducto("Lapices", 180);


echo $p1 -> imprimirProducto() . '<br>';