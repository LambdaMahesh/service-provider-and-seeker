<!DOCTYPE html>
<html>
<title>Customer dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
	

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
$cust_id=$_GET['cid'];
$sql="select name from cusomer where cost_id='$cust_id'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
	$cust_name=$row['name'];
}
 
?>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Hi, <?php  echo $cust_name ;  ?> </b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="myaccount_cust.php?cid=<?php echo $_GET['cid']; ?>" class="w3-bar-item w3-button">My Account</a>
    <a href="pending_order_cust.php?cid=<?php echo $_GET['cid']; ?>"" class="w3-bar-item w3-button">Pending Order</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Order History<i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="completed_order_cust.php?cid=<?php echo $_GET['cid']; ?>" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Completed</a>
      <a href="rejected_order _cust.php?cid=<?php echo $_GET['cid']; ?>" class="w3-bar-item w3-button">Rejected By Worker</a>
     
    </div>
    <a href="login2.html" class="w3-bar-item w3-button">Logout</a>
    
  </div>
</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  
  
 
	<br><br><br>
				<div id="myForm" >
					<span class="login100-form-title">
						Welcome to Customer Dashboard
					</span>
					
                   <div class="wrap-input100 validate-input" data-validate = "Search for srvice" >
						<select  id="a04" class="input100" name="type"> <!--required-->
						 <option value="" disabled selected hidden>Search For Service</option>
                         <option value="software engg">Software Engineer</option>
                         <option value="Drivers">Drivers</option>
                         <option value="Chief">Chef</option>
                         <option value="Doctors">Doctors</option>
						 <option value="Technician">Technician</option>
                         <option value="Photographer">Photographer</option>
                         <option value="Salesman">Salesman</option>
						 <option value="Accountant">Accountant</option>
                         <option value="Plumbers">Plumbers</option>
						
                        </select>	
						 <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
					</div>
				<!--	
					<div class="wrap-input100 validate-input" data-validate = "Valid Date Required">
						<input   id="a07" class="input100" type="date" name="date" placeholder="Service Reruire date" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid Date Required">
						<input   id="a07" class="input100" type="time" name="time_from" placeholder="From time" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid Date Required">
						<input   id="a07" class="input100" type="time" name="time_to" placeholder="To time" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div> -->
					 <div class="container-login100-form-btn">
						<button id="search" class="login100-form-btn"> 
						Search
						</button>	
					</div> 

</div>
<br><br><br><br><br><br><br>
<center>

<div id="table"  style="display:none">
   <table id="t01">
     
  <tr>
    <th style="width:30px">SNo</th>
    <th style="width:130px">Name</th> 
    <th style="width:130px">Profile Picture</th>
	<th style="width:130px">Contact</th>
    <th style="width:130px">Place</th>
	<th style="width:80px">Order</th>
    	
    
  </tr>
   <tbody id="tb1">
   
   </tbody>
  
</table>
</div>
</center>
					
  <!-- Image header -->
 

  <!-- Product grid -->
  
  <!-- Subscribe section -->
 
  
  <!-- Footer -->
 

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




function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>


<script>
 $(document).ready(function(){ 
    $("#search").click(function(){
		document.getElementById("myForm").style.display= "none";
		document.getElementById("table").style.display= "block";
		
		var type=document.getElementById("a04").value;
		

	 $.ajax({
      type: "POST",
      url: "searchresults_process.php",
      data: {type:type,},
	
   success: function(data){
          
		   $("#tb1").empty();
		 $("#tb1").append(data);
		  
      }
});
	});
});

</script>
<script>
function order_this(wid)
{
	var wid=wid;
	var file1=window.location.href;
var url=new URL(file1);
var cid=url.searchParams.get("cid");
$.post("order_cus.php",{cid:cid,wid:wid},
function(data)
{
	alert(data+cid+wid);
});
}
</script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
	font-size:20px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	border-radius: 30%;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

</style>

</body>
</html>
