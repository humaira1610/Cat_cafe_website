<?php

$servername="localhost";
$user="root";
$password="";
$db="catness";

$conn=mysqli_connect($servername, $user, $password, $db);

$q = "SELECT * from cafemenu where id=1";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id1 = $row['id'];
$name1=$row['name'];
$price1=$row['price'];

$q = "SELECT * from cafemenu where id=2";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id2 = $row['id'];
$name2=$row['name'];
$price2=$row['price'];

$q = "SELECT * from cafemenu where id=3";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id3 = $row['id'];
$name3=$row['name'];
$price3=$row['price'];

$q = "SELECT * from cafemenu where id=4";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id4 = $row['id'];
$name4=$row['name'];
$price4=$row['price'];

$q = "SELECT * from cafemenu where id=5";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id5 = $row['id'];
$name5=$row['name'];
$price5=$row['price'];

$q = "SELECT * from cafemenu where id=6";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id6 = $row['id'];
$name6=$row['name'];
$price6=$row['price'];

$q = "SELECT * from cafemenu where id=7";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id7 = $row['id'];
$name7=$row['name'];
$price7=$row['price'];

$q = "SELECT * from cafemenu where id=8";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id8 = $row['id'];
$name8=$row['name'];
$price8=$row['price'];

$q = "SELECT * from cafemenu where id=9";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$id9 = $row['id'];
$name9=$row['name'];
$price9=$row['price'];


//add product2 to cart
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

//add product6 to cart

if(isset($_POST['add7'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id7','$name7','$price7')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product6 to cart

if(isset($_POST['add8'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id8','$name8','$price8')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Product added to cart!";
    }
    else{
        echo "error occurred".mysqli_error($conn);
    }
}

//add product6 to cart

if(isset($_POST['add9'])){ 

    $query="INSERT INTO cart(productID,name,price) VALUES('$id9','$name9','$price9')";
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
 <title>Cafe Menu</title>
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
    
    <h2 style="font-family:Arial, Helvetica, sans-serif;">Cafe Menu</h2>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/brownie.jpg" alt="Pancake" width="300" height="300">
        <form action="" method="POST"><button class="btn" name="add1">Add to Cart</button></form>
    </div>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/blueberry.jpg" alt="Hersheys" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add2">Add to Cart</button></form>
    </div>
    
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/choco.jpg" alt="Mona" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add3">Add to Cart</button></form>
    </div>
        
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/tiramisu.jpg" alt="Puchu" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add4">Add to Cart</button></form>
    </div>
    
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/oreocheesecake.jpg" alt="Puchu" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add5">Add to Cart</button></form>
    </div>

    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/espresso.jpg" alt="" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add6">Add to Cart</button></form>
    </div>
        
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/cat latte.jpg" alt="" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add7">Add to Cart</button></form>
    </div>
        
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/cappuccino.jpg" alt="" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add8">Add to Cart</button></form>
    </div>
        
    <div class="menu" style="font-family:Arial, Helvetica, sans-serif;">
        <img src="images/mocha.jpg" alt="" width="300" height ="300">
        <form action="" method="POST"><button class="btn" name="add9">Add to Cart</button></form>
    </div>
  </div>

    <script src="javascript.js"></script>
</body>
</html>

