<?php
    require_once('/var/www/html/php/comments/comment.php');
    $comment = new comment();
    $readArray = $comment->readLastFiveComment();
?>
