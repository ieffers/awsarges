<?php
    require_once('user.php');
    class UserRecorder{
        public function recordUser($userData){
            $newUser = new User();
            $newUser -> recordUser($userData);
        }
    }


?>