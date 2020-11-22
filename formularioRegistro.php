<?php
    require_once ('/var/www/html/assets/header.php');
    require_once ('/var/www/html/assets/menu.php');
?>


<div class="container">
<form action='/php/users/registro.php' method='POST' class="formulario">
        <h4>Formulario de Registro</h4>
        <input class= "datosformulario" type="text" name="username" id="usermane" placeholder="Introduzca su ID" required>
        <input class= "datosformulario" type="text" name="firstname" id="firstname" placeholder="Introduzca su nombre" required>
        <input class= "datosformulario" type="email" name="email" id="email" placeholder="Introduzca su email" required>
        <input class= "datosformulario" type="password" name="password" id="password" placeholder="Introduzca su contraseña" required>
        <input class= "datosformulario" type="password" name="password" id="repassword" placeholder="Confirme su contraseña" required>
        <input class= "submit" type="submit" value="Enviar">
    </form>
</div>
<?php
    require_once ('assets\footer.php');
?>
