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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width: 60%;
  margin-left: 20%;
  margin-right: 20%;
  margin-top: 5%;
  border: 1px solid #f1f1f1;
  border-radius: 10px;
  box-shadow: 3px 3px 5px #f1f1f1;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #000;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="Full Name" name="name" required />

      <input name="username" type="text" value="" placeholder="Username" required />

      <input name="email" type="text" value="" placeholder="Email" required />

      <input name="phone" type="text" value="" placeholder="Mobile" required />

      <input type="password" placeholder="Password" name="password" required/>
     
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="signup" class="registerbtn">Register</button>
    <div class="">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
  </div>
  
 
</form>

</body>
</html>
<!--
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
-->


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
