<?php 

session_start();


// $email=$_SESSION['email'];

$msg=$_POST['usermsg'];

// $email='info@omanevisa.org';

     
     // $msg='hi';

     

      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT * FROM  chatbox where user_msg LIKE '%$msg%' ";
       $row = $conn->prepare($query);
       $row->execute();
       $run = $row->fetchAll(PDO::FETCH_ASSOC);
       
      
foreach ($run as $key) {

  $cce=$key['cce_msg'];

}




    if($run == true)
    {



       $data = array(
        "user" => $msg,
        "cce" => $cce,
       );

       

    echo json_encode($data);
    }
    else{

       $cce="For Any Help Please send mail on info@oman-immigration.org. Thank You";

       $data = array(
        "user" => $msg,
        "cce" => $cce,
       );


       
       echo json_encode($data);

    }

  


        // var_dump($data); die();





       


 ?>