



$(document).ready(function(){

$('#add').click(function(){
      $('#visaform').submit(function(e){
        e.preventDefault();
              var c_date = new Date();
              var expiry=$('#pass_expiry').val();
              showDays(c_date,expiry);          
              if(exp < 180)
              {
                 alert('Your Passport validity is below 180 days, you cannot apply');
                return false;
              }
              else{
                  
                     $("#load").show();
                     $.ajax({
                              url:'add_person.php',
                              method:$('#visaform').attr('method'),
                              data: new FormData(this),
                              contentType: false,
                              cache: false,
                              processData:false,
                              success:function(data)
                              {
                                if(data=='added')
                                { 
                                  $("#load").hide();
                                  alert('Application added'); 
                                  location.reload(true);
                                 }
                              }
                     });
                  }
               }); 
       });


            $('#delp').click(function(){
                
                          var iddel=$('#delid').val();
                         
                                 $("#load").show();
                                 $.ajax({
                                          url:"deleteperson.php",
                                          method:'POST',
                                          data: {'iddel':iddel},
                                          success:function(data)
                                          {
                                            
                                              $("#load").hide();
                                              alert(data); 
                                              location.reload(true);
                                            
                                          }
                                 });
                              
                           }); 

            
});   
            
            
            
       
            








      function showDays(firstDate,secondDate){
                
                  

                  var startDay = new Date(firstDate);
                  var endDay = new Date(secondDate);
                  var millisecondsPerDay = 1000 * 60 * 60 * 24;

                  var millisBetween =endDay.getTime()-startDay.getTime();
                  var days = millisBetween / millisecondsPerDay;

                  // Round down.
                  day= Math.floor(days);
                  exp=day+1;

                  return exp;

              }





