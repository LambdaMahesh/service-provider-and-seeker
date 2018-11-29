<!DOCTYPE html>
<html>
<title>Pending Orders</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<?php 

require_once("config.php");
$cid=$_GET['cid'];
$today=mysqli_query($conn,"select order_id,order_no,w.phone,l.address1,ord_date,ord_time,status,w.name  from order_table  o join cusomer c on o.cust_id=c.cost_id join worker_reg w on w.worker_id=o.worker_id join worker_location l on w.worker_id=l.worker_id where cust_id='$cid' and status='pending'");

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

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Hi,Name</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <br><br>
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Your Pending Orders</p>
	<br><br><br>
	
   <table id="t01">
   <tr>
  <th> Sl No</th>
    <th>OrderNo</th>
    <th>Worker Name</th> 
    <th>Contact No</th>
	<th>Place</th>
    <th>Ordered Time</th>
    	
    
  </tr>
  <tbody>
   <?php
   $r=1;
   while($row=mysqli_fetch_array($today)){ ?>
   <tr>
  <td><?php echo  $r;  ?></td>
    <td><?php echo  $row['order_no'];  ?></td>
    <td><?php echo $row['name'] ;  ?></td> 
    <td><?php echo $row['phone'] ;  ?></td>
	<td><?php echo  $row['address1'];  ?></td>
    <td><?php echo $row['ord_time'] ;  ?></td>
    </tr>
   
   <?php 
   $r++;
   }  ?>	
</tbody>
  
</table>
  </header>

  <!-- Image header -->
 

  <!-- Product grid -->
  
  <!-- Subscribe section -->
  
  <!-- Footer -->
  <footer class="w3-padding-10 w3-light-grey " id="footer">
    
  </footer>
  <br>
  <br>
  
 

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