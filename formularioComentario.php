<?php
    require_once('/var/www/html/php/comments/mostrarComentario.php');
    require_once('/var/www/html/php/comments/lastfive.php');
    require_once('/var/www/html/assets/header.php');
    require_once('/var/www/html/assets/menu.php');
    
?>

<div class="container">
    <form action="/php/comments/registro.php" method="POST" class="formulario fixed">
        <h3> Crear comentario </h3>
        <input class="datosformulario" type="text" name="username" id="usnermane" placeholder="Introduzca su nombre">
        <textarea class="md-textarea" name="comment" id="comment" rows="5" cols="20" maxlength=140
            placeholder="Introduzca su comentario, maximo 140"></textarea>
        <input class="submit" type="submit" value="Enviar">
    </form>
    <form class="formulario">
    <h3> Ultimos 5 Comentarios </h3>
    <?php

        foreach ($readArray as $key => $ArrayData) {
            echo "<input class='datosformulario' type='text' value='$ArrayData' >";
        }
        ?>

    </form>
    <div class="formulario comentario">
        <h3> Ultimo comentario <h3>
            <input class="datosformulario" type="text" value="<?php echo  $read['username'] ?>">
            <input class="datosformulario" type="text" value="<?php echo  $read['date'] ?>">
            <input class="datosformulario" type="text" value="<?php echo  $read['comment'] ?>">
    </div>
    </div>