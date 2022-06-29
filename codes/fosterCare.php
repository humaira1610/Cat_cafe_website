<?php
$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['startDate']) && !empty($_POST['endDate']) && !empty($_POST['altphone'])){
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $stdate=$_POST['startDate'];
        $eddate=$_POST['endDate'];
        $altphone=$_POST['altphone'];

                

        $q = "INSERT INTO foster(name,phone,email,address,altphone,fromDate,toDate) VALUES ('$name','$phone','$email','$address','$altphone','$stdate','$eddate')";

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

<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>foster care</title>
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

    <h2 style="font-family:Arial, Helvetica, sans-serif;">Foster care slot reservation</h2>
    <p style="font-family:Arial, Helvetica, sans-serif;">Please fill up the following form to reserve a slot to avail our foster care services for your pet.
    50% advance payment will be taken on arrival on the day you leave your pet and the rest will be taken on the day you
    collect them.</p>
<div class="form">
    <form id="details" action="" method="POST" style="font-family:Arial, Helvetica, sans-serif; color: white">
    <label for="startDate">From:</label>
    <input type="date" id="startDate" name="startDate">
    <label for="endDate">To:</label>
    <input type="date" id="endtDate" name="endDate">

            <p><label>Name:<p><input type="text" id="name" name="name"></p></label></p>
            <p><label>Phone:<p><input type="text" id="phone" name="phone"></p></label></p>
            <p><label>email:<p><input type="email" id="email" name="email"></p></label></p>
            <p><label>Address:<p><input type="text" id="address" name="address"></p></label></p>
            <p><label>Alternative contact number in case of emergency: <p> <input type="text" id="altphone" name="altphone"></p></label></p>

          
          <p><button class="button" type="submit" name="submit">Submit</button></p>
          </form>
</div>
    
    <script src="javascript.js"></script>
</body>
</html>