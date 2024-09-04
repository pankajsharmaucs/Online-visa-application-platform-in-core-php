<?php 

session_start();

@$country=$_SESSION['country'];

@$day=$_GET['day'];
@$month=$_GET['month'];
@$year=$_GET['year'];

$date=date("$day-$month-$year");


@$plan=$_GET['plan'];

@$process=$_GET['process'];

@$mobile=$_GET['mobile'];




include('extra.php');


@$reference=$_SESSION['order_id'];


@$status=$_SESSION['status'];
@$gcc=$_SESSION['gcc'];
@$sch=$_SESSION['sch'];




$_SESSION['date_journey']=$date;

$_SESSION['mobile']=$mobile;

$_SESSION['plan']=$plan;

$_SESSION['process']=$process;


// var_dump($plan); die();


require_once '../service/read.php';

@$all_visa= get_data_by_ref($reference);

@$total_visa=count($all_visa);




 ?>


  

<!doctype html>
<html lang="en">
  <head>

       

<title>Oman Immigration | Applicant details </title>

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
  
  
  <div id="load" style="display: none;width: 100%; height: 100vh;background: rgba(255,255,255,.9);position: fixed;top:0px;left:0px;z-index: 2111111;">
  <div style="width: 50%;margin:15% 25%;text-align: center;">
    <img src="../image/load.gif" width="10%">
  </div>
</div>



<!-- -----------------------------form option------------------------------------------- -->
<div class="container-fluid p-2 m-1" style="height:auto;background:#d9dbe4;">
<div class="container p-0 mt-2" >
        


<div id="row2" class="row    shadow-sm font-weight-bold bg-white" style="width:100%;cursor: pointer;margin-top:2%;border-radius:10px;">
    
    
    <div id="div"style="width: 80%;height:37px; margin:1% 10%; margin-top:-10px; display: flex;cursor: pointer; border-radius:10px;">
          <div class=" col-lg-12   text-center" style="display:flex; height:37px; font-size:13px;">
            <div  class="    text-center  "   style="width:34%; height:37px;overflow:hidden;background:#fff;border-radius:5px 0px 0px 5px;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark " >Basic Details</h6></div>
            <div  class="    text-center  "   style="width:33%; height:37px;overflow:hidden;box-shadow:0px 0px 2px #878787;background:#a3072a;"><h6 class="font-weight-bold  text-white">Applicant Details</h6></div>
            <div   class="    text-center  "  style="width:33%; height:37px;overflow:hidden;background:#fff;border-radius:0px 5px 5px 0px;box-shadow:0px 0px 2px #878787;"><h6 class="font-weight-bold  text-dark">Review & Pay</h6></div>
         </div>
       </div> 
       
          <div class=" col-lg-7 col-12  p-3" style="color: #111;">
            <div>
            	<form action="compile.php" method="post" id="visaform" enctype="multipart/form-data">            

                <div style="display: flex;">
                  <div style="width: 40%"><label for="">First Name</label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="text" name="f_name" id="" class="form-control" required autofocus>
                  </div>
                </div>
                
                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">Last Name / Surname</label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="text" name="l_name" id="" class="form-control" required autofocus>
                  </div>
                </div>

                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">Father's Name </label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="text" name="father" id="father" class="form-control" required >
                </div>
                </div>

                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">Mother's Name </label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="text" name="mother" id="mother" class="form-control" required >
                </div>
                </div>
                
                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">Email Address</label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="email" name="email" id="email" class="form-control" required>
                </div>
                </div>
      <!--===========================================================================================profession          -->
                <?php if($plan==28){?>
                <div id="prop" style="display: flex;">
                  <div style="width: 40%"><label for="">Profession </label> </div>
                  <div class="form-group" style="width: 60%">
                  <input type="text" name="profession" id="profession" class="form-control" required>
                </div>
                </div>
                <?php }?>
                
                <div style="display: flex;">
                  <div style="width: 40%"><label for="">Applicant Photo</label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="photo" id="photo"  required>
                  </div>
                </div>

                <div style="display: flex;">
                  <div style="width: 40%"><label for="">Passport Copy</label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="pass" id="pass"  required>
                  </div>
                </div>
                

         

                
               <?php include('doc.php'); ?>
               
               


                <input type="hidden" name="date_journey" value="<?=$date?>">
                <input type="hidden" name="reference" value="<?=$reference?>">

                <input type="hidden" name="plan" value="<?=$plan?>">
                <input type="hidden" name="process" value="<?=$process?>">
                <input type="hidden" name="total" value="<?=$visafee?>">


                 <div style="display: flex;">
                  <div style="width: 40%"><label style="font-size: 13px!important;" class="font-weight-bold">More Docs.(Optional) </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="extra" id="extra"  >
                  </div>
                </div>
                <br>
                
                 <div style="display: flex;">
                     
    				<div class="mt-1 text-center"  style="width: 20%;margin-left:30%;">
                   <button type="submit"  id="" name="btn" value="submit" class=" "
                   style="width:137%;height: 47px;background: linear-gradient(to bottom, #2b8400 0%,#216300 100%); border: none;color: white; border-radius:5px;cursor:pointer"><h5 class="p-2">Submit</h5></button>
    			</div>
    			
    				
    			</div>

            	</form>

              
            </div>
         </div>
        
        <div class=" col-lg-5  col-12 p-3">
              <div class="" style=" padding: 5px; border-radius: 5px; border:1px solid #eee;  background:#d9dbe4">
              <h5  class="font-weight-bold text-center " style="border-bottom: 1px solid #c2c0c0"> Visa information </h5>
                  <table class=" p-0" style="border:none font-size:12px; ">
                 <tr>
                      <td><h6  style="font-size: 14px; margin-top:-10px;">Nationality:</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;" id="x" class="font-weight-bold "><?= $country ?> </h6>   </td>
                    </tr>  

                    <tr>
                      <td><h6  style="font-size: 14px;margin-top:-10px;" class=""> Purpose of visit:</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;"  class="font-weight-bold ">Holidays, Meetings, Conferences or Transit stay</h6>   </td>
                    </tr>
                    
                    <tr>
                      <td><h6  style="font-size: 14px;margin-top:-10px;" class=""> Arrival Date:</h6></td>
                      <td><h6 style="font-size: 14px;margin-top:-10px;"  class="font-weight-bold "><?= $date; ?></h6>   </td>
                    </tr>
                    
                    </table>
                
            </div>
            
            <div class="mt-2" style=" padding: 5px; border-radius: 5px; border:1px solid #eee;  background:#d9dbe4">
               <table class=" " style="border:none font-size:12px; ">
                    
                    <tr>
                      <td><h6 style="font-size: 14px;margin-right:40px; "  class=" font-weight-bold">Total  Fee  :</h6></td>
                      <td><h6 style="font-size: 14px;" id="demo3" class="font-weight-bold bg-primary text-white rounded"><?= $visafee ?> USD</h6>  </td>
                    </tr>
                    
                  </table>
            </div>
     </div>


<div class="row" style="height: 30px"></div>

</div>
</div>
<br>
<br>
<?php include('footer.php');?>
<!--------------- End of Testimonilas ----------------------------- -->


<script src="main.js"></script>

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

