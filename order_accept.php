<?php
require_once("config.php");

$oid=$_POST['oid'];


$resp=array();
$sql=mysqli_query($conn,"update  order_table set  status='accepted' where order_id='$oid'");

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";


 
  if($sql){
	
	echo "Order Placed Successfully for Customer";
	}
	
	
else{
	
	
}  


?>