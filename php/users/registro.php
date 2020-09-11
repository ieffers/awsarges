<?php
    require_once ('user.php');
    $userToRecord = new User();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'email' => ($_POST['email']),
        'password' => md5($_POST['password']),
    );
   $userToRecord -> recordUser($userData);

?>