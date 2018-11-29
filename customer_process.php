<?php
require_once("config.php");

$cust_name=$_POST['name'];
$cust_email=$_POST['email'];
$cust_pwd=$_POST['pwd'];
$cust_phno=$_POST['phno'];
$cust_add1=$_POST['add1'];
$cust_add2=$_POST['add2'];
$cust_city=$_POST['city'];
$cust_dob=$_POST['dob'];
$cust_pic=$_POST['pic'];
$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";

$result=mysqli_query($conn,"insert into cusomer(name,email,password,phone,address1,address2,city,date,pic) 
values('$cust_name','$cust_email','$cust_pwd','$cust_phno','$cust_add1','$cust_add2','$cust_city','$cust_dob','$cust_pic')");
 
  if($result){
	$sql1="select * from cusomer where email='$cust_email' and  password='$cust_pwd' ";
	$result1=mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_assoc($result1))
	{
	$cust_id1=$row['cost_id'];
	$resp['cost_id']=$cust_id1;
	}
	
}
else{
	
	
}  
echo json_encode($resp);

?>