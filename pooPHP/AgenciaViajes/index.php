<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerario</title>
</head>
<body>
<section>
    <form action="Itinerario.php" method = "POST">
        <p>    
            <label for="cliente">Nombre del cliente: </label>
            <input type="text" name="cliente" id="cliente" required>
        </p>    
        <p>    
            <label for="apellido">Apellido del cliente: </label>
            <input type="text" name="apellido" id="apellido" required>
        </p> 
        <p>    
            <label for="mail">Correo electrónico: </label>
            <input type="email" name="email" id="mail" required>
        </p> 
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
        
            <label for="horaI">Viaja entre las : </label>
            <input type="number" name="horaInicial" id="horaI" min=0 max=23 required>
            <label for="minInicial">:</label>
            <input type="number" name="minInicial" id="minInicial"  min=0 max=59 required>
            <label for="horaF"> y las : </label>
            <input type="number" name="horaFinal" id="horaF" min=0 max=23 required>
            <label for="minFinal">:</label>
            <input type="number" name="minFinal" id="minFinal"  min=0 max=59 required>
        </p>

        <p>
            <input type="submit" value = "Buscar vuelo" >
        </p>
    </form>
</section>    
</body>
</html>