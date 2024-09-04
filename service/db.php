<?php 
   
    class PDOConnection {
        public function connect() {
            $conn = null;
            try {
                $conn = new PDO("mysql:host=localhost; dbname=visa; charset=utf8", "omanvisa", "{oman}{visa}");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $conn->exec("SET time_zone='+05:30';");
            } catch(PDOException $e) {
                error_log($e->getMessage());
                die("Connection Failed");
            }
            return $conn;
        }
    }

 ?>