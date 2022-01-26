<?php
include('config.php');

if(isset($_POST['signup'])) {
    


  $name = $_POST['name'];
	$username = $_POST['username'];
  $email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	
	
$sql="INSERT INTO crm_user(name,username,email,phone,password) VALUES('$name','$username','$email','$phone','$pass')";
			
	if (mysqli_query($conn, $sql)) {
    
                
		$reg="<center>Registration successfully,And Your Account Username and Passord Was Sent To Your Email!</center>";
		echo "<br/>";
		//header('Location:url=/spages/login.php');
		//header("Locaurl=login.php");
		header("Location: /login.php");
		function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
   }
   $name = $_POST['name'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	
$to_email = $_POST['username'];
$subject = "RGU AI-CRM System, Member Registeration Details";
$message = "This Is your Username: ".$username." and This Is Your Password: ".$pass;
$headers = "From: system@regrowup.com";
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    
}



		
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Not Registered, Try Again Now";
    //header('Location:url=/spages/signup.php');
}

mysqli_close($conn);
	
}
       
?>

<?php include ("header.php");?>

<div class="container">
  <form class="modal-content" action=""  method="POST">
    
      <h3>Sign Up</h3>
     
      
     
      <input type="text" placeholder=" Person Name/Company Name" name="name" required />

      <input name="username" type="text" value="" placeholder="Username..." required />

      <input name="email" type="text" value="" placeholder="Email..." required />

      <input name="phone" type="text" value="" placeholder="Mobile..." required />

      <input type="password" placeholder="Password" name="password" required>
      
      
      <div class="clearfix">
       
        <button type="submit" name="signup" class="signupbtn">Sign Up</button>
      </div>
    
  </form>
  
  </div>
  


<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
