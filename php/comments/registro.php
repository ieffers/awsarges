<?php
    require_once('comentario.php');
    $commentToRecord = new Comments();
    $commentData = array (
        'username' => $_POST['username'],
        'date' =>  date("d-M-Y H:i"),
        'comment' => $_POST['comment']
    );
    $commentToRecord -> recordComment($commentData);
    
    header("Location: ..\..\formularioComentario.php");
    die();
?>
