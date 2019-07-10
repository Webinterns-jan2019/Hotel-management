<?php
include 'connect.php';
$Title=$_POST['title'];
$fname=$_POST['fnames'];
$lname=$_POST['lnames'];
$email=$_POST['emails'];
$password=$_POST['password'];
$number=$_POST['numbers'];
// $Title='mr';
// $fname='vish';
// $lname='bang';
// $email='vgdd';
// $password='bbb';
// $number='ghgh';

$sql="INSERT into customer_info (Title,Firstname,Lastname,Email,passwords,PhoneNumber)values('$Title','$fname','$lname','$email','$password','$number')";

if($conn->query($sql))
{
    echo "sucess";
   
}
else
{
    echo "error";

}
?>
  