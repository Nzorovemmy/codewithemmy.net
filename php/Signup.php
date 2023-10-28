<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records


$txtEmail = $_POST['email'];
$fulPassword = $_POST['Password'];
$cfmPassword = $_POST['cfmPassword'];

// database insert SQL code
$sql = "INSERT INTO `tb_signup` (`id`,`email`, `cfmPassword`,`Password`) VALUES ( '0' '$email', '$cfmPassword' $Password)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>