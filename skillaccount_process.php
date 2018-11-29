<?php
require_once("config.php");

$profile_img=$_POST['profile_img'];
$qualification=$_POST['qualification'];
$work_type=$_POST['work_type'];
$institute=$_POST['institute'];
$certifiacte=$_POST['certifiacte'];
$cost=$_POST['cost'];
$avilable_to=$_POST['avilable_to'];
$avilable_from=$_POST['avilable_from'];
$skills=$_POST['skills'];
$DLno=$_POST['DLno'];
$w_id=$_POST['wid'];
//$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";
$result=mysqli_query($conn,"insert into worker_skill(worker_id,profile_pic,qualification,type_or_expirience,institution_worked,award_pic,cost_per_hr,work_from,work_to,skills_or_pro,DLno) 
values('$w_id','$profile_img','$qualification','$work_type','$institute','$certifiacte','$cost','$avilable_from','$avilable_to','$skills','$DLno')");
 
  if($result){
	echo $result;
}
else{
	
	
}  


?>