<?php 
    // require_once ('/var/www/html/php/comments/mostrarComentario.php');
    require_once ('/var/www/html/assets/header.php');
?>
<div class="container">
    <div>
           
        <form action="/php/comments/registro.php" method="POST" class="formulario">
            <input class="datosformulario" type="type" name="username" id="usnermane" placeholder= "Introduzca su nombre">
            <textarea name="comment" id="comment" rows="4" cols="8"  maxlength=140 placeholder="Introduzca su comentario, maximo 140" ></textarea>
            <input class="submit" type="submit" value="Enviar">
        </form>
        <div class="formulario comentario">
            <h2> Ultimo comentario <h2>
            <input class="datosformulario" type="text" value="">
            <input class="datosformulario" type="text" value="">
            <input class="datosformulario" type="text" value="">
        <div>
    </div>
</div>
<!-- <?php
    require_once ('assets\footer.php');
?> -->
