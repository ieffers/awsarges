<?php
    require_once('/var/www/html/php/user.php');
    $userToRecord = new user();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'password' => md5($_POST['password']),
        'email'    => $_POST['email']
    );
   $userToRecord -> recordUser($userData);

?>
