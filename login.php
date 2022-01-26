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

    <form class="modal-content" action=""  method="POST">
    <div class="container">
    <h3>Admin Sign In</h3>
     
     <input name="email" type="text" value="" placeholder="Email..." required />

     <input type="password" placeholder="Password" name="password" required>
     <select class="form-control" name="role">
       <option  required>Select Role</option>
       <option value="Admin">Admin</option>
       <option value="Empolyee">Empolyee</option>
     </select>
     
     <div class="clearfix">
      
       <button type="submit" name="login" class="signupbtn">Sign In</button>
       <button type="" class="cancelbtn"> Cancel</button>
       <input type="checkbox"> Remember me<br></br>
           
           Forgot <a href="#"> password? </a>
     </div>
    </div>
  </form>
  
</body>

</html>