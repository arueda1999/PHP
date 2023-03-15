<?php
    require_once("Clase.php"); //import

    $clase1 = new Clase();

    var_dump($clase1); //MUESTRA EL OBJETO INICIALIZADO

     $clase1->atributo3 = "clase3"; // CAMBIA EL VALOR DE NULL A clase 3
     $clase1->atributo4 = "clase4"; // CAMBIA EL VALOR DE NULL A clase 4

   //$clase1->atributo1 = "clase 1";acceso de un objeto a un atributo a un metodo en con el operador ->

   $clase1->setAtributo1("clase1"); // cambiando el valor de null a clase1 utilizando el metodo setter
   $clase1->setAtributo2("clase2"); // cambiando el valor de null a clase2 utilizando el metodo setter

   
   echo "<br/>Atributos de acceso private: ". $clase1->getAtributo1() . " " . $clase1->getAtributo2(). "<br>";
   echo "<br/>Atributos de acceso publico: ". $clase1->atributo3. " " . $clase1->atributo4;

?>
