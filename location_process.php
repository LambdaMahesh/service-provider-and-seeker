<?php
require_once("config.php");

$add1=$_POST['add1'];
$add2=$_POST['add2'];
$pin=$_POST['pin'];
$w_id=$_POST['wid'];

//$resp=array();
//$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";

$result=mysqli_query($conn,"insert into worker_location(worker_id,address1,address2,pincode) 
values('$w_id','$add1','$add2','$pin')");


  

?>