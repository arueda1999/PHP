<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO BIENESTAR</title>
</head>
<body>
    <Section>
        <h1><center>CURSOS DE MÚSICA</center></h1>
        <form action="factura.php" method = "POST">
        <p><label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" >
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" >
        </p>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" >
            <br/>
        <p>    
            <label for="curso">Cursos</label>
            <select name="curso" >
                <option value="Guitarra">Guitarra</option>
                <option value="Piano">Piano</option>
                <option value="Bateria">Batería</option>
            </select>
        </p>
        <p>    
            <label for="sena">¿Estudia en el SENA?</label>
            <input type="radio" name="sena" id ="sena" value = "Si">Si
            <input type="radio" name="sena" id ="sena" value = "No">No
        </p>   
        
        <p>    
            <label for="adsi">¿Estudia Análisis y desarrollo de sistemas de información?</label>
            <input type="radio" name="adsi" id ="adsi" value = "Si">Si
            <input type="radio" name="adsi" id ="adsi" value = "No">No
        </p> 

            <button type="submit">Enviar información</button>
 
        </form>
    </Section>
</body>
</html>