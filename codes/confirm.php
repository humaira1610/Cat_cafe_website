<?php

$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);


if(isset($_POST['confirm'])){ 



    $query="DELETE FROM cart";
    $run=mysqli_query($conn,$query);
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $query1="INSERT INTO orders (name,phone,email,address) VALUES ('$name','$phone','$email','$address')";
    $run1=mysqli_query($conn,$query1);

    if($run){
        echo "Your order has been confirmed";
        header("Location: cart.php");
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>Confirmation</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
 
</head>

<body onload="quoteGenerator()" style="background-color:#C6C6C6"></body>
    
    <div id="top">
        <img src="images/logo.PNG" alt="logo" width="400" height ="110" class="left">
        
        <div id="sections"> 
            <a href="index.php" style="font-family:Arial, Helvetica, sans-serif;">Home</a>
            <a href="slotReserve.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Slot reservation </a>
            <a href="adoptionApplication.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Adoption</a>
            <a href="fosterCare.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Foster care</a>
            <a href="petAcc.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Pet Accessories</a>
            <a href="cafeMenu.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Cafe Menu</a>
            <a href="reviews.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Reviews</a>
            <a href="cart.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; My cart</a>
            <a href="contact.php" style="font-family:Arial, Helvetica, sans-serif;">&nbsp; Contact us!</a>
        </div>
    </div>
    
    <div id="quotes" style="font-family:Arial, Helvetica, sans-serif;">

    </div>

    <h2>Confirmation</h2>

    <div class="form">
        <form id="details" action="" method="POST" style="font-family:Arial, Helvetica, sans-serif; color: white">
        <p>Please provide your details:</p>
            <p><label>Name:<p><input type="text" id="name" name="name"></p></label></p>
            <p><label>Phone: <p><input type="text" id="phone" name="phone"></p></label></p>
            <p><label>email: <p><input type="text" id="email" name="email"></p></label></p>
            <p><label>Shipping address: <p><input type="text" id="address" name="address"></p></label></p>
            <button class="button" name="confirm" type="submit">Confirm my order</button>
            </form>
    </div>
    <script src="javascript.js"></script>
</body>
</html>
                
  