<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Pospoint</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.17.0/math.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>

<style>
.center {
  
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #000;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<body>




<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  
    
    <h7 class="w3-bar-item w3-button w3-hide-small w3-hover-white"><?php echo date("Y-m-d h:i:s"); ?></h7>
    <a href="https://pospoint.be" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">powere by Pospoint Inc</a>
   
  </div>
</div>
<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <div style="border:1px solid #ccc; boder-radius:5px;text-align:center;">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
   <center>
  <h3 class="w3-bar-item w3-button w3-hover-black w3-center" href="javascript:void(0)" onclick="openMenu(event, 'FAMILY');">FAMILY MENU</h3>
  <hr>

  <h3 class="w3-bar-item w3-button w3-hover-black w3-center" href="javascript:void(0)" onclick="openMenu(event, 'FRIED');">FRIED CHICKEN</h3>
  <hr>


  <h3 class="w3-bar-item w3-button w3-hover-black w3-center" href="javascript:void(0)" onclick="openMenu(event, 'BRUGERS');">BRUGERS</h3>
  <hr>

  <h3 class="w3-bar-item w3-button w3-hover-black w3-center" href="javascript:void(0)" onclick="openMenu(event, 'WOK');">WOK</h3>
  <hr>

  <h3 class="w3-bar-item w3-button w3-hover-black w3-center" href="javascript:void(0)" onclick="openMenu(event, 'FRIETEN');">FRIETEN</h3>
</center>
  </div>
  <a  class="w3-bar-item w3-button w3-hover-black w3-center" href="/logout.php" class="btn">Logout</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="border:1px solid #ccc;width:60%; height:150px; text-align: center;">
  <center>
    
   <img src=https://th.bing.com/th/id/R.c665b134b6bd00297090cf062bdb1f85?rik=Zos18vzjEAHheQ&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f2016%2f04%2fTable-PNG-Image.png&ehk=TvH%2fDJImHRlqDdlAHeBdBcYDFX1NIkqbgrKmth08D8w%3d&risl=&pid=ImgRaw&r=0" style="width: 150px; height:100Px;"/>
   <h4>Tables</h4><br>
</center>
  </header>
  
  <div class="center">
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>

</div>


  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
    <div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:2000px;">
  <div class="w3-row w3-center ">
      <a href="javascript:void(0)" onclick="openMenu(event, 'FAMILY');" id="myLink">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'FRIED');">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'BRUGERS');">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'WOK');">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'FRIETEN');">
        <div class="w3-col s6 tablink"></div>
      </a>
      
    </div>
  
      


    <div class="container" ng-app="shoppingCart" ng-controller="shoppingCartController" ng-init="loadProduct(); fetchCart();">

      <div id="FAMILY" class="w3-container menu w3-padding-64 w3-card">
      <h1>FAMILY MENU</h1>
			<form method="post">
				<div class="row">
					<div class="col-md-3" style="margin-top:12px;" ng-repeat = "product in products">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; " align="center">
						
							<h4 class="text-info">{{product.name}}</h4>
							<h4 class="text-danger">{{product.price}}</h4>
							<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary form-control" value="+" ng-click="addtoCart(product)" />
						</div>
					</div>
				</div>
			</form>
		</div>

    <div id="BRUGERS" class="w3-container menu w3-padding-64 w3-card">
    <h1>BRUGERS</h1>
		<form method="post">
				<div class="row">
					<div class="col-md-3" style="margin-top:12px;" ng-repeat = "product in products">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; " align="center">
						
							<h4 class="text-info">{{product.name}}</h4>
							<h4 class="text-danger">{{product.price}}</h4>
							<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary form-control" value="+" ng-click="addtoCart(product)" />
						</div>
					</div>
				</div>
			</form>
		</div>
    <div id="FRIED" class="w3-container menu w3-padding-64 w3-card">
    <h1>FRIED CHICKEN</h1>
		<form method="post">
				<div class="row">
					<div class="col-md-3" style="margin-top:12px;" ng-repeat = "product in products">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; " align="center">
						
							<h4 class="text-info">{{product.name}}</h4>
							<h4 class="text-danger">{{product.price}}</h4>
							<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary form-control" value="+" ng-click="addtoCart(product)" />
						</div>
					</div>
				</div>
			</form>
		</div>

    <div id="WOK" class="w3-container menu w3-padding-64 w3-card">
    <h1>WOK</h1>
		<form method="post">
				<div class="row">
					<div class="col-md-3" style="margin-top:12px;" ng-repeat = "product in products">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; " align="center">
						
							<h4 class="text-info">{{product.name}}</h4>
							<h4 class="text-danger">{{product.price}}</h4>
							<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary form-control" value="+" ng-click="addtoCart(product)" />
						</div>
					</div>
				</div>
			</form>
		</div>
    <div id="FRIETEN" class="w3-container menu w3-padding-64 w3-card">
    <h1>FRIETEN</h1>
		<form method="post">
				<div class="row">
					<div class="col-md-3" style="margin-top:12px;" ng-repeat = "product in products">
						<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; " align="center">
						
							<h4 class="text-info">{{product.name}}</h4>
							<h4 class="text-danger">{{product.price}}</h4>
							<input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary form-control" value="+" ng-click="addtoCart(product)" />
						</div>
					</div>
				</div>
			</form>
		</div>

 
   
    <div class="table-responsive" id="order_table">
				<table class="table table-bordered table-striped">
					<tr>  
						<th width="40%">Product Name</th>  
						<th width="10%">Quantity</th>  
						<th width="20%">Price</th>  
						<th width="15%">Total</th>  
						<th width="5%">Action</th>  
					</tr>
					<tr ng-repeat = "cart in carts">
						<td>{{cart.product_name}}</td>
						<td>{{cart.product_quantity}}</td>
						<td>{{cart.product_price}}</td>
						<td>{{cart.product_quantity * cart.product_price}}</td>
						<td><button type="button" name="remove_product" class="btn btn-danger btn-xs" ng-click="removeItem(cart.product_id)">Remove</button></td>
					</tr>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td colspan="2">{{ setTotals() }}</td>
					</tr>
				</table>
			</div>
    </div>





     
   
  </div>
</div>
    </div>
    
  </div>

</div>
<hr>


  <script>

var app = angular.module('shoppingCart', []);

app.controller('shoppingCartController', function($scope, $http){
	
	$scope.loadProduct = function(){
		$http.get('fetch.php').success(function(data){
            $scope.products = data;
        })
	};
	
	$scope.carts = [];
	
	$scope.fetchCart = function(){
		$http.get('fetch_cart.php').success(function(data){
            $scope.carts = data;
        })
	};
	
	$scope.setTotals = function(){
		var total = 0;
		for(var count = 0; count<$scope.carts.length; count++)
		{
			var item = $scope.carts[count];
			total = total + (item.product_quantity * item.product_price);
		}
		return total;
	};
	
	$scope.addtoCart = function(product){
		$http({
            method:"POST",
            url:"add_item.php",
            data:product
        }).success(function(data){
			$scope.fetchCart();
        });
	};
	
	$scope.removeItem = function(id){
		$http({
            method:"POST",
            url:"remove_item.php",
            data:id
        }).success(function(data){
			$scope.fetchCart();
        });
	};
	
});

</script>
  <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>
