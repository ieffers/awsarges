<?php
    require_once('C:\xampp\htdocs\php\lib\bbdd.php');

    class Comments extends CRUD {
        private $table = 'comments';

        public function __construct(){
            parent::__construct();
        }
    
    public function recordComment($commentData){
        $db = new CRUD();
        $insert = $db->insert('comments',$commentData);
        if ($insert == true) {
            $_SESSION['mensaje'] = 'Registro exitoso';
        }else{
            echo "Error";
        }
    }
    public function readLastComment(){
        $db = new CRUD();
        $query = "SELECT * FROM comments WHERE date IN (SELECT max(date) FROM comments)";
        $read = $db->read($query);
        return $read;
    }
}

?>

