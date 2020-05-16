<?php session_start(); /* Starts the session */

if(!isset($_SESSION['EmailData']['email'])){
	header("location:login.php");
	exit;
    
}
if(isset($_POST['Add'])){
    if(isset($_POST['product'])){
       // unset($_SESSION['EmailData']['product']);
        $_SESSION['EmailData']['product'] = $_POST['product'];
    }

}


?>
 
  <?php
 $products = array(
    array('product'=>'fanta', 'price'=>29,'quantity'=> 9000),
    array('product'=>'edita','price'=> 25,'quantity'=> 10000),
    array('product'=>'marbela','price'=>35,'quantity'=> 11000),
);
  
    
?>
<html>
<body>
<table border="1">
    <thead >
    <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>The Price Product</th>
        <th>The quantity of the product </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $index=>$row):?>
        
        <tr>
            <td><?php echo ++$index; ?></td>
            <td><?php echo $row['product']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
          </tr>
    <?php endforeach;?>
   
 
    </tbody>
</table>
</body>
</html>

         You have logged . <a href="logout.php">Click here</a> to Logout.

</br>
</br>
</br>
 you can add your product in . <a href="shopping_basket.php">Click here</a> to adding .
 </br>
</br>
</br>
 you can delete your product in . <a href="delete_session.php">Click here</a> if you lik .



 