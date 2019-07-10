<?php
include 'connect.php';
$id=$_POST['id'];
$del="delete from room where r_id=$id";
if($conn->query($del)===TRUE){
  $status=true;
}
else{
    $status=false;
}
echo json_encode($status);
?>