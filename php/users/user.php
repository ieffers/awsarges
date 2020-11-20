<?php
    require_once('/var/www/html/php/lib/bbdd.php');

    class user extends CRUD {
        public $table = 'users';

        public function __construct(){
           parent::__construct();
        }
        
        public function recordUser($userData){
            $db = new CRUD();
            $insert = $db->insert('users',$userData);
            if ($insert == true) {
                echo 'Registro exitoso';
            }else{
                echo "Error";
            }
        }
    }
?>