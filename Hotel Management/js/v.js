$(document).ready(function(){
    
    $.ajax({
        url: 'select.php',
        type: 'get',
        dataType: 'json',
        success: function(result)
        {
         
            if(result)
            {
                var data='';
                for(var i=0; i<result.length;i++)
                {
                    // console.log(result[i].dept_id,result[i].dept_name)
                    data+='<option value='+result[i].dept_id+'>'+result[i].dept_name+'</option>'
               
                }
                $('#dept').append(data);
            //    console.log("result",result);

            }
            else{
                alert("failed to get data");
            }
        }
    })
    
   $('#register').click(function(){
    //    alert('sucesss');
    var name=$("#name").val();
    var email=$("#email").val();
    var pass=$("#pass").val();
    var gender=$("#gen").val();
    var phone=$("#phone").val();

     alert(name);
    // alert(email);
    // alert(pass);
    //  alert($('input[name=gender]:checked').val());

/*if(name.length>0 || email.length>0 || pass.length>0)
{
    
    $.ajax({
        url: 'insert.php',
        type: 'post',
        dataType: 'json',
        data:{
            name:name,
            email:email,
            password:pass,
            gender:gender,
            dept:dept
        },
        success: function(result)
        {
         
            if(result)
            {
                alert("success");
          }
               
      

        
            else{
                alert("failed to insert data");
            }
        }
    })
}
else{
    alert("entries should be valid");
}
*/

   })

})