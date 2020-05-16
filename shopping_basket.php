<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array(
		        array(
		            'product'=>'fanta' ,
                    'price'=>'29' ,
                    'quantity' => '9000'
                ),
               array(
                   'product'=>'edita' ,
                   'price'=> '25' ,
                    'quantity' => '10000'

               ),
               array(
                   'product'=>'marbela' ,
                   'price'=> '35' ,
                   'quantity' => '11000'

               ),
            );
		
		/* Check and assign submitted Username and Password to new variable */
		$product = isset($_POST['product']) ? $_POST['product'] : '';
		$price = isset($_POST['price']) ? $_POST['price'] : '';
		$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

		
		/* Check Username and Password existence in defined array */		
		if (array_search($product,array_column($logins,'product')) && array_search($price,array_column($logins,'price')) && array_search($quantity,array_column($logins,'quantity'))){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['EmailData']['product']=$product;
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
    <label for="product">Product : </label>
      <input name="product" type="product">
      <br>
      <br>
    <label for="price">Price : </label>
    <input name="price" type="price">
     <br>
      <br>
    <label for="quantity">Quantity : </label>
    <input name="quantity" type="quantity">
     <br>
     <br>
        <input name="Submit" type="submit" value="adding">
  
</form>
</body>
</html>