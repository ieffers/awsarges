<?php
    require_once('conexion.php');
    class CRUD extends DB {
        public $db;

        public function __construct(){
            $this->db = new DB();
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        
        public function insert($table,$data){
            try { $key = array_keys($data);
            $query = "INSERT INTO $table (".implode(", ", $key).")\n";
            $query .= "VALUES (:".implode(", :",$key).")";
            $record = $this->db->prepare($query);
            return $record->execute($data);
            } catch (PDOException $e) {
                echo $e->getMessage();
            } catch (Exception $e) {
                echo $e->getMessage();
            }   
        }
        public function read($query){
            try {
               $queryResult = $this->db->prepare($query);
               $queryResult->execute();
               return $queryResult->fetch(PDO::FETCH_ASSOC);
            }catch (PDOException $e){
               echo "ERROR: ".$e->getMessage();
            }
        }
    }
?>