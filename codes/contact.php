<?php
if(isset($_POST['sendmessage'])){
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['msg'];

$from='ihumaira.1610@gmail.com';
$subject="new form submission";
$body="User Name: $name.\n".
        "User email: $visitor_email.\n".
            "User Message: $message.\n";

$to="ihumaira.1610@gmail.com";
$headers="From: $from \r\n";
$headers.="Reply-To: $visitor_email \r\n";

mail($to,$subject,$body,$headers);

//echo "Message sent!";
}





?>

<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>Home</title>
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

    <div id="about" style="font-family:Arial, Helvetica, sans-serif;">
        <h2>Have questions? Ask away!</h2>

    <div class="form" style="font-family:Arial, Helvetica, sans-serif; color: white">
        <form id="message" action="" method="POST">
        <p><label>Name: <input type="text" id="name" name="name" placeholder="Your name" required></label></p>
        <p><label>Email: <input type="text" id="email" name="email" placeholder="Your email address" required></label></p>
        <p><textarea name="msg" placeholder="What would you like to ask?" row="4" required></textarea></p>

        <button class="button" type="submit" name="sendmessage">Send</button>

        </form>
</div>
        <script src="javascript.js"></script>
</body>
</html>