<?php
require_once("config.php");

$work_id=$_POST['id'];
$work_idno=$_POST['idno'];
$work_imgpath=$_POST['imgpath'];
$work_city=$_POST['city'];
$work_dob=$_POST['dob'];
$w_id=$_POST['wid'];
//$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";

$result=mysqli_query($conn,"insert into worker_basic(govt_id_type,govt_id_no,govt_id_path,city,date,worker_id) values('$work_id','$work_idno','$work_imgpath','$work_city','$work_dob','$w_id')");
 
  if($result){
	echo $result;
}
else{
	
	
}  


?>