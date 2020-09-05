<?php
    require_once('/var/www/html/user.php');
    $userToRecord = new user();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'password' => md5($_POST['password'])
    );
   $userToRecord -> recordUser($userData);

?>