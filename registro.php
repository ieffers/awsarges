<?php
    require_once ('UserRecorder.php');
    $userToRecord = new UserRecorder();
    $userData = array(
        'username' => $_POST['username'],
        'firstname'=> $_POST['firstname'],
        'password' => md5($_POST['password'])
    );
   $userToRecord -> recordUser($userData);

?>