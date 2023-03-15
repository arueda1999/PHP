
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
      // Array
      $productos = [
        ['codigo' => 'A0001', 'desc' => 'Mouse'],
        ['codigo' => 'A0002', 'desc' => 'Teclado'],
        ['codigo' => 'A0003', 'desc' => 'Monitor'],
        ['codigo' => 'A0004', 'desc' => 'Impresor'],
      ];
      //Abrir etiqueta de tabla
      echo '<table class="table table-striped">';
      //Imprimir encabezado de tabla
      echo '<thead class="thead-dark">
                 <tr><th>Codigo</th><th>Descripcion</th></tr>
           </thead>';
      // Imprimir las filas de la tabla     
      foreach ($productos as $indice=> $prod) {
        $posicion = 0;
        echo '<tr>
                <td>'. $prod['codigo'] .'</td>
                <td>'. $prod['desc'] .'</td>
                <td>'. $posicion = $indice .'</td>
             </tr>';
      }
      echo '</table>';
     ?>
  </body>
</html>