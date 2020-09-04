<?php
    require_once ('user.php');

    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $password = md5($_POST['password']);

    echo ("Bienvenido " . $username . " su nombre es ".$firstname. " y su contraseña es " .$password);

    class UserRecorder {

    public function recordUser($userData){
        $db = new DB();
        $insert = $db -> insert($this->table,$userData);
            if($insert == true) {
                echo "Registro Exitoso";
            }else{
                echo "Error en el registro";
            }
        }
    }
?>