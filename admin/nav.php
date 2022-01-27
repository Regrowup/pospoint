<!DOCTYPE html>
<html>
<title>Pospoint</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <hr>
  <a href="/admin/home.php" class="w3-bar-item w3-button">Home</a>
  <a href="/logout.php" class="w3-bar-item w3-button">Logout</a>
  <hr>
  <p><b>Register</b></p>
  <hr>
  <a href="#" class="w3-bar-item w3-button">Sales</a>
  <a href="#" class="w3-bar-item w3-button">Edit Sales</a>
  <a href="#" class="w3-bar-item w3-button">Customer Payment</a>
  <a href="#" class="w3-bar-item w3-button">Payments</a>
  <a href="#" class="w3-bar-item w3-button">Close Cash</a>
  <hr>
  <p><b>Administration</b></p>
  <hr>
  <a href="#" class="w3-bar-item w3-button">Customers</a>
  <a href="#" class="w3-bar-item w3-button">Suppliers</a>
  <a href="#" class="w3-bar-item w3-button">Stock</a>
  <a href="#" class="w3-bar-item w3-button">Sales</a>
  <a href="#" class="w3-bar-item w3-button">Maintenance</a>
  <a href="#" class="w3-bar-item w3-button">Presence Management</a>
  <hr>
  <p><b>Utitlities</b></p>
  <hr>
  <a href="#" class="w3-bar-item w3-button">Tools</a>
  <hr>
  <p><b>System</b></p>
  <hr>
  <a href="#" class="w3-bar-item w3-button">Change Password</a>
  <a href="#" class="w3-bar-item w3-button">Configuration</a>
  <a href="#" class="w3-bar-item w3-button">Printers</a>
</div>

<div id="main">

<div class="w3-black">
  <button id="openNav" class="w3-button w3-black w3-xlarge" onclick="w3_open()">&#9776;</button> | <?php echo date('Y-m-d h:i:s');?>
  
  <div class="w3-bar-item w3-button w3-right">
  <h6> Pospoint </h6>
  </div>
</div>

<div class="w3-container">
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:248px;" id="mySidebar"><br>
           
           <div class="w3-bar-block">
               <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>Close Menu</a>
               <div class="w3-container w3-row">
               <a href="/dashboard/home.php" class="w3-bar-item w3-button">Menu</a>
               <hr>
               <a href="#breakfast" class="w3-bar-item w3-button w3-padding">Breakfast</a>
               <hr>
               
               <a href="#main" class="w3-bar-item w3-button w3-padding">Main</a>
               <hr>
               
               <a href="#" class="w3-bar-item w3-button w3-padding">Cold Snacks</a>
              
               <hr>
               
               <a href="#" class="w3-bar-item w3-button w3-padding">Hot Snacks</a>
              
               <hr>
               
               <a href="#" class="w3-bar-item w3-button w3-padding">Salads</a>
              
               <hr>
               <a href="#" class="w3-bar-item w3-button w3-padding">Pasta</a>
               
               <hr>
               <a href="#" class="w3-bar-item w3-button w3-padding">Seafood</a>
               <hr>
               <a href="#" class="w3-bar-item w3-button w3-padding">Drinks</a>
               
               <hr>
           
                   <a href="#" class="w3-bar-item w3-button">Setting</a> 
                <hr>
             
               <a href="/logout.php" class="w3-bar-item w3-button">Log Out</a>
               </div>
           </div>
       </nav>
