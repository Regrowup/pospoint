<?php
session_start();

include('config.php');

if(isset($_COOKIE['rememberme'])){
    //$conn=connectDB();
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
    
    //$sql_query = "select count(*) as cntUser,id from login where id='".$userid."'";
        $sql_query = "select * from crm_user where id='".$userid."'";
        $result = mysqli_query($conn,$sql_query);
        $num = mysqli_fetch_array($result);

        //$count = $num['cntUser'];

        if($num > 0){
             $userid = $num['id'];
            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000),"/");
            }
            
            $$userid= $num['id'];
        $_SESSION['id'] = $userid; 
       
        $_SESSION['valid'] = $num['id'];
		
		$_SESSION['email'] = $num['email'];		
        $_SESSION['name'] = $num['name'];
	
		$_SESSION['mobile'] = $num['mobile'];
           
           
            
        //users log
       
        $extra="home.php";
        
       
    
        header("location: /admin/$extra");    
             
            
         exit; 
    }else{
        
        echo "Error: " . $sql_query. "<br>" . mysqli_error($mysqli);
        $_SESSION['msg']="Invalid username or password";
        $extra="login.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $msg="Username or Password Invalid";
        
    }
}

// Encrypt cookie
function encryptCookie( $value ) {

   $key = hex2bin(openssl_random_pseudo_bytes(4));

   $cipher = "aes-256-cbc";
   $ivlen = openssl_cipher_iv_length($cipher);
   $iv = openssl_random_pseudo_bytes($ivlen);

   $ciphertext = openssl_encrypt($value, $cipher, $key, 0, $iv);

   return( base64_encode($ciphertext . '::' . $iv. '::' .$key) );
}

// Decrypt cookie
function decryptCookie( $ciphertext ) {

   $cipher = "aes-256-cbc";

   list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
   return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

}


// On submit
if(isset($_POST['login'])){
    
    $uname = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if ($uname != "" && $password != ""){

        $sql_query = "select * from crm_user where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $num = mysqli_fetch_array($result);

        //$count = $num['cntUser'];

        if($num > 0){
             $userid = $num['id'];
            if(isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000),"/");
            }
            
            
        $userid = $_SESSION['id'] ;
        $_SESSION['id'] = $num['id'];
        $_SESSION['valid'] = $num['id'];
		//$_SESSION['company_name'] = $num['company_name'];
	
	//	$_SESSION['image'] = $num['image'];
		$_SESSION['email'] = $num['email'];		
		//$_SESSION['address'] = $num['address'];
		$_SESSION['mobile'] = $num['mobile'];
        $_SESSION['name'] = $num['name'];
           
           
            
        //users log
        $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
        $action="Login";
        mysqli_query($conn,"insert into userlog(userid,email,action,userIP) values('".$_SESSION['id']."','".$_SESSION['valid']."','$action','$uip')");
        
        
        //Redirect to the home page
        $extra="home.php";
        $home="";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    
        
        
        header("location: /admin/$extra");    
            
         exit;    
            
        }else{
        echo "Error: " .$sql_query . "<br>" . mysqli_error($conn);
        $_SESSION['msg']="Invalid username or password";
        $extra="login.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $msg="Username or Password Invalid";
        }

    }

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
.loginbtn {
  background-color: #000;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}
.cancelbtn {
  background-color: #f44336;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
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
  <h3>Admin Sign In</h3>
    <hr>

    <input name="email" type="text" value="" placeholder="Email..." required />

     <input type="password" placeholder="Password" name="password" required>
     <select class="form-control" name="role">
       <option  required>Select Role</option>
       <option value="Admin">Admin</option>
       <option value="Empolyee">Empolyee</option>
     </select>
     
     <div class="clearfix">
     <button type="" class="cancelbtn"> Cancel</button>
       <button type="submit" name="login" class="loginbtn">Sign In</button>
      
       <input type="checkbox"> Remember me<br></br>
           
           Forgot <a href="#"> password? </a>
  </div>
  </div>
  
 
</form>

</body>
</html>
