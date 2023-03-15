<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear vuelos</title>
</head>
<body>
    <form action="Itinerario.php" method="POST">
        <p>
            <label for="origen">Seleccione su origen: </label>
            <select name="origen" id="origen" >
                <option value="BOG">BOG</option>
                <option value="CLO">CLO</option>
                <option value="MED">MED</option>
                <option value="BAQ">BAQ</option>
                <option value="BUG">BUG</option>
                <option value="PEI">PEI</option>
                <option value="CTG">CTG</option>
        </select>
        </p>
        <p>
            <label for="destino">Seleccione su destino: </label>
            <select name="origen" id="origen" >
                <option value="BOG">BOG</option>
                <option value="CLO">CLO</option>
                <option value="MED">MED</option>
                <option value="BAQ">BAQ</option>
                <option value="BUG">BUG</option>
                <option value="PEI">PEI</option>
                <option value="CTG">CTG</option>
            </select>
        </p>
        
            <label for="hora">Viaja entre las : </label>
            <input type="number" name="hora" id="hora" min=0 max=23 required>
            <label for="minutos">:</label>
            <input type="number" name="minutos" id="minutos"  min=0 max=59 required>
            
        </p>

        <p>
            <input type="submit" value = "Adicionar vuelos" >
        </p>
    </form>    
</body>
</html>