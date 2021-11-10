<?php
$insert=false;
if(isset($_POST['name'])){
//set connection variable
$server="localhost";
$username="root";
$password="";
//cvreate connection
$con = mysqli_connect($server, $username, $password);
//check for connection
if(!$con){
    die("Connection to this database failed: " . mysqli_connect_error());
}
else{
echo "<script>console.log('Connection to database is successful')</script>";
}
// echo "Success connecting to the db";

// if(isset($name)||isset($acno)||isset($email)||isset($phone)||isset($amt)){
$name =$_POST['name'];
// $gender =$_POST['gender'];
$acno =$_POST['acno'];
$email =$_POST['email'];
$phone =$_POST['phone'];
// $other =$_POST['desc'];
$amt =$_POST['amt'];
$sql="INSERT INTO `impdata`.`customer` (`ACno`,`name`,`mobno`,`email`,`amt`,`datetime`) VALUES ('$acno','$name', '$phone','$email','$amt', current_timestamp());";

if($con->query($sql)==true){
    // echo "successfully inserted";
    $insert=true;
}else{
    echo "ERROR $sql <br> $con->error";
}
// }
//close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="sideNav">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="records.php">OUR CUSTOMERS</a></li>
            <li><a href="transactionhistory.php">TRANSACTION HISTORY</a></li>
            <li><a href="transact.php">TRANSFER MONEY</a></li>
            <li><a href="register.html">NEW USER</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menuBtn">
    
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/First_Bank_of_the_United_States%2C_Philadelphia%2C_Pennsylvania_LCCN2011633532_%28edited%29.jpg/1200px-First_Bank_of_the_United_States%2C_Philadelphia%2C_Pennsylvania_LCCN2011633532_%28edited%29.jpg" class="bg" alt="GNIT KOLKATA">
    <div class="container">
        <h1>Welcome to People's Bank</h1>
        <p>Enter your details here and submit this form  to confirm</p>
        <?php
        if($insert==true)
        echo "<p class='submitmsg'>Thanks for submitting the form , happy to have you on board!!</p>";
        ?>
        <form action="register.php" method="post" class="">
            <!-- <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info"></textarea> -->
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="acno" id="acno" placeholder="Enter your account number">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="amt" id="amt" placeholder="Enter amount">
       
            <button class="btn">Submit</button>
            <!-- <button class="btn" >Reset</button> -->


        </form>
        <form action="index.php">
            <button class="btn" style="margin:10px">
                Bank Home Page
            </button>
        </form>
    </div>
    <script src="index.js"></script>
    <!-- 
        --------------------------------------------------------------- -->
    
    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");
        sideNav.style.right = "-250px"
        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0px";
            }
            else {
                sideNav.style.right = "-250px";
            }
        }
    </script>
</body>
</html>