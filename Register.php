<?php

require('connection.php');

if (isset($_POST['submit']))
{
	$username = addslashes( $_POST['username'] );
	$password = $_POST['password'];
	$newpass = md5($password);

$sql = mysqli_query($con, "INSERT INTO register(username,password) VALUES ('$username','$newpass') ");

 die ("You have registered for an account");
}
?>