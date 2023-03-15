<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
<section>
    <h3>
        MATRICULAS
    </h3>
    <form action="matriculas.php" method="POST">
            <label>Nombre del aprendiz:</label>
            <input type="text" name="aprendiz" id="aprendiz" required>
            <br>
            <label>Apellidos del aprendiz:</label>
            <input type="text" name="ape" id="ape" required>
            <br>
            <label>Edad del aprendiz:</label>
            <input type="number" name="edad" id="edad" required>
            <br>
            <label for="">Sena</label>
            <input type="checkbox" name="estadoSena" id="estadoSena" value="true" >
            <br>
            <label for="">ADSI</label>
            <input type="checkbox" name="estadoADSI" id="estadoADSI" value="true" >
            <br>
            <select name="curso" id="curso">
                <option value="Piano">Piano</option>
                <option value="Bateria">Bateria</option>
                <option value="Guitarra">Guitarra</option>
            </select>
            <input type="submit" value="Guardar">
        </form>
</section>
    
</body>
</html>