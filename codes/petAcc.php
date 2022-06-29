<?php

$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

$q = "SELECT * from petacc where id=1";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id1 = $row['id'];
$name1=$row['name'];
$price1=$row['price'];

$q = "SELECT * from petacc where id=2";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id2 = $row['id'];
$name2=$row['name'];
$price2=$row['price'];

$q = "SELECT * from petacc where id=3";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id3 = $row['id'];
$name3=$row['name'];
$price3=$row['price'];

$q = "SELECT * from petacc where id=4";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id4 = $row['id'];
$name4=$row['name'];
$price4=$row['price'];

$q = "SELECT * from petacc where id=5";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id5 = $row['id'];
$name5=$row['name'];
$price5=$row['price'];

$q = "SELECT * from petacc where id=6";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id6 = $row['id'];
$name6=$row['name'];
$price6=$row['price'];


//add product1 to cart

if(isset($_POST['add1'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id1','$name1','$price1')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product2 to cart

if(isset($_POST['add2'])){

    $query="INSERT INTO cart(productID,name,price) VALUES('$id2','$name2','$price2')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product3 to cart

if(isset($_POST['add3'])){

    $query="INSERT INTO cart(productID,name,price) VALUES('$id3','$name3','$price3')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product4 to cart

if(isset($_POST['add4'])){

    $query="INSERT INTO cart(productID,name,price) VALUES('$id4','$name4','$price4')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product5 to cart

if(isset($_POST['add5'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id5','$name5','$price5')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product6 to cart

if(isset($_POST['add6'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id6','$name6','$price6')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}






?>



<!DOCTYPE html>
<html lang="en">
 
<head>
 <title>Pet Accessories</title>
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

    <h2 style="font-family:Arial, Helvetica, sans-serif;">Available pet accessories</h2>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/bed.jpg" alt="Pancake" width="300" height="300">
        <form action="" method="POST"><button class="button" name="add1">Add to Cart</button></form>
    </div>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/foodbowl.jpg" alt="Hersheys" width="300" height ="300">
        <form action="" method="POST"><button class="button" name="add2" >Add to Cart</button></form>
    </div>
    
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/food.jpg" alt="Mona" width="300" height ="300">
        <form action="" method="POST"><button class="button" name="add3">Add to Cart</button></form>
    </div>
        
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/collar.jpg" alt="Puchu" width="300" height ="300">
        <form action="" method="POST"><button class="button" name="add4">Add to Cart</button></form>
    </div>
    
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/litterbox.jpg" alt="Puchu" width="300" height ="300">
        <form action="" method="POST"><button class="button" name="add5">Add to Cart</button></form>
    </div>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/litter.jpg" alt="" width="300" height ="300">
        <form action="" method="POST"><button class="button" name="add6">Add to Cart</button></form>
    </div>
        
   <script src="javascript.js"></script>
</body>
</html>

