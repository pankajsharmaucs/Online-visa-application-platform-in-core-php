
<?php 

session_start();


$total_visa=$_SESSION['visa'];
$plan=$_SESSION['plan'];
$process=$_SESSION['process'];
$reference=$_SESSION['reference'];

$amount=$total_visa*$plan+$process;


$total=$amount*100;

$_SESSION['total']=$total;


$key='rzp_live_KjKiLhpslCnPLY';





 ?>


<!doctype html>
<html lang="en">
  <head>

       

<title>Oman Immigration | Confirm Pay </title>

    <link rel="icon" href="image/logo.PNG" type="image/png" sizes="16x16">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

<style>
.razorpay-payment-button{ background:#DD362E; border:none; color:#fff; height:80px!important;width: 50%!important;
font-weight: bold; padding:2px 20px; border-radius: 12px;cursor: pointer;}
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131763199-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131763199-2');
</script>

  </head>
  <body>

<?php include('formheader.php'); ?>
  


<!-- -----------------------------form option------------------------------------------- -->



<div id="row2" class="row  bg-white  shadow  shadow font-weight-bold mt-2" style="width:90%; margin-left:5%; cursor: pointer;">
          
        

         <div class=" col-lg-12 col-12  p-3 text-center" style="color: #111;">
            
          <div>
             <h2 class="font-weight-bold">TOTAL AMOUNT</h2> 
          </div>
          <div>
          	<h2 class=" text-success font-weight-bold"><?= $amount?> $</h2>
          </div>

            <div style="width:90%; margin-left:5%">

            	<div style="margin-top: 70px;">
            		 <form action="thankyou.php" method="POST">

<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?=$key?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?= $total?>" // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.
    data-currency="USD"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-buttontext="DEBIT / CREDIT CARD"
    data-name="OMAN EVISA "
    data-description="OMAN EVISA PORTAL"
    data-image="../image/logo2.png"
    data-prefill.name="Name"
    data-prefill.email="Example@example.com"
    data-theme.color="#DD362E"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form> 

            	</div>
            	
            </div>
         </div>





     </div>
    


<div class="row" style="height: 30px"></div>

<!--------------- End of Testimonilas ----------------------------- -->


<script src="main.js"></script>
<script src="Payment.js"></script>


    



	 
</body>
</html>