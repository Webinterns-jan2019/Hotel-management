$(document).ready(function()
{  $('#b2').hide();
   $('#b3').hide();
   $('#b4').hide();
 
    $('.c1').click(function(){
      $('.c2').addClass(".pan");
         $('.c11').show();
         $('#b2').hide();
         $('#b3').hide();
         $('#b4').hide();
         $('#b1').show();

            
    })
    $('.c2').click(function(){
    
        $('.c11').hide();
        $('.c22').show();
        $('#b2').show();
        $('#b1').hide();
        $('#b3').hide();
       
      

      })
      $('.c3').click(function(){
      
        $('.c22').hide();
        $('.c33').show();
        $('.c11').hide();
        $('#b3').show();
        $('#b2').hide();
        $('#b4').hide();
        
     
      })
      $('.c4').click(function(){
 
        $('.c33').hide();
        $('.c11').hide();
        $('.c22').hide();
        $('#b4').show();
        $('#b3').hide();
    
      })
      
})


      

      

