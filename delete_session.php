
<?php
session_start();

if(!isset($_SESSION['EmailData']['email'])){
	header("location:index1.php");
	exit;
 


if(isset($_POST['delete'])){
    if(isset($_POST['product'])){
       // unset($_SESSION['EmailData']['product']);
        $_SESSION['EmailData']['product'] = $_POST['product'];
       unset($_SESSION['EmailData']['product']);

        //unset($_SESSION);
      session_destroy();

             $_POST['product'] = $_SESSION['EmailData']['product'];

    }
}
 ?>
 <br> 
<?php echo ' Welcome Back :'.$_SESSION['EmailData']['product'];?>
  <br> 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="product">Product : </label>
    <input name="product" type="product" value="<?php echo $_SESSION['EmailData']['product'] ?>" required>
    <br>
    <br>
    <input name="delete" type="submit" value="delete">
</form>

you can complete shopping. <a href="index1.php">Click here</a> 

 if you like <a href="logout.php">Logout </a> to fished session .