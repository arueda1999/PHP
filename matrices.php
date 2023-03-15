<?php
//$arreglo = [3, 3.5, 4, 5, 7, 10];
/*
$matriz = [[1, 2, 3, 4],
    [1, 2, 3, 4],
    [1, 2, 3, 4]
];
for ($i=0; $i < 3 ; $i++) { 
  for ($j=0; $j < 4 ; $j++) { 
    echo $matriz[$i][$j] . " ";
  }
  echo "<br><hr>";
  Persona p1 = new Persona();
  p1 -> getNombre();
  
}*/

$informacion = [['nombre' => "Amparo", 'apellido' => "Rueda Jaimes", 'email' => "aruedaj@misena.edu.co"],
['nombre' => "Pedro", 'apellido' => "Rueda Jaimes", 'email' => "aruedaj@misena.edu.co"],
['nombre' => "Julio", 'apellido' => "Rueda Jaimes", 'email' => "aruedaj@misena.edu.co"],
['nombre' => "Rosa", 'apellido' => "Rueda Jaimes", 'email' => "aruedaj@misena.edu.co"]];
/*
echo $informacion['nombre']. "<br>";
echo $informacion['apellido']. "<br>";
echo $informacion['email']. "<hr>";
*/
foreach ($informacion as $registro) {
    echo $registro['nombre'] . "<br> ";
    echo $registro['apellido'] . "<br> ";
    echo $registro['email'] . "<br> ";
    echo "<hr>";
  }



?>