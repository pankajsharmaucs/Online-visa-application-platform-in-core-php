


  function  myFunction5() {
            
               var fee = $("#fee").val();





              $.ajax({
                  
                       url:'final.php',
                       method:'get',
                       data:{'fee':fee},
                       success:function(data)
                       {

                        alert(data);
                        location.reload();
                        
                       }
              }); 






          }


