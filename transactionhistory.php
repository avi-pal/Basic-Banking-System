
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles_record.css">
    <title>Transaction History</title>
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
    <div class="main-div">
        <h1>Transaction History</h1>
        <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Sender A/C no</th>
                        <th>Receiver A/C no</th>
                        <th>Amount Trasnferred</th>
                        <th>Date & Time</th>
                        <!-- <th>operation</th> -->
                    </tr>
                </thead>
                <tbody>



<!-- ----------------------------------- -->

<?php
$flag=0;
//set connection variable
$server="localhost";
$username="root";
$password="";
//create connection
$con = mysqli_connect($server, $username, $password);

if(!$con) 
echo "Cannot connect to database:-)";
else
echo "
<script>
console.log('Connection to database is successful');
</script>
";

$sql = "SELECT * FROM `impdata`.`transactionhistory`";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
if((int)$row['amount transferred']>0){

?>


  <tr>
      <td><?php echo $row['sender'] ?></td>
      <td><?php echo $row['receiver'] ?></td>
      <td><?php echo $row['amount transferred'] ?></td>
      <td><?php echo $row['date & time'] ?></td>
  </tr>




<?php                    
}
}

?>

<!-- ----------------------- -->
                   
                </tbody>
            </table>

        </div>
      
        </div>
        <a href="index.php">
         <button class="btn">Bank Home Page</button>
        </a>
        <a href="transact.php" style="margin: 10px">
         <button class="btn">Tranfer Money</button>
        </a>
    </div>




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
