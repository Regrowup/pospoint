<?php
//Databse connection file
include('config.php');

if(isset($_POST['submit'])){
	// Counting No fo skilss
$count = count($_POST["menu1"]);

$menu1=$_POST["menu1"];	
$menu1_price=$_POST["menu1_price"];	

$main_menu=$_POST["main_menu"];	
if($count > 1){
	for($i=0; $i<$count; $i++){

			if(trim($_POST["menu1"][$i] != '')){
				$sql =mysqli_query($con,"INSERT INTO products(main_menu,name,price) VALUES('$main_menu','$menu1[$i]','$menu1_price[$i]')");
			}
	}
	
echo "<script>alert('Skills inserted successfully');</script>";

}else if($count==1){
	$menu1=$_POST["menu1"];	
	$menu1_price=$_POST["menu1_price"];	
	//$menu1=explode(" ",$menu1);
	//$menu1_price=explode(" ",$menu1_price);
	$sql =mysqli_query($con,"INSERT INTO products(main_menu,name,price) VALUES('$main_menu','$menu1','$menu1_price')");
	
	
	//echo "<script>alert('Please enter skill');</script>";
}
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<h2 align="center">Dynamically Add Menu</h2><br />
			<div class="form-group">
				<form name="add_name" id="add_name" method="post">
				<td><input type="text" name="main_menu" placeholder="Enter your Main M" class="form-control name_list" /></td>
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
							
								<td><input type="text" name="menu1[]" placeholder="Food" class="form-control name_list" /></td>
								<td><input type="text" name="menu1_price[]" placeholder="Price" class="form-control name_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">+ Add Submenu1</button></td>
							</tr>
							<hr>
					
						</table>
					
						<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</body>
	<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="menu1[]" placeholder="Food" class="form-control name_list" /></td><td><input type="text" name="menu1_price[]" placeholder="Price" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	
	});

	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});
</script>
</html>






