<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cargos</title>
</head>
<body>
    <section>
        <h1>Crear Cargos</h1>
        <form action="../Model/Cargo.php" method="POST">
            <p>
                <label for="cargo">Nombre del cargo: </label>
                <select name="cargo" id="cargo">
                    <option value="Gerente">Gerente</option>
                    <option value="Almacenista">Almacenista</option>
                    <option value="Vendedor">Vendedor</option>
                    <option value="Facturador">Facturador</option>
                </select>
            </p>
            <p>
                <label for="sueldo">Sueldo del cargo: </label>
                <input type="text" name="sueldo" id="sueldo">
            </p>
            <p>
                <input type="submit" value="Crear Cargo">
            </p>                        
        </form>
    </section>
</body>
</html>
