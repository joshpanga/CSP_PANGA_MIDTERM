<?php

require('connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
$encrypted_password=md5($password);

$username = stripslashes($username);
$sql=mysqli_query($con, "SELECT * FROM register WHERE username='$username'");

$count=mysqli_num_rows($sql);
if($count==1)
{
	echo "You Successfuly Login";

}	

?>