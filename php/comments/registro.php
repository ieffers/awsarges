<?php
    require_once('/var/www/html/php/comments/comment.php');
    $commentToRecord = new comment();
    $commentData = array (
        'username' => $_POST['username'],
        'date' =>  date("d-M-Y H:i"),
        'comment' => $_POST['comment']
    );
    $commentToRecord -> recordComment($commentData);
    header('Location: ../../formularioComentario.php');	
?>
