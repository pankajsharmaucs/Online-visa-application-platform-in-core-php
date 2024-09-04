$(document).ready(function(){
 
     
   
});



       function  myFunction() {
            
            var name=$('#name').val();

            if(name=='')
            {
             $('#notgcc').hide();

            }else{
            
             $('#gcclist').show();

            $('input[name="gcc"]').prop('checked', false);
          }

     }



function gccstatusno()
{

  var name=$('#name').val();


   var gcc = $("input[name='gcc']:checked").val();
             

               $.ajax({
                      url:'checkgcc.php',
                      method:'get',
                      data:{'name':name,'gcc':gcc},
                      success:function(result)
                      {
                        if(result=='d')
                     {  
                        $('#notgcc').show();
                       $('input[name="sch"]').prop('checked', false);

                      }
                      else{ $('#btnsubmit').show();}
                      }
                      

                      
               });

              

}

function gccstatusyes()
{

  var gcc = $("input[name='gcc']:checked").val();
    $('#notgcc').html();
    $('#notgcc').hide();
    $('#btnsubmit').show();               

}



  function schenegen()
  {
     $('#btnsubmit').show();
  }



           

         
