<?php 

session_start();


$visa=$_GET['total_visa'];
$plan=$_GET['plan'];
$process=$_GET['process'];
$reference=$_GET['reference'];

$total=$visa*$plan+$process;


            require_once '../service/db.php';


			      $dbobj=new PDOConnection;
			      $conn=$dbobj->connect();
			      

              $query="UPDATE  `client` SET `visa`='$visa',`plan`='$plan',`process`='$process',`total_price`='$total' where `reference`='$reference' ";
              $update=$conn->prepare($query);
              $update->execute();


      header('location:payment.php');


// var_dump($_SESSION['reference']);die();

 ?>


