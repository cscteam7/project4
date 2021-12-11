<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$server = "127.0.0.1";
$username ="root";
$password = "Project4*";
$database = "mydb";
$port = "3306";
$conn = new mysqli($server,$username,$password,$database,$port);

// get the post records
$cnames = $_POST['custname'];
$pslot = $_POST['pslot'];
$price = $_POST['price'];
$lplate = $_POST['plate'];
$entday = $_POST['enterytday'];
$extday = $_POST['exitday'];
$test = $_POST['Customer'];
// database insert SQL code
echo $test;
if (!empty($cname))
{
$sql = "INSERT INTO `Customer` (`cname`, `licensePlate`, `parkslot`, `price`,`enter_date`,`exit_date`) VALUES ('$cname', '$lplate', '$pslot', '$price', '$entday', '$extday')";

// insert in database 
$rs = mysqli_query($con, $sql);
}
if($rs)
{
	echo "Customer Records Inserted";
}

?>