<?php
    require_once('comentario.php');
    $commentToRecord = new Comment();
    $commentData = array (
        'username' => $_POST['username'],
        'date' =>  date("d-M-Y H:i"),
        'comment' => $_POST['comment']
    );
    $commentToRecord -> recordComment($commentData);

?>
