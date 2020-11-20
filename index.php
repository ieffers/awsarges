<?php
    require_once ('/var/www/html/assets/header.php');
?>

<body>
    <div class="container">
        <h1>Bienvenido a mi pagina en AWS!</h1>
        <ul class="menu">
            <li><a href="#"> Inicio </a></li>
            <li><a href="formularioRegistro.php"> Registro </a></li>
            <li><a href="formularioComentario.php"> Quienes Somos </a></li>
            <li><a href="formularioComentario.php"> Contacto </a></li>
            <li><a href="formularioComentario.php"> Blog </a></li>
            <li><a href="formularioComentario.php"> Dejar Comentario </a></li>
        </ul>
        <hr>
        <form action='/php/registro.php' method='POST' class="formulario">
            <h4>Formulario de Login</h4>
            <input class="datosformulario" type="text" name="username" id="usermane" placeholder="Introduzca su ID"
                required>
            <input class="datosformulario" type="password" name="password" id="password"
                placeholder="Introduzca su contraseña" required>
            <a href="#">¿Ha olvidado su contraseña?</a>
            <input class="submit" type="submit" value="Enviar">
        </form>
        <aside>
        <h3>Redes Sociales</h3>
        <ul>
            <li><a href="https://www.facebook.com/" target="_blank"> <img src="assets\icons\facebook.png" alt="facebook"> </a></li>
            <li><a href="https://www.instagram.com/" target="_blank"> <img src="assets\icons\instagram.png" alt="instagram">  </a></li>
            <li><a href="https://www.twitter.com/" target="_blank"> <img src="assets\icons\twitter.png" alt="twitter"> </a></li>
        </ul>
    </aside>
    </div>
    
    <?php
    require_once ('/var/www/html/assets/footer.php');
?>