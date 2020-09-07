<?php
    require_once('/var/www/html/php/bbdd.php');

    class user extends CRUD {
        public $table = 'users';

        public function __construct(){
           parent::__construct();
        }
        
        public function recordUser($userData){
            $db = new CRUD();
            $insert = $db->insert('users',$userData);
            if ($insert == true) {
                $_SESSION['mensaje'] = 'Registro exitoso';
            }else{
                echo "Error";
            }
        }
        public function recordComment($userComment){
            $db = new CRUD();
            $insert = $db->insert('comments',$userComment);
            if ($insert == true) {
                $_SESSION['mensaje'] = 'Registro exitoso';
            }else{
                echo "Error";
            }
        }
    }
?>