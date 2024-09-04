<?php 


require_once '../../service/db.php';

$oman=$_POST['oman'];
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="UPDATE `web` SET `oman`='$oman' where `id`=1 ";
       $row = $conn->prepare($query);
       $row->execute();      
   
       if($row){ header('location:css.php');}


?>