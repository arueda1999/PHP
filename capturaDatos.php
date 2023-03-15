<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bienestar</title>
</head>
<body>
<section>
<center><h2>MATRICULA</h2></center>
<form action="cursoMusica.php" method="GET">
<p>
    <label >
        Nombre: 
        <input type="text" name="nombre">
    </label>
</p>
<p>
    <label >
        Apellido: 
        <input type="text" name="apellido">
    </label>
</p>
    <p>
    <label >
        ¿Cuántos años tienes? 
        <input type="number" name="edad">
    </label>
    </p>
    <p>
    <label >
        ¿Estudia en el SENA?: 
        <input type="radio" name="sena" value="true">Si
        <input type="radio" name="sena" value = "false">No 
    </label>
</p>
<p>
    <label >
        ¿Estudia análisis y desarrollo de sistemas de información? 
        <input type="radio" name="programa" value = "true">Si
        <input type="radio" name="programa" value = "False">No 
    </label>
</p>
<p>
    <label >
        Escoja el curso que desea tomar: 
        <select name = "curso">
            <option>Piano</option>
            <option>Guitarra</option>
            <option>Batería</option>
        </select>
    </label>
    </p>
    <button type = "Submit">Matricularse</button>

</form>

</section>    

</body>
</html>