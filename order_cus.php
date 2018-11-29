 <?php
require_once("config.php");

$cid=$_POST['cid'];
$wid=$_POST['wid'];
$date=date("Y/m/d");
date_default_timezone_set('Asia/Kolkata');
$time=date('h:i:s A', time ());
$order_num=rand(14,1000);

$resp=array();
$sql=mysqli_query($conn,"INSERT INTO `order_table` ( `cust_id`, `worker_id`, `order_no`, `ord_date`, `ord_time`, `status`)
 VALUES ('$cid', '$wid', '$order_num', '$date', '$time','pending')");
//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";


 
  if($sql){
	
	echo "Order for This Worker done sucessfully";
	}
	
	
else{
	
	
}  


?>