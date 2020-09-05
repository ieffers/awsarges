<?php

    require_once('/var/www/html/php/conexionpdo.php');
    class CRUD extends DB {
        public $db;

        public function __construct(){
            $this->db = new DB();
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        
        public function insert($table,$userData){
            try { $key = array_keys($userData);
            $query = "INSERT INTO $table (".implode(", ", $key).")\n";
            $query .= "VALUES (:".implode(", :",$key).")";
            $record = $this->db->prepare($query);
            return $record->execute($userData);
            } catch (PDOException $e) {
                echo $e->getMessage();
            } catch (Exception $e) {
                echo $e->getMessage();
            }   
        }
    }
?>
