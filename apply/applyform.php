<?php 

session_start();

$country=$_GET['country'];
@$status=$_GET['status'];
@$gcc=$_GET['gcc'];
@$sch=$_GET['sch'];

@$_SESSION['status']=$status;
@$_SESSION['gcc']=$gcc;
@$_SESSION['sch']=$sch;


$reference=rand(11111,999999999);

$_SESSION['country']=$country;
$_SESSION['reference']=$reference;




 ?>


  

<!doctype html>
<html lang="en">
  <head>

       

<title>Oman Immigration | Basic Information </title>

    <link rel="icon" href="image/logo.png" type="image.png" sizes="16x16">
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

<style>.text1:hover{ background:#; color:#fff!important;  }
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
<div class="container p-0 mt-2 " >
     


<div id="row2" class="row    shadow-sm font-weight-bold bg-white" style="width:100%;cursor: pointer;margin-top:2%;border-radius:10px;">
    
     <div id="div"style="width: 80%;height:37px; margin:1% 10%; margin-top:-15px; display: flex;cursor: pointer; border-radius:10px;">
          <div class=" col-lg-12   text-center" style="display:flex; height:37px; font-size:13px;">
            <div  class="    text-center  "   style="width:34%; height:37px;overflow:hidden;border-radius:5px 0px 0px 5px;box-shadow:0px 0px 2px #bb142d;background:#a3072a;"><h6 class="font-weight-bold  text-white " >Basic Details</h6></div>
            <div  class="    text-center  "   style="width:38%; height:37px;overflow:hidden;background:#fff;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark">Applicant Details</h6></div>
            <div   class="    text-center  "  style="width:38%; height:37px;overflow:hidden;background:#fff;border-radius:0px 5px 5px 0px;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark">Review & Pay</h6></div>
         </div>
       </div> 
       
       
          <div class=" col-lg-7 col-12  p-3" style="color: #111;margin-top:20px;">
            <div>

            	<form action="visainfo.php" method="get" class="text-dark">
               

                <div style="display: flex;">
                  <div style="width: 30%"><label for="">Visa Type</label> </div>
                  <div class="form-group" style="width: 70%">

                    <?php include('plan.php'); ?>           

                </div>
                </div>

        <div style="display:flex;">
                  
            <div style="width: 30%"><label for="">Arrival date</label> </div>
                  
                 <?php include('dat.php');   ?>
        </div>
        
         <div style="display: flex;">
                  
            <div style="width: 30%"><label for="">Contact No.</label> </div>
            <div>
                 <div class="form-group" style="width: 80%">
                     <input type="number" name="mobile" id="mobile"  class="form-control" min="1" required>
                 </div>
            </div>
    </div>
        
        


      			<div id="proccesbox" style="display:; width: 60%;margin-left:1%;" >
    				
            <label for="process">Processing Time</label>
            
                    <div id="nor">
    				  <input class="mr-2 "type= "radio" name="process" id="process" value="n" onclick="myFunction3();" >
    				  <h6 style="font-size: 12px;" class="font-weight-bold" >Standard Service (12-36 Hours)</h6>
                   </div>
                   
                   <div id="urg">
    	           	<input class="mr-2" type="radio" name="process" id="process" value="u" onclick="myFunction3();">
    				  <h6 style="font-size: 12px;" class="font-weight-bold" >Urgent Service (6-8 Hours)</h6>
    				</div>
    				

    			</div>


    			<div class="p-4 mt-4 " style="margin-left:40%;">
    				<button type="submit"  
    				class="bg-success p-2" style="width:48%;font-size:13px; color: #fff; border:none;cursor:pointer; border-radius:5px;background: linear-gradient(to bottom, #2b8400 0%,#216300 100%);margin-top: -9px;">
    				    Continue</button>
    			</div>

            	</form>
            </div>
         </div>





        
         <div class=" col-lg-5  col-12 p-3">
            
            

              <div class="" style=" padding: 5px; border-radius: 5px; border:1px solid #eee;  background:#d9dbe4;margin-top: 18px;">
              <h5  class="font-weight-bold text-center " style="border-bottom: 1px solid #c2c0c0"> Visa information </h5>
                  <table class=" p-0" style="border:none font-size:12px; ">
                  <tr>
                      <td><h6  style="font-size: 14px; margin-top:-10px;" class="font-weight">Nationality :</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;" id="x" class="font-weight-bold "><?= $country ?> </h6>   </td>
                    </tr>  

                    <tr>
                      <td><h6  style="font-size: 14px;margin-top:-10px;" class="font-weight"> Purpose of visit :</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;"  class="font-weight-bold ">Holidays, Meetings, Conferences or Transit stay</h6>   </td>
                    </tr>
                    
                    <tr>
                      <td><h6  style="font-size: 14px;margin-top:-10px;" class="font-weight"> Visa Validity :</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;" id="visa_valid"  class="font-weight-bold "> </h6>   </td>  
                    </tr>
                    
                     <tr>
                      <td><h6  style="font-size: 14px;margin-top:-10px;" class="font-weight"> Stay Validity : </h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;" id="demo4" class="font-weight-bold "></h6>   </td>
                    </tr>
                    
                   
                    
                   
                  </table>
                
            </div>
            
            <div class="mt-2" style=" padding: 5px; border-radius: 5px; border:1px solid #eee;  background:#d9dbe4;">
               <table class=" " style="border:none font-size:12px; ">
                    <tr>
                      <td><h6 style="font-size: 14px;margin-right:100px;" class="font-weight-bold">Visa Fee  :</h6></td>
                      <td><h6 style="font-size: 14px;" id="demo3" class="font-weight-bold bg-primary text-white rounded"></h6>  </td>
                    </tr>
                    
                  </table>
            </div>



 




     </div>
   </div>

<div class="row" style="height: 30px"></div>

</div>
</div>
<!--------------- End of Testimonilas ----------------------------- -->


<script src="main.js"></script>
<script src="visa.js"></script>


<?php include('footer.php'); ?>

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

