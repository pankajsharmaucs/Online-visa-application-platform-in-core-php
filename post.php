<?php 



  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $msg=$_POST['msg'];


if(!empty($_POST))

{
            $to="info@omanvisa.com";

            $subject='Visa Query';

            $header="From:".$email;

            $body="Sender Name :".$name."\n" ;
            $body.="Email Address : ". $email ."\n" ;
            $body.=">Mobile : ". $mobile ."\n" ;
            $body.="Description : ". $msg ."\n" ;

          if(@mail($to,$subject,$body,$header))
          {
             echo "<script>alert('Query sent successfully'); window.open('contact.php','_self');</script>"; 

          }
          else
          {
              echo "<script>alert('Please Check Your Internet Connection'); window.open('contact.php','_self');</script>"; 
          }

}

 ?>



 