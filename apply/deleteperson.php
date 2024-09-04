<?php

session_start();


require_once '../service/read.php';

$id=$_POST['iddel'];




require_once '../service/db.php';
        $obj = new PDOConnection();
        $conn = $obj->connect();


        $query="DELETE  FROM `client` WHERE `id`='$id' ";
        $delete=$conn->prepare($query);
        $delete->execute();

   

      echo "Application Removed";  
      

 ?>
