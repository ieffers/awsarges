<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'user.php');
    $userToRecord = new user();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'password' => md5($_POST['password'])
    );
   $userToRecord -> recordUser($userData);

?>