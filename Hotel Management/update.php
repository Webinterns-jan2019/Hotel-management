<?php
include 'connect.php';
$id=$_POST['r_id'];
$type=$_POST['type'];
$bed=$_POST['bed'];
$amount=$_POST['amount'];
// $id=1;
// $type='delux';
// $bed='quad';
// $amount=9999;
// $allocated=0;
// $status=false;
$update=" update room set types='$type',bed='$bed',amount='$amount',allocated='$allocated' where r_id='$id'";
if($conn->query($update)===TRUE){
    $status=true;
}
else{
    $status=false;
}
echo json_encode($status);
?>