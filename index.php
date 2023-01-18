<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>

<body>
    <div class="formulario">
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label class="labels" for="name">Name:
            <input name="name" type="text" placeholder="Name..." required>
        </label>
        <label class="labels" for="lastname">Lastname:
            <input name="lastname" type="text" placeholder="Lastname..." required>
        </label>
        Género
        <label>
            <input name="genero" type="radio" value="femenino">Femenino
        </label>
        <label>
        <input name="genero" type="radio" value="masculino">Masculino
        </label>
        <label>
        <input name="genero" type="radio" value="transgenero">Transgenero
        </label>
        <label>
        <input name="genero" type="radio" value="no-binario">No Binario
        </label>
        <label>
        <input name="genero" type="radio" value="binario">Binario
        </label>
        <label>
        <input id="not" name="genero" type="radio" value="not">No contestar
        </label>
        <label>Bootcamp</label>
        <label>
            <input type="checkbox" name="bootcamps[]" value="Front-End">Front-End
        </label>
        <label>
            <input type="checkbox" name="bootcamps[]" value="Full-Stack">Full-Stack
        </label>
            <label>
            <input type="checkbox" name="bootcamps[]" value="FemCoders">FemCoders
        </label>
        <label class="labels" for="contraseña" >Contraseña
            <input type="password" name="contraseña" id="contraseña" required>
        </label>
        <select class="labels" name="estado">
            <option name="estado" value="aprobado">Aprobado</option>
            <option name="estado" value="reprobado" selected>Reprobado</option>
            <option name="estado" value="abandono">Abandono</option>
        </select>
        <label class="labels" for="comentarios">Comentarios
            <textarea name="comentarios"></textarea>
        </label>
        <label class="labels">
            <input name="arch1" type="file">
        </label>
        <label class="labels" for="arch2">
            <input name="arch2" type="file">
        </label>
        <label for="arch3">
            <input name="arch3" type="file">
        </label>
        <input type="submit" value="submit" onclick="alert('Datos Enviados Correctamente!!')"/>
    </form>
        </div>

</body>

</html>