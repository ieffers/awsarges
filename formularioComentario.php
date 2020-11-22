<?php 
    require_once ('/var/www/html/php/comments/mostrarComentario.php');
    require_once ('/var/www/html/assets/header.php');
    require_once ('/var/www/html/assets/menu.php');
    require_once ('/var/www/html/php/comments/lastfive.php');
?>
    <div class="container">
    <form action="/php/comments/registro.php" method="POST" class="formulario fixed">
        <h2> Crear comentario </h2>
        <input class="datosformulario" type="text" name="username" id="usnermane" placeholder= "Introduzca su nombre">
        <textarea name="comment" id="comment" rows="4" cols="8"  maxlength=140 placeholder="Introduzca su comentario, maximo 140" ></textarea>
        <input class="submit" type="submit" value="Enviar">
    </form>
    <form  class="formulario">
        <h2> Ultimos 5 Comentarios </h2>
        <?php

        foreach ($readArray as $key => $ArrayData){
             echo "<input class='datosformulario' type='text' value='$ArrayData' readonly >";
            }
        ?>

    </form>
    <div class="formulario comentario">
        <h2> Ultimo comentario <h2>
        <input class="datosformulario" type="text" value="<?php echo  $read['username'] ?>">
        <input class="datosformulario" type="text" value="<?php echo  $read['date'] ?>"> 
        <input class="datosformulario" type="text" value="<?php echo  $read['comment'] ?>">
    <div>
</div>
