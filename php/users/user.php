<?php
    require_once('/var/www/html/php/lib/bbdd.php');

    class User extends CRUD {
        private $table = 'users';

        public function __construct(){
           parent::__construct();
        }
        
        public function recordUser($userData){
            $db = new CRUD();
            $insert = $db->insert($table,$userData);
            if ($insert == true) {
                echo 'Registro exitoso';
            }else{
                echo "Error";
            }
            die();
        }
    
    }
?>