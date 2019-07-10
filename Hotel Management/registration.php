<!DOCTYPE html>
<html>
<head>
 
    <title>Page Title</title>

    <link rel="stylesheet" href="css/style1.css">
       <script src="js/jquery-3.1.1.js"></script>
    <script src="js/reservation-entry.js"></script>
 
</head>
<body>
    <div>
      <button style="width:1000px;height:100px;margin-left:280px;font-size:30px;text-align:left;background-color: transparent;border:none;">RESERVATION                         </button>
    </div>
    <div class="maindiv" >
        <div class="left" style="height:1000px;width:250px;background-color:#09192A;margin-top:-100px;" >
 <a href="index.php"><button style="background-color:#09192A;color:white;width:250px;height:50px;border:none;border: 1px solid white;" >Home Page</button></a>
     </div>
     
         <div class="right" style="background-color:#FFFFFF;width: 500px;height:570px;margin-left:30px;font-size:16px;border: 1px solid #428BCA;">
            <button style="text-align: left;background-color: #428BCA;color:white;height: 30px;width: 500px;border:none;border-top-left-radius: 4px;border-top-right-radius: 4px">PERSONAL INFORMATION</button><br><br>
            <label class="texts ">  Title</label> <br><select  name="drop" id="title">
                     <option >Mr.</option>
                     <option >Mrs.</option>
                    
         
                 </select><br><br>
              <label class="texts ">First Name</label>  <br><input type="text" name="first"  id="firstname"><br><br>
              <label class="texts"> Last Name </label><br><input type="text" name="last" id="lastname"><br><br>
                <label class="texts "> Email</label> <br><input type="email" name="email" id="email"><br><br>
                    <label class="texts "> Nationality</label> <input class="radio"  type="radio" name="country" id="Nationality">indian
               <input  class="radio" type="radio" name="country">Non-indian</label><br><br>
               <label class="texts">Passport Country </label> <br> <select  name="drop" id="passportcountry">
                     <option >india</option>
                     <option >other</option>
                  
         
                 </select><br><br><br>
                 <label class="texts"> Phone Number</label><br><input type="text" name="last" id="phonenumber"><br><br>
                </div>
                 
                 <div class="right1" style="background-color:#FFFFFF;width: 500px;height: 570px;font-size:16px; border: 1px solid #428BCA; ">
                    <button style="text-align: left;background-color: #428BCA;color:white;height: 30px;width: 500px;border:none;border-top-left-radius: 4px;border-top-right-radius: 4px">RESERVATION INFORMATION</button><br><br>
                    <label class="texts ">Type of Room </label><br> <select  name="drop" id="typeofroom">
                            <option >Deluxe Room</option>
                            <option >Luxury Room</option>
                            <option >Guest Room</option>
                            <option >Single Room</option>
                
                        </select><br><br><br>
                        <label class="texts "> Bedding Type </label><br><select  name="drop" id="bedtype">
                                <option >Twin XL</option>
                                <option >Double</option>
                                <option >Full</option>
                                <option >Queen</option>
                    
                            </select><br><br><br>
                            <label class="texts ">  No. of Rooms</label><br> <select  name="drop" id="noofroom">
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                        
                                </select><br><br><br>
                                <label class="texts ">  Meal Plan</label><br> <select  name="drop" id="mealplan">
                                        <option >breakfast</option>
                                        <option >elevenses</option>
                                        <option >lunch</option>
                                        <option >ec</option>
                            
                                    </select><br><br><br>
                                    <label class="texts "> Check-in</label><br><input type="date" name="date" id="checkin"><br><br>
                                        <label class="texts "> Check-Out</label><br><input type="date" name="date" id="chekout"><br><br>
                                     
   
  
                                    
            </div>
                 </div>
                 <div class="end" >

<button class="random1" style="background-color: #428BCA;color:white;border:none">submit</button>
                 </div>
</body>
</html>