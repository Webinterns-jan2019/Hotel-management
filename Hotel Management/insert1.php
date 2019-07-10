<?php
include 'connect.php';
// $Typeroom=$_POST['typeroom'];
// $Btype=$_POST['btype'];
// $Rooms=$_POST['rooms'];
// $Mealp=$_POST['mealp'];
// $Chkin=$_POST['chkin'];
// $Chkout=$_POST['chkout'];
$Typeroom='is';
$Btype='cs';
$Rooms='12';
$Mealp='hh';
$Chkin='2015-10-1';
$Chkout='2015-06-1';
// alert($Typeroom);
//   alert($Btype);
//   alert($Rooms);
//   alert($Chkin);
//   alert($Chkout);

$sql="INSERT into reservation_info (Type_of_Room,Bedding_type,No_of_Rooms,Meal_Plan,Check_in,Check_Out)values(' $Typeroom','$Btype','$Rooms','$Mealp','$Chkin','$Chkout')";

if($conn->query($sql))
{
    echo "sucess";
   
}
else
{
    echo "error";

}
?>