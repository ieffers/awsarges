<?php
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $password = md5($_POST['password']);

    echo ("Bienvenido" . $username . "su nombre es ".$firstname. " y su contraseña es " .$password);
?>