<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array(
		        array(
		            'email'=>'selim@gmail.com' ,
                    'password'=>'123456'
                ),
               array(
                   'email'=>'mohamed@gmail.com' ,
                   'password'=> '234567'
               ),
               array(
                   'email'=>'ahmed@gmail.com' ,
                   'password'=> '345678'
               ),
            );
		
		/* Check and assign submitted Username and Password to new variable */
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (array_search($email,array_column($logins,'email')) && array_search($Password,array_column($logins,'password')) ){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['EmailData']['email']=$email;
			header("location:index1.php");
			exit;
		} else {
	          	echo "Unsuccessful attempt: Set error message"; 
 	        	}
	}
?>
<!doctype html>
<html>
<head>
 
<title>PHP Login  session</title>
 </head>
<body>
 
 
<form action="" method="post" name="Login_Form">

  <?php  echo (isset($msg))?$msg:'';?>
    <label for="email">Email : </label>
      <input name="email" type="email">
      <br>
      <br>
    <label for="password">Password : </label>
    <input name="Password" type="password">
     <br>
     <br>
        <input name="Submit" type="submit" value="login">
  
</form>
</body>
</html>