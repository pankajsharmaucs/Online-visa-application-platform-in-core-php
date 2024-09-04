
<!-- DIRECT COUNTRY WITH GCC -->

<?php if($status=='d' and $gcc=='yes') { ?>
<select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                  style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="28">28 Days Single Entry </option>    
                      </select> 

 <?php } ?>


<!-- DIRECT COUNTRY  WITHOUT GCC -->
     <?php if($status=='d' and $gcc=='no') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="10">10 Days Single Entry</option>    
                        <option value="30">30 Days Single Entry</option>    
                        <option value="1">1 year multiple  Entry </option>    
                 </select> 

     <?php } ?>

<!-- REQIURED  WITH GCC   -->
     <?php if($status=='r' and $gcc=='yes') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                       <option value="28">28 Days Single Entry </option>    
    
                 </select> 

     <?php } ?>

<!-- REQIURED  WITHOUT GCC  AND WITH SCHENEGEN VISA  -->
     <?php if($status=='r' and $gcc=='no' and $sch=='yes') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="10">10 Days Single Entry</option>    
                        <option value="30">30 Days Single Entry</option>    
                        <option value="1">1 year multiple  Entry </option>    
                 </select> 

     <?php } ?>

     <!-- REQIURED   WITHOUT GCC  AND WITHOUT SCHENEGEN VISA-->
     <?php if($status=='r' and $gcc=='no' and $sch=='no') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="s30">30 Days Single Entry </option>    
                 </select> 

     <?php } ?>



   <!-- BANNED COUNTRY WITH GCC -->
     <?php if($status=='b' and $gcc=='yes') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="28">28 Days Single Entry </option>    
                 </select> 

     <?php } ?>




   <!-- UNLISTED COUNTRY WITH GCC -->
     <?php if($status=='u' and $gcc=='yes') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="28">28 Days Single Entry </option>    
                 </select> 

     <?php } ?>


      <!-- UNLISTED COUNTRY WITHOUT GCC -->
     <?php if($status=='u' and $gcc=='no') { ?>
                 <select   name="plan" id="plan" class="form-control" onchange="myFunction2();" required
                     style="box-shadow: 0px 2px 2px #c8c8c8">
                        <option value="">Choose your visa type</option>
                        <option value="s30">30 Days Single Entry </option>                  
                         </select> 

     <?php } ?>


  

