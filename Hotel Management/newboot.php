<!DOCTYPE html>
<html>
<head>
   
    <title>Login</title>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/userlog.css">
    <link rel='stylesheet' href='form-style.css' type='text/css' />   
       
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/userlog.js"></script>
        <script src="all-letter.js"> </script>
</head>
<body  onload='document.form1.text1.focus();document.form1.text2.focus()' >
    <div class="main"> 

    <img src="images/g2.jpg" alt="img" style="width:2000px;height:700px;">
        <div class="left" >
        </div>
        <div  class="right">
              <b><h1 style="margin-left:70px;"> Sign Up</h1></b>
                <br>
                <br>
      <form name="form1" action="#"> 
      <label>First Name</label>...
     <input type='text' class="a" id="na" style="border:none;border-bottom:1px solid black;"name='text2'/> <div id="add"></div>
    
      <label>Email</label>
                <input type='text' name='text1' style="border:none;border-bottom:1px solid black;" onclick="allLetter(document.form1.text2)"/><div id="add1"></div>
                <li class="submit">
                <label>User</label><br>
                <select  name="user" id="item1" >
                <option>--select option--</option>
                         <option value="user">User</option>
                         <option  value="admin">Admin</option>
                         
             </select>
                  </form>
          <label> Password</label></p>

      <input class="w3" type="password" id="upass"style="border:none;border-bottom:1px solid black;" onclick="allLetter1(document.form1.submit)" placeholder="**************">
      <div id="add1"></div>
      <label>Reapeate Password</label></p>
      <input class="w3input"id="def" type="password"name="text3"style="border:none;border-bottom:1px solid black;" onmouseout="ValidatePass(document.form1.text3)" placeholder=" **************"><div id="add3"></div>
      <p>     
      <!-- <a href="index.php"> -->
      <input class="log" id="lgbtn" type="button" value="Login" style="font-size:20px;">
      <!-- </a> -->
      <br><br>
      <a href="register.php">
      <input class="log" type="button" value="Register"  style="font-size:20px; margin-left:150px;">
</a>
            </form> 
        </div>
    </div>
    <style>
</style>

</body>
</html>