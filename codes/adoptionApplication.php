<?php
$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['n']) && !empty($_POST['type']) && !empty($_POST['house'])&& !empty($_POST['landlord'])){
        
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $nofm=$_POST['n'];
        $type=$_POST['type'];
        $kofh=$_POST['house'];
        $landlord=$_POST['landlord'];

                

        $q = "INSERT INTO adoption(name,phone,email,address,noOfMembers,kindOfHouse,householdDesc,landlord) VALUES ('$name','$phone','$email','$address','$nofm','$type','$kofh','$landlord')";

        $run=mysqli_query($conn,$q) or die(mysqli_error($conn));
        
        if($run){
            echo "You have successfully submitted your application!";
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
 <title>adoption application</title>
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

        <h2>Adoption application</h2>
        <p style="font-family:Arial, Helvetica, sans-serif;">
        If you are looking to adopt one of our cats, please fill up the following form.
        Once your application has been reviewed, you will be contacted via email
        to appear for an interview and collect your chosen cat.</p>

    <div class="form">
        <form id="details" action="" method="POST" style="font-family:Arial, Helvetica, sans-serif; color: white">
        <h3>Applicant contact information:</h3>
            <p><label>Name:<p><input type="text" id="name" name="name"></p></label></p>
            <p><label>Phone: <p><input type="text" id="phone" name="phone"></p></label></p>
            <p><label>email: <p><input type="text" id="email" name="email"></p></label></p>
            <p><label>Address: <p><input type="text" id="address" name="address"></p></label></p>
          
        <h3>Household information</h3>
        
            <p><label>Number of members living in the house:<p> <input type="number" id="n" name="n"></p></label></p>
            <p><label>Kind of house(townhome, apartment, farm etc.):<p> <input type="text" id="house" name="house"></p></label></p>
            <p><label>Please describe your household (active, noisy, quiet, average):<p> <input type="text" id="type" name="type"></p></label></p>
            <p><label>If you live in a rented place, please provide details of the landlord:<p> <input type="text" id="landlord" name="landlord"></p></label></p>
          
          <input type="checkbox" id="agree" name="agree" value="agree">
          <label for="agree"> I agree to give proper love and attention to my pet and take care of it to the best of my abilities.</label><br>
          <p><button class="button" type="submit" name="submit">Submit</button></p>
          </form>
            <script src="javascript.js"></script>
    </div>
</body>
</html>
    