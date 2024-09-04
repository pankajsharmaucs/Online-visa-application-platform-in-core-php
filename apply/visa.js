 function  myFunction2(){

           var plan=$('#plan').val();

              if(plan =='28'){$('#demo2').html('28 days single entry ');}
              if(plan =='28'){$('#demo4').html('28 days from the date of entry  ');}
              if(plan =='28'){$('#visa_valid').html('30 days from the date of issue   ');}

              if(plan =='10'){$('#demo2').html('10 days single entry ');}
              if(plan =='10'){$('#demo4').html('10 days from the date of entry ');}
              if(plan =='10'){$('#visa_valid').html('30 days from the date of issue ');}

              if(plan =='30'){$('#demo2').html('30 days single entry ');}
              if(plan =='30'){$('#demo4').html('30 days from the date of entry ');}
              if(plan =='30'){$('#visa_valid').html('30 days from the date of issue ');}

              if(plan =='1'){$('#demo2').html('1 Year Multiple entry ');}
              if(plan =='1'){$('#demo4').html('30  days from the date of entry ');}
              if(plan =='1'){$('#visa_valid').html('30  days from the date of issue ');}



              if(plan =='s30'){$('#demo2').html('30 days single entry ');}
              if(plan =='s30'){$('#demo4').html('30 days from the date of entry ');}
              if(plan =='s30'){$('#visa_valid').html('90 days from the date of issue ');}

              if(plan =='s30'){$('#fas').hide();}
              if(plan =='s30'){$('#urg').hide();}
             
              $('#proccesbox').show();

                myFunction3();
               
          }


  function  myFunction3() {

                var name=$('#visa_count').val();
                var plan=$('#plan').val();

            
               var processs = $("input[name='process']:checked").val();

               if(processs=='n' && plan==28){$('#demo3').html( '69 USD '); }
               if(processs=='f' && plan==28){$('#demo3').html( '89 USD '); }
               if(processs=='u' && plan==28){$('#demo3').html( '169 USD '); }


               if(plan=='s30'){$('#demo3').html( '364 USD '); }

               if(processs=='n' && plan==10){$('#demo3').html( '64 USD '); }
               if(processs=='f' && plan==10){$('#demo3').html( '84 USD '); }
               if(processs=='u' && plan==10){$('#demo3').html( '184 USD '); }
               
               
               
               if(processs=='n' && plan==30){$('#demo3').html( '99 USD '); }
               if(processs=='f' && plan==30){$('#demo3').html( '119 USD '); }
               if(processs=='u' && plan==30){$('#demo3').html( '199 USD '); }

               if(processs=='n' && plan==1){$('#demo3').html( '199 USD '); }
               if(processs=='f' && plan==1){$('#demo3').html( '249 USD '); }
               if(processs=='u' && plan==1){$('#demo3').html( '349 USD '); }

               
               


          }


  function mobile(){          
    var mobile=$('#mobile').val().length;
    
    alert(mobile);

    if(mobile < 10 )
              {
                alert('Please fill 10 digits in mobile');
                return false;
              }
}

