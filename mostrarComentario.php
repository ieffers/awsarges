<?php
    require_once('var/www/html/php/comments/comment.php');
    $comment = new comment();
    $read = $comment -> readLastComment();
    echo $read['username'];
?>
