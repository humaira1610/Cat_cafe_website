<?php
$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

if(isset($_POST['submit'])){
    if(!empty($_POST['slotDate']) && !empty($_POST['slotTime']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['address'])){
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $date=$_POST['slotDate'];
        $time=$_POST['slotTime'];
                

        $q = "INSERT INTO visiting(name,address,phone,email,date,slot) VALUES ('$name','$address','$phone','$email','$date','$time')";

        $run=mysqli_query($conn,$q) or die(mysqli_error($conn));
        
        if($run){
            echo "you have successfully made your appointment";
        }
        
    }
    else{
        echo "All fields required";
    }
    mysqli_close($conn);

}

?>

<html lang="en">
 
<head>
 <title>reserve a slot</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="stylesheet.css" type="text/css"/>
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

    <h2 style="font-family:Arial, Helvetica, sans-serif;">Slot reservation</h2>
    <p style="font-family:Arial, Helvetica, sans-serif;">Please fill up the following form to reserve a slot. Payment will be taken upon arrival on the reserved day.</p>

<div class="form">
    <form action="" method="POST" style="font-family:Arial, Helvetica, sans-serif; color: white"> 
    
    <label for="slotDate">Date:</label>
    <input type="date" id="slotDate" name="slotDate" placeholder="Pick a date">
    <label>Pick a time slot:</label>        
        <select name="slotTime" id="slotTime">
            <option value="10 to 11">10:00 to 11:00</option>
            <option value="11 to 12">11:00 to 12:00</option>
            <option value="2 to 3">2:00 to 3:00</option>
            <option value="3 to 4">3:00 to 4:00</option>
            <option value="4 to 5">4:00 to 5:00</option>
          </select>

            <p><label>Name:<p> <input type="text" id="name" name="name"></p></label></p>
            <p><label>Phone: <p><input type="text" id="phone" name="phone"></p></label></p>
            <p><label>email:<p> <input type="text" id="email" name="email"></p></label></p>
            <p><label>Address:<p> <input type="text" id="address" name="address"></p></label></p>
                   
          <p><button class="button" type="submit" name="submit">Book this slot for me!</button></p>
          </form>
</div>

    <script src="javascript.js"></script>
</body>
</html>



