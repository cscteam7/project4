<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_parkig');

// get the post records
$fname = $_POST['fname'];
$email = $_POST['email'];
$adr = $_POST['adr'];
$city = $_POST['city'];

// database insert SQL code
$sql = "INSERT INTO `tbl_parking` (`Id`, `fldName`, `fldEmail`, `fldAdr`, `fldCity`) VALUES ('0', '$fname', '$email', '$adr', '$city')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>