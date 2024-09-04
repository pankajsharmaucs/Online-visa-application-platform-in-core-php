
<!-- DIRECT COUNTRY WITH GCC -->

<?php if($status=='d' and $gcc=='yes') { ?>

 <div style="display: flex;">
                  <div style="width: 40%"><label for="">GCC Visa/RP Expiry </label> </div>
                   
                    <?php include('gccdat.php');?>
        </div>
        
            <div style="display: flex;">
                  <div style="width: 40%"><label for="">GCC Visa/RP </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="gcc" id="gcc"  >
                  </div>
                </div>

        

                

 <?php } ?>


<!-- DIRECT COUNTRY  WITHOUT GCC -->
     <?php if($status=='d' and $gcc=='no') { ?>
                 

     <?php } ?>

<!-- REQIURED  WITH GCC   -->
     <?php if($status=='r' and $gcc=='yes') { ?>
                
                 
        
                   <div style="display: flex;">
                  <div style="width: 40%"><label for="">GCC Visa/RP </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="gcc" id="gcc"  >
                  </div>
                </div>
                
                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">More Docs. (Optional) </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="mar" id="mar"  >
                  </div>
                </div>

          


               

     <?php } ?>

<!-- REQIURED  WITHOUT GCC  AND WITH SCHENEGEN Visa  -->
     <?php if($status=='r' and $gcc=='no' and $sch=='yes') { ?>
                
                  <div style="display: flex;">
                  <div style="width: 40%"><label for="">Schengen Visa/RP </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="sch" id="sch"  >
                  </div>
                </div>
                
               

     <?php } ?>

     <!-- REQIURED   WITHOUT GCC  AND WITHOUT SCHENEGEN Visa-->
     <?php if($status=='r' and $gcc=='no' and $sch=='no') { ?>
                
                  <div style="display: flex;">
                  <div style="width: 40%"><label for="">Flight Tickets </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="air" id="air"  >
                  </div>
                </div> 


                  <div style="display: flex;">
                  <div style="width: 40%"><label for="">Hotel Booking </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="hotel" id="hotel"  >
                  </div>
                </div> 

     <?php } ?>



   <!-- BANNED COUNTRY WITH GCC -->
     <?php if($status=='b' and $gcc=='yes') { ?>
 
       
                   <div style="display: flex;">
                  <div style="width: 40%"><label for="">GCC Visa/RP </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="gcc" id="gcc"  >
                  </div>
                </div>

           

     <?php } ?>




   <!-- UNLISTED COUNTRY WITH GCC -->
     <?php if($status=='u' and $gcc=='yes') { ?>
          
                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">GCC Visa/RP </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="gcc" id="gcc"  >
                  </div>
                </div>

          


                   <?php } ?>


      <!-- UNLISTED COUNTRY WITHOUT GCC -->
     <?php if($status=='u' and $gcc=='no') { ?>
                 
                <div style="display: flex;">
                  <div style="width: 40%"><label for="">Air Ticket </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="air" id="air"  >
                  </div>
                </div> 


                 <div style="display: flex;">
                  <div style="width: 40%"><label for="">Hotel Booking </label> </div>
                   <div class="form-group" style="width: 60%">
                    <input type="file" name="hotel" id="hotel"  >
                  </div>
                </div> 

     <?php } ?>


  









