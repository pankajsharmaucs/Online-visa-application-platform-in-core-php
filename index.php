  

<!doctype html>
<html lang="en">
  <head>


<title>Oman-Immigration | Home page </title>

    <link rel="icon" href="image/logo.PNG" type="image/png" sizes="16x16">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php require_once 'image/flag.php'; ?>
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


<link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet"> 


<link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Manjari&display=swap" rel="stylesheet">

<style>  h6 { font-size:13px!important; }
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

  

<!-- -------------------hero--image------------------ -->

      <?php 

       include('header.php');

       require_once 'service/read.php';

       $all= getallcountrybyname();




       ?>

<!-- -----------------------------searh option------------------------------------------- -->
<div class="container-fluid p-0" style="height:auto;background:#d9dbe4;">
<div class=" p-0" style="height:auto; width:94%; margin-left:3%;">
     <div class="row">
       <div class="col-12">
        <div style="background:url('image/oman18.jpg'); width:100%;margin-top: 5px; background-repeat: no-repeat; height: 510px; 
         background-size:100% 100%; box-shadow: -1px 50px 15px -35px grey;">
          <div class="searchbox" style="width: 35%;  background:rgba(0,0,0,.6); height: auto; position: absolute;top: 10%;left: 5%;border-radius:25px; margin-top:120px;">
             <div class="text-center" style="padding: 10px">
              
              <form action="checkuser.php" method="post" id="countryform" style="width:100%; ;">
              <h3 style="font-family:'Lato',sans-serif;font-size: 18px;color:#fff;letter-spacing:4px; margin-bottom:20px; ">Oman Visa Requirement</h3>

                  <div class="form-group " style="">
                   <select name="country" id="name" class="form-control " onchange="myFunction()" >
                     <option value="">Select Your Nationality as shown in Passport</option>

                <?php foreach ($all as $key) { ?>
                     <option value="<?= $key['country_name'] ;?>"><?= $key['country_name'] ;?></option>
                   <?php } ?>
                   </select>                      
                 </div>
                
                <div id="gcclist" class="text-dark animated fadeIn " style="font-size: 15px; display: ; 
                background:#fff; border-radius:5px;padding: 5px;">
                    <div >
                       <h6 style="font-size:9px;" class="text-center ">Are you a GCC resident (Bahrain,Qatar,Kuwait,UAE,Saudi Arabia) ?</h6>
                   <input type="radio" id="ggc" name="gcc" onclick="gccstatusyes();" class="font-weight-bold  text-white"  value="yes" >Yes
                    <input type="radio"  id="ggc" name="gcc" onclick="gccstatusno();" class="font-weight-bold ml-4 text-white"  value="no" >No
                    </div>
                </div>

                  <div id="notgcc" class="text-center text-dark animated fadeIn bg-white p-2 mt-2 " style="font-size:15px; display: none;border:12px;border-radius:12px;">
                    <div>
                      <h6 style="font-size:12px;"  class="text-center text-dark font-weight-bold">Do you have any valid visa of UK , USA , Japan , Canada or any schengen country ?</h6>
                      <input type="radio" id="sch" name="sch" onclick="schenegen();" class="font-weight-bold  text-white"  value="yes" >Yes  
                      <input type="radio"  id="sch" name="sch" onclick="schenegen();"  class="font-weight-bold ml-4 text-white" value="no" >No </div>


                    </div>


           <div id="btnsubmit" class="mt-2 animated bounceIn" style="display:;">
                  <button type="submit" class=" mt-2 p-2" style="background: #a3072a; border: none;color: white; border-radius:5px;">Go</button>
              </div>


             </form>


           </div>
          </div>
          </div>
        </div>     
       </div>
             
    </div>
    </div>

<!-- --------------End of Hero--------------------------------------- -->

<!-- ----------------------------------------------------- -->




<!-- -------------------Testimonials----------------------------------- -->



<!--<div class="container-fluid p-0" style="height:auto;background:#d9dbe4;"  " >
   <div class="row ">
    <div class="col-12 col-lg-12  text-center "  style=""> 
         <div style="background:url('image/apply.jpg'); width:100%; background-repeat: no-repeat; height: 310px; 
         background-size:100% 100%; margin-top: 24px; ">
          </div>
  </div>
  
  
  
</div>
</div>
<!--====================================================================-->

<!--<div class="container-fluid  " style="background:#d9dbe4;">
   <div class="row">
    <div class="col-12 col-lg-6   "  style=""> 
         <div class="p-2 mt-2" style="width: 100%;  ">
            <h2 class="  text-center font-weight-bold" style="color: #DD362E;font-family: 'Manjari', sans-serif;">Clients Testimonials </h2>
          </div>
      <div style="width: 70%; margin:2% 15%">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" style="height: 200px;">
               
                <div class="carousel-item active text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " Very fast visa Service Thank you oman-immigration.org "</h6>
                  <h4 class="font-weight-bold text-success ">Sam potor , Australia</h4>
                </div>


              <div class="carousel-item text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " I really appriciate the oman-immigration.org for his after sale services and help given you me. thank you   "</h6>
                  <h4 class="font-weight-bold text-success ">Jack Bruno, Iceland</h4>
                </div>
               


                  <div class="carousel-item text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " I have a tight timescale and wanted visa at time ,oman-immigaratin.org fullfiled my all need, So thank you very much "</h6>
                  <h4 class="font-weight-bold text-success ">Jash Dhami, Newzealand</h4>
                </div>
               


                  <div class="carousel-item text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " Thank You For Quick visa service I will recommond all to use oman-immigration.org to apply visa "</h6>
                  <h4 class="font-weight-bold text-success ">Pankaj sharma, India</h4>
                </div>
               

                  <div class="carousel-item text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " Me and my family are very thankful to you ,it is very easy to apply multiple applicant form in your 
                  website oman-immigration.org thanks you. you rock"</h6>
                  <h4 class="font-weight-bold text-success ">Albak , Austria</h4>
                </div>
               

                <div class="carousel-item text-center">
                  <i class="fa fa-user-circle" style="font-size: 62px;"></i>
                  <h6 class=" "> " Thank You so much oman-immigration.org , I got my visa in 3 very easy steps  "</h5>
                  <h4 class="font-weight-bold text-success ">charlie, UK</h6>
                </div>
               
             
         </div>
       </div>
  </div>
</div>



    <div class="col-12 col-lg-6  p-2 mt-2 "  style=""> 
         <div class="" style="width: 100%;  color:#DD362E; ">
              <h2 class="  text-left font-weight-bold" style="color: #DD362E;
        font-family: 'Manjari', sans-serif;">Why Choose Us ? </h2>
          </div>
           <div class="" style="width: 100%;  color:#DD362E; ">
              <h4 class="  text-left font-bold" style="color: #111;
    font-family: 'Lexend Deca', sans-serif;">Trusted,Reliable,Experienced </h4>
          </div>
          <div><h6>We take pride in our work and treat every job with the utmost respect, no matter, how large or small. doing this, we have established a strong reputation for finishing the work fast & in cost effective way</h6></div>

       <div class="mt-4" style="display: flex;">
         <div style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark">Hassle Free Application Process.</h6></div>
         </div>
          <div class="ml-4" style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div class="ml-2"><h6 class="font-weight-bold text-dark"> 24/7 Chat Support Team. .</h6></div>
         </div>
       </div>


        <div class="mt-4" style="display: flex;">
         <div style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark">Fast & timely Processing and delivery.</h6></div>
         </div>
          <div class="ml-4" style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark">Negligible Rejections.</h6></div>
         </div>
       </div>


        <div class="mt-4" style="display: flex;">
         <div style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark">Application Tracking.</h6></div>
         </div>
          <div class="ml-4" style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark"> Privacy Protection. </h6></div>
         </div>
       </div>


        <div class="mt-4" style="display: flex;">
         <div style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark"> SSL encrypted site for payment protection. </h6></div>
         </div>
          <div class="ml-4" style="display: flex;">
           <div><i class="fa fa-check-circle text-success"></i></div>
           <div style="width: 250px;" class="ml-2"><h6 class="font-weight-bold text-dark"> Full supported by the visa experts. </h6></div>
         </div>
       </div>
         

    </div>



   </div>
</div>


<!--------------- End of Testimonilas ----------------------------- -->

<?php  include('footer.php'); ?>



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