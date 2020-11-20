<?php 
    require_once ('/var/www/html/php/comments/mostrarComentario.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    
    <link rel="stylesheet" href="css/styles.css">
    <title>Comentarios</title>
</head>
<body>
    <form action="/php/comments/registro.php" method="POST" class="formulario">
        <input class="datosformulario" type="type" name="username" id="usnermane" placeholder= "Introduzca su nombre">
        <textarea name="comment" id="comment" rows="4" cols="8"  maxlength=140 placeholder="Introduzca su comentario, maximo 140" ></textarea>
        <input class="submit" type="submit" value="Enviar">
    </form>
    <div class="formulario">
        <h2> Ultimo comentario <h2>
        <input class="datosformulario" type="text" value="<?php echo  $read['username'] ?>">
        <input class="datosformulario" type="text" value="<?php echo  $read['date'] ?>">
        <input class="datosformulario" type="text" value="<?php echo  $read['comment'] ?>">
    <div>
</body>
</html>
