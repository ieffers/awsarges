<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>IeffersDevs</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a mi pagina en AWS!</h1>
    <form action='registro.php' method='POST' class="formulario">
        <h4>Formulario de Registro</h4>
        <input class= "datosformulario" type="text" name="username" id="usermane" placeholder="Introduzca su ID">
        <input class= "datosformulario" type="text" name="firstname" id="firstname" placeholder="Introduzca su nombre">
        <input class= "datosformulario" type="password" name="password" id="password" placeholder="Introduzca su contraseña">
        <input class= "datosformulario" type="password" name="password" id="repassword" placeholder="Repita su contraseña">
        <input class= "submit" type="submit" value="Enviar">
    </form>
</body>
</html>