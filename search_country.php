<?php 


$country=filter_var($_POST['search'],FILTER_SANITIZE_STRING);

      require_once 'service/db.php';
      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  `countries` where `country_name` LIKE  '$country%'   ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

        

        if($run){
                echo "<table class='table table-hover p-2'>";
                foreach ($run as $key ) {

                  echo "<a href=' '>";
                  echo "<tr>";
                  echo "<td>";
                  echo "<h6 class='data text-left'>";
                  echo $key['country_name'];
                  echo "</h6>";
                  echo "</th>";
                  echo "</tr>";
                   echo "</a>";
                        }        
                echo "</table>";        
         }
         else
         {

          echo "<table>";

          echo "<tr>";
          echo "<td>";
          echo "<h1>";
          echo "No Country Found";
          echo "</h1>";
          echo "</th>";
          echo "</tr>";
          echo "</table>";        
         }

         
 ?>