<!DOCTYPE html>
<html>
<title>Pospoint</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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