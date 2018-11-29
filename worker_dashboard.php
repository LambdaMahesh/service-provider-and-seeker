<!DOCTYPE html>
<html>
<title>WOrker Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

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

</style>
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
  <div class="w3-bar-item w3-padding-24 w3-wide">Hi,<?php echo $worker_name ; ?></div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Welcome to Service Provider Dashboard</p>
   
  </header>

  <!-- Image header -->
 

  <!-- Product grid -->
  
  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-20">
     <p id="name"><b>Dear <?php echo $worker_name ; ?>,</b></p>
  </div>
  
  <!-- Footer -->
  <footer class="w3-padding-10 w3-light-grey " id="footer">
    <div class="w3-row-padding">
	<div id="info">
	<p>The Service Provider Dashboard helps to manage your daily orders and makes you makes you to get connected with customers.</p>
	<p>As you are a part of our family, we always want to provide a good technical support for you always.</p>
	<p>Please be in touch with our Customer Support team with contact information as follows</div>
      <div class="w3-col s4">
      
     

     
    </div>
  </footer>
  <br>
  <br>
  
  <div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box" class="w3-padding-1">
						<h3>Address</h3>
						<p>#73,richmond street,15th main,</p>
						<p>near domminos, Kormangala</p>
						Bangalore-045
						</p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Phone</h4>
						<p>+91 9789765434</p>
						<p>+91 9375848232</p>
						<p>080-266760765</p>
					</div>
					<div class="col-md-4 animate-box">
						<h4> Mail </h4>
						<p>support@yourjob.com</p>
						<p>support_pro@yourjob.com</p>
					</div>
				</div>
				
			</div>
		</div>

   <!-- End page content -->
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