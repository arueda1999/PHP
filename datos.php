<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro datos</title>
</head>
<body>
    <form action="registrar.php" method = "POST">
        <p> 
            <label>Nombre:
                <input type="text" name = "nombre">
            </label>
        </p>
        
        <p> 
            <label>Apellidos: 
                <input type="text" name = "apellido">
            </label>
        </p>
       
        <p> 
            <label>Sexo: 
            Femenino <input type="radio" name ="sexo" value = "Femenino">
            Masculino <input type="radio" name = "sexo" value = "Masculino">
            </label>
        </p>
        <p> 
            <label>Hobby: 
                <select name="hobby" >
                    <option value="futbol" name="hobby" >
                        futbol
                    </option>
                    <option value="voleibol" name="hobby">
                        Voleibol
                    </option>
                    <option value="Natación" name="hobby">
                        natación
                    </option>
                    <option value="Ver series" name="hobby">
                        Ver series
                    </option>
                </select>
</label>    
        </p>
        <p>
            <button type = "submit">Registrar datos</button>
        </p>

    </form>
</body>
</html>