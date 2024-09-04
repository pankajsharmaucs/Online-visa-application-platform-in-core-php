<?php 

session_start();


$process=$_GET['fee'];
$reference=$_SESSION['reference'];



            require_once '../service/db.php';


			      $dbobj=new PDOConnection;
			      $conn=$dbobj->connect();
			      

              $query="UPDATE  `client` SET `process`='$process' where `reference`='$reference' ";
              $update=$conn->prepare($query);
              $update->execute();
              
             if($update){
                 
                 echo "Process fee is Now ".$process;
                 
                 
             }



	



 ?>