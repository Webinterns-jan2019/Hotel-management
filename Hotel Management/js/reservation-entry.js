$(document).ready(function()
{ 
    $('.register1').click(function(){
        var title=$("#title").val();
        var fnames=$("#firstname").val();
        var lnames=$("#lastname").val();
        var emails=$("#email").val();
        var password=$(".passwords").val();
        var numbers=$("#phonenumber").val();
  
           
            $.ajax({
              
                url: 'insert.php',
                type: 'post',
                dataType: 'json',
                data: {
                    title:title,
                    fnames:fnames,
                    lnames:lnames,
                    emails:emails,
                    password:password,
                    numbers:numbers
                },
                success: function(result)
                {
                if(result)
            {
              alert("success");
            }
            else{
                alert("failed to get data");
            }
        }
            })
        
    })
    // ******************************************************************
    $('.register').click(function(){
      
        var title=$("#title").val();
        var fnames=$("#firstname").val();
        var lnames=$("#lastname").val();
        var emails=$("#email").val();
        var passports=$("#passportcountry").val();
        var numbers=$("#phonenumber").val();
      
        //ajax body
     
        {
      $.ajax({
                          
                            url: 'insert.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                title:title,
                                fnames:fnames,
                                lnames:lnames,
                                emails:emails,
                                passports:passports,
                                numbers:numbers
                            },
                            success: function(result)
                            {
                            if(result)
                              {
                                 alert("success");
                             }
                             else{
                                    alert("failed to get data");
                                 }
                             }

                        })
        }
    })
    // *****************************************************************************

$('.random1').click(function(){
      
    var typeroom=$("#typeofroom").val();
     var btype=$("#bedtype").val();
     var rooms=$("#noofroom").val();
     var mealp=$("#mealplan").val();
     var chkin=$("#checkin").val();
     var chkout=$("#chekout").val();
 
          $.ajax({
             url: 'insert1.php',
             type: 'post',
             dataType: 'json',
             data: {
                 typeroom:typeroom,
                 btype:btype,
                rooms:rooms,
                 mealp:mealp,
                chkin:chkin,
                chkout:chkout            
              
                 },
success: function(result)
{
if(result)
  {
     alert("success");
 }
 else{
        alert("failed to get data");
     }
 }

})
alert(typeroom);
alert(btype);
alert(rooms);
alert(mealp);
alert(chkin);
alert(chkout);
})
//**************************************************************************************************************************************************8 */

});