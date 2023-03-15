<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Ejercicio MVC</title>
</head>
<body>
    <ul>
        <li>
            <a href="view/formularioCargos.php">Crear Cargos</a>
        </li>
        <li>
            <a href="view/formularioEmpleado.php">Crear Empleados</a>
        </li>
    </ul>

<table>
    <th>
        <tr>
            <th>idEmpleado</th>
            <th>Tipo documento</th>
            <th>Número de documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Sueldo</th>
            <th>Cargo</th>
            <th>Fecha de ingreso</th>
            <th>Ingresar Empleado</th>
        </tr>
    </th>
   <?php
   require("model/Empleado.php");
   require("model/Persona.php");

   $d = new Data();
   $empleado = $d->getEmpleado();

   foreach ($empleado as $emp) {
    echo '<tr>';
        echo '<td>'. $d->idEmpleado . '</td>';
        echo '<td>'. $d->tipoDocumento . '</td>';
        echo '<td>'. $d->numeroIdentificacion . '</td>';
        echo '<td>'. $d->nombreEmpleado . '</td>';
        echo '<td>'. $d->apellidoEmpleado . '</td>';
        echo '<td>'. $d->fechaNacimiento . '</td>';
        echo '<td>'. $d->cargo . '</td>';
        echo '<td>'. $d->sueldo. '</td>';
        echo '<td>'. $d->fechaIngreso. '</td>';
        echo '<td>'.
        'form action = "" method = "POST"'
        . '</td>';
    echo '</tr>';
   }



   ?>
</table>
</body>
</html>