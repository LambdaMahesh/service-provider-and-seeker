<?php
require_once("config.php");

$type=$_POST['type'];
$string1="";
$worker_id=array();
$profile_pic=array();
$resp=array();

//$sql="Insert into worker_reg values('$work_name','$work_email','$work_pwd','$work_phno','$work_type')";

$result=mysqli_query($conn,"select w.worker_id,name,phone,address1,profile_pic from worker_reg w join worker_location l on  w.worker_id=l.worker_id join worker_skill s on s.worker_id=w.worker_id where type='$type' ");

  $count=mysqli_num_rows($result); 


 	$jj=1; 
	
 while($row2=mysqli_fetch_array($result))
	{
		
	/* $string1="<div class='fh5co-entry padding'>
					<img src='".$row2['profile_pic']."' alt='img'>
					<div>
						<h2>".$row2['name']."</h2>
						<p>".$row2['phone']."</p>
						<p>".$row2['address1']."</p>
					</div>
				</div>"; */
				$pic=str_replace("C:fakepath", "uploaded_images/", $row2['profile_pic']);
			$string1.="<tr><td>".$jj."<td style='width:50%'>".$row2['name']."</td><td style='width:50%'><img  src='".$pic."' height='42' width='42'></td>
			<td style='width:50%'>".$row2['phone']."</td><td style='width:130px'>".$row2['address1']."</td><td><input type='button' class='button button1' value='Order' onclick='order_this(".$row2["worker_id"].")'></td></tr>";
				//$resp[$jj]=$string1;
				$jj++;
					
	
	} 
	  
 
echo $string1; 

?>