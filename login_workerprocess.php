<?php
require_once("config.php");

$email=$_POST['email'];
$pwd=$_POST['pass'];

//$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";
echo $email;
$result=mysqli_query($conn,"select * from worker_reg where email='$email' and password='$pwd'");
while($row=mysqli_fetch_assoc($result))
{
	$wid=$row["worker_id"];
}

$count=mysqli_num_rows($result);
 
  if($count==1){
	header('Location:worker_dashboard.php?wid='.$wid);
}
else{
	
	header('Location:login1.html');
}   


?>