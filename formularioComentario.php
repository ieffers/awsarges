<?php 
    require_once ('/var/www/html/php/comments/mostrarComentario.php');
    require_once ('/var/www/html/assets/header.php');
    require_once ('/var/www/html/assets/menu.php');
    require_once ('/var/www/html/php/comments/lastfive.php');
?>
    <div class="container">
    <div class="form-group">
    <form action="/php/comments/registro.php" method="POST" class="formulario fixed">
        <h3> Crear comentario </h3>
        <input class="datosformulario" type="text" name="username" id="usnermane" placeholder= "Introduzca su nombre">
        <textarea class="md-textarea" name="comment" id="comment" rows="4" cols="8"  maxlength=140 placeholder="Introduzca su comentario, maximo 140" ></textarea>
        <input class="submit" type="submit" value="Enviar">
    </form>
    </div>
    <form  class="formulario">
        <h3> Ultimos 5 Comentarios </h3>
        <?php

        foreach ($readArray as $key => $ArrayData){
             echo "<input class='datosformulario' type='text' value='$ArrayData' >";
            }
        ?>

    </form>
    <div class="formulario comentario">
        <h3> Ultimo comentario <h3>
        <input class="datosformulario" type="text" value="<?php echo  $read['username'] ?>">
        <input class="datosformulario" type="text" value="<?php echo  $read['date'] ?>"> 
        <input class="datosformulario" type="text" value="<?php echo  $read['comment'] ?>">
    <div>
</div>
