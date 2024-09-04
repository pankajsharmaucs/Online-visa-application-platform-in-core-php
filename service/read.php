<?php 


function getallcountrybyname(){
      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  countries   ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

       return  $run;

       // echo $count;
}


function getstatusbyname($country){
      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  countries where  `country_name`='$country'  ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

       return  $run;

       // echo $count;
}


function get_data_by_ref($reference){
      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  `client` where  `reference`='$reference'  ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

       return  $run;

       // echo $count;
}


function get_data_by_id($id){
      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  `client` where  `id`='$id'  ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

       return  $run;

       // echo $count;
}

function get_total_price_by_ref($reference){
      require_once 'db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  `client` where  `reference`='$reference'  ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

       return  $run;

       // echo $count;
}











?>