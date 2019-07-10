<?php
include 'connect.php';
$c=[];
$name=$_POST['name'];
$password=$_POST['password'];

$sql3="SELECT * from customer_info where Firstname='$name' and passwords='$password'";

$result3=$conn->query($sql3);
if($result3->num_rows>0)
{
  
        while($row=$result3->fetch_assoc())
        {
             array_push($c,$row);
            // echo "row".$row['dept_id'].$row['dept_name'];
        }

}

else{
    echo "0 results";
}
echo json_encode($c);
// $conn->close();
?>