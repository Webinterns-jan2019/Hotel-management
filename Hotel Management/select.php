<?php
include 'connect.php';
$a=[];
$sql="SELECT * from  customer_info";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  
        while($row=$result->fetch_assoc())
        {
             array_push($a,$row);
           // console.log("row".$row['allocated'].$row['dept_name']) ;
        }

}

else{
    echo "0 results";
}
echo json_encode($a);
// $conn->close();
?>
