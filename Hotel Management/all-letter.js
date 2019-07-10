function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
    
      if(inputtxt.value.match(letters))
      {
  
$("#add").empty();
// $("#add").remove('<img src="wrong.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');

$("#add").append('<img src="images/check-mark-1292787__340.png" style="width:10px;height:10px;margin-left:320px;margin-top:-40px;" alt=""></img>');

     return true;
      }
      else
      
      {
            $("#add").empty();
            $("#add").append('<img src="images/wrong.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');
            document.form1.text1.focus();
      return false;
      }
      }
      function allLetter1(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      var cat='';
      if(inputtxt.value.match(letters))
      {
      // alert('Your name have accepted :Valid Name');
//      cat+='<img src="images/check-mark-1292787__340.png"  style="width:20px;height:20px;"alt=""></img>';
// cat+='<label>right</label>';
//      $('#na').append(cat); 
$("#add7").empty();


$("#add7").append('<img src="images/check-mark-1292787__340.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');

     return true;
      }
      else
      
      {
            $("#add7").empty();
            $("#add7").append('<img src="images/wrong.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');
            document.form1.text1.focus();
      return false;
      }
      }
      function ValidateEmail(inputText)
            {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if(inputText.value.match(mailformat))
            {
                  $("#add1").empty();
                  $("#add1").append('<img src="images/check-mark-1292787__340.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');

            return true;
            }
            else
            {
                  $("#add1").empty();
                  $("#add1").append('<img src="images/wrong.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');

            document.form1.text1.focus();
            return false;
            }
            }


function ValidatePass(inputTexXX)
{
      var a=$('#abc').val(); 
      var b=$('#def').val(); 
      if(a==b)
      {
            $("#add3").empty();
            $("#add3").append('<img src="images/check-mark-1292787__340.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');

      }
      else {
            $("#add3").empty();
            $("#add3").append('<img src="images/wrong.png"  style="width:10px;height:10px;margin-left:320px;margin-top:-40px;"alt=""></img>');


      }
      
}
