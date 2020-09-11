<?php
    require_once ('assets\header.php');
?>
<body>
    <h1>Bienvenido a mi pagina en AWS!</h1>
    <ul class= "menu">
        <li><a href="#"> Inicio </a></li>
        <li><a href="formularioRegistro.php"> Registro </a></li>
        <li><a href="formularioComentario.php"> Comentarios </a></li>
    </ul>
    <form action='/php/registro.php' method='POST' class="formulario">
        <h4>Formulario de Login</h4>
        <input class= "datosformulario" type="text" name="username" id="usermane" placeholder="Introduzca su ID" required>
        <input class= "datosformulario" type="password" name="password" id="password" placeholder="Introduzca su contraseña" required>
        <input class= "submit" type="submit" value="Enviar">
    </form>
<?php
    require_once ('assets\footer.php');
?>
