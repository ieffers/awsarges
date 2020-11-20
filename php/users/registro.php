<?php
    require_once('/var/www/html/php/users/user.php');
    $userToRecord = new user();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'email' => ($_POST['email']),
        'password' => md5($_POST['password']),
    );
   $userToRecord -> recordUser($userData);

?>