<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLATAFORMA EMPLEADOS</title>
</head>
<body>
    <section>
        <h2>DATOS DEL EMPLEADO</h2>
        <FORM action="crearEmpleado.php" method="POST">
        <p>    
            <label for="empleado">Nombre Empleado: </label>
            <input type="text" name="empleado" id="empleado" required>
        </p>  
        <p>    
            <label for="apellido">Apellido Empleado: </label>
            <input type="text" name="apellido" id="apellido" required>
        </p>  
        <p>    
            <label for="fechaNac">Fecha nacimiento: </label>
            <input type="date" name="fechaNac" id="fechaNac" required>
        </p>
        <p>    
            <label for="salario">Salario: </label>
            <input type="number" name="salario" id="salario" required>
        </p>
        <p>    
            <label for="dias">Dias trabajados: </label>
            <input type="number" name="dias" id="dias" required>
        </p>
        <p>    
            <label for="cargo">Cargo: </label>
            <input type="text" name="cargo" id="cargo" required>
        </p>
        <p>    
            <input type="submit" value="Crear datos">
        </p>
        </FORM>

    </section>
    
</body>
</html>