<?php
require_once("config.php");

$work_name=$_POST['name'];
$work_email=$_POST['email'];
$work_pwd=$_POST['pwd'];
$work_phno=$_POST['phno'];
$work_type=$_POST['type'];
$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";

$result=mysqli_query($conn,"insert into worker_reg(name,email,password,phone,type) values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')");
 
  if($result){
	$sql1="select * from worker_reg ";
	$result1=mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_assoc($result1))
	{
	$worker_id1=$row['worker_id'];
	$worker_type1=$row['type'];
	}
	//echo $worker_id.$worker_type;
	$resp['worker_id']=$worker_id1;
	$resp['worker_type']=$worker_type1;
	
	echo json_encode($resp);
}
else{
	
	
}  


?>