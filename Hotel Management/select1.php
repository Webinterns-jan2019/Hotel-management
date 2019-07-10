<?php
include 'connect.php';
$b=[];
$sql="SELECT * from booking";
$result1=$conn->query($sql);
if($result1->num_rows>0)
{
  
        while($row=$result1->fetch_assoc())
        {
             array_push($b,$row);
            // echo "row".$row['dept_id'].$row['dept_name'];
        }

}

else{
    echo "0 results";
}
echo json_encode($b);
// $conn->close();
?>