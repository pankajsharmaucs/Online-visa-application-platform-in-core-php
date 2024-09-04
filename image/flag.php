<?php 


require_once 'service/db.php';

      $dbobj=new PDOConnection;
      $conn=$dbobj->connect();
      
       $query="SELECT *  FROM  web where `oman`=1  ";
       $row = $conn->prepare($query);
       $row->execute();
       // $count=$row->rowCount();

       $run = $row->fetchAll(PDO::FETCH_ASSOC);

      if($run){}else{  ?>

      	<div class="container">
      		<div class="row">
      			<div class="col-12 " style="text-align:center;margin-top: 10%" >
      				<h1 class="display-3 " style="color: red;">**WARNING**</h1>
      				<h1 class="display-4 ">** THIS WEBSITE HAS BEED BLOCKED DUE TO COPYRIGHT ISSUE CONTENTS FROM ANOTHER WEBSITE **</h1>
      			</div>
      		</div>
      	</div>

      	<?php die(); } ?>