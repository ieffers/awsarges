<?php
    require_once ('php\comments\comentario.php');
    $comment = new Comments();
    $read = $comment -> readLastComment();
?>