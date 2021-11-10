





<?php
error_reporting(0);
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




//  if(isset($sender)||isset($receiver)||isset($amount))
// {
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST['amount'];

$sender=(int)$sender;
$receiver=(int)$receiver;
$amount=(int)$amount;
$spsql = "INSERT INTO `impdata`.`transactionhistory` (`sender`,`receiver`,`amount transferred`,`date & time`) VALUES ('$sender','$receiver','$amount', current_timestamp())";
$spresult=mysqli_query($con,$spsql);
if($amount!=0)
{
 
//   echo " <script> alert('Cannot transfer zero rupee')</script>";

$send = 0;
$receive = 0;
$sql = "SELECT * FROM `impdata`.`customer`";
$result = mysqli_query($con,$sql);

while ($row = $result->fetch_assoc()) {
    if($row['ACno']==$sender)
    {
        $send=$row['amt'];    
    }
    if($row['ACno']==$receiver)
    {
        $receive=$row['amt'];
    }
}
$send=(int)$send;
$receive=(int)$receive;
$send=$send-$amount;
$receive=$receive+$amount;
$sql1="UPDATE `impdata`.`customer` SET `amt` = $send WHERE `customer`.`ACno`=$sender";
$sql2="UPDATE `impdata`.`customer` SET `amt` = $receive WHERE `customer`.`ACno`=$receiver";
$result1=mysqli_query($con,$sql1);
$result2=mysqli_query($con,$sql2);
if($result1 && $result2)
{
    echo " <script> alert('Transfer Successful');</script>";
}
// echo var_dump($send);
// echo var_dump($receive);

}

$con->close();
?>






<!-- 


----------------------
------------------------------

----------------------
------------------------------

----------------------
------------------------------ -->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles_record.css">
    <title>Transfer money</title>
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
        
        <h1>Customer Details</h1>
        <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Balance</th>
                        <!-- <th>operation</th> -->
                    </tr>
                </thead>
                <tbody>



<!-- ------------------------- -->
                
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

$sql = "SELECT * FROM `impdata`.`customer`";
$result = mysqli_query($con,$sql);

// $num= mysqli_num_rows($result);
// echo $num;
while($row = mysqli_fetch_array($result)){
// $row = mysqli_fetch_assoc($result);
// echo $row;
// echo var_dump($row);

?>

  <tr>
      <td><?php echo $row['ACno'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['mobno'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['amt'] ?></td>
  </tr>

<?php                    
}

$con->close();
?>

<!-- ----------------------- -->
                   
                </tbody>
            </table>

        </div>
</div>
<div class="sub-div">

    <form action="transact.php" method="post" class="">
        <input type="text" name="sender" id="sender" placeholder="Enter Sender's Account Number">
        <input type="text" name="receiver" id="receiver" placeholder="Enter Receiver's Account Number">
        <input type="number" name="amount" id="amount" placeholder="Enter Amount to transfer">

        <button class="btn" >Transfer Now</button>
        
    </form>
<h4 style="text-align:center">**for account number please refer to the above table** </h4>
<h6 style="text-align:center">Caution: Transactions once initiated cannot be reversed</h6>

<form action="transactionhistory.php">
<button class="btn" style="margin:10px">Transaction History</button>
</form>

<form action="index.php">
<button class="btn">Bank Home Page</button>
</form>

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













