<?php
    require_once('/var/www/html/php/lib/bbdd.php');
    class Comments extends CRUD {
        private $table = 'comments';

        public function __construct(){
            parent::__construct();
        }
        public function recordComment($commentData){
            $db = new CRUD();
            $insert = $db->insert($table,$userData);
            if ($insert == true) {
                $_SESSION['mensaje'] = 'Registro exitoso';
            }else{
                echo "Error";
            }
            die();
        }

    }