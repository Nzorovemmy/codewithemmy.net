<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$txtEmail = $_POST['txtEmail'];
$fulPassword = $_POST['fulPassword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` ( `fulEmail`, `fulPassword`) VALUES ( '$txtEmail', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "welcome back " ,$txtEmail;
}

?>