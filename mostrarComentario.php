<?php
    require_once ('/var/www/html/php/comments/comentario.php');
    $comment = new Comments();
    $read = $comment -> readLastComment();
    echo $read['username'];
?>
