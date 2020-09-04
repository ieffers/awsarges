<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once($root.'bbdd.php');

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
    }
    $usertry = new CRUD();
?>