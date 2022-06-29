<?php

$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

$sql="SELECT name,rating,review FROM reviews";
$result=mysqli_query($conn,$sql);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['rating']) && !empty($_POST['review'])){
        
        $name=$_POST['name'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
                   

        $q = "INSERT INTO reviews(name,rating,review) VALUES ('$name','$rating','$review')";

        $run=mysqli_query($conn,$q) or die(mysqli_error($conn));
        
        if($run){
            echo "Thank you!";
            header("Location: reviews.php");
        }
        
    }
    else{
        echo "All fields required";
    }
    mysqli_close($conn);

}



?>

<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>Reviews</title>
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

    <h2>See what our patrons have to say about us!</h2>
    <table class="table">
		<tr>
            <th>Name</th>
			<th>Rating (out of 5)</th>
			<th>Review</th>
				    
		</tr>
        <?php 
          while($rows=mysqli_fetch_assoc($result)){
         ?>
         <tr>
         	<td><?php echo $rows['name'] ?></td>
         	<td><?php echo $rows['rating'] ?></td>
         	<td><?php echo $rows['review'] ?></td>
         </tr>
        <?php } ?>
    </table>
    <br>
    <br>

    <div class="form">
    <form action="" method="POST" style="font-family:Arial, Helvetica, sans-serif; color: white"> 
    <p>Let us know what you think of our services and products!</p>
            <p><label>Name:<p> <input type="text" id="name" name="name"></p></label></p>
            <p><label>Rating: <p><input type="number" id="rating" name="rating" min="1" max="5"></p></label></p>
            <p><label>Review:<p><textarea name="review" placeholder="Leave a review!" row="10" cols="50"></textarea></p></label></p>
            
          <p><button class="button" type="submit" name="submit">Submit</button></p>
          </form>
    </div>
    
    <script src="javascript.js"></script>

    
</body>
</html>