  $(document).ready(function(){
    $("#user").click(function(){
     // alert('hi');
    })

    $("#lgbtn").click(function(){
     
      var s=document.getElementById('item1');
      var item1=s.options[s.selectedIndex].value;
 
      
      if(item1=='admin')
      {
        
        var name=$('#na').val();
        var password=$('#upass').val();
        if(name=='vishal'&&password=='123')
        {
          location.replace("admin.php");
        }
        else{
          alert("invalid admin name or password ");
        }
          
        }
        else{
          alert("user");
             var name=$('#na').val();
      var password=$('#upass').val();
   
    $.ajax({
      url: 'login.php',
      type: 'post',
      dataType: 'json',
      data:{
          name:name,
          password:password
       
      },
      success:function(result){
          if(result){
           
         
               location.replace("index.php");
               
              // alert('hi');
          }else{
                  alert("wrong credential");    

          }
      }
      
     
  })
        }
      
    
    });
   
//*********************************************************************888 */
$("#sub").click(function(){
//  document.getElementById('name').Value="10";
//  document.getElementById('name').onsubmit("click")




  })
// $("#na").click(function(){
       
//     })
//     $("#na1").click(function(){
        
//         var a=$('#na').val(); 
//         // alert(a);
//     });

//     $("#na2").click(function(){
// alert("hi")
//         var inputText=$('#na1').val(); 
//     //    if( ValidateEmail(inputText))
//     //    {
//     //     console.log("You have valid email address!");
//     //    }else{
//     //     console.log("You have entered an invalid email address!");
//     //    }
//     //      function ValidateEmail(inputText)
//     //      {
//     //      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     //      if(inputText.value.match(mailformat))
//     //      {
//     //      //document.form1.text1.focus();
         
//     //      return true;
//     //      }
//     //      else
//     //      {
      
//     //      //document.form1.text1.focus();
//     //      return false;
//     //      }
//     //     }
      
// var name=$('#na').val();
// var password=$('#upass').val();

// $.ajax({
// url: 'select3.php',
// type: 'post',
// dataType: 'json',
// data:{
//     name:name,
//     password:password
 
// },
// success:function(result){
//     if(result){
      
    
        
//          for(var i=0; i<result1.length;i++)
//          {
           
//          alert('2');
           
//          }
//         // alert('hi');
//     }else{
//             alert("wrong credential");    

//     }
// }

// });
  });
// function ValidateEmail(inputText)
// {
// var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// if(inputText.value.match(mailformat))
// {
//     alert("You have entered an valid email address!");
// document.form1.text1.focus();

// return true;
// }
// else
// {
// alert("You have entered an invalid email address!");
// document.form1.text1.focus();
// return false;
// }
// }
