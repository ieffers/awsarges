<?php
    require_once('/var/www/html/php/lib/bbdd.php');

    class comment extends CRUD {
        public $table = 'comments';

        public function __construct(){
            parent::__construct();
        }

        public function recordComment($commentData){
            $db = new CRUD();
            $insert = $db->insert('comments',$commentData);
            if ($insert == true) {
                echo  'Registro exitoso';
            }else{
                echo "Error";
            }
        }

    }