<?php

$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

if(isset($_REQUEST['remove'])){ 
    $id=$_REQUEST['id'];
    $query1="DELETE FROM cart WHERE id = '$id'";
    $del = mysqli_query($conn,$query1);

    if($del){
        echo "Item removed from cart";
        header("Location:cart.php");
    
    }
    else
{
    echo "Error deleting record".mysqli_error($conn); // display error message if not delete
}

}

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>Cart</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
 <style>
    table{
    border: 2px solid black;
  }
  
  table {
    border-collapse: collapse;
    width: 50%;
  }
  
  th{
    height: 50px;
    text-align: center;
    border: 1px solid black;

  }
  td{
      text-align: center;
      border: 1px solid black;
  }

 </style>
</head>

<body onload="quoteGenerator()" style="background-color:#C6C6C6">
    
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

    <div id="cart" style="font-family:Arial, Helvetica, sans-serif;">
        <h2>Viewing all items in cart</h2>

	<table class="table">
		<tr>
            <th>ID</th>
            <th>Product ID</th>
			<th>Product</th>
			<th>Price</th>
				    
		</tr>

    <?php
    $sql="select * from cart";
    $result=mysqli_query($conn,$sql);
    
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["productID"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo '<td><form action="" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" name="remove" value="Remove from cart"></form></td>';
        }
        echo "</table>";
    }
    else{
        echo "Your cart is empty!";
    }

    ?>

<a href="confirm.php"><button class="button">Checkout</button></a>
    
    <script src="javascript.js"></script>
</body>
</html>