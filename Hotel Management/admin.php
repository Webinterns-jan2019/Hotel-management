<html>
    <head>
        <title>
            admin
        </title>
        
        <link rel="stylesheet" href="css/adminstyle.css" />
  
        <link href="css/adminfont.css"rel="stylesheet">
        
          
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/admin.js"></script>
<style>
</style>
    </head>
    <body>
        <div class="header">
<label style="color:white;margin-left:600px;font-family: 'Lobster', cursive;font-size: 30px;">ADMIN</label>
        </div>
    <div class="page">
            <div class="left" style="padding:20px">
                <input class="btn" id="add" type="button" value="Add Rooms" style="width:200px;height:30px;" >
                <br><br><br><br>
                <input  class="btn" id="view"type="button" value="View Available Rooms" style="width:200px;height:30px;" >
                <br><br><br><br>
                <input class="btn" id="book" type="button" value="View Booking" style="width:200px;height:30px;" >
                <br><br><br><br>
                <input  class="btn" id="user" type="button" value="View User" style="width:200px;height:30px;" >
                <br><br><br><br>
                        </div>
                        <div class="roombook">
                            <br><br>
                            <label style="color:#A39999;font-size: 30px;margin-left: 30px;">Add Rooms</label>
                            <table border="3px" class="db" id="are">
                                     <tr id="ma" >
                                         <th>Room id </th>
                                            <th>Type</th>
                                            <th>Bed</th>
                                            <th >Amount</th>
                                            <th >Update</th>
                                            <th >Delete</th>
                                    </tr>  
                                    <?php

                            include 'connect.php';

                            $sql="SELECT * from room";

                               $result=$conn->query($sql);
                                if($result->num_rows>0)
                                {
                                    while($row=$result->fetch_assoc())
                                    {
                                        ?>
                                        <tr >
                                        <th><input type='text' id='r_id' value="<?php echo $row['r_id'];?>"> </th>
                                        <th><input type='text' id='type' value="<?php echo $row['types'];?>"> </th>
                                        <th> <input type='text' id='bed' value="<?php echo $row['bed'];?>">  </th>
                                        <th> <input type='text' id='amount' value="<?php echo $row['amount'];?>">  </th>
                                        <th> <input type='button' class=update  value="Update" id="<?php echo $row['r_id'];?>">  </th>
                                        <th> <input type='button'  class=delete value="Delete" id="<?php echo $row['r_id'];?>">  </th>
                                        </tr>
                                        <?php      
                                    }
                                    
                                }

                                    ?>                   
                                </table>    
                                           </div>



                        <div class="ViewRoom">
                                <br><br>
                                    <table border="3px" class="tb" id="tre">
                                    <tr id="ca">
                                            
                                           <th>Room id </th>
                                            <th>Type</th>
                                            <th>bed</th>
                                            <th>amount</th>
                                            </tr>
                                            <?php
                                    
                            include 'connect.php';

                            $sql1="SELECT * from room";

                            $result=$conn->query($sql1);
                                if($result->num_rows>0)
                                {
                                    while($row=$result->fetch_assoc())
                                    {
                                        if( $row['allocated']==0)
                                        {
                                        ?>
                                        <tr >
                                        <th><input type='text' id='r_id' value="<?php echo $row['r_id'];?>"> </th>
                                        <th><input type='text' id='type' value="<?php echo $row['types'];?>"> </th>
                                        <th> <input type='text' id='bed' value="<?php echo $row['bed'];?>">  </th>
                                        <th> <input type='text' id='amont' value="<?php echo $row['amount'];?>">  </th>
                                        </tr>
                                        <?php      
                                    }
                                }
                                    
                                }

        ?>           
                                   
                                    
                            
                                </table>
                            </div>
                            <div class="viewrbooking">
                                    <br><br>
                                        <label style="color:#A39999;font-size: 30px;margin-left: 30px;">View Booking</label>
                                        <table border="3px" class="tb" id="df">
                                    <tr>

                                             <th>Type_of_Room</th>
                                            <th>Bedding_type</th>
                                            <th>No_of_Rooms</th>
                                            <th>Meal_Plan</th>
                                            <th>check in</th>
                                            <th>check out</th>
                                          
                                   
                                    </tr>
                                    <?php
                                    
                                    include 'connect.php';
        
                                    $sql1="SELECT * from reservation_info";
        
                                    $result=$conn->query($sql1);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {
                                                
                                               
                                                {
                                                ?>
                                                <tr >
                                                <th><input type='text' id='Type_of_Room' value="<?php echo $row['Type_of_Room'];?>"> </th>
                                                <th><input type='text' id='Bedding_type' value="<?php echo $row['Bedding_type'];?>"> </th>
                                                <th> <input type='text' id='No_of_Rooms' value="<?php echo $row['No_of_Rooms'];?>">  </th>
                                                <th> <input type='text' id='Meal_Plan' value="<?php echo $row['Meal_Plan'];?>">  </th>
                                                <th> <input type='text' id='Check_in' value="<?php echo $row['Check_in'];?>">  </th>
                                                <th> <input type='text' id='Check_Out' value="<?php echo $row['Check_Out'];?>">  </th>
                                                </tr>
                                                <?php      
                                            }
                                        }
                                            
                                        }
        
                ?>           
                                </table>
                                </div>
                                <div class="viewuser">
                                        <br><br>
                                            <label style="color:#A39999;font-size: 30px;margin-left: 30px;">view user</label>

                                            <table border="3px" class="tb" id="vf">
                                    <tr>	
                                            <th>Title</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>passwords</th>
                                            <th>PhoneNumber</th>
                                   
                                    </tr>
                                    <?php
                                    
                                    include 'connect.php';
        
                                    $sql1="SELECT * from customer_info";
        
                                    $result=$conn->query($sql1);
                                        if($result->num_rows>0)
                                        {
                                            while($row=$result->fetch_assoc())
                                            {
                                               
                                                ?>
                                                <tr >
                                                <th><input type='text' id='Title' value="<?php echo $row['Title'];?>"> </th>
                                                <th><input type='text' id='Firstname' value="<?php echo $row['Firstname'];?>"> </th>
                                                <th> <input type='text' id='Lastname' value="<?php echo $row['Lastname'];?>">  </th>
                                                <th> <input type='text' id='Email' value="<?php echo $row['Email'];?>">  </th>
                                                <th> <input type='text' id='passwords' value="<?php echo $row['passwords'];?>">  </th>
                                                <th> <input type='text' id='PhoneNumber' value="<?php echo $row['PhoneNumber'];?>">  </th>
                                        
                                            </tr>
                                                <?php      
                                            
                                        }
                                            
                                        }
        
                ?>           
                                </table>
                                    </div>
        </div>
       
       
    </body>
</html>