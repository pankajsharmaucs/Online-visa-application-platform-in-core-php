<?php

session_start();



$reference=$_SESSION['reference'];


require_once '../service/read.php';

@$data=get_data_by_ref($reference);

@$visa=$data[0]['visa'];
@$plan=$data[0]['plan'];
@$process=$data[0]['process'];

@$email=$data[0]['email'];

@$total=$visa*$plan+$process;

@$new_price=$total*100;

$email="Razorpay.com";

$headers = "From: ".$email;

$to="info@oman-immigration.org"; 


    $body="Payment Status : One Payment has been Recieved Successfully \n" ;
    $body.="Total Amount Received : ". $new_price ."\n" ;
    $body.="Total visa apply : ". $visa ."\n" ;
    $body.="Plan : ". $plan ."\n" ;
    $body.="Process fee : ". $process ."\n" ;
    $body.="Email : ". $email ."\n" ;
    $body.="Mobile : ". $mobile ."\n" ;
    $body.="country : ". $country ."\n" ;


$subject="Omanevisa.org  $name  Query";
 

  $a= mail($to,$subject,$body,$headers);




  session_destroy();





  
?>


<!DOCTYPE html>
<html>
<head>
<title>Oman Immigration | Payment succesful</title>
  <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
  .btn1
  {
    background: #be1eeb;
    width: 60%;
    height: 70px;
    padding: 10px;
    font-size: 20px;
    color: white;
    border-radius: 44px;
    border:none;
  }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135791581-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135791581-2');
</script>

</head>
<body style="">



<div class="conatiner-fluid p-0 bg-dark" style="height: 100vh">
  <div class="row">
               

              <div class="col-12 col-lg-12 p-2 p-lg-4 ">
            <div class="rasorpay" style="text-align:center; padding:20px 0;height:50%">
           
                   <i class="fa fa-smile-o" style="color: yellow; font-size: 84px;"></i>
                   <br>
                    <h1 class="display-4 font-weight-bold text-white mt-4">Payment has been done successfully  !</h1>
                   <br>
                    <a href="../index.php"><button class="btn btn-primary mt-4">Back to Home</button></a>


              </div>
          </div>
  </div>

</div>


<script>
    window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler() {
    switch (event.keyCode) {
        case 116 : // 'F5'
            event.returnValue = false;
            event.keyCode = 0;
            window.status = "We have disabled F5";
            break;
    }
}
</script>



</body>
</html>

