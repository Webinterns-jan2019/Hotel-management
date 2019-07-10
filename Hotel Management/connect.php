<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hotelp";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connecion failed :".$conn->connect_error);

}
else
{
    // echo "connection successfull now u can communicate with ur friend sql  ('-')";

}


// $conn->close();
?>