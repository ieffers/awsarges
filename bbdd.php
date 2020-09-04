<?php
    class DB extends PDO {
        private $hostname = 'localhost';
        private $database = 'awsarges';
        private $username = 'root';
        private $password = '';
        private $pdo;
        private $bConnected = false;
        private $dsn;
        private $charset;

        public function __consrtuct(){
            $this -> dsn = 'mysql:dbname'.$this->database.';host='.$this->hostname;
            $this -> charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            parent::__consrtuct($this->dsn,$this->username,$this->password,$this->charset);
        }
        public function Connect(){
            try{
                $this -> pdo = new PDO($this->dsn,$this->username,$this->password,$this->charset);
                $this -> pdo = setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this -> pdo = setAttribute(PDO::ATTR_EMULATE_PREPARES,true);
                return $this -> pdo;
            }catch (PDOException $e){
                echo $e->getMessage();
                die();
            }
        }
        public function CloseConnection(){
            $this -> pdo = null;
        }
        
    }