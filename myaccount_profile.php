<!DOCTYPE html>
<html>
<title>My Account</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
#name{
	font-family: "Montserrat";
	color:white;
}
#info{
	font-family: "Montserrat";
	font-size:20px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
<?php
require_once("config.php");
$wid=$_GET['wid'];
$sql="select * from worker_reg where worker_id='$wid'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
	$worker_name=$row['name'];
	$worker_type=$row['type'];
	$worker_email=$row['email'];
	$worker_phone=$row['phone'];
	
}


$sql1="select profile_pic from worker_skill where worker_id='$wid' ";



$result2=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_assoc($result2))
{
	$profile_pic=$row1['profile_pic'];
	
}

$pic=str_replace("C:fakepath","uploaded_images/", $profile_pic);

?>
<?php
require_once("config.php");
$wid=$_GET['wid'];
$sql="select name from worker_reg where worker_id='$wid'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
	$worker_name=$row['name'];
}

?>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Hi,<?php echo $worker_name ; ?></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="myaccount_profile.php?wid=<?php echo $_GET['wid']; ?>" class="w3-bar-item w3-button">My Account</a>
    <a href="pending_order_worker.php?wid=<?php echo $_GET['wid']; ?>" class="w3-bar-item w3-button">New Orders</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Order History<i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="completed_order_worker.php?wid=<?php echo $_GET['wid']; ?>" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Completed</a>
      <a href="rejected_order_worker.php?wid=<?php echo $_GET['wid']; ?>" class="w3-bar-item w3-button">Rejected</a>
     
    </div>
    <a href="login1.html" class="w3-bar-item w3-button">Logout</a>
    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Hi,Name</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">
</div>
  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  <br>
  <br><br><br>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="<?php echo $pic; ?> " alt="John" style="width:100%">
  <h1><?php echo $worker_name; ?></h1>
  <p class="title"><?php echo $worker_type; ?></p>
  <p class="title"><i class="fa fa-envelope" aria-hidden="true"></i> :   <?php echo $worker_email; ?></p>
  <p class="title"><i class="fa fa-phone" aria-hidden="true"></i>   :     <?php echo $worker_phone; ?></p>
 <p><button>Update</button></p>
</div>

  


<!-- Newsletter Modal -->


<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>