<?php 

session_start();


$order_id=$_SESSION['order_id'];

// var_dump($order_id);

// die();


$key='rzp_live_KjKiLhpslCnPLY';

require_once '../service/read.php';

@$data=get_data_by_ref($order_id);

@$visa=$data[0]['visa'];
@$plan=$data[0]['plan'];
@$process=$data[0]['process'];

// @$total=$visa*$plan+$process;

@$new_price=$total*100;


include('extra.php');



@$new=get_total_price_by_ref($reference);

@$total_price=$visa*$visafee*100;


@$all_visa= get_data_by_ref($order_id);


var_dump('maintenance');die();

 ?>


  

<!doctype html>
<html lang="en">
  <head>

       

<title>Oman Immigration | Review & Payment </title>

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
.razorpay-payment-button{ background:url('../image/pay2.png'); border:none; width:100%; background-size:100% 100%; background-repeat:no-repeat; color:#fff; 
height:100px!important;width: 50%!important;
font-weight: bold; padding:2px 20px; border-radius: 5px;cursor: pointer;margin-top: -65px;}

.razorpay-payment-button:hover{transform:scale(1.1)}
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
  <body>

<?php include('formheader.php'); ?>
  


<!-- -----------------------------form option------------------------------------------- -->
<div class="container-fluid p-2 m-1" style="height:auto;background:#d9dbe4;">
<div class="container p-0 mt-2" >
    


<div id="row2" class="row    shadow-sm font-weight-bold bg-white" style="width:100%;cursor: pointer;margin-top:2%;border-radius:10px;">
         
         <div id="div"style="width: 80%;height:37px; margin:1% 10%; margin-top:-10px; display: flex;cursor: pointer; border-radius:10px;">
          <div class=" col-lg-12   text-center" style="display:flex; height:37px; font-size:13px;">
            <div  class="    text-center  "   style="width:34%; height:37px;overflow:hidden;background:#fff;border-radius:5px 0px 0px 5px;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark " >Basic Details</h6></div>
            <div  class="    text-center bg-white "   style="width:33%; height:37px;overflow:hidden;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark">Applicant Details</h6></div>
            <div   class="    text-center  "  style="width:33%; height:37px;overflow:hidden;background:#a3072a;border-radius:0px 5px 5px 0px;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-white margin-top:8px">Review & Pay</h6></div>
         </div>
       </div> 
       
         <div class=" col-lg-5  col-12 p-3">
            <div class="" style=" padding: 5px; 
            background:#fff;border-radius: 5px;">
           <form >
                 
                  
                    <div class="" style="width: 100%;border-radius:10px; border:1px solid #eee; padding:10px;">
                          
                           <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center "  style="width:50%;padding:4px;background:#eee;text-center"  >ORDER ID</div>
                               <div class="text-center text-success" style="width:50%;padding:4px;background:#fff; ;"  ><?= $order_id;?></div>
                           </div>
                           
                           <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center "  style="width:50%;padding:4px;background:;text-center"  >
                                   <h6 class="font-weight-bold text-center">Number of visa</h6></div>
                               <div class="text-center " style="width:50%;padding:4px;background:#fff; "  >
                                   <h6 class="font-weight-bold text-center"><?=$visa ?></h6></div>
                           </div>
                           
                           <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center "  style="width:50%;padding:4px;background:;text-center"  ><h6 class="font-weight-bold text-center">Purpose</h6></div>
                               <div class="text-center " style="width:50%;padding:4px;background:#fff; "  >
                                   <h6 class="font-weight-bold text-center">Holidays, Meetings, Conferences, Transit stay</h6></div>
                           </div>

                           <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center  "  style="width:50%;text-center"  ><h6 class="font-weight-bold text-center">Visa Type</h6></div>
                       
                            	<?php if($plan==10) {?>
                          		 <div  style="width:50%;padding:4px;background:#fff; "  class="font-weight-bold "><h6 class="font-weight-bold text-center"> 10  days single entry </h6> </div>
                          	    <?php } ?>
                          	    
                          	    	<?php if($plan==30) {?>
                          		 <div s style="width:50%;padding:4px;background:#fff; " class="font-weight-bold "><h6 class="font-weight-bold text-center"> 30 days single entry </h6> </div>
                          	    <?php } ?>
                          	    
                          	    	<?php if($plan==1) {?>
                          		 <div s style="width:50%;padding:4px;background:#fff; " class="font-weight-bold "><h6 class="font-weight-bold text-center"> 1 Year multiple  entry </h6></div>
                          	    <?php } ?>
                          	    
                          	    	<?php if($plan=='s30') {?>
                          		 <div  style="width:50%;padding:4px;background:#fff; "  class="font-weight-bold "><h6 class="font-weight-bold text-center"> 30 days  single entry </h6></div>
                          	    <?php } ?>
                          	    
                          	    	<?php if($plan==28) {?>
                          		 <div  style="width:50%;padding:4px;background:#fff; "  class="font-weight-bold "><h6 class="font-weight-bold text-center"> 28  days single entry </h6></div>
                          	    <?php } ?>

                           </div>
                           
                             <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center  "  style="width:50%;text-center"  ><h6 class="font-weight-bold text-center">Process fee</h6></div>
                               
                                    	<?php if($process=='n') {?>
                                  		 <div style="width:50%;padding:4px;background:#fff; "  class="font-weight-bold "><h6 class="font-weight-bold text-center"> Standard Service </h6> </div>
                                  	    <?php } ?>
                                  	    
                                  	    	<?php if($process=='f') {?>
                                  		 <div  style="width:50%;padding:4px;background:#fff; " class="font-weight-bold "><h6 class="font-weight-bold text-center"> Fast Service </h6> </div>
                                  	    <?php } ?>
                                  	    
                                  	    
                                  	    	<?php if($process=='u') {?>
                                  		 <div  style="width:50%;padding:4px;background:#fff; " class="font-weight-bold "><h6 class="font-weight-bold text-center"> Urgent Service </h6> </div>
                                  	    <?php } ?>
                                  	    
                                  	    <?php if(empty($process)) {?>
                                  		 <div  style="width:50%;padding:4px;background:#fff; " class="font-weight-bold ">
                                  		 <h6 class="font-weight-bold text-center"> Normal Service </h6> </div>
                                  	    <?php } ?>
                           </div>
                           
                             <div style="display:flex; border-bottom:1px solid #eee;">
                               <div class="text-center "  style="width:50%;padding:4px;background:#eee;text-center"  >TOTAL AMOUNT</div>
                               <div class="text-center text-success" style="width:50%;padding:4px;background:#fff; ;"  ><?= $visafee;?> USD</div>
                           </div>
                </div>
              </form>
            </div>
         </div>



         <div class=" col-lg-7 col-12  p-3 text-center" style="color: #111;">
           <div class="" style="width: 100%;border-radius:10px; border:1px solid #eee; ">
                          
                           <div style="display:flex; border-bottom:1px solid #eee;overflow:hidden">
                               <div class="text-left  bg-success text-white"  style="width:40%;padding:4px;border-radius:10px 0px 0px 0px;"  >PAYMENT METHOD</div>
                               <div class="text-left bg-success text-white" style="width:60%;padding:4px;border-radius:0px 10px 0px 0px;"  >DEBIT / CREDIT CARD</div>
                           </div>
                           
                           	<div style="margin-top: 70px;">
                        
                         <form action="thankyou.php" method="POST">
                        
                        <script
                            src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="<?=$key?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
                            data-amount="<?= $total_price;?>" // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.
                            data-currency="USD"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
                            data-buttontext=""
                            data-name="OMAN IMMIGRATION "
                            data-description="OMAN IMMIGRATION PORTAL"
                            data-image="../image/logo2.png"
                            data-prefill.name="Name"
                            data-prefill.email="Example@example.com"
                            data-theme.color="#DD362E"
                        ></script>
                        <input type="hidden" custom="Hidden Element" name="hidden">
                        </form>  
                        
                        <h6 style="font-size:10px">You will be directed to Razorpay page to pay. After the payment made ,<br> you will return to your to our "Thank you page" </h6>  

            	</div>
        </div>
    </div>



<!--<div class="col-12 text-center mt-5" style="margin-top:150px">
     <h5 class="font-weight-bold"> Applicant Summary</h5>
        <table class=" table w-100  shadow" style="font-size: 12px;background:#DD362E; color: #fff">
          <tr>
            <th>Order Id.</th>
            <th>Full Name</th>
            <th>Email Id</th>
            <th>Date of Arrival</th>
            <!--<th>Remove</th>
          </tr>
          <tbody class="bg-success">
            <?php foreach ($all_visa as $key ) { ?>
            <tr>
              <td><?=$key['reference']?></td>
              <td><?=$key['name']?></td>
              <td><?=$key['email']?></td>
              <td><?=$key['date_journey']?></td>
              <!--<td>-->
              <!--    <form method="post"> <input type="hidden" id="delid" name="delid" value="<?= $key['id']?>" >-->
              <!--<i class="fa fa-trash text-white" id="delp"-->
              <!--onclick="delp();" ></i></form></td>-->
              
            </tr>
          <?php } ?>
          </tbody>
          
        </table>

        
       </div>




     </div>
     </div>
   </div>




     </div>
     </div>
   </div>


<div class="row" style="height: 30px"></div>

</div>
</div>

<?php include('footer.php');?>
<!--------------- End of Testimonilas ----------------------------- -->



<script src="main.js"></script>
<script src="payment.js"></script>
<script src="visa.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d79d8269f6b7a4457e14355/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    

  </body>
</html>

