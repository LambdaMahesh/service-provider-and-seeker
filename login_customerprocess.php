<?php
require_once("config.php");

$email=$_POST['email'];
$pwd=$_POST['pass'];

//$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";
echo $email;
$result=mysqli_query($conn,"select * from cusomer where email='$email' and password='$pwd'");
while($row=mysqli_fetch_assoc($result))
{
	$cid=$row["cost_id"];
}
$msg="invalid username or password";
$count=mysqli_num_rows($result);
 
  if($count==1){
	header('Location:customer_dashboard.php?cid='.$cid);
}
else{
	echo $msg;
	header('Location:login2.html');
	
}   


?>