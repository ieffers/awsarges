<?php
    require_once('/var/www/html/php/user.php');
    $commentToRecord = new user();
    $commentData = array (
    'username' => $_POST['username'],
    'date' =>  date("d-M-Y H:i"),
    'comment' => $_POST['comment']
    );
    $commentToRecord -> recordComment($commentData);

?>
